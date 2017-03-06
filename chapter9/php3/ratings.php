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

        if ((isset($movieName) && (!empty($movieName))) &&
            (isset($userName) && (!empty($userName))))
        {
            if (preg_match("/^[A-z\s]+$/", $userName)){
                echo "Valid User Name: $userName <br />";
    ?>

    Thank you for the rating for the movie
    <strong><?php echo $movieName ?></strong> of 
    <strong> "<?php echo $movieRating ?>" </strong>

    <?php
            } 
            else {
                echo "Invalid User Name <br />";
    ?>

    Please <a href="ratings_regexp.html">go back</a> and enter the required fields

    <?php
            }
        }
        else {
            echo "You haven't entered the required informations <br />";
    ?>

    Please <a href="ratings_regexp.html">go back</a> and enter the required fields

    <?php 
		}
	?>

    </p>
</body>

</html>