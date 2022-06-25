<html>
    <head>
    </head>
    <body>
        <?<php>

        $host = "localhost";
        $username = "valval";
        $user_pass = "Vvardan1";
        $database_in_use = "poolReservations"

        $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
    
        echo $mysqli->host_info . "\n";
        
        </php>
    </body>
</html>