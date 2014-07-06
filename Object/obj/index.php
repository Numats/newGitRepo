<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>OOP</title>
	<meta name="generator" content="BBEdit 10.1" />
</head>
<body>

<?php


	//include 'construct_destruct.php';//////////////////
	//	$obj = new Colin('Badi');

	

	include 'people.php';//////////////////////////////
		$person1 = new People();
			echo $person1->name;// nothing happens
		$person1->setName(' Colin  ');
			echo $person1->name;


	include 'tuna.php';////////////////////////////////
		$myObject = new Tuna();
			echo $myObject->fish1 . "  ";
			echo $myObject->sayMyName() . "  ";

	
	include 'get_set.php';/////////////////////////////
		$cowObj = new getSet();
			echo $cowObj->getCowsName();// nothing happens
		$cowObj->setCowsName('Conner  ');
			echo $cowObj->getCowsName();
		$cowObj->setCowsName('Jon Bones');
			echo $cowObj->getCowsName();


	include 'person.php';//////////////////////////////////
		$colin = new Person();
		$colin->setAge(37);
			echo $colin->getAge().'<br />';
		//$colin->setColor('blue');


	//copy object to another object using keyword 'clone'
		/*$kolinio = clone $colin;
		$kolinio->setColor('red');
			echo $colin->getColor().'<br />';
			echo $kolinio->getAge().'<br />';
			echo $kolinio->getColor().'<br />';*/

?>

</body>
</html>
