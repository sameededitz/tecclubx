@extends('layout.admin-layout')
@section('title')
    Send Mail | Admin
@endsection
@section('admin_content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Servers</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin-home') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Email</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Send Email</h6>
                </div>
                <div class="card-body">
                    <div class="py-2">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <x-alert type="danger" :message="$error" />
                            @endforeach
                        @endif
                    </div>
                    <form action="{{ route('send-email') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="action" id="action" value="">
                        <div class="row gy-3">
                            <div class="col-12">
                                <label class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control"
                                    value="{{ old('subject') ?? ($sender ? 'Re: ' : '') }}" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <label class="form-label">To</label>
                                <input type="text" name="to" class="form-control" value="{{ old('to') ?? $sender }}"
                                    placeholder="To">
                            </div>
                            <div class="col-12" wire:ignore>
                                <label class="form-label">Message</label>
                                <textarea id="myeditorinstance" name="message" class="form-control"> {{ old('message') }} </textarea>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">CC</label>
                                        <input type="email" name="cc" class="form-control"
                                            value="{{ old('cc') }}" placeholder="CC">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">BCC</label>
                                        <input type="email" name="bcc" class="form-control"
                                            value="{{ old('bcc') }}" placeholder="BCC">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger-600"
                                    onclick="document.getElementById('action').value = 'draft'">Save as Draft</button>
                                <button type="submit" class="btn btn-success-600"
                                    onclick="document.getElementById('action').value = 'send'">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection
@section('admin_scripts')
    <script src="https://cdn.tiny.cloud/1/profov2dlbtwaoggjfvbncp77rnjhgyfnl3c2hx3kzpmhif1/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        const image_upload_handler = (blobInfo, progress) => new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST',
                '{{ route('upload-email-image') }}'
            ); // Ensure this is the correct route for your upload endpoint

            xhr.upload.onprogress = (e) => {
                if (e.lengthComputable) {
                    progress(e.loaded / e.total * 100); // Report upload progress
                }
            };

            xhr.onload = () => {
                // console.log(xhr);

                if (xhr.status === 403) {
                    reject({
                        message: 'HTTP Error: ' + xhr.status,
                        remove: true
                    });
                    return;
                }

                if (xhr.status < 200 || xhr.status >= 300) {
                    // Parse the response if it's not a success status code
                    const json = JSON.parse(xhr.responseText);
                    reject({
                        message: json.message || 'HTTP Error: ' + xhr.status,
                        remove: true
                    }); // Handle error messages from the server
                    return;
                }

                const json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location !== 'string') {
                    reject('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                resolve(json.location); // Resolve with the URL to the image
            };

            xhr.onerror = () => {
                reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
            };

            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        });

        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match your HTML
            relative_urls: false,
            remove_script_host: false,
            document_base_url: '{{ config('app.url') }}' + '/',
            images_file_types: 'jpg,png,jpeg',
            plugins: [
                "advlist", "anchor", "autolink", "charmap", "code", "fullscreen",
                "help", "image", "insertdatetime", "link", "lists", "media",
                "preview", "searchreplace", "table", "visualblocks", "accordion",
                "emoticons", "codesample",
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            images_upload_handler: image_upload_handler,
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });

                // editor.on('BeforeSetContent', function(e) {
                //     const content = e.content;
                //     const updatedContent = content.replace(
                //         /src="\.\.\/storage\/portfolio/g,
                //         `src="${window.location.origin}/storage/portfolio`
                //     );
                //     e.content = updatedContent;
                // });

                // editor.on('change', function(e) {
                //     let content = editor.getContent();
                //     content = content.replace(
                //         /src="\.\.\/storage\/portfolio/g,
                //         `src="${window.location.origin}/storage/portfolio`
                //     );
                //     editor.setContent(content); // Set the updated content back
                // });
            }
        });
    </script>
@endsection
