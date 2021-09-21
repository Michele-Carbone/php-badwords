<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $paragr = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aperiam, suscipit provident iusto consequatur natus, sapiente, quia laboriosam harum dolores dolorem aliquam officiis non enim consectetur dignissimos voluptate fuga vel.';
    $utente = $_GET['quary'];
    
    echo $paragr . '<br>';

    echo strlen($paragr) . '<br>';
    echo str_replace($utente, '***',$paragr);
    ?>
    
</body>
</html>