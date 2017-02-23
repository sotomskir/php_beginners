<?php
require_once __DIR__.'/vendor/autoload.php';
require_once 'UnCalc.php';
require_once 'UnCalcException.php';

$kategoria='';
$unit1='';
$unit2='';

try {
	$c=new UnCalc('units.ini');
} catch (UnCalcException $e){
	echo '<br>'.$e->MyGetMessage();
	exit();
} 
echo 'Jednostki wczytane.';
//$c->show_cat();


function make_select($name, $values, $selected='') {
$output='<SELECT name="'.$name.'">';
/*
	$output.="<option value=\"";
	$output.="wybierz";
	$output.="\">";
	$output.="wybierz</option>";
*/
//dump($selected);
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
if($_SERVER['REQUEST_METHOD'] == 'GET') {
	//dump($_GET);
	if (isset($_GET['Kategoria'])){
		$kategoria=$_GET['Kategoria'];
	}else{$kategoria='length';}
	if (isset($_GET['unit1'])){
		$unit1=$_GET['unit1'];
	}else{$unit1='m';}
	if (isset($_GET['unit2'])){
		$unit2=$_GET['unit2'];
	}else{$unit2='m';}

	//dump($kategoria);
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	//dump($_SERVER);
	//dump($_POST);
	//dump($kategoria);
	if (isset($_POST["kategoria"])) {
		$kategoria=$_POST["kategoria"];
	}
}
?>
<form method="post" action="index.php">
	<?php 
		echo make_select('kategoria',$c->array_catgs(),$kategoria);
	?>
    <input type="submit" value="Wybierz"/>
</form>
<br>
<?php
//$tmp="<form method=\"get\" action=\"index.php?kategoria=".$kategoria."\">";
//echo $tmp;
?>
<form method="get" action="index.php">
    <input type="hidden" name="Kategoria" value=<?php echo "\"".$kategoria."\""?>/><br>
    <input type="text" name="Wartosc" placeholder="liczba"/>
	<?php 
		//dump($kategoria);
		echo make_select('unit1',$c->array_units($kategoria),$unit1);
		echo "<br>";
	?>
    <input type="text" name="Wynik" placeholder="wynik" disabled value=""/>
	<?php 
		echo make_select('unit2',$c->array_units($kategoria),$unit2);
		echo "<br>";
	?>
    <input type="submit" value="Przelicz"/>
</form>
