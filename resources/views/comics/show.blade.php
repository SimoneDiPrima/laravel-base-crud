@extends('layouts.main');
@section('main-content')
<h2 class="mb-4">{{ $comic->title }}</h2>
<h5 class="mb-4">{{ $comic->description }}</h2>
<img class="mb-4" src="{{ $comic->thumb }}" alt="poster" />
<h3 class="mb-4">{{ $comic->price }} €</h2>
<h5 class="mb-4">{{ $comic->series }}</h2>
<h5 class="mb-4">{{ $comic->sale_date }}</h2>
<h5 class="mb-4">{{ $comic->type }}</h2>
<a class="offset-10 col-2" href="{{ route('home') }}"><button class="btn btn-primary mb-5">vedi nell archivio</button></a>

@endsection