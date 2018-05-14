<!doctype html>
<html lang="en">
<head>
    <title>Grey Raven's Castle</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
<a href="index.html">
    <img src="mylogo.gif" alt="Logo" style="display: block;">
</a>

<!--Nav list-->
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="storemain.html">Store</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="charities.html">Charities</a></li>
</ul>
<!--End Nav list-->

<!--Left bar-->
<div class="left">
    <a href="https://www.etsy.com/shop/GreyRavensCastle">
        Hosted on <img src="etsy logo.jpg" alt="Etsy Logo" width="180">
    </a>
</div>
<!--End Left bar-->

<p></p>

<?php
$id = $_GET['id'];

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = mysqli_query($conn,"SELECT * FROM uni_prod WHERE id='$id'");
$row = mysqli_fetch_row($sql);

    $name = $row[1];
    $quantity = $row[2];
    $wholesale = $row[3];
    $retail = $row[4];
    $length = $row[6];
    $alt_name = $row[8];
    $pic_url = $row[9];
    $etsy = $row[10];

mysqli_close($conn);
?>

    <img src="<?php echo $pic_url ?>" alt="<?php echo $alt_name ?>" width=500>
    <a target="_blank" href="<?php echo $etsy ?>">Check out this product's Etsy page!</a>


</body>
</html>