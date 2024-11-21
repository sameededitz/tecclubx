<div>
    <div class="row gy-4">
        <div class="col-xxl-9">
            <div class="card h-100 p-0 email-card overflow-x-auto d-block">
                <div class="min-w-450-px d-flex flex-column justify-content-between h-100">
                    <div
                        class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center gap-3 justify-content-between flex-wrap">
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('inbox') }}" class="text-secondary-light d-flex me-8"><iconify-icon
                                    icon="mingcute:arrow-left-line" class="icon fs-3 line-height-1"></iconify-icon></a>
                            <h6 class="mb-0 text-lg">{{ $email->subject }}</h6>
                            <span
                                class="bg-primary-50 text-primary-600 text-sm radius-4 px-8">{{ Str::title(str_replace('_', ' ', $email->status)) }}</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            @if ($email->trashed())
                                <button type="button" wire:click="restoreEmail({{ $email->id }})"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="ic:sharp-restore" class="icon"></iconify-icon>
                                </button>
                                <button type="button" wire:click="deleteEmail({{ $email->id }})"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="hugeicons:delete-04" class="icon"></iconify-icon>
                                </button>
                            @else
                                <button type="button"
                                    class="starred-button icon text-xl text-secondary-light line-height-1 d-flex {{ $email->is_starred ? 'active' : '' }}"
                                    wire:click="toggleStar({{ $email->id }})">
                                    <iconify-icon icon="ph:star" class="icon-outline line-height-1"></iconify-icon>
                                    <iconify-icon icon="ph:star-fill"
                                        class="icon-fill line-height-1 text-warning-600"></iconify-icon>
                                </button>
                                <button type="button" wire:click="moveToTrash({{ $email->id }})"
                                    class="reload-button text-secondary-light text-xl d-flex">
                                    <iconify-icon icon="fluent:delete-24-regular" class="icon"></iconify-icon>
                                </button>
                                @if ($email->status == 'draft')
                                    <button type="button" wire:click="sendDraft({{ $email->id }})"
                                        class="reload-button text-secondary-light text-xl d-flex">
                                        <iconify-icon icon="fluent:send-24-regular" class="icon"></iconify-icon>
                                    </button>
                                @endif
                            @endif
                            <button class="text-secondary-light d-flex"><iconify-icon icon="mi:print"
                                    class="icon text-xxl line-height-1"></iconify-icon></button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="py-16 px-24 border-bottom">
                            <div class="d-flex align-items-start gap-3">
                                <img src="{{ asset('admin_assets/images/users/user.png') }}" alt=""
                                    class="w-40-px h-40-px rounded-pill">
                                <div class="">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <h6 class="mb-0 text-lg">
                                            {{ in_array($email->status, ['sent', 'draft']) ? 'To: ' : 'From: ' }}
                                        </h6>
                                        <span class="text-secondary-light text-md">
                                            {{ in_array($email->status, ['sent', 'draft']) ? $email->to : $email->from }}
                                        </span>
                                    </div>
                                    <div class="mt-20">
                                        <p class="mb-0 text-primary-light">{!! $email->body !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($email->replies()->exists())
                            @foreach ($email->replies as $reply)
                                <div class="py-16 px-24 border-bottom">
                                    <div class="d-flex align-items-start gap-3">
                                        <img src="{{ asset('admin_assets/images/users/user.png') }}" alt=""
                                            class="w-40-px h-40-px rounded-pill">
                                        <div class="">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <h6 class="mb-0 text-lg">From:</h6>
                                                <span class="text-secondary-light text-md">{{ $reply->from }}</span>
                                            </div>
                                            <div class="mt-20">
                                                <p class="mb-0 text-primary-light">{!! $reply->body !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @if ($email->status !== 'draft' && $email->status !== 'sent' && !$email->trashed())
                        <div class="card-footer py-16 bg-base shadow-top">
                            <form enctype="multipart/form-data" wire:submit.prevent="sendMessage">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <x-alert type="danger" :message="$error" />
                                    @endforeach
                                @endif
                                <div wire:ignore class="d-flex align-items-start justify-content-center"
                                    style="flex-direction: column">
                                    <textarea id="myeditorinstance" wire:model.defer="content" class="form-control resize-none scroll-sm"
                                        placeholder="Write message"></textarea>
                                    <div class="d-flex align-items-center mt-16">
                                        <p class="mb-0 text-primary-light" wire:loading.delay.shorter>Sending....</p>
                                        <button type="submit"
                                            class="btn btn-primary text-sm btn-sm px-12 py-12 w-100 radius-8 d-flex align-items-center justify-content-center gap-1 h-44-px">
                                            <iconify-icon icon="ion:paper-plane-outline"
                                                class="icon text-lg line-height-1"></iconify-icon>
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @else
                        <div class="card-footer py-16 bg-base shadow-top">
                            <p class="text-secondary-light text-md">You cannot reply to sent/draft/trash emails</p>
                        </div>
                    @endif
                    <div wire:loading>
                        <x-loading></x-loading>
                    </div>
                </div>
            </div>
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
            image_prepend_url: `${window.location.origin}/storage/portfolio/`,
            images_upload_handler: example_image_upload_handler,
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });

                editor.on('BeforeSetContent', function(e) {
                    const content = e.content;
                    const updatedContent = content.replace(/src="\.\.\/\.\.\/storage\/portfolio/g,
                        `src="${window.location.origin}/storage/portfolio`);
                    e.content = updatedContent;
                });

                editor.on('change', function(e) {
                    let content = editor.getContent();
                    // Replace relative paths with absolute paths
                    content = content.replace(/src="\.\.\/\.\.\/storage\/portfolio/g,
                        `src="${window.location.origin}/storage/portfolio`);
                    @this.set('content', content);
                });
            }
        });
    </script>
@endscript
