<?php


interface game {

public function attack();
public function blod();	
	
}


class Fire implements game {
	public function attack(){
	
    Echo "Fire Attack";	
		
		
		
		
	}
	
	public function blod(){
		
		echo "2000";
	}
	
}


class Magic implements game{

public function attack(){

echo "Magic attack";

}
public function blod(){
		
		echo "1000";
	}


}


class GameAttack{


public function getAttack($name){

if($name == null){
	return null;
}

if($name == "magic"){
	
	return new Magic();
}else if($name == "fire"){
	
	return new Fire();
}




}	
	
	
}

$ob = new GameAttack();

$ob->getAttack("magic")->attack();
$ob->getAttack("magic")->blod();














?>