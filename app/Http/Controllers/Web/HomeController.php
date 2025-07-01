<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberNotification;
use App\Utils\ViewPath;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Models\ContactUs;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $contactInfo = ContactInfo::first();
        return view('welcome', compact('contactInfo'));
    }

    public function about_us()
    {
        return view('web.about_us');
    }


    public function gallery()
    {
        return view('web.gallery');
    }

    public function blog()
    {
        return view('web.blog');
    }

    public function blogDetails()
    {
        return view('web.blog_deatail');
    }

    public function subscribeStore(Request $request)
    {
        $existingSubscriber = Subscriber::where('email', $request->email)->first();

        if ($existingSubscriber) {
            Toastr::warning('You are already subscribed!', 'Warning');
            return redirect()->back();
        }

        try {
            Validator::make($request->all(), [
                'email' => [
                    'required',
                    'email:rfc,dns',
                    'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                    'unique:subscribers,email',
                ],
            ])->validate();
        } catch (ValidationException $e) {
            foreach ($e->errors() as $messages) {
                foreach ($messages as $message) {
                    Toastr::error($message, 'Validation Error');
                }
            }
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        $logoUrl = asset('assets/images/logo1.png');       
         //dd($logoUrl);
        Mail::to($subscriber->email)->send(new SubscriberNotification($subscriber, $logoUrl));
        //dd("here");
        Toastr::success('Subscribed Successfully!', 'Success');
        return redirect()->back();
    }


    public function contactUsStore(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email:rfc,dns|max:255',
                'phone' => 'nullable|string|max:255',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string',
            ]);

            // Save to Database
            ContactUs::create($request->all());

            $logoUrl = asset('assets/web-assets/images/email_logo.png');
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone ?? 'No Phone',
                'subject' => $request->subject ?? 'No Subject',
                'userMessage' => $request->message,
                'logoUrl' => $logoUrl
            ];

            Mail::send('email-templates.contact', $data, function ($message) use ($request) {
                $message->to($request->email)
                    ->subject('Thank You for Contacting Us')
                    ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });

            Toastr::success('Message Sent Successfully!', 'Success');
        } catch (\Illuminate\Validation\ValidationException $e) {
            foreach ($e->errors() as $error) {
                Toastr::error($error[0], 'Validation Error');
            }
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            \Log::error('Contact form error: ' . $e->getMessage());

            Toastr::error('Something went wrong! Please try again later.', 'Error');
        }

        return redirect()->back();
    }
}
