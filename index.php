<?php


echo "Select Operation: ";
$line = readline();
if ($line=="M"){
        echo "Enter Multiplicand: ";
        $line2 = readline();
        echo "Enter Multiplier: ";
        $line3 = readline();
        echo "Product: "; echo  $line2 * $line3;
}
else if ($line=="D"){
        echo "Enter Dividend: ";
        $line2 = readline();
        echo "Enter Divisor: ";
        $line3 = readline();
        echo "Qoutient: "; echo  $line2 / $line3;
}
else if ($line=="S"){
        echo "Enter Minuend: ";
        $line2 = readline();
        echo "Enter Subtrahend: ";
        $line3 = readline();
        echo "Difference: "; echo  $line2 - $line3;
}
else if ($line=="A"){
        echo "Enter Augend: ";
        $line2 = readline();
        echo "Enter Addend: ";
        $line3 = readline();
        echo "Sum: "; echo  $line2 + $line3;
}
else {
        echo "Invalid Input!";
}
 
?>