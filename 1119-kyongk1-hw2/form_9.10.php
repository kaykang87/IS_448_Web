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
        $payment = $_POST["paymentMethod"];
        $total = 0;
        $afterTax = 0;
        $tax = 1.062;
        // if-else statements to set price based on options selected
        if(isset($_POST["option1"])) {
            $fourRegularPrice = 2.39;
        } else {
            $fourRegularPrice = 0.00;
        } 

        if(isset($_POST["option2"])) {
            $eightRegularPrice = 4.29;
        } else {
            $eightRegularPrice = 0.00;
        }

        if(isset($_POST["option3"])) {
            $fourLongPrice = 3.95;
        } else {
            $fourLongPrice = 0.00;
        } 

        if(isset($_POST["option4"])) {
            $eightLongPrice = 7.49;
        } else {
            $eightLongPrice = 0.00;
        }

        // Calculate Total before and after tax
        $total = $fourRegularPrice + $eightRegularPrice + $fourLongPrice + $eightLongPrice;
        $afterTax = $total * $tax;

        if (isset($userName) && (!empty($userName))) {
            if (preg_match("/^[A-z\s]+$/", $userName)) {
    ?>
    <!-- HTML Table of Order Info -->
    <table>
        <caption>Order Information</caption>
        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>4 Regular Bulb</td>
            <td><?php echo "\$$fourRegularPrice" ?></td>
        </tr>
        <tr>
            <td>8 Regular Bulb</td>
            <td><?php echo "\$$eightRegularPrice" ?></td>
        </tr>
        <tr>
            <td>4 Long-Life Bulb</td>
            <td><?php echo "\$$fourLongPrice" ?></td>
        </tr>
        <tr>
            <td>8 Long-Life Bulb</td>
            <td><?php echo "\$$eightLongPrice" ?></td>
        </tr>
    </table>
    <p></p>
    <!-- HTML Table of Order Info -->
    <table>
        <tr>
            <th>Subtotal</th>
            <td><?php echo "\$$total" ?></td>
        </tr>
        <tr>
            <th>After-Tax</th>
            <td><?php echo "\$".round($afterTax, 2) ?></td>
        </tr>
    </table>
    <p class="endNote">
    Thank you for your order <strong><?php echo $userName ?></strong>.<br />
    Your order has been processed with your chosen payment method of 
    <strong><?php echo "$payment" ?></strong>.
    </p>
    <?php
            } else {
            echo "Please re-enter your username with alphabetical characters only. <br />";
    ?>
    Please <a href="form_9.9.html">go back</a> and re-enter the required fields
    <?php
        }
    } else { 
        echo "Please enter your username <br />";
    ?>
    Please <a href="form_9.9.html">go back</a> and re-enter the required fields
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