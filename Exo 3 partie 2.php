<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 : Les conditions</title>
</head>
<body>
    <h1>Exo 3 : Les conditions</h1>
    <?php
    $age = 19;
    $gender = "Homme";

    if ($age <= 18) {
    if ($gender === "Femme") {
        echo"Vous êtes une femme et vous êtes mineure";
    } else {
        echo"Vous êtes un homme et vous êtes mineur";
    }
    }
    if ($age > 18) {
    if ($gender === "Femme") {
        echo"Vous êtes une femme et vous êtes majeure";
    }else {
        echo"Vous êtes un homme et vous êtes majeur";
    }
    }
    ?>
</body>
</html>