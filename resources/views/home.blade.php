@extends('layouts.main');
@section('main-content')
<div class="homepage my-5 p-5">
    <h4 class="text-center text-success mt-4">Comic's World</h4>
    <h6 class="text-primary text-center">entra nel nostro fantastico mondo e scegli la collezione piu adatta a te</h6>
    <a href="{{ route('Comics.create') }}"><button type="submit" class="offset-4 col-4 bg-primary text-white my-5 p-2 rounded-pill border-danger">AGGIUNGI IL TUO PROSSIMO TOPSELLER</button></a>
   
</div>


@endsection