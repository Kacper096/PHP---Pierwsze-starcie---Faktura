<!DOCTYPE HTML>
<HTML lang="pl"> 
<head>
	<META content ="charset=utf-8"/>
</head>
<body>
	<form action="order.php" method="post">
	 <h1>Sprzedaz paczkow</h1>
	 <span>Paczek (0.99PLN/szt.):</span> <input type="text" name="paczki"/><br/>
	 <span>Paczek z czekolada (1.29PLN/szt.):</span> <input type="text" name="paczek_czek"/><br/>
	 <input type="submit" value="Wyslij zamowienie"/>
	</form><br/><br/>
<?php
echo '$_SERVER["PHP_SELF"]'.$_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
?>
</body>
</HTML>