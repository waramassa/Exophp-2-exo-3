<?php
$gender = 'homme';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo3</title>
</head>
<body>
    <?php
    if ($gender = 'homme') {
        echo 'est un dévéloppeur';
    }
    else {
        echo 'c\'est une développeuse';
    }
    ?>

    
</body>
</html>