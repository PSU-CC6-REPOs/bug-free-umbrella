<?php

$sentence='The quick brown fox jumps over the lazy dog';
echo implode('', array_slice(explode('',$sentence),2,9))."\n";
?>