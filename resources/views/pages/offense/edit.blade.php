<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Pelanggaran') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Pelanggaran</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.offense.index') }}">Edit Pelanggaran</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:offense-form action="update" dataId="{{$id}}"/>
    </div>
</x-app-layout>
