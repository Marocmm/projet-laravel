<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page de creation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>
    <div class="container mt-3">
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
    </div>
</body>
</html>

{{-- @extends('Master')
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
@endsection --}}
