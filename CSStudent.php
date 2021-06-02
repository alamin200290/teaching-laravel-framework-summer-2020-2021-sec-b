<?php
	
	include('Student.php');

	class CSStudent extends Student
	{
		
		private $dept;

		function __construct($id, $name, $age, $dept)
		{
			parent::__construct($id, $name, $age);
			$this->dept = $dept;
		}

		function getDept(){
			return $this->dept;
		}

		function setDept($dept){
			$this->dept = $dept;
		}

		function details(){
			return "this is my details: ".$this->dept;
		}
	}

	$cs1 = new CSStudent(12, 'alamin', 11, 'CS');
	echo $cs1->details();
