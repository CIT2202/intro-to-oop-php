<!DOCTYPE html>
<html>
<head>
	<title>Introduction to OOP in PHP</title>
</head>
<body>
<?php
class StudentPrinter{
    static function printStudents($students)
    {
        foreach($students as $student){
           echo "<p>{$student->getFullName()}</p>";
        }
    }
    static function printStudentsAsList($students)
    {
        echo "<ul>";
        foreach($students as $student){
           echo "<li>{$student->getFullName()}</li>";
        }
        echo "</ul>";
    }
}

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
		return "{$this->firstName}{$this->lastName}";
	}
}

// $exampleStudent = new Student();
// $exampleStudent->studentNum="u0123456";
// $exampleStudent->firstName="John";
// $exampleStudent->lastName="Smith";
// var_dump($exampleStudent);
// echo $exampleStudent->getFullName();

/*
1) The code above declares a simple Student class. It then creates a Student object and dumps the details of the object. 
a) Open this in a browser to check it works
b) Add an additional line of code that will call the getFullname method. 
c) Add some additional to create a second student object. Use var_dump() to check this also works
*/


/*
2) Modify your Student class to use a constructor function. The code below provides an example of the constructor function being called. Uncomment this to check it works (the code from Q1 above will now give you errors because it doesn't use the constructor - comment it out ). Again, once this works add some additional code to create a seconds student object
*/


// $exampleStudent = new Student("u0123456", "John", "Smith");
// echo "<p>{$exampleStudent->getFullName()}</p>";



/*
3) The following code creates several instances of Student and stores them in an array. Uncomment the code and add a foreach loop that will output each student's name in turn. 
*/


// $students=[];
// $students[]= new Student("u0123456", "John", "Smith");
// $students[]= new Student("u0123456", "Ruhksar", "Mirza");
// $students[]= new Student("u0123456", "Ania", "Kowalski");
	
// foreach($students as $student){
//   echo "<p>{$student->getFullName()}</p>";
// }
	
/*
4) Uncomment the class StudentPrinter. It has a single method printStudents(). 
a) Write some code that will call the printStudents() method so that the names of all students are displayed (note printStudents is a static method). Once this works you can delete the foreach loop you added in (Q3).
b) Add an additional method to the StudentPrinter class, name it printStudentsAsList(). This method should output the array of students as an HTML list. Check this works by calling the printStudentsAsList() method.
*/
	
//StudentPrinter::printStudents($students);
	
/*
5) Have a look at the slides for info about access modifiers. Make the properties in the Student class private. 
a) Add setter methods so that values for these properties can be set. If you can get this to work, add some checks to the setter methods to make sure suitable values have been used. To start with, keep it simple, just check for empty strings.  
b) Try adding additional checks for the student number e.g. it must start with a 'u' and be exactly eight characters in length. 
*/
	
//StudentPrinter::printStudentsAsList($students);

//testing getters and setters

// $student = new Student("u0123456", "John", "Smith"); //should work ok
// $student = new Student("0123456", "John", "Smith"); //should give an error (no u in the student number)
// $student = new Student("u012345", "John", "Smith"); //should give an error (student number not longe enough)
// $student = new Student("u0123456", "", "Smith"); //should given an error (empty first name)
// $student = new Student("u0123456", "John", ""); //should given an error (empty kast name)

?>
</body>
</html>
