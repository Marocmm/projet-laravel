@extends('Master')
@section('title')
    Ajouter un Contact
@endsection
@section('body')
<div class="text-center mb-5">
    <h1>Ajouter un Contcat</h1>
</div>
<form action="{{route("contacts.store")}}" method="post">
    @csrf
    <div class="mb-3 d-flex justify-content-between">
        <label for="nom" class="form-label fs-4">Nom:</label>
        <input type="text" name="nom" class="form-control w-75 me-5" placeholder="Entrer le nom"/>
    </div>
    <div class="mb-3 d-flex justify-content-between">
        <label for="email" class="form-label fs-4">Email:</label>
        <input type="email" name="email" class="form-control w-75 me-5" placeholder="Entrer l'email"/>
    </div>
    <div class="mb-3 d-flex justify-content-between">
        <label for="telephone" class="form-label fs-4">Telephone:</label>
        <input type="text" name="telephone" class="form-control w-75 me-5" placeholder="Entrer le telephone"/>
    </div>
    <div class="mt-5 text-center">
        <button type="submit" class="btn btn-success">Ajouter un contact</button>
        <a href="{{route('contacts.index')}}" class="btn btn-secondary">Annuler</a>
    </div>
</form>
@endsection
