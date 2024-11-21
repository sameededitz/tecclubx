@extends('layout.admin-layout')
@section('title')
    Section Images | Admin
@endsection
@section('admin_content')
    @if (session('status'))
        <div class="row py-3">
            <div class="col-6">
                <x-alert :type="session('status', 'info')" :message="session('message', 'Operation completed successfully.')" />
            </div>
        </div>
    @endif

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0"></h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin-home') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Section Images</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">All Images of Sections</h5>
            <button type="button" class="btn rounded-pill btn-outline-info-600 radius-8 px-20 py-11" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Add
                Image</button>
        </div>
        <div class="card-body scroll-sm" style="overflow-x: scroll">
            <table class="table display responsive bordered-table mb-0" id="myTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Img</th>
                        <th scope="col">Section</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td><a href="javascript:void(0)" class="text-primary-600"> {{ $loop->iteration }} </a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $section->getFirstMediaUrl('section_img') }}" alt="server-logo"
                                        class="w-64-px flex-shrink-0 me-12 radius-8">
                                </div>
                            </td>
                            <td>{{ ucfirst($section->section) }}</td>
                            <td>{{ $section->created_at->diffForHumans() }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <form action="{{ route('delete-section-images', $section->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
            <div class="modal-content radius-16 bg-base">
                <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Img</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-24">
                    <form action="{{ route('save-section-images') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="py-2">
                                @foreach ($errors->all() as $error)
                                    <x-alert type="danger" :message="$error" />
                                @endforeach
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12 mb-20">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Section Img</label>
                                <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                    <label
                                        class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                        for="upload-file-1">
                                        <iconify-icon icon="solar:camera-outline"
                                            class="text-xl text-secondary-light"></iconify-icon>
                                        <span
                                            class="fw-semibold text-secondary-light text-center file-name-display">Upload</span>
                                        <input id="upload-file-1" name="image" class="upload-input" type="file" hidden>
                                    </label>
                                </div>
                                <p class="text-sm mt-1 mb-0">The Image Should be Less than 20MB.</p>
                            </div>
                            <div class="col-12 mb-20">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Section Name</label>
                                <select name="section" class="form-select radius-8">
                                    <option value="" selected disabled>Select Section</option>
                                    <option value="banner">Banner</option>
                                    <option value="about">About</option>
                                    <option value="slider">Slider</option>
                                    <option value="why_choose">Why choose</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                                <button type="reset"
                                    class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="btn btn-primary border border-primary-600 text-md px-48 py-12 radius-8">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('admin_scripts')
    <script>
        $('#myTable').DataTable({
            responsive: true
        });

        $(document).ready(function() {
            // Trigger when the file input changes
            $('.upload-input').on('change', function() {
                // Get the file name from the input
                var fileName = $(this).val().split('\\').pop();

                // Find the closest span with class 'file-name-display' within the same label
                var displayElement = $(this).closest('label').find('.file-name-display');

                // Update the text of the correct span
                if (fileName) {
                    displayElement.text(fileName); // Change the text to the file name
                } else {
                    displayElement.text('Upload'); // Reset text if no file is selected
                }
            });
        });
    </script>
    @if (session('openModal'))
        <script>
            $(document).ready(function() {
                $('#exampleModal').modal('show');
            });
        </script>
    @endif
@endsection
