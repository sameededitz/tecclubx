@extends('layout.admin-layout')
@section('title')
    Email | Admin
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
        <h6 class="fw-semibold mb-0">Email Settings</h6>
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

    @livewire('email-categories')
@endsection
@section('admin_scripts')
    <script src="https://cdn.tiny.cloud/1/profov2dlbtwaoggjfvbncp77rnjhgyfnl3c2hx3kzpmhif1/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
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
    </script>
@endsection
