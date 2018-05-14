<!doctype html>
<html lang="en">
<head>
<title>Store: Wire Wrapped Creations</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="gallery.css">

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

<h1>Store: Wire Wrapped Creations</h1>
<p>Each picture is a link to the Etsy page for that item.</p>


<?php
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

$sql = "SELECT name, pic_url, etsy_page, alt_name, id FROM uni_prod";
$result = $conn->query($sql);
$i = 10001;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $n = $row["name"];
        $p = $row["pic_url"];
        $e = $row["etsy_page"];
        $a = $row["alt_name"];
        ?>

        <div class="gallery">
            <a target="_blank" href="<?php echo $e ?>">
                <img src="<?php echo $p ?>" alt="<?php echo $a ?>" width="300" height="200">
            </a>
            <form>
                <div class="desc" formaction="prodpage.php?id={$i}"> <?php echo $n ?> </div>
            </form>
        </div>

<?php
        $i++;
	}
} else {
    echo "0 results";
}
$conn->close();
?> 



</body>
</html>