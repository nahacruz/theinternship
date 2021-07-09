<?php
$number0ftreesperdistrictpertype = array(
	"wakiso" => array(

		"muvule tree" =>569,
		"Eucaliptus" =>80003,
		"Musizi" =>767363,
		"Musabu" =>8984,
	),

	"Kabale" => array(

		"muvule tree" =>69,
		"Eucaliptus" =>803,
		"Musizi" =>7363,
		"Musabu" =>89,
	),

	"Kabale" => array(

		"muvule treer" =>90,
		"Eucaliptus" =>803,
		"Musizi" =>763,
		"Musabu" =>29,
	),
);

foreach ($number0ftreesperdistrictpertype as $index => $value) {
	echo"====" .$index. "======<br>";

	foreach ($value as $key => $trees) {
		echo $key ."=" .$trees. "<br>";
	}
}	
    
$sumofalldistricts=array(500,80003,767363,8984,60,803,7363,89,90,803,7363,29);
echo "-----sum(sumofalldistricts)------# " .array_sum($sumofalldistricts)."------<br>";

setcookie("sumofalldistricts","873450",time()+3600);
if (isset($_COOKIE['sumofalldistricts'])) {
    echo $_COOKIE['sumofalldistricts'];
setcookie("sumofalldistricts","",time()-60);	
} 
else {
     echo "-------the cookie doesnot exist-----" . "<br>";
}
    
$sumofMasaba_trees=array(8984,29,89);
echo " ------sum(sumofMasaba_trees)------ =" .array_sum($sumofMasaba_trees)."---------<br>";

session_start();
$_SESSION['sumofMasaba_trees'] ="9102";
echo $_SESSION["sumofMasaba_trees"]. "<br>";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Internship </title>
</head>
<body>

	<form method="POST" action="master.php">
	<label>sumoftrees</label>
	<input type="number" name="sumoftrees">
	<hr>
	<button type="submit">Submit</button>
	<a href="master.php"> Master page</a>
</body>
</html>















