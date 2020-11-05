<?php namespace Bogdanova;

Class Equation{
	public function solve($a, $b){
			if($a == 0){
                throw new BogdanovaException("Ошибка: уравнения не существует.");
            }
        MyLog::log("Это линейное уравнение");
			return $this->X=array(-($b/$a));
	}
	protected $X;
}
?>