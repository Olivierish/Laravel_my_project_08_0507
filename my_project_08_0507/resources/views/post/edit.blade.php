@extends('layouts.app')

@section('title','Edit Beitrag')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Beitrag bearbeiten</div>
                <div class="card-body">
                  <form action="/post/{{$daten->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{old('name1') ?? $daten->name}}" type = "text" id="name" name="name1" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Kommentar</label>
                        <!-- <input type = "text" id="kom" name="kom1" class="form-control"/> -->
                        <textarea id="kom" name="kom1" class="form-control">{{old('kom1') ?? $daten->beschreibung}}</textarea>
                    </div>
                    <input type = "submit" id="name" value="Beitrag bearbeiten" class="btn btn-success mt-2"/>
                  </form>
                   <a href="/post" class="btn btn-success mt-2">
                        Zurück
                   </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
