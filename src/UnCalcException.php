<?php

class UnCalcException extends Exception
{
	//echo this->GetMessage();
	public function MyGetMessage(){
		return '<p style="color:red;"><b>BŁĄD! </b>'.$this->message.'<p>';
	}
}
?>