<html>

    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="form_proc.css">
    </head>

    <body>
        <p>
        <!-- make sure that user selected something for magazine ordering -->
        <!-- and delivery schedule requested. Empty values are not allowed. -->
            <?php
                $name = $_POST["customer_name"];
                $number = $_POST["customer_number"];
                $address = $_POST["customer_address"];

                if(((isset($_POST["magazine_type"])) && (!empty($_POST["magazine_type"]))) &&
                    ((isset($_POST["delivery_schedule"])) && (!empty($_POST["delivery_schedule"]))))
                    {
                        $type = $_POST["magazine_type"];
                        $delivery = $_POST["delivery_schedule"];
                        if((preg_match("/\d+\s[A-z\s]+/", $address)))
                            {
                                echo "Thanks for your order $name. We will process it soon!";

                                $fileVar = fopen("/afs/umbc.edu/users/k/y/kyongk1/pub/php-files/magazineorders.txt", "a+")
                                or die ("Error - could not open file");
                                if(!(file_exists("/afs/umbc.edu/users/k/y/kyongk1/pub/php-files/magazineorders.txt")))
                                print ("The file names.txt does not exist");

                                flock($fileVar, LOCK_EX);
                                fwrite($fileVar, "$name,$number,$address,$type,$delivery\n*************\n");
                                flock($fileVar, LOCK_UN);
                                fclose($fileVar);
                            } else {
                                echo "Re-enter address. Numbers 
                                followed by one space followed by letters and spaces. <br />";
            ?>
                                <p><a href="order.html">Go back and re-enter info</a></p>
            <?php
                            }
                    } else {
                        echo "Must select a magazine name and a schedule <br />";
            ?>
                        <p><a href="order.html">Go back and re-enter info</a></p>
            <?php
                    }
                    
            ?>
        </p>
    </body>
</html>
<!-- one or more numbers followed by one space character, 
followed by one or more letters or spaces. Therefore, 
an address like ‘1000’ or ‘Hilltop’ is not allowed, but 
an address like ‘1000 Hilltop Circle’ or ‘1000 Hilltop’ is allowed. -->
<!-- "Re-enter address. Numbers followed by one space followed by letters
    and spaces" include a link to go back to order.html -->