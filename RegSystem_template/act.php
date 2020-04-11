<?php
    require ("config.php");


    if(isset($_POST['name']) && isset($_POST['idnum'])){

        $username = $_POST['name'];
        $idnum = $_POST['idnum'];    

        $sql = "INSERT INTO registration(Username, idno) VALUES ('" . $username . "', '" . $idnum . "')";

        if ($dbcon->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $dbcon->error;
        }

        echo "TEST. My name is " . $username;
    }
    else
    {
            echo "TEST";    
    }
    


?>
