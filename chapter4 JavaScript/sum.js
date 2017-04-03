    number1 = prompt("Enter the first number");
    number2 = prompt("Enter the second number");
    var number1_int = parseInt(number1);
    var number2_int = parseInt(number2);
    number_product = number1_int * number2_int;
    number_sum = number1_int + number2_int;
    document.write("The product of " + number1 + " and " + number2 +
    " is " + number_product + "<br />");
    document.write("The sum of " + number1 + " and " + number2 +
    " is " + number_sum + "<br />");

    var today = new Date();
    var dateString = today.toLocaleString();
    document.write("Date: " + dateString + "<br />");