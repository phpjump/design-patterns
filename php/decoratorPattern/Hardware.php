<?php  namespace php\decoratorPattern;

abstract class Hardware {
 	protected $description;

 	public function  getDescription(){
 	 
 		return $this->description;
 	}
 	
 	public abstract function cost();
}
