<?php
require_once __DIR__.'/vendor/autoload.php';
require_once 'UnCalcException.php';

Class UnCalc{
	private $arr;
	public function __construct($ini_file){
		$this->arr=parse_ini_file($ini_file,true);
		//dump($this->arr);
		foreach ($this->arr as $par =>$val){
			//echo '<br>'.$par.' ile:'.count($val);
			$one=false;
			foreach($val as $p =>$v){
				if(!is_numeric($v)){	
					throw new UnCalcException("W pliku <b>$ini_file</b> jest niepoprawny przelicznik dla jednostki <b>[$par] $p : $v</b>");		
				};
				$one=($one||(floatval($v)==1))?true:false;
				//echo "<br>$v";
				$this->arr[$par][$p]=floatval($v);
			}
			if(!$one){
				throw new UnCalcException("W pliku <b>$ini_file</b> brakuje jednostki bazowej (z przelicznikiem 1) dla kategorii <b>[$par]</b>");
			}
		}
		//dump($this->arr);		
	}
	public function show_cat()
	{
		foreach ($this->arr as $par =>$val){
			echo "<br>$par ".count($val).' unit(s)';
		}
	}
	public function array_catgs()
	{
		$r=[];
		foreach ($this->arr as $cat => $unit){
			$r[]=$cat;
		}
		//dump($r);
		return $r;
	}

	public function array_units($cat='length')
	{
		$r=[];
		foreach ($this->arr[$cat] as $name => $v){
			$r[]=$name;
		}
		//dump($r);
		return $r;
	}

}
?>