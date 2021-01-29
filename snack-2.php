<!-- 
    ISTRUZIONI:
    PHP Snack 2:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. mail contenga un punto e una chiocciola
    3. age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php 
    //&& str_contains($email, "@")
    $name = trim($_GET['name'], " ");
    $email = trim($_GET['email'], " ");
    $age = trim($_GET['age'], " ");
    $success = false;

    var_dump(str_contains('abc', ''));
    
    if (strlen($name) < 4) {
        return $success = false;
    }
    // elseif (str_contains($email, ".") == false) {
    //     $success = false;
    //}
    else{
        return $success = true;
    }
    
    var_dump($success);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-02</title>
    <style>
        .body{
            background-color: #f7f7f7;
        }
        .container{
            margin: auto;
            width: 80%;
            font-family: Arial;
            text-align: center;
        }
        p{
            line-height: 2;
        }
        input{
            padding: 5px;
            border: 1px solid #888;
            border-radius: 2px; 
        }
        input:last-of-type{
            margin-top: 40px;
        }
        label{
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inserisci qui i tuoi dati</h1>
        <form action="">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="age">Age</label>
            <input type="number" name="age" id="age"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>