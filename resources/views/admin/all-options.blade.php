@extends('layout.admin-layout')
@section('title')
    Options | Admin
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
        <h6 class="fw-semibold mb-0">Options</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin-home') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Options</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-md-10">
            <div class="card">
                <div
                    class="card-header pt-16 pb-0 px-24 bg-base border border-end-0 border-start-0 border-top-0 d-flex align-items-center flex-wrap justify-content-between">
                    <h6 class="text-lg mb-0">Settings</h6>
                    <ul class="nav bordered-tab d-inline-flex nav-pills mb-0" id="pills-tab-six" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-16 py-10 active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true" tabindex="-1">Website</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-16 py-10" id="pills-socials-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-socials" type="button" role="tab" aria-controls="pills-socials"
                                aria-selected="false">Socials</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-16 py-10" id="pills-details-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details"
                                aria-selected="false">TOS</button>
                        </li>
                    </ul>
                </div>
            </div><!-- card end -->
        </div>
    </div>

    <div class="row gy-4 mt-12">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div>
                                @if ($errors->any())
                                    <div class="py-2">
                                        @foreach ($errors->all() as $error)
                                            <x-alert type="danger" :message="$error" />
                                        @endforeach
                                    </div>
                                @endif
                                <form action="{{ route('save-web') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <label class="form-label">Website Logo</label>
                                            <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                                @if ($web_logo)
                                                    <div
                                                        class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                        <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                            src="{{ $web_logo }}" alt="logo">
                                                    </div>
                                                @endif
                                                <label
                                                    class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                    for="upload-file-1">
                                                    <iconify-icon icon="solar:camera-outline"
                                                        class="text-xl text-secondary-light"></iconify-icon>
                                                    <span
                                                        class="fw-semibold text-secondary-light text-center file-name-display">Upload</span>
                                                    <input id="upload-file-1" name="web_logo" class="upload-input"
                                                        type="file" hidden>
                                                </label>
                                            </div>
                                            <p class="text-sm mt-1 mb-0">The Image Should be Less than 20MB.</p>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" value="{{ $name }}"
                                                class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Phone</label>
                                            <input type="text" name="phone" value="{{ $phone }}"
                                                class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" value="{{ $email }}"
                                                class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Address</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" name="address" value="{{ $address }}"
                                                        class="form-control" placeholder="Address">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="gmap_link" value="{{ $gmap_link }}"
                                                        class="form-control" placeholder="Google map Link">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control" placeholder="Description"> {{ $description }}</textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary-600">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-socials" role="tabpanel"
                            aria-labelledby="pills-socials-tab" tabindex="0">
                            @if ($errors->any())
                                <div class="py-2">
                                    @foreach ($errors->all() as $error)
                                        <x-alert type="danger" :message="$error" />
                                    @endforeach
                                </div>
                            @endif
                            <form action="{{ route('save-socials') }}" method="POST">
                                @csrf
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <label class="form-label">Facebook</label>
                                        <input type="url" name="facebook" class="form-control"
                                            value="{{ $facebook }}" placeholder="Facebook">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Twitter</label>
                                        <input type="url" name="twitter" class="form-control"
                                            value="{{ $twitter }}" placeholder="Twitter">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Instagram</label>
                                        <input type="url" name="instagram" value="{{ $instagram }}"
                                            class="form-control" placeholder="Instagram">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Youtube</label>
                                        <input type="url" name="youtube" value="{{ $youtube }}"
                                            class="form-control" placeholder="Youtube">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Linkedin</label>
                                        <input type="url" name="linkedin" value="{{ $linkedin }}"
                                            class="form-control" placeholder="Linkedin">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Github</label>
                                        <input type="url" name="github" value="{{ $github }}"
                                            class="form-control" placeholder="Github">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Discord</label>
                                        <input type="url" name="discord" value="{{ $discord }}"
                                            class="form-control" placeholder="Discord">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary-600">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-details" role="tabpanel"
                            aria-labelledby="pills-details-tab" tabindex="0">
                            @if ($errors->any())
                                <div class="py-2">
                                    @foreach ($errors->all() as $error)
                                        <x-alert type="danger" :message="$error" />
                                    @endforeach
                                </div>
                            @endif
                            <form id="contentForm" action="{{ route('save-options') }}" method="POST">
                                @csrf
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <label class="form-label" for="privacy_policy">Privacy Policy</label>
                                        <textarea name="privacy_policy" id="privacy_policy" class="form-control tinymce-editor">{{ $privacyPolicyContent }}</textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="terms_of_service">Terms of Service</label>
                                        <textarea id="tosEditor" name="tos" class="form-control tinymce-editor">{{ $tosContent }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary-600">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection
@section('admin_scripts')
    <script src="https://cdn.tiny.cloud/1/profov2dlbtwaoggjfvbncp77rnjhgyfnl3c2hx3kzpmhif1/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            plugins: [
                "advlist", "anchor", "autolink", "charmap", "code", "fullscreen",
                "help", "insertdatetime", "link", "lists", "media",
                "preview", "searchreplace", "table", "visualblocks", "accordion",
                "emoticons", "codesample",
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            selector: '.tinymce-editor',
            setup: function(editor) {
                editor.on('blur', function() {
                    editor.save(); // Automatically save content to the textarea when focus is lost
                });
            }
        });

        document.getElementById('contentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            tinymce.triggerSave(); // Save the content of all TinyMCE editors to their respective textareas
            form.submit(); // Now submit the form
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
@endsection
