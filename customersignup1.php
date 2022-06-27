<?php
        #sample connection to database with name test
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "agriculture"; #can be any name 
        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }else{
            if(isset($_REQUEST['submit'])){
               if($_REQUEST['username']!=""&&$_REQUEST['emails']!=""&&$_REQUEST['psw']!=""){
                    $input = $_REQUEST['username'];    
                    $input1 = $_REQUEST['emails'];
                    $input2 = $_REQUEST['psw'];
                    echo '<script>alert("Insertion successfull")</script>';
                    echo("<script>windows: location='customerlogin.html'</script>");
                   
                    $sql = "INSERT INTO customersignup(username,emails,psw) VALUES('$input','$input1','$input2')";
                    if($conn->query($sql)===TRUE){
                        echo "\n\nThe value is taken into table";
                    }
                    else{
                      echo "\n error in executing";
                    }
                }else{
                    echo "\nThe value is not provided.";
                }

            }
        }
?>