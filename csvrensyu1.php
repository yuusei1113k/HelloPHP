<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>
 


<body>


<?php


$fp = fopen("sales.csv", "r");
$suma = 0 ;
$sumb = 0 ;
$sumc = 0 ;


while(!feof($fp)){
	$str = fgetcsv($fp);
	if ($str[0] == "A"){
		$suma += $str[1];
	}else if($str[0] == "B"){
		$sumb += $str[1];
	}else if($str[0] == "C"){
		$sumc += $str[1];
	}

}

print "商品A合計:".$suma ."<br>";
print "商品B合計:".$sumb ."<br>";
print "商品C合計:".$sumc ."<br>";



fclose($fp);


?>

</body>
</html>