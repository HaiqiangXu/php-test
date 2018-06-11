<html>
    <head>
        <title>Cheat sheet</title>
    </head>

    <body>
        <div class="variables">
        <?php
            $num = 5; $double = 2.1; $bool = true; $str = "Hello 1 world";
            
            echo 'Number:'.$num;
            echo '<br/>';
            echo 'Double:'.$double;
            echo '<br/>';
            echo 'Boolean:'.$bool;
            echo '<br/>';
            echo 'String:'.$str.' with "length" '.strlen($str)." and '1' is in pos ".strpos($str, '1');
            echo '<hr/>';
        ?>
        </div>

        <div class="logic">
        <?php
            $a = 13; $b = 15;
            if ($a == 13 and $b == 14)
                echo 'a is 13 and b is 14';
            else if ($a == 13 && $b == 15)
                echo 'a is 13 && b is 14';
            else
                echo 'a is not 13 or b is not 14';
            echo '<br/>';
            
            if ($a == 13 || $b == 115)
                echo 'a is 13 or b is 14';
            else
                echo 'a is not 13 or b is not 14';
            echo '<br/>';

            $d = date("D");
            switch ($d)
            {
                case "Mon":
                    echo "Today is Monday";
                    break;
                
                case "Tue":
                    echo "Today is Tuesday";
                    break;
                
                case "Wed":
                    echo "Today is Wednesday";
                    break;
                
                case "Thu":
                    echo "Today is Thursday";
                    break;
                
                case "Fri":
                    echo "Today is Friday";
                    break;
                
                case "Sat":
                    echo "Today is Saturday";
                    break;
                
                case "Sun":
                    echo "Today is Sunday";
                    break;
                
                default:
                    echo "Wonder which day is this ?";
            }

            echo '<hr/>';
        ?>

        <div class="loops">
        <?php
            $array = array( 10, 200, 303, 444, 5555);
            foreach( $array as $index => $value )
            {
                echo "Index $index has value $value <br />";
            }
            $array[6] = 666;
            echo "Index 5 has value $array[5] and last index 6 has value $array[6] <br />";
            echo '<br/>';
            
            $i = 0;
            do
            {
                $i++;
                if( $i == 3 )
                    continue;                       //don't process third item
                echo ("Loop index at $i <br/>");    //use "" for strings so variables can show its values
                if( $i == 8 )                       //exit loop when arrive to 8th item
                    break;
            } while( $i < 10 );                     //when using '' for strings is useful for literals as this way variables values is not shown
            echo '<br/>';
            
            //hash arrays
            $hash = array("allen" => 21, "paul" => 25, "alice" => 33);
            foreach( $hash as $key => $value )
            {
                echo "Key $key has value $value <br />";
            }
            echo "Allen is ".$hash["allen"]." years old <br />";

            //multi array
            $multi = array(
                "Allen" => array("age" => 21, "city" => "London"),
                "Paul" => array("age" => 25, "city" => "New York"),
                "Alice" => array("age" => 33, "city" => "Sydney")
            );
            foreach( $multi as $key => $value )
            {
                echo "$key has ".$value['age']." years old and lives in ".$value['city']." <br />";
            }

            echo '<hr/>';
        ?>
        </div>

        <div class="magic">
        <?php
            echo 'Magical line:'.__LINE__;
            echo '<br/>';
            echo 'Magical file:'.__FILE__;
            echo '<br/>';
            echo 'Magical function:'.__FUNCTION__;
            echo '<br/>';
            echo 'Magical class:'.__CLASS__;
            echo '<br/>';
            echo 'Magical method:'.__METHOD__;
            echo '<br/>';
            echo 'Magical namespace:'.__NAMESPACE__;
            echo '<hr/>';
        ?>
        </div>
    </body>
</html>