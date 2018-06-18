<html>
    <head>
        <title>Cheat sheet</title>
    </head>

    <body>
        <div class="variables">
        <?php
            $num = 5; $double = 2.1; $bool = true; $str = "Hello 1 world";
            $a_str = &$str;     // reference to a_str
            $an_int = 0xf;      // an integer in hex
     
            echo '$bool is type '.gettype($bool).'<br/>'; // prints out:  boolean
            echo 'Number:'.$num;
            echo '<br/>';
            echo 'Double:'.$double;
            echo '<br/>';
            echo 'Boolean:'.$bool;
            echo '<br/>';
            echo 'String:'.$str.' with "length" '.strlen($str)." and '1' is in pos ".strpos($str, '1');
            echo '<hr/>';

            if (is_int($an_int))
            {
                $an_int += 4;
                echo var_dump($an_int) . "<br/>";           //structured info of variable. this case show 'int(19)' -> type('value')
                echo "Max int value is " . PHP_INT_MAX . "<br/>" . "Character: " . $a_str[0];
                echo "<br/>\$an_int==$an_int;" . "<br/>";   //backslash is escape character
            }
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
            $multi2 = array("Sarah" => array("age" => 27, "city" => "Toronto"));
            $multi += $multi2;      //fuse both arrays
            unset($multi['Paul']);  //deletes defined item by name
			unset($multi2);         //deletes all items of the array
            foreach( $multi as $key => $value )
            {
                echo "$key has ".$value['age']." years old and lives in ".$value['city']." <br />";
            }

            $arr = array(1, 22, 333);
            unset($arr[0]);         //deletes defined item by index
            foreach( $arr as $index => $value )
            {
                echo "Value $index: $value <br />";
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
            echo '<br/>';

            // echo $_SERVER['HTTP_HOST'] . '<br/>';
			// echo $_SERVER['HTTP_USER_AGENT'] . '<br/>';
			// echo $_SERVER['HTTP_ACCEPT'] . '<br/>';
			// echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '<br/>';
			// echo $_SERVER['HTTP_ACCEPT_ENCODING'] . '<br/>';
			// echo $_SERVER['HTTP_ACCEPT_CHARSET'] . '<br/>';
			// echo $_SERVER['HTTP_KEEP_ALIVE'] . '<br/>';
			// echo $_SERVER['HTTP_CONNECTION'] . '<br/>';
			// echo $_SERVER['HTTP_REFERER'] . '<br/>';
			// echo $_SERVER['HTTP_CACHE_CONTROL'] . '<br/>';
			// echo $_SERVER['PATH'] . '<br/>';
			// echo 'System Root: ' . $_SERVER['SystemRoot'] . '<br/>';
			// echo $_SERVER['COMSPEC'] . '<br/>';
			// echo $_SERVER['PATHEXT'] . '<br/>';
			// echo $_SERVER['WINDIR'] . '<br/>';
			echo 'Server signature: '.$_SERVER['SERVER_SIGNATURE'] . '<br/>';
			// echo 'Installed server software: '.$_SERVER['SERVER_SOFTWARE'] . '<br/>';
			// echo $_SERVER['SERVER_NAME'] . '<br/>';
			// echo $_SERVER['SERVER_ADDR'] . '<br/>';
			// echo $_SERVER['SERVER_PORT'] . '<br/>';
			// echo $_SERVER['REMOTE_ADDR'] . '<br/>';
			// echo $_SERVER['DOCUMENT_ROOT'] . '<br/>';
			// echo $_SERVER['SERVER_ADMIN'] . '<br/>';
			// echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
			// echo $_SERVER['REMOTE_PORT'] . '<br/>';
			// echo $_SERVER['GATEWAY_INTERFACE'] . '<br/>';
			echo 'Server protocol:'.$_SERVER['SERVER_PROTOCOL'] . '<br/>';
			// echo $_SERVER['REQUEST_METHOD'] . '<br/>';
			// echo $_SERVER['QUERY_STRING'] . '<br/>';
			// echo $_SERVER['REQUEST_URI'] . '<br/>';
			// echo $_SERVER['SCRIPT_NAME'] . '<br/>';
			// echo $_SERVER['PHP_SELF'] . '<br/>';
			// echo $_SERVER['REQUEST_TIME'];

			// print_r($GLOBALS);
			// echo $GLOBALS['_POST'] . '<br/>';
			// echo $GLOBALS['_GET'] . '<br/>';
			// echo $GLOBALS['_COOKIE'] . '<br/>';
			// echo $GLOBALS['_FILES'] . '<br/>';
			// echo $GLOBALS['_SERVER'] . '<br/>';		//equivale a $_SERVER
			
			//phpinfo();
			// echo getenv('ALLUSERSPROFILE') . '<br/>';
			// echo getenv('APPDATA') . '<br/>';
			// echo getenv('CommonProgramFiles') . '<br/>';
			// echo getenv('CommonProgramFiles(x86)') . '<br/>';
			// echo getenv('CommonProgramW6432') . '<br/>';
			// echo getenv('COMPUTERNAME') . '<br/>';
			// echo getenv('ComSpec') . '<br/>';
			// echo getenv('DFSTRACINGON') . '<br/>';
			// echo getenv('FP_NO_HOST_CHECK') . '<br/>';
			// echo getenv('LOCALAPPDATA') . '<br/>';
			// echo getenv('NUMBER_OF_PROCESSORS') . '<br/>';
			// echo getenv('OS') . '<br/>';
			// echo getenv('Path') . '<br/>';
			// echo getenv('PATHEXT') . '<br/>';
			// echo getenv('PROCESSOR_ARCHITECTURE') . '<br/>';
			// echo getenv('PROCESSOR_ARCHITEW6432') . '<br/>';
			// echo getenv('PROCESSOR_IDENTIFIER') . '<br/>';
			// echo getenv('PROCESSOR_LEVEL') . '<br/>';
			// echo getenv('PROCESSOR_REVISION') . '<br/>';
			// echo getenv('ProgramData') . '<br/>';
			// echo getenv('ProgramFiles') . '<br/>';
			// echo getenv('ProgramFiles(x86)') . '<br/>';
			// echo getenv('ProgramW6432') . '<br/>';
			// echo getenv('PUBLIC') . '<br/>';
			// echo getenv('SystemDrive') . '<br/>';
			// echo getenv('SystemRoot') . '<br/>';
			// echo getenv('TEMP') . '<br/>';
			// echo getenv('TMP') . '<br/>';
			// echo getenv('TRACE_FORMAT_SEARCH_PATH') . '<br/>';
			// echo getenv('USERDOMAIN') . '<br/>';
			// echo getenv('USERNAME') . '<br/>';
			// echo getenv('USERPROFILE') . '<br/>';
			// echo getenv('VBOX_INSTALL_PATH') . '<br/>';	////SOLO si tiene VirtualBox instalado
			// echo getenv('VS90COMNTOOLS') . '<br/>';
			// echo getenv('windir') . '<br/>';
			// echo getenv('AP_PARENT_PID') . '<br/>';

            echo 'ipconfig information: '.shell_exec('ipconfig /all');
            echo '<br/>';
            // echo 'ping information: '.shell_exec('ping www.google.es');
            echo '<hr/>';
        ?>
        </div>
    </body>
</html>