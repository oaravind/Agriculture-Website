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


</style>
</head>

<body style="background-color: #04AA6D;">
<section id="header">
        <div class="topnav" id="myTopnav">
            <a href="customerhome.html" class="active">HOME</a>
            <a href="logout.php">LOGOUT</a>
            <a href="customerbuy.php">BUY</a>
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
<div id="content">
<?php
$db = mysqli_connect("localhost", "root", "", "agriculture");
$result = mysqli_query($db, "SELECT * FROM insertproducts LEFT JOIN images using(id)");
echo "<table border='5' >
<thead><tr>
<th>images</th>
<th>Full name</th>
<th>Email</th>
<th>Phone number</th>
<th>Product name</th>
<th>Price</th>
<th>Description</th>
<th>Action</th>
</tr>
</thread>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<tbody>";
  echo '  <td><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="160" width="160" class="img-thumnail" />  </td>  ';  
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['phonenumber'] . "</td>";
  echo "<td>" . $row['productname'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['descriptions'] . "</td>";
  echo "<td><a  href='customerorder.php?id=".$row['id']."' >Proceed to order </a></td>";
  echo "</tr>";
  echo "</tbody>";
  }
echo "</table>";

?>

</body>
</html>