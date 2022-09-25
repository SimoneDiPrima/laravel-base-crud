@extends('layouts.main');
@section('main-content')
<h2 class="mb-4 text-white">{{ $comic->title }}</h2>
<h5 class="mb-4 text-white">{{ $comic->description }}</h2>
<img class="mb-4 text-white" src="{{ $comic->thumb }}" alt="poster" />
<h3 class="mb-4 text-white">{{ $comic->price }} €</h2>
<h5 class="mb-4 text-white">{{ $comic->series }}</h2>
<h5 class="mb-4 text-white">{{ $comic->sale_date }}</h2>
<h5 class="mb-4 text-white">{{ $comic->type }}</h2>
<a class="offset-10 col-2" href="{{ route('home') }}"><button class="btn btn-primary mb-5">vedi nell archivio</button></a>

@endsection