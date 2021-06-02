<?php
	

	/*$student = [12,'alamin', 'alamin@aiub.edu'];
	$student = ['id'=>12,'name'=>'alamin', 'email'=>'alamin@aiub.edu'];

	$students =	[
					[1,'ABC', 'abc@aiub.edu'],
					[2,'XYZ', 'xyz@aiub.edu'],
					[3,'PQR', 'pqr@aiub.edu'],
					[4,'alamin', 'alamin@aiub.edu']
				];
	echo $students[3][2];

	$students =	[
					['id'=>1,'name'=>'abc', 'email'=>'abc@aiub.edu'],
					['id'=>2,'name'=>'xyz', 'email'=>'xyz@aiub.edu'],
					['id'=>3,'name'=>'pqr', 'email'=>'pqr@aiub.edu'],
					['id'=>4,'name'=>'alamin', 'email'=>'alamin@aiub.edu']
				];

	echo $students[3]['email'];

	$students =	[
					's1'=> ['id'=>1,'name'=>'abc', 'email'=>'abc@aiub.edu'],
					's2'=> ['id'=>2,'name'=>'xyz', 'email'=>'xyz@aiub.edu'],
					's3'=> ['id'=>3,'name'=>'pqr', 'email'=>'pqr@aiub.edu'],
					's4'=> ['id'=>4,'name'=>'alamin', 'email'=>'alamin@aiub.edu']
				];

	echo $students['s4']['email'];*/

/*	function sum($a=0, $b=0){
		return $a+$b;
	}

	echo sum(6,8);*/

	class Student {
		public $id = 0;
		protected $name = '';
		private $age = 0;
	
		function __construct($id=0, $name="", $age=0){
			$this->id = $id;
			$this->name = $name;
			$this->age = $age;
		}

		function getName (){
			return $this->name;
		}

		function details(){
			return "this is my details: Name -".$this->name." age-".$this->age;
		}
	}


// $s1 = new Student(12, 'alamin', 50);
// echo $s1->details();