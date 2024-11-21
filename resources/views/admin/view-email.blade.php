@extends('layout.admin-layout')
@section('title')
    View Email | Admin
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
        <h6 class="fw-semibold mb-0">View Email</h6>
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

    @livewire('email-view', ['email' => $email])
@endsection
@section('admin_scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            $('.alert .remove-button').on('click', function() {
                $(this).closest('.alert').addClass('d-none')
            });
        })
    </script>
@endsection
