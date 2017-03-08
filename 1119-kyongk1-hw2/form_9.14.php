<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Computing Lightbulb Cost</title>
    <link rel="stylesheet" type="text/css" href="hw2.css" />
</head>

<body>
    <p>
        <?php
            $userName = $_POST["user_name"];
            $phoneNumber = $_POST["phone_number"];

            if ((isset($userName) && (!empty($userName))) &&
                (isset($phoneNumber) && (!empty($phoneNumber))))
            {
                    if (preg_match("/^[A-z\s]+$/", $userName) && (preg_match("/^\d{3}-\d{3}-\d{4}$/", $phoneNumber)))
                    {
        ?>
        <p class="endNote">
                        Thank you for entering your name:<strong><?php echo $userName ?></strong><br />
                        and your phone number:<strong><?php echo $phoneNumber ?></strong><br />
        </p>
        <?php
                    } else {
                        echo "Please enter valid username and phone number <br />";
        ?>
        Please <a href="form_9.14.html">go back</a> and re-enter the required fields.
        <?php
                    }
            } else {
                        echo "Please enter valid username and phone number <br />";
        ?>
        Please <a href="form_9.14.html">go back</a> and re-enter the required fields.
        <?php
            }
        ?>
    </p>
</body>

</html>