<?php

//Jonny Lou Encinas - Collaborator 1
/*Declare a variable named number. Write a statement that tests if the value of the variable number is negative or positive. Display the message “The number [n] is positive” if the number is positive. Display the message “The number [n] is negative”. Where n is the number.*/

$number = 10;
if ($number > 0){
	echo "The number ".$number." is positive";
}else if ($number<0){
    echo "The number ".$number." is negative";
}else {
	echo "The number is Zero";
}


?>