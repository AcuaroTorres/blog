<!-- /resources/views/alert.blade.php -->

@component('alert')
    @slot('type','danger')
    You are not allowed to access this resource!

@endcomponent

<div class="alert alert-{{ $type }}">
    <div class="alert-title"></div>

    {{ $slot }}
</div>