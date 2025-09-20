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
            <li class="fw-medium">Portfolio</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-2">
            <h5 class="card-title mb-0">All Portfolio</h5>
            <div class="d-flex gap-2 flex-wrap">
                <a href="{{ route('add-portfolio') }}">
                    <button type="button" class="btn rounded-pill btn-outline-info-600 radius-8 px-20 py-11">Add Portfolio</button>
                </a>
            <a href="{{ route('reorganize-portfolio') }}">
                    <button type="button" class="btn rounded-pill btn-outline-info-600 radius-8 px-20 py-11">Reorganize</button>
                </a>
            </div>
        </div>
        <div class="card-body scroll-sm" style="overflow-x: scroll">
            <table class="table display responsive bordered-table mb-0" id="myTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)
                        <tr>
                            <td><a href="javascript:void(0)" class="text-primary-600"> {{ $loop->iteration }} </a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $portfolio->getFirstMediaUrl('cover') }}" alt="server-logo"
                                        class="w-64-px flex-shrink-0 me-12 radius-8">
                                </div>
                            </td>
                            <td>{{ Str::limit($portfolio->title, 6) }}</td>
                            <td>{{ $portfolio->category }}</td>
                            <td>{{ Str::words($portfolio->description, 2) }}</td>
                            <td>{{ $portfolio->date->diffForHumans() }}</td>
                            <td>C: {{ $portfolio->created_at->diffForHumans() }}<br>U:
                                {{ $portfolio->updated_at->diffForHumans() }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('view-portfolio', $portfolio->slug) }}"
                                        class="w-32-px me-4 h-32-px bg-info-focus text-info-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="carbon:view"></iconify-icon>
                                    </a>
                                    <a href="{{ route('edit-portfolio', $portfolio->slug) }}"
                                        class="w-32-px me-4 h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="lucide:edit"></iconify-icon>
                                    </a>
                                    <form action="{{ route('delete-portfolio', $portfolio->slug) }}" method="POST">
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
    </script>
@endsection
