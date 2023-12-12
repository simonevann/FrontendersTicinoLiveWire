@extends('layout.app')
@section('pageTitle', 'Locations ready')
@section('content')
<div class="content m-4">
        <header class="row">
            <div class="col-12 uppercase ">
                <h1>Locations (ready)</h1>
            </div>
        </header>
        <div class="row">
            <livewire:ready-add-locations />
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Locations</h2>
                <livewire:ready-locations />
            </div>
        </div>
</div>
@endsection
@section('scripts')
    @parent
@endsection