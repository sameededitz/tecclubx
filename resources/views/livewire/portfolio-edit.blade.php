<div>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Portfolios</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin-home') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Portfolio</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Edit Portfolio</h6>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="py-2">
                            @foreach ($errors->all() as $error)
                                <x-alert type="danger" :message="$error" />
                            @endforeach
                        </div>
                    @endif
                    <form wire:submit.prevent="update" enctype="multipart/form-data">
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="row gy-3">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <label class="form-label">Image (Cover)</label>
                                        <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                            <div
                                                class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                <button type="button" wire:click="removeImage('cover')"
                                                    class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600"></iconify-icon>
                                                </button>
                                                <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                    src="{{ $cover ? $cover->temporaryUrl() : $portfolio->getFirstMediaUrl('cover') }}"
                                                    alt="cover_image">
                                            </div>
                                            <label
                                                class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                for="upload-file">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <span class="fw-semibold text-secondary-light">Upload</span>
                                                <input id="upload-file" wire:model="cover" type="file" hidden>
                                                <div wire:loading wire:target="cover">Uploading...</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <label class="form-label">Image (Preview)</label>
                                        <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                            <div
                                                class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                <button type="button" wire:click="removeImage('preview')"
                                                    class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600"></iconify-icon>
                                                </button>
                                                <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                    src="{{ $preview ? $preview->temporaryUrl() : $portfolio->getFirstMediaUrl('preview') }}"
                                                    alt="preview_image">
                                            </div>
                                            <label
                                                class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                for="upload-file">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <span class="fw-semibold text-secondary-light">Upload</span>
                                                <input id="upload-file" wire:model="preview" type="file" hidden>
                                                <div wire:loading wire:target="preview">Uploading...</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <label class="form-label">Image (Thumbnail)</label>
                                        <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                            <div
                                                class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                <button type="button" wire:click="removeImage('thumbnail')"
                                                    class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600"></iconify-icon>
                                                </button>
                                                <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                    src="{{ $thumbnail ? $thumbnail->temporaryUrl() : $portfolio->getFirstMediaUrl('thumbnail') }}"
                                                    alt="server_image">
                                            </div>
                                            <label
                                                class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                for="upload-file">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <span class="fw-semibold text-secondary-light">Upload</span>
                                                <input id="upload-file" wire:model="thumbnail" type="file" hidden>
                                                <div wire:loading wire:target="thumbnail">Uploading...</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" wire:model="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <input type="text" wire:model="category" class="form-control" placeholder="Category">
                            </div>
                            <div class="col-12" wire:ignore>
                                <label class="form-label">Description</label>
                                <textarea id="myeditorinstance" wire:model="description" name="description" class="form-control">{{ $portfolio->description }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" wire:model="date" class="form-control"
                                    placeholder="Date of Project">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary-600">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- card end -->
        </div>
    </div>
</div>

@assets
    <script src="https://cdn.tiny.cloud/1/profov2dlbtwaoggjfvbncp77rnjhgyfnl3c2hx3kzpmhif1/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
@endassets

@script
    <script>
        const example_image_upload_handler = (blobInfo, progress) => new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST',
                '{{ route('upload-image') }}'
            ); // Ensure this is the correct route for your upload endpoint

            xhr.upload.onprogress = (e) => {
                if (e.lengthComputable) {
                    progress(e.loaded / e.total * 100); // Report upload progress
                }
            };

            xhr.onload = () => {
                console.log(xhr);

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
            plugins: [
                "advlist", "anchor", "autolink", "charmap", "code", "fullscreen",
                "help", "image", "insertdatetime", "link", "lists", "media",
                "preview", "searchreplace", "table", "visualblocks", "accordion",
                "emoticons", "codesample",
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            images_file_types: 'jpg,png,jpeg',
            image_prepend_url: `${window.location.origin}/portfolio/`,
            images_upload_handler: example_image_upload_handler,
            setup: function(editor) {
                editor.on('blur', function(e) {
                    editor.save(); // This ensures the content is saved back to the textarea
                });
                // When editor is initialized or content is changed
                editor.on('init', function() {
                    editor.save();
                    // Set the content from the backend with correct URLs
                    this.setContent(@json($portfolio->description));
                });

                // Before setting content, replace relative paths with absolute paths
                editor.on('BeforeSetContent', function(e) {
                    e.content = e.content.replace(/src="\.\.\/\.\.\/portfolio/g,
                        `src="${window.location.origin}/portfolio`);
                });

                // On editor change, replace relative paths with absolute paths and update Livewire model
                editor.on('change', function(e) {
                    let content = editor.getContent();
                    // Replace relative paths with absolute paths
                    content = content.replace(/src="\.\.\/\.\.\/portfolio/g,
                        `src="${window.location.origin}/portfolio`);
                    // Set the content to the Livewire model
                    @this.set('description', content);
                });

                // Handle the case where src may have multiple `../` relative path indicators
                editor.on('BeforeSetContent', function(e) {
                    e.content = e.content.replace(/src="(\.\.\/)+portfolio/g,
                        `src="${window.location.origin}/portfolio`);
                });

                editor.on('change', function(e) {
                    let content = editor.getContent();
                    // Ensure all relative paths are converted
                    content = content.replace(/src="(\.\.\/)+portfolio/g,
                        `src="${window.location.origin}/portfolio`);
                    @this.set('description', content);
                });
            }
        });
    </script>
@endscript
