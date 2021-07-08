<?php
$number0ftreesperdistrictpertype = array(
	"kampala" => array(

		"conifer" =>200,
		"aspen" =>500,
		"cottonwood" =>800,
	),

	"wakiso" => array(

		"conifer" =>700,
		"aspen" =>350,
		"cottonwood" =>1000,
	),

	"mukono" => array(

		"conifer" =>400,
		"aspen" =>900,
		"cottonwood" =>150,
	),
);

foreach ($number0ftreesperdistrictpertype as $index => $value) {
	echo"====" .$index. "======<br>";

	foreach ($value as $key => $trees) {
		echo $key ."=" .$trees. "<br>";
	}
}	
    
$sumofalldistricts=array(200,500,800,700,350,1000,400,900,150);
echo "-----sum(sumofalldistricts)------# " .array_sum($sumofalldistricts)."------<br>";

setcookie("sumofalldistricts","5000",time()+3600);
if (isset($_COOKIE['sumofalldistricts'])) {
    echo $_COOKIE['sumofalldistricts'];
setcookie("sumofalldistricts","",time()-60);	
} 
else {
     echo "-------the cookie doesnot exist-----" . "<br>";
}
    
$sumofkampala_trees=array(200,500,800);
echo " ------sum(sumofkampala_trees)------ =" .array_sum($sumofkampala_trees)."---------<br>";

session_start();
$_SESSION['sumofkampala_trees'] ="1500";
echo $_SESSION["sumofkampala_trees"]. "<br>";

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















