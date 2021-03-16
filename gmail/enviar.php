<?php
if (!isset($_SESSION['token'])) {
    header('Location:index.php');
}
require_once 'ClienteGoogle.php';
$clienteGoogle = new ClienteGoogle();

$cliente = $clienteGoogle->getDatosCliente();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $subject = $_POST['subject'];
	$to = $_POST['to'];
	$message = $_POST['message'];

	$line = "\n";
	$raw = "to: $to".$line;
	$raw .= "subject: $subject".$line.$line;
	$raw .= $message;

	$base64 = base64_encode($raw);
    $data = '{ "raw" : "'.$base64.'" }';
    $mensaje = $clienteGoogle->sendMessage($service,'me',$base64);
    if($mensaje){
        $_SESSION['sent'] = "Email enviado correctamente";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>API GMAIL</title>
</head>

<body>
    <div class="container">
        <h1>Hola! <?= $cliente['emailAddress'] ?></h1>

        <?php
        if (isset($_SESSION['sent'])) { // if message has been sent
            echo '<h3 style="color:red;">' . $_SESSION['sent'] . '</h3>';
            unset($_SESSION['sent']);
        }
        ?>
        <form action="#" method="post">
            <div class="form-group col-4">
                <label for="">Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>
            <div class="form-group col-4">
                <label for="">TO</label>
                <input type="text" class="form-control" name="to">
            </div>
            <hr>
            <div class="form-group">
                <label for="">Mensaje</label>
                <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <input class="btn btn-success" type="submit" name="submit" value="Enviar">
        </form>
        <br>
        <p><a href="logout.php">Salir</a></p>
</body>

</html>