<?php 

    if(isset($_POST['register'])) {

        $username = trim(htmlspecialchars($_POST['username']));
        $email = trim(htmlspecialchars($_POST['email']));
        $password = trim(htmlspecialchars($_POST['password']));

        $con = mysqli_connect("localhost","root","","users");
        
        $query = "insert into users (username,email,password) values ('$username','$email','$password')";

        $result = mysqli_query($con, $query);

        if($result==1) {
            echo "Inserted successfully";        
        } else {
            echo "Insertion Failed";
        }
    }
?>