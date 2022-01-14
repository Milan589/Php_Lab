<?php
 
 // $movie=array('Spiderman','X-Man','Avatar','Tenet','Fatman');
 // foreach($movie as $display){
 // 	echo "$display"." ";
 // }

//display associative array of 2nd element
// $fruits=array("apple","mango","banana");
// echo $fruits[1];

//display key and value in array
$student = array("Math" => 80,
                 "English" => 70
                    );
// echo "Math=".$student['Math'];
// echo "English=".$student['English'];
// associative array and display its elements in table

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <table border="1px">
       <tr>
           <td><?php echo "Math=".$student['Math'];?></td>
       </tr> 
       <tr>
           <td><?php echo "English=".$student['English'];?></td>
       </tr> 
   
    </table>

</body>
</html>