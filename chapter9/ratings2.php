<html>
<head>
        <title>Writing to File</title>
</head>

<body>
    <p>
        <?php
            $fileVar = fopen("/afs/umbc.edu/users/k/y/kyongk1/pub/php-files/writeRating.txt", "a+")
            or die ("Error - could not open file");
            if(!(file_exists("/afs/umbc.edu/users/k/y/kyongk1/pub/php-files/writeRating.txt"))) 
	        print ("The file names.txt does not exist");
        ?>

        <h1> Writing user's rating to file </h1>

        <?php
            if(flock($fileVar, LOCK_EX))
            {
                print("<p>Lock Succesful</p>");
            }
            else{
                print("<p>Lock Unsuccesful</p>");
            }

            $content = $_POST["rating"];
            echo "Rating is: $content<br/>";

            fwrite($fileVar, "$content\n");

            flock($fileVar, LOCK_UN);

            fclose($fileVar);
            
            // Taking average of file
            $file_content = file("/afs/umbc.edu/users/k/y/kyongk1/pub/php-files/writeRating.txt");

            $curr_sum = 0;
            $count = 0;
            $average = 0;
            
            // calculating average
            foreach ($file_content as $line) {
                $curr_sum = $curr_sum + $line;
                $count++;
            }
            $average = $curr_sum/$count;
        ?>

        </body>
        <h1>Your Rating</h1>
        <p>
            Your average rating for the movie is 
            <?php echo round($average, 2) ?>.
        </p>
    </p>
</body>
</html