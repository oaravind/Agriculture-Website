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
               if($_REQUEST['fname']!=""&&$_REQUEST['phonenumber']!=""&&$_REQUEST['Email']!=""&&$_REQUEST['productname']!=""&&$_REQUEST['price']!=""&&$_REQUEST['descriptions']!=""){
                    $input = $_REQUEST['fname'];    
                    $input1 = $_REQUEST['phonenumber'];
                    $input2 = $_REQUEST['Email'];
                    $input3 = $_REQUEST['productname'];
                    $input4 = $_REQUEST['price'];
                    $input5 = $_REQUEST['descriptions'];
                    
                    echo '<script>alert(" Data Insertion successfull")</script>';
                    echo("<script>windows: location='images.php'</script>");
                   
                    $sql = "INSERT INTO insertproducts(fname,phonenumber,Email,productname,price,descriptions) VALUES('$input','$input1','$input2','$input3','$input4','$input5')";
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