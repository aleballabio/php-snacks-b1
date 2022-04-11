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
        $how_many_numbers  = 15;
        while (count($numbers) < $how_many_numbers) {
            $random_number = rand(1, 100);
            if (array_search($random_number, $numbers) === false) {
                array_push($numbers, $random_number);
                echo "<li>$random_number</li>";
            } else {
            }
        };

        ?>
    </ul>


    <?php

    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur neque impedit fugit provident quasi repellat cum quo vel aliquid, vero repellendus quae numquam incidunt, nam amet praesentium quia consequuntur alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur neque impedit fugit provident quasi repellat cum quo vel aliquid, vero repellendus quae numquam incidunt, nam amet praesentium quia consequuntur alias!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur neque impedit fugit provident quasi repellat cum quo vel aliquid, vero repellendus quae numquam incidunt, nam amet praesentium quia consequuntur alias!";
    $paragraph_divided = explode(".", $paragraph);
    ?>
    <p>
        <?php
        for ($i = 1; count($paragraph_divided) > $i; $i++) {
            echo "$paragraph_divided[$i].<br>";
        }
        ?>
    </p>
</body>

</html>