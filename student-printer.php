<?php
namespace OOPPractical;

class StudentPrinter{
    function printStudents($students)
    {
        foreach($students as $student){
           echo "<p>".$student->getFullName()."</p>";
        }
    }
}