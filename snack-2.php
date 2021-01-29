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
    $name = trim($_GET['name'], " ");
    $email = trim($_GET['email'], " ");
    $age = intval(trim($_GET['age']));

    if (strlen($name) === 0 && strlen($email) === 0 && $age === 0) {
        $success = null;
    }
    elseif (strlen($name) < 4 && strlen($name) > 0) {
        $success = false;
    }
    elseif (strpos($email, ".") == false || strpos($email, "@") === false) {
        $success = false;
    }
    elseif (gettype($age) !== integer) {
        $success = false;
    }
    else{
        $success = true;
    }
    
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
        <form action ="" method="get" name="myform">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <label for="age">Age</label>
            <input type="text" name="age" id="age"><br>
            <input type="submit" value="Submit">
        </form>
        <h4><?php if($success){echo 'Dati inseriti correttamente';} elseif($success === false){echo 'Errore: dati non inseriti correttamente';} elseif($success === null) {echo '';}?></h4>
    </div>
</body>
</html>