<?php
$url = "https://jsonplaceholder.typicode.com/users";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
$resultado = curl_exec($curl);

curl_close($curl);

//var_dump($resultado);

$users = json_decode($resultado,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        <?php foreach($users as $user){ ?> 
            <li><?php echo 'Nombre: '. $user['name'] . '<strong> Email: </strong> ' . $user['email'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>