<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list des contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>
    <div class="container mt-3">
        <div class="text-center">
            <h3>List des contacts</h3>
        </div>
        <a href="{{route('contacts.create')}}" class="btn btn-success mt-5 mb-3">Ajouter un contact</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Contact</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->nom}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->telephone}}</td>
                        <td class="d-flex"><a href="{{route('contacts.edit',$contact->id)}}" class="btn btn-primary ms-3">Modifier</a>
                        <form action="{{route('contacts.destroy',$contact->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger ms-3">Supprimer</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
