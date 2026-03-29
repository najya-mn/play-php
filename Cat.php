<?php
	class Cat{
	  //constructor for Cat objects
	  public function __construct(public string $name, public int $age){}
    
    //printout method
	  public function toString(){
	    echo "Name: $this->name \nAge: $this->age \n\n";
	  }
	}
	
	//creating Cat objects
	$cat1 = new Cat("Kiwiko", 5);
	$cat2 = new Cat("Honey Squash", 5);
	$cat3 = new Cat("Chang Goku", 8);
	$cat4 = new Cat("Freja", 4);
	
	// adding Cat objects to catArr array
	$catArr = array($cat1, $cat2, $cat3, $cat4);
	
	for ($i = 0; $i < sizeof($catArr); $i++){
	  echo $catArr[$i]->toString();
	}
	
	//counting cats
	echo "Amount of cats: " . count($catArr);
	
	//--------------------------------------

/*
Things to note:
- sizeof() or count() to get array size
- make sure to always end on a semicolon (;)
- accessing properties/methods is such a pain, why not just use a . rather than -> ? that's like two extra steps 
*/
?>

