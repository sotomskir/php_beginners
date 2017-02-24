<?php
session_start();

require_once __DIR__.'/vendor/autoload.php';
require_once 'UnCalc.php';
require_once 'UnCalcException.php';

$kategoria='';
$unit1='';
$unit2='';
$wartosc=0;
$wynik=0;

try {
	$c=new UnCalc('units.ini');
} catch (UnCalcException $e){
	echo '<br>'.$e->MyGetMessage();
	exit();
} 

function make_select($name, $values, $selected='') {
$output='<SELECT name="'.$name.'">';
foreach($values as $val){
	$output.="<option";
	if($val==$selected){
		$output.=" selected";
	}
	$output.=" value=\"";
	$output.=$val;
	$output.="\">";
	$output.=$val."</option>";
};
$output.="</select>";
return $output;
};

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	//dump($_POST);
	if (isset($_POST["kategoria"])) {
		$_SESSION['Kategoria']=$_POST["kategoria"];
	}
	$kategoria=$_SESSION['Kategoria'];

	if (isset($_POST["unit1"])) {
		$_SESSION['Unit1']=$_POST["unit1"];
		$unit1=$_SESSION['Unit1'];
	}
	if (isset($_POST["unit2"])) {
		$_SESSION['Unit2']=$_POST["unit2"];
		$unit2=$_SESSION['Unit2'];
	}
	if (isset($_POST["wartosc"])) { 
		$_SESSION['Wartosc']=$_POST["wartosc"];
		$wartosc=$_SESSION['Wartosc'];
		$wynik=$c->calc($kategoria,$wartosc,$unit1,$unit2);
	}
	//dump($_SESSION);
}else{
	// wartości domyślne
	$_SESSION['Kategoria'] = 'length';
	$_SESSION['Unit1'] = 'm';
	$_SESSION['Unit2'] = 'm';
	$_SESSION['Wartosc'] = 0;
	
	$kategoria=$_SESSION['Kategoria'];
	$unit1=$_SESSION['Unit1'];
	$unit2=$_SESSION['Unit2'];
	$wartosc=$_SESSION['Wartosc'];
}
//dump($_POST);
//dump($_SESSION);
//dump($kategoria);
?>
<form method="post" action="index.php">
	<?php 
		echo make_select('kategoria',$c->array_catgs(),$kategoria);
	?>
    <input type="submit" value="Wybierz"/>
</form>
<br>

<form method="post" action="index.php">
    <input type="text" name="wartosc" placeholder="liczba"  value=<?php echo "\"".$wartosc."\""?>/>

	<?php 
		echo make_select('unit1',$c->array_units($kategoria),$unit1);
		echo "<br>";
	?>
    <input type="text" name="Wynik" placeholder="wynik" disabled value=<?php echo "\"".$wynik."\""?>/>

	<?php 
		echo make_select('unit2',$c->array_units($kategoria),$unit2);
		echo "<br>";
	?>
    <input type="submit" value="Przelicz"/>
</form>
