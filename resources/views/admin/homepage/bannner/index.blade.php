@extends('admin.layouts.admin')

@section('content')
    <div class="page-body">
        <!-- Banners Table with Add -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="card">
                                <!-- Card Header -->
                                <h5 class="card-header d-flex justify-content-between align-items-center">
                                    Banner List

                                    <a href="{{ route('admin.banners.create') }}" class="btn btn-dark">
                                        <i class="bx bx-plus"></i> Add Banner
                                    </a>

                                </h5>

                                <!-- Card Body -->
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Subtitle</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @forelse($banners as $index => $banner)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $banner->title }}</td>
                                                    <td>{{ $banner->subtitle }}</td>
                                                    <td>
                                                        @if ($banner->image)
                                                            <img src="{{ asset($banner->image) }}" alt="Banner Image"
                                                                class="rounded shadow-sm" width="100">
                                                        @else
                                                            <span class="text-muted">No Image</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center gap-1">

                                                            <a class="btn btn-sm btn-warning text-white"
                                                                href="{{ route('admin.banners.edit', $banner->id) }}">
                                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                                            </a>



                                                            <form action="{{ route('admin.banners.destroy', $banner->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger"
                                                                    onclick="return confirm('Are you sure you want to delete this banner?')">
                                                                    <i class="bx bx-trash me-1"></i> Delete
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">No banners found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- /.container-xxl -->
                    </div> <!-- /.content-wrapper -->

                </div>
            </div>
        </div>
    </div>
@endsection
