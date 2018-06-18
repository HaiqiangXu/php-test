<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
        <h1><a href="www/biblioteca">Biblioteca</a></h1>
        <h2><a href="www/Library">Biblioteca installer</a></h2>
        <hr/>
        <?php 
        function getBrowser()
        {
            $u_agent = $_SERVER['HTTP_USER_AGENT']; 
            $bname = 'Unknown browser';
            $ub = "Unknown";
            $platform = 'Unknown';
            $version = "";
            
            //First get the platform?
            if (preg_match('/linux/i', $u_agent))
            {
                $platform = 'linux';
            }
            elseif (preg_match('/macintosh|mac os x/i', $u_agent))
            {
                $platform = 'mac';
            }
            elseif (preg_match('/windows|win32/i', $u_agent))
            {
                $platform = 'windows';
            }
            
            // Next get the name of the useragent
            if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
            {
                $bname = 'Internet Explorer';
                $ub = "MSIE";
            }
            elseif(preg_match('/Firefox/i',$u_agent))
            {
                $bname = 'Mozilla Firefox';
                $ub = "Firefox";
            }
            elseif(preg_match('/Chrome/i',$u_agent))
            {
                $bname = 'Google Chrome';
                $ub = "Chrome";
            }
            elseif(preg_match('/Safari/i',$u_agent))
            {
                $bname = 'Apple Safari';
                $ub = "Safari";
            }
            elseif(preg_match('/Opera/i',$u_agent))
            {
                $bname = 'Opera';
                $ub = "Opera";
            }
            
            // finally get the correct version number
            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            
            if (!preg_match_all($pattern, $u_agent, $matches))
            {
                // we have no matching number just continue
            }
            
            // see how many we have
            $i = count($matches['browser']);
            if ($i != 1)
            {
                //we will have two since we are not using 'other' argument yet
                //see if version is before or after the name
                if (strripos($u_agent,"Version") < strripos($u_agent,$ub))
                {
                    $version= $matches['version'][0];
                }
                else
                {
                    $version= $matches['version'][1];
                }
            }
            else
            {
                $version= $matches['version'][0];
            }
            
            // check if we have a number
            if ($version == null || $version == "") { $version = "?"; }
            return array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'   => $pattern
            );
        }
    
        // show browser info
        $ua = getBrowser();
        print_r("Your browser: ".$ua['name']." ".$ua['version']." on ".$ua['platform']." reports: <br >".$ua['userAgent']);
        ?>

        <br/><br/>
        <a href="cheat_sheet.php">Cheat sheet</a>
    </body>
</html>