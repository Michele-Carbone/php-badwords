<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/


$paragr = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aperiam, suscipit provident iusto consequatur natus, sapiente, quia laboriosam harum dolores dolorem aliquam officiis non enim consectetur dignissimos voluptate fuga vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fuga soluta? Eaque fugiat totam facilis alias sapiente eius dolore velit culpa accusantium? Laboriosam beatae quidem, cumque accusamus saepe iure quisquam?';

$paragr_lenght = strlen($paragr);


$badword = $_GET['word'];

$censured = str_replace($badword, '***', $paragr);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>

<body>
    <p>
        <?php echo $paragr ?>
    </p>
    <h6>La lunghezza del paragrafo è di: <?php echo $paragr_lenght; ?> caratteri</h6>
    <hr>
    <p>
        <?php echo $censured ?>
    </p>
    <h6>La lunghezza del paragrafo censurato è di: <?php echo strlen($censured) ?>caratteri</h6>
</body>

</html>