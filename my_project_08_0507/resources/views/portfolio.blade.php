@extends('layouts.app')

@section('title','Referenzen')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Referenzen</div>
                <div class="card-body">
                   <p>
                   Laravel ist ein Webserver-Anwendungsframework mit ausdrucksstarker, eleganter Syntax. Es ist für die Erstellung von Websites mit benutzerdefinierten Zwecken entwickelt, von einfachen Websites bis hin zu komplexen Websystemen. Laravel bietet eine vollständige Palette von Werkzeugen für eine schnelle Erstellung dynamischer, robuster Anwendungen unter Einhaltung moderner Entwicklungspraktiken.
                   </p>
                   @foreach($daten AS $user)
                   <ul class ="list-group m-2">
                    <li class="list-group-item">{{$user['name']}}</li>
                    <li class="list-group-item">{{$user['vorname']}}</li>
                    <li class="list-group-item">Wohnort: {{$user['ort']}}</li>
                    </ul>

                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
