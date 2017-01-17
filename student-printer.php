<?php
namespace OOPPractical;

class StudentPrinter{
    function printStudents($students)
    {
        foreach($students as $student){
           echo "<p>".$student->getFullName()."</p>";
        }
    }
    function printStudentsAsList($students)
    {
        echo "<ul>";
        foreach($students as $student){
           echo "<li>".$student->getFullName()."</li>";
        }
        echo "</ul>";
    }
}