<?php

$username=filter_input(INPUT_POST,'uname');

$password=filter_input(INPUT_POST,'psw');

$district=filter_input(INPUT_POST,'dist');
$name=filter_input(INPUT_POST,'nm');



        $host="localhost";

        $dbusername="root";

        $dbpassword="";

        $dbname="sih";

        $conn =new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){

            die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());

        }

        else{

            $sql="INSERT INTO anganwadi (username, password,district,name) values('$username','$password','$district','$name')";

            if($conn->query($sql)){

               header("location:../mukhyasevika.html");

            }

            else{

                echo "Error: ".$sql."<br>".$conn->error;

            }

            $conn->close();
        }5

        



    





?>