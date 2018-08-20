<!DOCTYPE HTML>
<HTML lang="pl"> 
<head>
	<META content ="charset=utf-8"/>
	<title>Podsumowanie zamowienia</title>
</head>
<body>
<?php
	$paczek = $_POST['paczki'];
	$paczek_czek = $_POST['paczek_czek'];
	$suma = 0.99*$paczek + 1.29*$paczek_czek;
	
	
echo<<<END
<table border="1px solid black" cellpadding="10" cellspacing="0">
<thead><tr><th colspan="2">Podsumowanie zamowienia</th></tr></thead>
<tbody><tr><td>Paczek (0.99PLN/szt.):</td><td>$paczek</td></tr>
<tr><td>Paczek z czekolada (1.29PLN/szt.):</td><td>$paczek_czek</td></tr>
<tr><td>SUMA</td><td>$suma</td></tr></tbody>
</table>


END;
?>
</body>
</HTML>