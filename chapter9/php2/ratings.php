<html>
    <head>
        <title>Movie Rating Response</title>
        <link rel="stylesheet" type="text/css" href="form_proc.css"/>
    </head>
    <body>
    <p>
    <?php

        $movieName = $_POST["movie_name"];
        $movieRating = $_POST["rating"];
        $userName = $_POST["user_name"];

        if ((isset($movieName) && (!empty($movieName))))
        {
            if (preg_match("/^[A-Za-z]$/")){
                echo "Valid User Name <br />"
            } 
            else {
                echo "Invalid User Name <br />"
            }
        }
        else {
            echo "You haven't entered the required informations";
        }
        ?>

        Thank you for the rating for the movie
        <strong><?php echo $movieName ?></strong> of 
        <strong> "<?php echo $movieRating ?>" </strong>
        </p>
    </body>
</html>