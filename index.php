<?php 

class Payroll {

	private string $firstname = "kurt";
	private string $lastname = "allyson";

	private float $tax = 80;
	private float $salary = 500;



	public function computeFinalGrades() {
		$ave = $this->tax + $this->salary;
		return $ave / 3;
	}


	public function getCompleteName() : string {
		return $this->lastname." , " .$this->firstname;
	}

	public function displayGrade() : string {
		return number_format($this->computeFinalGrades(),2);
	}




}



$Payroll = new Payroll();

echo "Student Name: ". $Payroll->getCompleteName() . "<br/r";
echo "Final Grade: ".  $Payroll->computeFinalGrades();



?>