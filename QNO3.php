<?php

    error_reporting(0);

    //checking if the calculate value, submit is clicked or not
    if(isset($_POST['calculate'])){

        $value = $_POST['text'];
        //echo $value;

        $number = preg_split("/[^0-9]+/", $value);
        $operation = (array_filter(preg_split("/[0-9]+/", $value)));
        $a = $number[0];
        $result = 0;

        foreach ($operation as $key => $val) {
            $b = $number[$key];
            $result = eval("return $a $val $b;");
            $a = $result;
        }

        echo $a;

    }



?>

<html>
    <head>
        <title>Find a string position</title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>

    <body>
        <div class="container">

            <div class="row">
                <h1>CALCULATOR - QNO 3</h1>
            </div>

            <div class="row">
                <form name="calculator" id="calculator" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    Enter your input: <input type="text" id="text" value="<?php if(isset($_POST['text'])){ echo $_POST['text']; }?>" name="text" required autofocus><br/>
                    <input type="submit" name="calculate" value="calculate">
                </form>
            </div>

        </div>

    </body>

</html>