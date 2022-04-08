<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>

<body>
    <form action="" method="get">
        <label for="inpnome">Nome:</label>
        <input type="text" name="nome" id="inpnome">
        <label for="inpemail">eMail:</label>
        <input type="email" name="email" id="inpemail">
        <label for="inpage">Età:</label>
        <input type="text" name="age" id="inpage">
        <button>Invia</button>
    </form>

    <?php


    if (
        (isset($_GET['nome'])) &&
        (isset($_GET['email'])) &&
        (isset($_GET['age']))
    ) {

        $nome = $_GET['nome'];
        $email  = $_GET['email'];
        $age = $_GET['age'];

        if (
            (strlen($nome) > 3) &&
            (strpos($email, ".") !== false) && (is_numeric($age) !== false)
        ) {
            echo "<h1>Accesso Riuscito</h1>";
        } else {
            echo "<h1>Accesso Negato</h1>";
        }
    }


    ?>
    <ul>
        <?php
        $numbers = array();

        while (count($numbers) < 16) {
            $random_number = rand();
            if (array_search($random_number, $numbers) !== false) {
                array_push($numbers, $random_number);
                echo "<li>$random_number</li>";
            } else {
            }
        };

        ?>
    </ul>
</body>

</html>