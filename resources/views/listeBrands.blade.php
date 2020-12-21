@extends('template')

@section('contenu')
    Coucou
@stop

@section('contenu_bis')
    <ul>
        @foreach($brands as $b)
            <li>
                {{ $b->getName() }}
            </li>
            <li>
                {{ $b->getId() }}
            </li>
        @endforeach
    </ul>
@stop