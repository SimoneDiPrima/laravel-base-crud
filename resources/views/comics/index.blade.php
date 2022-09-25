@extends('layouts.main');
@section('main-content')
<h1>IL TUO ARCHIVIO PERSONALE</h1>
<div class="d-flex flex-wrap justify-content-center p-5">
@foreach($comics as $index=>$comic)
<a class="col-2 p-2" href="#">   
       <figure>
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"/>
            <h6 class="w-80">{{$comic['title']}}</h6>
       </figure>
       
</a>

@endforeach

</div>

@endsection