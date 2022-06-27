<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

input[type=text], select, textarea {
  width: 85%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
h2{
    font-weight: bold;
    color: white;
    font-size: 30px;
}
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
<form action="./sellproduct.php" method="POST">    
<h2 style="text-align: center;">Inserting Product Details</h2>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phonenumber">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="phonenumber" name="phonenumber" placeholder="Enter phone number..">
      </div>
    </div> 

    <div class="row">
      <div class="col-25">
        <label for="Email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="Email" name="Email" placeholder="Enter email..">
      </div>
    </div> 

    <div class="row">
      <div class="col-25">
        <label for="pname">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="pname" name="productname" placeholder="Your product name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" placeholder="Product price..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Product Description</label>
      </div>
      <div class="col-75">
        <textarea id="descriptions" name="descriptions" placeholder="Describe your product...!" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Insert Data">
    </div>
  </form>
</div>

</body>
</html>