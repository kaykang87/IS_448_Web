<html>

<head>
    <title>Computing Lightbulb Cost</title>
    <link rel="stylesheet" type="text/css" href="hw2.css" />
</head>

<body>
    <p>
    
    <?php
        $userName = $_POST["user_name"];
        $fourRegular = $_POST["option1"];
        $eightRegular = $_POST["option2"];
        $fourLong = $_POST["option3"];
        $eightLong = $_POST["option4"];
        $payment = $_POST["paymentMethod"];
        $total = 0;
        $tax = 1.062;
            
    if ((isset($userName) && (!empty($userName))))
        {
            if (preg_match("/^[A-z\s]+$/", $userName))
            {
                if(!empty($lightbulbType_list)) 
                {
                    if(!empty($payment)) 
                    {
                        echo "Thank you for your submission $userName<br />";
                        echo "Your payment method: $payment<br />";
                        foreach ($lightbulbType_list as $lightBulb){
                            $total += ($lightBulb * $tax);
                            echo "Prices of selected lightbulbs: \$$lightBulb <br />";
                        }
                        echo "total price is \$".round($total, 2)."<br />";
                    }
                } else {
                    echo "Please make your lightbulb selection <br />";
    ?>
    Please <a href="form_9.9.html">go back</a> and enter the required fields
    <?php
                }
            } else {
                echo "Only alphabetical characters allowed <br />";
    ?>
    Please <a href="form_9.9.html">go back</a> and enter the required fields
    <?php
            }
        } else {
            echo "Please check your inputs and selections <br />";
    ?>
    Please <a href="form_9.9.html">go back</a> and enter the required fields
    <?php
        }
    ?>
    </p>
</body>

</html>


<!-- Write a PHP script that computes the total 
cost of the ordered light bulbs from Exercise 9.9 
after adding 6.2 percent sales tax. The program must 
inform the buyer of exactly what was ordered, in a table. -->