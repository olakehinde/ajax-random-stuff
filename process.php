<?php
echo "something";
echo "<br>";

if (isset($_GET['name'])) {
	# code...
	echo "GET: Your name is: ".$_GET['name'];
}

if (isset($_POST['name'])) {
	# code...
	echo "POST: Your name is: ".$_POST['name'];
}