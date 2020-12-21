@extends('homeTemplate')

@section('liste_des_marques')
    @foreach($brands as $b)
        <tr>
            <th>{{ $b->getId() }}</th>
            <td>{{ $b->getName() }}</td>
        </tr>
    @endforeach

@stop

@section('liste_des_categories')
    
        @foreach($categories as $cat)
            <tr>
                <th>{{ $cat->getId() }}</th>
                <td>{{ $cat->getName() }}</td>
            </tr>
        @endforeach
    
@stop

@section('liste_des_produits')
    @foreach($products as $p)
        <tr>
            <th>{{ $p->getId() }}</th>
            <td>{{ $p->getName() }}</td>
            <td>{{ $p->getYear() }}</td>
            <td>{{ $p->getBrand()->getName() }}</td>
            <td>{{ $p->getCategory()->getName() }}</td>
            <td>{{ $p->getPrice() }}</td>
            <td><button >Modif</button></td>
        </tr>
    @endforeach
@stop
