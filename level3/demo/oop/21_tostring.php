<?php 
     class MyClass {
         function __toString() { 
             return "������ ����� __toString()";
         }
     }
     $obj = new MyClass; 
     echo $obj; // ������� "������ ����� __toString()"
?>