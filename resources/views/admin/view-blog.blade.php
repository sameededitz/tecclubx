@extends('layout.admin-layout')
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
                <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Blogs</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">{{ $post->title }}</h5>
            <div class="d-flex gap-2">
                <div class="form-switch switch-primary d-flex align-items-center gap-3">
                    <input class="form-check-input publish-switch" type="checkbox" data-id="{{ $post->id }}"
                        {{ $post->is_published ? 'checked' : '' }} role="switch" id="yes">
                </div>
                <a href="{{ route('edit-blog', $post->id) }}"
                    class="w-32-px me-4 h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="lucide:edit"></iconify-icon>
                </a>
                <form action="{{ route('delete-blog', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                        <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body scroll-sm" style="overflow-x: scroll">
            <div class="row mt-16">
                <div class="col-12 col-md-6">
                    <img src="{{ $post->getFirstMediaUrl('thumbnail') }}" alt="thumbnail-portfolio"
                        class="w-100 flex-shrink-0 me-12 mb-12 radius-8" width="90px">
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <h4 class="text-lg text-secondary-light">Category:</h4>
                        <span class="text-sm text-secondary-light fw-normal">{{ $post->category->name }}</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <h4 class="text-lg text-secondary-light">Tags:</h4>
                        <span class="text-sm text-secondary-light fw-normal">
                            {{ $post->tags->implode('name', ', ') }}
                        </span>
                    </div>
                    @if (isset($post->published_at))
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <h4 class="text-lg text-secondary-light">Published at:</h4>
                            <span class="text-sm text-secondary-light fw-normal">
                                {{ $post->published_at->diffForHumans() }}
                            </span>
                        </div>
                    @endif
                    <hr>
                    <div class="d-flex align-items-center justify-content-between mb-16 mt-4">
                        <h4 class="text-lg text-secondary-light">Created:</h4>
                        <span class="text-sm text-secondary-light fw-normal">
                            {{ $post->created_at->Diffforhumans() }}
                        </span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-16">
                        <h4 class="text-lg text-secondary-light">Updated:</h4>
                        <span class="text-sm text-secondary-light fw-normal">
                            {{ $post->updated_at->Diffforhumans() }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card basic-data-table mt-20">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">Description</h5>
        </div>
        <div class="card-body scroll-sm" style="overflow-x: scroll">
            <div class="row mt-20">
                <div class="col-12">
                    {!! $post->body !!}
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
            $('.publish-switch').change(function() {
                let postId = $(this).data('id');

                let isPublished = $(this).is(':checked') ? 1 : 0;

                $.ajax({
                    url: '/admin/blogs/' + postId + '/status',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        is_published: isPublished
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Publish status updated successfully!');
                        } else {
                            alert('Something went wrong, please try again.');
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
