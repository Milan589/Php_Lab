<?php
    // PHP Code to implement join function
      
    $InputArray = array('Hello','every','One');
      
    // Join without separator
   echo(implode($InputArray))."<br>";
      

    // Join with separator
    echo(implode("-",$InputArray));
?>