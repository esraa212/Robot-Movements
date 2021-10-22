<?php
// final position of robot after
// given instruction 
 
// function to find final position of robot after the  given instruction 
function finalPosition($move)
{
    $movement_length = strlen($move);
    $countUp = 0;
    $countDown = 0;
    $countLeft = 0;
    $countRight = 0;
 
    // traverse the instruction
    // string 'move'
    for ($i = 0; $i < $movement_length; $i++) {
 
        // for each movement increment its
        // respective counter
        if ($move[$i] == 'F')
            $countUp++;
        else if ($move[$i] == 'B')
            $countDown++;
        else if ($move[$i] == 'L')
            $countLeft++;
        else if ($move[$i] == 'R')
            $countRight++;
    }
 
    // required final position of robot
    echo "Final Position: ("
        . ($countRight - $countLeft)
        . ", " , ($countUp - $countDown)
        . ")" ."\n";
}
    // given instrucrion set
    $move = "FBBLLRFFFBFFRFBBFFLLBRRRR";
    finalPosition($move);
     
?>