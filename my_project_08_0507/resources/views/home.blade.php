@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-header">
                    <h2 class="text-info">Hallo {{auth()->user()->name}}</h2>
                    <span>({{ __('validation.logged')}})</span>
                    <p>
                        <a href="user/{{auth()->id()}}/edit" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Profil bearbeiten
                        </a>
                    </p>
                    <p>
                        <a href="post/create" class="btn btn-success btn-sm">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Neuen Beitrag anlegen
                        </a>
                    </p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-dark p-0">
                        <h3 class="text-center bg-success p-2">Motto:{{auth()->user()->motto}}</h3>
                        <p class="p-2"><b>Über mich: </b>{{auth()->user()->ueber_mich}}</p>
                    </div>
                    @isset($beitraege)
                        @if ($alle > 0)
                            <h3>Du hast Kommentare ({{$alle}})</h3>
                        @endif
                        <ul class="list-group">
                            @foreach ($beitraege as $beitrag)
                                <li class="list-group-item">
                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                    {{$beitrag->name}}
                                    <a href="" class="btn btn-info btn-sm py-1">
                                        Detailansicht
                                    </a>
                                    <a href="/post/{{$beitrag->id}}/edit" class="btn btn-primary btn-sm py-1">
                                        Bearbeiten
                                    </a>
                                    <form action="/post/{{$beitrag->id}}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                            löschen
                                        </button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @endisset

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
