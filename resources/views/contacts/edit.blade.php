<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>
    <div class="container mt-3">
        <div class="text-center mb-5">
            <h3>Modifer un Contact</h3>
        </div>
        <form action="{{route("contacts.update",$contact->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3 d-flex justify-content-between">
                <label for="nom" class="form-label fs-4">Nom:</label>
                <input type="text" name="nom" class="form-control w-75 me-5" value="{{$contact->nom}}"/>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <label for="email" class="form-label fs-4">Email:</label>
                <input type="email" name="email" class="form-control w-75 me-5" value="{{$contact->email}}"/>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <label for="telephone" class="form-label fs-4">Telephone:</label>
                <input type="text" name="email" class="form-control w-75 me-5" value="{{$contact->telephone}}"/>
            </div>
            <div class="mt-5 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="{{route('contacts.index')}}" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>
