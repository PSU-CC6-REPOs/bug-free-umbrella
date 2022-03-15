<html>
    <head><title>MEMBER 1</title></head>
    <body>
        <?php
        function number($x){
            if ($x > 0)
            {$message = "The number {$x} is positive <br>";}
            elseif ($x < 0)
            {$message = "The number {$x} is negative";}
            echo $message. "\n";
        }
        
        number(25);
        number(37);
        ?>
    </body>
</html>