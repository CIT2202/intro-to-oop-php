<?php
namespace OOPPractical;
use InvalidArgumentException;
class Student{
	private $studentNum;
	private $firstName;
	private $lastName;
	function __construct($studentNum,$firstName,$lastName)
	{
		$this->setStudentNum($studentNum);
	 	$this->setFirstName($firstName);
	 	$this->setLastName($lastName);
	}
	public function setStudentNum($studentNum)
	{
		if($studentNum==="")  {
            throw  new  InvalidArgumentException ( "Student number can't be empty" ) ;
        }
        if($studentNum[0]!=="u")  {
            throw  new  InvalidArgumentException ( "Student number must start with a 'u'" ) ;
        } 
        if(strlen($studentNum)!==8)  {
            throw  new  InvalidArgumentException ( "Student number must be 8 characters in length" ) ;
        } 
		$this->studentNum=$studentNum;
	}
	public function setLastName($lastName)
	{
		if($lastName==="")  {
            throw  new  InvalidArgumentException ( "Last name can't be empty" ) ;
        } 
		$this->lastName=$lastName;
	}
	public function setFirstName($firstName)
	{
		if($firstName==="")  {
            throw  new  InvalidArgumentException ( "First name can't be empty" ) ;
        } 
		$this->firstName=$firstName;
	}
	public function getFullName()
	{
		return $this->firstName." ".$this->lastName;
	}

}