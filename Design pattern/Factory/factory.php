<?php
interface shape {

 public function draw();	
	
}


class Square implements shape{

public function draw(){
	
	echo "Square";
}
	
}

class Circle implements shape {
	
	public function draw(){
		
		echo "Circle";
	}
	
}


class Line implements shape{
	public function draw(){
	 echo "Line";	
	}
	
	
}



class ShapeFactory {
	
public function getShape($name){
if($name == null){
 return null;
	}
	
	if($name == "Circle"){
		return  new Circle();
		
		
	}else if($name == "square"){
		
		return  new Square();
	}else if ($name == "Line"){
		
		return new Line();
		
	}
	
	

} 	
	
}

$ob = new ShapeFactory();
$ob->getShape("Line")->draw();
echo "<br>";
$ob->getShape("square")->draw();
echo "<br>";
$ob->getShape("Circle")->draw();

















?>