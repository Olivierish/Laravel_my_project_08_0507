@extends('layouts.app')

@section('title','Alle Beiträge')

@section('content')

<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User-Kommentare ({{$alle->count()}})</div>
                <div class="card-body">
                @if($alle->count() > 0)
                   <ul class="list-group">
                        @foreach($beitraege as $beitrag)
                        <li class="list-group-item">
                            <!-- <i class="fa-solid fa-comment" aria-hidden="true"></i> -->
                            <i class="fa-solid fa-comment fa-flip-horizontal"></i>
                            <span class="d-inline-block w-50">{{$beitrag->name}}</span>
                            <small class="text-secondary">
                                von <i class="fa fa-user fa-solid" aria-hidden="true"></i>
                                @if(isset($beitrag->user_id))
                                <a href="/user/{{$beitrag->user_id}}" class="text-primary">
                                     {{$beitrag->user->name}} 
                                </a>
                                #TODO 
                                ({{$beitrag->user->posts->count()}} Kommentare)
                                @else
                                    Unbekannt
                                @endif
                            </small>
                            <a href="/post/{{$beitrag->id}}" class="ms-2 btn btn-info btn-sm"> <i class="fa fa-circle-info text-light"></i> Detailansicht</a>

                            @if(Auth::check() && Auth::id() === $beitrag->user_id)
                            <a href="/post/{{$beitrag->id}}/edit" class="ms-2 btn btn-success btn-sm">Bearbeiten</a>
                            <form action="/post/{{$beitrag->id}}" method="post" class="d-inline-block ml-2" onclick="return confirm('Wollen Sie wirklich den Datensatz löschen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="löschen" class="btn btn-outline-danger btn-sm">
                                <i class="fa fa-trash"></i> löschen
                                </button>
                            </form>
                            @endif


                            <div class="float-end">
                                @if( isset($beitrag->created_at)) 
                                    {{$beitrag->created_at->diffForHumans() }}
                                @else
                                    kein Datum
                                @endif  
                                <div class="text-danger">
                                    @if( isset($beitrag->updated_at) && ($beitrag->updated_at < $beitrag->created_at)) 
                                    geändert: {{$beitrag->updated_at->diffForHumans()}}
                                    @else
                                        kein Datum
                                    @endif  
                                </div>
                            </div>
                        </li>
                        @endforeach
                   </ul>
                @else
                <p class="alert alert-success">Keine Kommentare vorhanden</p>
                @endif

                {{-- @auth --}}
                   <a href="post/create" class="btn btn-success mt-2">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                        Neuen Beitrag anlegen
                   </a>
                {{-- @endauth --}}

                   <div class="mt-3">
                        {{ $beitraege-> links()}}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
