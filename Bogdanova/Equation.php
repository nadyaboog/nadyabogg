<?php namespace Bogdanova;

Class Equation{
	public function solve($a, $b){
			if($a == 0){
				return null;
            }
			return $this->X=array(-($b/$a));
	}
	protected $X;
}
?>