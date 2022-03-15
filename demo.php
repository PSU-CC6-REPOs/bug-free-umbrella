<?php

$sentence=array("the","quick","brown","fox","jumps","over","the","lazy","dog");

foreach($sentence as $x)
{
    if($x == 'the'){
        continue;
    }else{
        echo $x.' ';
    }
}

//$sentence='The quick brown fox jumps over the lazy dog';
//echo implode('', array_slice(explode('',$sentence),2,9))."\n";
?>

