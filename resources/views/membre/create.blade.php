<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="members" method="POST">
        @csrf
        <label for="">Nom :</label>
        <input type="text" name="nom"><br><br>
        <label for="">Prénom :</label>
        <input type="text" name="prenom"><br><br>
        <label for="">Prénom usuel :</label>
        <input type="text" name="prenom_usuel"><br><br>
        <label for="">Username @ github :</label>
        <input type="text" name="github"><br><br>
        <label for="">Tel 1 :</label>
        <input type="text" name="tel1"><br><br>
        <label for="">Tel 2 :</label>
        <input type="text" name="tel2"><br><br>
        <label for="">Mail :</label>
        <input type="text" name="mail"><br><br>
        <label for="">Niveau</label>
        <input type="text" name="niveau"><br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>