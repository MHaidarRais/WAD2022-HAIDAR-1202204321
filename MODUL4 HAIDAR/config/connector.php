<?php
        $host="localhost:3308";
        $user="root";
        $pass="";
        $dbname="modul3";
        
        $conn = mysqli_connect($host, $user, $pass, $dbname);

        if(!$conn){
            echo "<script>
                    alert('Failed Connect into Database')
                </script>";
        }
    ?>    