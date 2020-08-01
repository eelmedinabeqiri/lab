<?php 

    require "connection.php";

    if(isset($_POST['Submit'])){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = " INSERT INTO users (Name, Surname, Email, Username, Password) VALUES ('$name', '$surname', '$email', '$username', '$password')";

        $DB->query($sql);

        //header('Location:..\ThankYouPage.php');
    
        
    }






?>