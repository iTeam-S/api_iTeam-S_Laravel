<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($liste_membres as $membre)
        <p> {{ $membre->prenom_usuel }}  ;  Github : {{ $membre->user_github }} ; {{ $membre->mail }}</p>
        <a href="/members/suppr/{{ $membre->id }}">Supprimer</a>

        <hr>
    @endforeach
</body>
</html>