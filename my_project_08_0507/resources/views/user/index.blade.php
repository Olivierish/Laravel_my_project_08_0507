@extends('layouts.app')

@section('title','Alle User')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alle User</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($benutzer as $row)
                            <li class="list-group-item">
                                <i class="fa-solid fa-user text-info" aria-hidden="true"></i>
                                {{$row->name}}
                                <a href="/user/{{$row->id}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    Detailansicht
                                </a>
                            </li>
                        @endforeach
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
