@extends('layout.app')
@section('pageTitle', 'Locations')
@section('content')
<div class="content m-4">
    <header class="row">
        <div class="col-12 uppercase ">
            <h1>Locations</h1>
        </div>
    </header>
    <div class="row">
        <livewire:add-location />
    </div>
    <div class="row">
        <livewire:locations />
    </div>
</div>
@endsection
@section('scripts')
    @parent
@endsection