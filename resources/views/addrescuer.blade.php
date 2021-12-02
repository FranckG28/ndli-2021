<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TP6 - @yield('title')</title>
        <link rel="stylesheet" href="../../css/styles.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
    </head>

    <body>
        <form action="/addsaver" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nom" required>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
            <input type="date" name="dateBirth" id="dateBirth" placeholder="Date de naissance" required>
            <input type="date" name="dateDeath" id="dateDeath" placeholder="Date de décès (facultatif)">
            <select name="Grade" id="grade-select">
                <option value="">--Please choose an option--</option>
                <option value="dog">Grade1</option>
                <option value="dog">Grade2</option>
            </select>
        </form>
    </body>
</html>


