<?php

if (isset($_POST['prename']) && isset($_POST['name']) && isset($_POST['email'])){
    include 'db_conn.php';
    

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $prename = validate($_POST['prename']);
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $subscription = validate($_POST['subscribe']);


    if (empty($name) || empty($prename) || empty($email)){
        header("Location: index.html");    
    } else {

        $sql = "INSERT INTO test(prename, name, email) VALUES('$prename', '$name', '$email')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "You have been successfully registered";
        } else {
            echo "Echec while registering";
        }

    }


} else {
    header("Location: index.html");
}
