<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class HomepageController extends Controller
{
    public function index_banner()
    {
        $banners = Banner::all();
        return view('admin.homepage.banners.index', compact('banners'));
    }

        public function create_banner()
    {
        return view('admin.homepage.banners.create');
    }

        public function store_banner(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/banners'), $imageName);

        Banner::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => 'uploads/banners/'.$imageName,
        ]);

        return redirect()->route('admin.homepage.banners.index')->with('success', 'Banner added successfully');
    }

        public function edit_banner(Banner $banner)
    {
        return view('admin.homepage.banners.edit', compact('banner'));
    }

    public function update_banner(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/banners'), $imageName);
            $banner->image = 'uploads/banners/'.$imageName;
        }

        $banner->update($request->except('image') + ['image' => $banner->image]);

        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully');
    }

    public function destroy_banner(Banner $banner)
    {
        if (file_exists(public_path($banner->image))) {
            unlink(public_path($banner->image));
        }

        $banner->delete();
        return redirect()->route('admin.banners.index')->with('success', 'Banner deleted successfully');
    }

}
