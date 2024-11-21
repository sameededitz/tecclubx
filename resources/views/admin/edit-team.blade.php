@extends('layout.admin-layout')
@section('title')
    Edit Team | Admin
@endsection
@section('admin_content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Team</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin-home') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Teams</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Edit Team</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('update-team', $team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="py-2">
                                @foreach ($errors->all() as $error)
                                    <x-alert type="danger" :message="$error" />
                                @endforeach
                            </div>
                        @endif
                        <div class="row">
                            {{-- <div class="col-12 mb-20">
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
                            </div> --}}
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Name</label>
                                <input type="text" name="name" class="form-control input-form-dark radius-8"
                                    placeholder="Enter Name" value="{{ old('name', $team->name) }}" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Profession</label>
                                <input type="text" name="profession" class="form-control input-form-dark radius-8"
                                    placeholder="Enter Profession" value="{{ old('profession', $team->profession) }}"
                                    required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Facebook</label>
                                <input type="url" name="facebook" class="form-control input-form-dark radius-8"
                                    placeholder="Enter facebook" value="{{ old('facebook', $team->facebook) }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Instagram</label>
                                <input type="url" name="instagram" class="form-control input-form-dark radius-8"
                                    placeholder="Enter instagram" value="{{ old('instagram', $team->instagram) }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Twitter</label>
                                <input type="url" name="twitter" class="form-control input-form-dark radius-8"
                                    placeholder="Enter twitter" value="{{ old('twitter', $team->twitter) }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Linkedin</label>
                                <input type="url" name="linkedin" class="form-control input-form-dark radius-8"
                                    placeholder="Enter linkedin" value="{{ old('linkedin', $team->linkedin) }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Github</label>
                                <input type="url" name="github" class="form-control input-form-dark radius-8"
                                    placeholder="Enter github" value="{{ old('github', $team->github) }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Discord</label>
                                <input type="url" name="discord" class="form-control input-form-dark radius-8"
                                    placeholder="Enter discord" value="{{ old('discord', $team->discord) }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Youtube</label>
                                <input type="url" name="youtube" class="form-control input-form-dark radius-8"
                                    placeholder="Enter youtube" value="{{ old('youtube', $team->youtube) }}">
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
            </div><!-- card end -->
        </div>
    </div>
@endsection
@section('admin_scripts')
    <script>
        // =============================== Upload Single Image js start here ================================================
        // const fileInput = document.getElementById("upload-file");
        // const imagePreview = document.getElementById("uploaded-img__preview");
        // const uploadedImgContainer = document.querySelector(".uploaded-img");
        // const removeButton = document.querySelector(".uploaded-img__remove");

        // fileInput.addEventListener("change", (e) => {
        //     if (e.target.files.length) {
        //         const src = URL.createObjectURL(e.target.files[0]);
        //         imagePreview.src = src;
        //         uploadedImgContainer.classList.remove('d-none');
        //     }
        // });
        // removeButton.addEventListener("click", () => {
        //     imagePreview.src = "";
        //     uploadedImgContainer.classList.add('d-none');
        //     fileInput.value = "";
        // });
        // =============================== Upload Single Image js End here ================================================
    </script>
@endsection
