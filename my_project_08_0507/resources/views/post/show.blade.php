@extends('layouts.app')

@section('title','Show')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Beitrag - Detailansicht</div>
                <div class="card-body">
                    <p><b>{{$daten->name}}</b></p>
                    <p>{!! nl2br($daten->beschreibung) !!}</p>
                   
                   <a href="{{URL::previous()}}" class="ms-2 btn btn-primary mt-2 float-left">
                        Züruck
                   </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
