<?php 
function calculateGrade($marks) { 
if ($marks >= 90) { 
return "A+"; 
} elseif ($marks >= 80) { 
return "A"; 
} elseif ($marks >= 70) { 
return "B+"; 
} elseif ($marks >= 60) { 
return "B"; 
} elseif ($marks >= 50) { 
return "C"; 
} elseif ($marks >= 40) { 
return "D"; 
} else { 
return "F";  
} 
} 
$marks = 75;  
$grade = calculateGrade($marks); 
echo "Marks: $marks\n"; 
echo "Grade: $grade\n"; 
?>