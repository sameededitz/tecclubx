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
            <h5 class="card-title mb-0">All Blogs</h5>
            <a href="{{ route('add-blog') }}">
                <button type="button" class="btn rounded-pill btn-outline-info-600 radius-8 px-20 py-11">Add
                    Blog</button>
            </a>
        </div>
        <div class="card-body scroll-sm" style="overflow-x: scroll">
            <table class="table display responsive bordered-table mb-0" id="myTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Is Published</th>
                        <th scope="col">Published At</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td><a href="javascript:void(0)" class="text-primary-600"> {{ $loop->iteration }} </a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $blog->getFirstMediaUrl('thumbnail') }}" alt="server-logo"
                                        class="w-64-px flex-shrink-0 me-12 radius-8">
                                </div>
                            </td>
                            <td>{{ Str::limit($blog->title, 6) }}</td>
                            <td>{{ ucfirst($blog->category->name) }}</td>
                            <td>{{ ucfirst($blog->author->name) }}</td>
                            <td>
                                <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                    <input class="form-check-input publish-switch" type="checkbox" data-id="{{ $blog->id }}"
                                        {{ $blog->is_published ? 'checked' : '' }} role="switch" id="yes">
                                </div>
                            </td>
                            <td>{{ isset($blog->published_at) ? $blog->published_at->diffForHumans() : '' }}</td>
                            <td>C: {{ $blog->created_at->diffForHumans() }}<br>U:
                                {{ $blog->updated_at->diffForHumans() }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('view-blog', $blog->id) }}"
                                        class="w-32-px me-4 h-32-px bg-info-focus text-info-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="carbon:view"></iconify-icon>
                                    </a>
                                    <a href="{{ route('edit-blog', $blog->id) }}"
                                        class="w-32-px me-4 h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="lucide:edit"></iconify-icon>
                                    </a>
                                    <form action="{{ route('delete-blog', $blog->id) }}" method="POST">
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
