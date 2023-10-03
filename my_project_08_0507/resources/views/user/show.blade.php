@extends('layouts.app')

@section('title','Show User')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User - Detailansicht</div>
                <div class="card-body">
                    <p><b>{{$benutzer->name}}</b></p>
                    <p><b class="text-secondary">{{$benutzer->motto ? $benutzer->motto : 'Kein Motto'}}</b></p>
                    <p>{!! $benutzer->ueber_mich ? nl2br($benutzer->ueber_mich) : 'War zu faul um Info zu schreiben' !!}</p>
                   
                   <a href="{{URL::previous()}}" class="ms-2 btn btn-primary mt-2 float-left">
                        Züruck
                   </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
