<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        
        .topnav a {
            float: right;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 18px 17px;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
            
        }
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .topnav a.active {
            background-color: #04aa8e;
            color: white;
            float: left;
        }
        
        .topnav .icon {
            display: none;
        }
        
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
        
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}
td a {
  color: Black;
}
table th,
table td {
  padding: .625em;
  text-align: center;
}
th:nth-child(8) {
  width: 100px;
}
th:nth-child(6) {
  width: 100px;
}
th:nth-child(3) {
  width: 300px;
}
table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
h1{
    text-align: center;
}
.first{
  text-align: center;
 
}
.back{
    padding: 50px;
}
</style>
</head>

<body style="background-color: #04AA6D;">
<section id="header">
        <div class="topnav" id="myTopnav">
        <a href="farmerhome.html" class="active">HOME</a>
            <a href="logout.php">LOGOUT</a>
            <a href="sell.php">SELL</a>
            <a href="buy.php">BUY</a>
            <a href="mysellings.php">MY SELLINGS</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </section>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        
    </script>


<?php
include 'db.php';
$insertproducts_id =$_REQUEST['id'];
$result = mysqli_query($conn, "SELECT * FROM insertproducts  WHERE id = '$insertproducts_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
        $id= $test['id'] ;
		$fname= $test['fname'] ;					
		$phonenumber=$test['phonenumber'] ;
		$Email=$test['Email'] ;
        $productname=$test['productname'] ;
        $price=$test['price'] ;
        $descriptions=$test['descriptions'] ;
				
?>
<div class="first">
<form action="productdel.php" method="post">
<h1>Are you sure you want to delete this record <?php echo $fname; ?></h1>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
<div class="back"><a href="mysellings.php">Back</a></div>
</form>

</div>
</body>
</html>