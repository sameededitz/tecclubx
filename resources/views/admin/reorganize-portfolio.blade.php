@extends('layout.admin-layout')
@section('admin_content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Reorganize Portfolio</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin-home') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Reorganize Portfolio</li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">Drag & Drop to Reorder</h5>
            <a href="{{ route('all-portfolio') }}">
                <button type="button" class="btn btn-outline-secondary radius-8 px-20 py-11">Back</button>
            </a>
        </div>
        <div class="card-body">
            <form id="reorderForm" method="POST" action="{{ route('save-reorder-portfolio') }}">
                @csrf
                <ul id="sortablePortfolio" class="list-group mb-3">
                    @foreach ($portfolios as $portfolio)
                        <li class="list-group-item d-flex align-items-center gap-3" data-id="{{ $portfolio->id }}">
                            <span class="handle" style="cursor:move;">
                                <iconify-icon icon="solar:menu-dots-bold" class="text-xl"></iconify-icon>
                            </span>
                            <img src="{{ $portfolio->getFirstMediaUrl('cover') }}" alt="cover" class="radius-8" style="width:48px;height:48px;object-fit:cover;">
                            <span class="fw-semibold">{{ $portfolio->title }}</span>
                        </li>
                    @endforeach
                </ul>
                <input type="hidden" name="order" id="portfolioOrder">
                <button type="submit" class="btn btn-primary-600">Save Order</button>
            </form>
        </div>
    </div>
@endsection
@section('admin_scripts')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $('#sortablePortfolio').sortable({
                handle: '.handle',
                update: function(event, ui) {
                    let order = $(this).sortable('toArray', {attribute: 'data-id'});
                    $('#portfolioOrder').val(order.join(','));
                }
            });
            // Set initial order
            let order = $('#sortablePortfolio').sortable('toArray', {attribute: 'data-id'});
            $('#portfolioOrder').val(order.join(','));
        });
    </script>
@endsection
