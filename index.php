<!DOCTYPE html>
<html>
<head>
	<title>Introduction to OOP in PHP</title>
</head>
<body>
<?php
/*
1) Create a new class call it Student.  The Student class should have three properties, studentNum, firstName and lastName, and a single method, getFullName. The getFullName method should return the student's full name. 
a) The following code shows the class being used to create a Student object. Uncomment this code to check your class works.
b) Add some additional code below to create a second student object. 
*/


use OOPPractical\Student;
use OOPPractical\StudentPrinter;
require_once("student.php");
require_once("student-printer.php");
/*
$exampleStudent = new Student();
var_dump($exampleStudent);
$exampleStudent->studentNum="u0123456";
$exampleStudent->firstName="John";
$exampleStudent->lastName="Smith";
var_dump($exampleStudent);
echo "<p>".$exampleStudent->getFullName()."</p>";
*/

/*
2) Modify your Student class to use a constructor function. The code below provides an example of the constructor function being called. Uncomment this to check it works (the code above will now give you errors because it doesn't use the constructor - comment it out again). Again, once this works add some additional code to create a seconds student object
*/

$exampleStudent = new Student("u0123456", "John", "Smith");
echo "<p>".$exampleStudent->getFullName()."</p>";


/*
3) The following code creates several instances of Student and stores them in an array. Uncomment the code and add a foreach loop that will output each student's name in turn. 
*/


$students=[];
$students[]= new Student("u0123456", "John", "Smith");
$students[]= new Student("u0123456", "Ruhksar", "Mirza");
$students[]= new Student("u0123456", "Ania", "Kowalski");



foreach($students as $student){
	echo "<p>".$student->getFullName()."</p>";
}


/*
4) Open up the file StudentPrinter. It has a single method print(). 
a) Write some code below file that will create an instance of StudentPrinter, and call the printStudents() method so that the array of students is displayed.
*/


$studentPrinter = new StudentPrinter();
$studentPrinter->printStudents($students);
$studentPrinter->printStudentsAsList($students);

/*
b) Add an additional method to this class, name it printStudentsAsList(). This methods should output the array of students as an HTML list. Check this works by calling the printStudentsAsList() method.
*/


/*
5) Have a look at the slides for info about access modifiers. Make the properties in the Student class private. 
a) Add setter methods so that values for these properties can be set. If you can get this to work, add some checks to the setter methods to make sure suitable values have been used. To start with, keep it simple, just check for empty strings.  
b) Try adding additional checks for the student number e.g. it must start with a 'u' and be exactly eight characters in length. 
*/

?>
</body>
</html>