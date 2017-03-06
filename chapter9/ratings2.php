<html>
<head>
        <title>Writing to File</title>
</head>

<body>
    <p>
        <?php
            $fileVar = fopen("/afs/umbc.edu/users/k/y/kyongk1/pub/php-files/writeRating.txt", "a+")
            or die ("Error - could not open file");
            if(!(file_exists("/afs/umbc.edu/users/s/a/sampath/pub/php-files/writeRating.txt"))) 
	        print ("The file names.txt does not exist");
        ?>

        <h3> Writing user's rating to file </h3>

        <?php
            if(flock($filevar, LOCK_EX))
            {
                print("<p>Lock Succesful</p>");
            }
            else{
                print("<p>Lock Unsuccesful</p>");
            }

            $content = $_POST["rating"];
            echo "Rating is: $content<br/>";

            fwrite($filevar, "$content\n");

            flock($filevar, LOCK_UN);

            fclose($filevar);
        ?>
    </p>
</body>
</html>