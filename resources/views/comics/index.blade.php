@extends('layouts.main');
@section('main-content')
<h1>IL TUO ARCHIVIO PERSONALE</h1>
<div class="d-flex flex-wrap justify-content-center p-5">
@foreach($comics as $index=>$comic)
       <figure class="col-3">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"/>
            <h6 class="w-80 text-white">{{$comic['title']}}</h6>
            <a href="{{ route('Comics.show',$comic->id) }}" class="btn btn-success">VEDI NEL DETTAGLIO</a>
            <a href="{{ route('Comics.edit',$comic->id) }}" class="btn btn-warning">MODIFICA</a>
            <form action="{{ route('Comics.destroy',$comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">ELIMINA</button>
            </form>
            
       </figure>

@endforeach

</div>

@endsection