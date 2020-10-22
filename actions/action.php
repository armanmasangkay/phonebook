<?php
    $con = mysqli_connect("localhost", "root", "", "phonebook");
    
    if(isset($_POST["submit"])){
        $sql = "INSERT INTO person (name) VALUES ('".$_POST["name"]."')";
        $result = mysqli_query($con, $sql);
        if($result){
            header("Location: http://localhost/phonebook/view/?msg=inserted");
        }
        else{
            header("Location: http://localhost/phonebook/view/?msg=failed");
        }
    }
?>