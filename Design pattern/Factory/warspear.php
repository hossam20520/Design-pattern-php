<?php
interface char{

public function Skills();
public function Attack();
public function Defance();
public function Energy();	
	
}

class Blade_Dancer implements char{

public function Skills(){

echo "Flash Strike , aggression , Parray , Sap , Hamstring";

}

public function Attack(){
	
	echo "3500/5000";
	}
public function Defance(){
	
echo "4000/5000";	
}

public function Energy(){
echo "1000/5000";
}	
	
}

class Ranger implements char{
	
	public function Skills(){

echo "Power shot , scatter shot , Evasion , Ranger Blessing , Beast Trap";

}

public function Attack(){
	
	echo "500/5000";
	}
public function Defance(){
	
echo "2000/5000";	
}

public function Energy(){
echo "1000/5000";
}
	
	
}



class Druid implements char{
	
	public function Skills(){

echo "Lighting bolt , healing now , barkskin , Entangling Roots , insect Swarm";

}

public function Attack(){
	
	echo "2500/5000";
	}
public function Defance(){
	
echo "2000/5000";	
}

public function Energy(){
echo "4000/5000";
}
	
	
}


class charFactory {
	
	public function get_char($name){
	if($name == null ) {
		return null;
		
	}
	
if($name == "Blade_Dancer"){

return new Blade_Dancer();

}else if ($name == "Ranger"){
	
	return new Ranger();
	
}else if ($name == "Druid"){
	
	
	return new Druid();
	
}
		
	}
	
}


$obj = new charFactory();
echo "Skills: ";
$obj->get_char("Blade_Dancer")->Skills();
echo "<br>";
echo "defance: ";
$obj->get_char("Blade_Dancer")->Defance();
echo "<br>";
echo "Energy: ";
$obj->get_char("Blade_Dancer")->Energy();
echo "<br>";
echo "Attack: ";
$obj->get_char("Blade_Dancer")->Attack();
echo "<hr>";

echo "Skills: ";
$obj->get_char("Ranger")->Skills();
echo "<br>";
echo "defance: ";
$obj->get_char("Ranger")->Defance();
echo "<br>";
echo "Energy: ";
$obj->get_char("Ranger")->Energy();
echo "<br>";
echo "Attack: ";
$obj->get_char("Ranger")->Attack();
echo "<hr>";

echo "Skills: ";
$obj->get_char("Druid")->Skills();
echo "<br>";
echo "defance: ";
$obj->get_char("Druid")->Defance();
echo "<br>";
echo "Energy: ";
$obj->get_char("Druid")->Energy();
echo "<br>";
echo "Attack: ";
$obj->get_char("Druid")->Attack();
echo "<hr>";












?>