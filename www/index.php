<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    <form method="post" class="form form-group">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input name="email" type="text" class="form-control" placeholder="Digite seu Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-envelope"></i></span>
            <textarea name="message" class="form-control"  aria-describedby="basic-addon2">
            </textarea>
        </div>
        <button class="btn btn-success">Submeter</button>
    </form>
    </body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once "../bootstrap.php";
        include "../development/models/MessageFuture.php";

        $message = $_POST['email'];
        $email = $_POST['message'];

        $message_object = new MessageFuture();
        $message_object->setMessage($message);
        $message_object->setEmail($email);

        $entityManager->persist($message_object);
        $entityManager->flush();

        echo "Created Product with ID " . $message_object->getId() . "\n";
    }
?>