@extends('layouts.main');
@section('main-content')
<div class="text-center">
        <div>
            <h1 class="card-title ">AGGIUNGI ALLA TUA BIBLIOTECA UN NUOVO FUMETTO</h1>
        </div>
    <div>
    <div class="card-body text-center">
        <form action="{{ route('Comics.store') }}" method="POST" class="offset-3 col-6" size="30">
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="my-3 d-flex flex-column col-9">
                    <label class="ms-2" for="title">Titolo Fumetto</label>
                    <input type="text" placeholder="titolo fumetto" id="title" name="title" size="30">
                </div>
                <div class="my-3 d-flex flex-column col-9">
                    <label class="ms-2" for="description">Descrizione</label>
                    <textarea type="text" placeholder="descrizione fumetto" id="description" row="20" cols="30" name="description"></textarea>
                </div>
                <div class="my-3 d-flex flex-column col-9">
                    <label class="ms-2" for="thumb">Copertina</label>
                    <input type="text" src="" placeholder="url copertina fumetto" id="thumb" name="thumb" size="30">
                </div>
                <div class="my-3 d-flex flex-column col-9">
                    <label class="ms-2" for="price">Prezzo d'acquisto</label>
                    <input type="text" placeholder="prezzo d acquisto" id="price" name="price" size="30">
                </div>
                <div class="my-3 d-flex flex-column col-9">
                    <label class="ms-2" for="series">Serie Fumetto</label>
                    <input type="text" placeholder="serie fumetto" id="series" name="series" size="30">
                </div>
                <div class="my-3 d-flex flex-column col-9">
                    <label class="ms-2" for="sale_date">Data di uscita</label>
                    <input type="text" placeholder="Data di uscita" id="sale_date" name="sale_date" size="30">
                </div>
                <div class="my-3 d-flex flex-column col-9">
                    <label class="ms-2" for="type">Genere</label>
                    <input type="text" placeholder="genere" id="type" name="type" size="30">
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mt-5" type="submit">Salva nel tuo archivio</button>
                </div>

            </div>

        </form>
    </div>
</div>

</div>
@endsection
