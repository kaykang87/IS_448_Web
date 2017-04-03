<html>
    <?php
            $today = date("l");
            // $bgcolors = array("orange", "green", "blue",
            // "red", "pink", "yellow");
        
            // if ($today == "Sunday") {
            //     $bgcolor = $bgcolors[0];
            // } else if ($today == "Monday") {
            //     $bgcolor = $bgcolors[1];
            // } else if ($today == "Tuesday") {
            //     $bgcolor = $bgcolors[2];
            // } else if ($today == "Wednesday") {
            //     $bgcolor = $bgcolors[3];
            // } else if ($today == "Thursday") {
            //     $bgcolor = $bgcolors[4];
            // } else if ($today == "Friday") {
            //     $bgcolor = $bgcolors[5];
            // }
            $bgcolors = array(
                "Sunday" => "orange",
                "Monday" => "green",
                "Tuesday" => "blue",
                "Wednesday" => "red",
                "Thursday" => "pink",
                "Friday" => "yellow");
            $bgcolor = $bgcolors[$today];
    ?>
    <head>
        <style type="text/css">
            body {
                background-color: <?php echo $bgcolor; ?>
            }
        </style>
        <title>Background Colors change based on the day of the week</title>
    </head>
    <body>
        <h1>Welcome to my home page</h1>
        <?php
        echo date("l, F jS");
        ?>
    </body>
</html>
