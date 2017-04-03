<!DOCTYPE html>
<html>
    <head>
        <title>Guest Information</title>
    </head>
    <body>
    <?php
        $db = mysqli_connect("studentdb-maria.gl.umbc.edu", "kyongk1", "kyongk1", "kyongk1");
        if (mysqli_connect_errno())
		    exit("Error - could not connect to MySQL");
        $username = $_POST['name'];
        $comment = $_POST['comments'];
        $phoneNumber = $_POST['phone'];
        echo "Thank you $username for your comment $comment";
    ?>

    <?php
        $constructed_query = "INSERT INTO guestbook (username, comment_text, phone_number)
        VALUES ('$username', '$comment', '$phoneNumber')";

        $result = mysqli_query($db, $constructed_query);

        if(! $result){
		print("Error - query could not be executed");
		$error = mysqli_error();
		print "<p> . $error . </p>";
		exit;
	    }
    ?>
        Thank you for your comment.
	    <br />
    </body>
</html>