<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/members/update/{{ $un_membre->id }}" method="POST">
        @csrf
        <label for="">Nom :</label>
        <input type="text" name="nom" value="{{ $un_membre->nom }}"><br><br>
        <label for="">Prénom :</label>
        <input type="text" name="prenom" value="{{ $un_membre->prenom }}"><br><br>
        <label for="">Prénom usuel :</label>
        <input type="text" name="prenom_usuel" value="{{ $un_membre->prenom_usuel }}"><br><br>
        <label for="">Username @ github :</label>
        <input type="text" name="github" value="{{ $un_membre->user_github }}"><br><br>
        <label for="">Tel 1 :</label>
        <input type="text" name="tel1" value="{{ $un_membre->tel1 }}"><br><br>
        <label for="">Tel 2 :</label>
        <input type="text" name="tel2" value="{{ $un_membre->tel2 }}"><br><br>
        <label for="">Mail :</label>
        <input type="text" name="mail" value="{{ $un_membre->mail }}"><br><br>
        <label for="">Niveau</label>
        <input type="text" name="niveau" value="{{ $un_membre->niveau }}"><br><br>
        <input type="submit" value="Modifier"><br><br>
        
    </form>
    <a href="/members/suppr/{{ $un_membre->id }}">Supprimer</a>
</body>
</html>