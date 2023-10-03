@extends('layouts.app')

@section('title', __('404 Not Found'))
@section('content')
    <div class="container bg-dark text-light text-center p-2">
        <h1 class="display-4">
            <i class="fa fa-face-sad-tear text-warning"></i>
            <br>
            Diese Seite konnte nicht gefunden werden!
            <br>
            404 Not Found
        </h1>    
    </div>
@endsection
