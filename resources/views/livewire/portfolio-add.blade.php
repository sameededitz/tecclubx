<div>
    <div class="py-2">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <x-alert type="danger" :message="$error" />
            @endforeach
        @endif
    </div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="row gy-3">
            <div class="col-12">
                <label class="form-label">Images (Cover,Preview,Thumbnail)</label>
                <div class="upload-image-wrapper d-flex align-items-center gap-3">
                    @if ($cover)
                        <div
                            class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                            <button type="button" wire:click="removeImage('cover')"
                                class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                <iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>
                            </button>
                            <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                src="{{ $cover->temporaryUrl() }}" alt="server_image">
                        </div>
                    @else
                        <label
                            class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                            for="upload-file">
                            <iconify-icon icon="solar:camera-outline"
                                class="text-xl text-secondary-light"></iconify-icon>
                            <span class="fw-semibold text-secondary-light">Upload</span>
                            <input id="upload-file" wire:model="cover" type="file" hidden>
                            <div wire:loading wire:target="cover">Uploading...</div>
                        </label>
                    @endif
                    @if ($preview)
                        <div
                            class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                            <button type="button" wire:click="removeImage('preview')"
                                class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                <iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>
                            </button>
                            <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                src="{{ $preview->temporaryUrl() }}" alt="server_image">
                        </div>
                    @else
                        <label
                            class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                            for="upload-file">
                            <iconify-icon icon="solar:camera-outline"
                                class="text-xl text-secondary-light"></iconify-icon>
                            <span class="fw-semibold text-secondary-light">Upload</span>
                            <input id="upload-file" wire:model="preview" type="file" hidden>
                            <div wire:loading wire:target="preview">Uploading...</div>
                        </label>
                    @endif
                    @if ($thumbnail)
                        <div
                            class="uploaded-img position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                            <button type="button" wire:click="removeImage('thumbnail')"
                                class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                <iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>
                            </button>
                            <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                src="{{ $thumbnail->temporaryUrl() }}" alt="server_image">
                        </div>
                    @else
                        <label
                            class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                            for="upload-file">
                            <iconify-icon icon="solar:camera-outline"
                                class="text-xl text-secondary-light"></iconify-icon>
                            <span class="fw-semibold text-secondary-light">Upload</span>
                            <input id="upload-file" wire:model="thumbnail" type="file" hidden>
                            <div wire:loading wire:target="image">Uploading...</div>
                        </label>
                    @endif
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
                <textarea id="myeditorinstance" wire:model="description" name="description" class="form-control"></textarea>
            </div>
            <div class="col-12">
                <label class="form-label">Date</label>
                <input type="date" wire:model="date" class="form-control" placeholder="Date of Project">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary-600">Submit</button>
            </div>
        </div>
    </form>
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
                editor.on('init change', function() {
                    editor.save();
                });

                editor.on('BeforeSetContent', function(e) {
                    const content = e.content;
                    const updatedContent = content.replace(/src="\.\.\/\.\.\/portfolio/g,
                        `src="${window.location.origin}/portfolio`);
                    e.content = updatedContent;
                });

                editor.on('change', function(e) {
                    let content = editor.getContent();
                    // Replace relative paths with absolute paths
                    content = content.replace(/src="\.\.\/\.\.\/portfolio/g,
                        `src="${window.location.origin}/portfolio`);
                    @this.set('description', content);
                });
            }
        });
    </script>
@endscript
