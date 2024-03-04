{{-- @extends('layouts.panel')

@section('content')


@endsection --}}


@extends('layouts.panel')

@section('content')

@livewireStyles

<livewire:admin.app-products />



@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
<x-livewire-alert::flash />
@stack('js')

@endsection


