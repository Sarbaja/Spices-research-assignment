<?php

    error_reporting(0);

    //checking if the submit value is clicked or not
    if(isset($_POST['submit'])){

        //Checking if the input value is empty or not
        if(empty($_POST['value'])){
            echo "<span style='color:red;'>Please enter your input</span>";
        }
        else{
            $counter=0;
            $string = $_POST['value'];
        
            $characterArray = str_split($string);
            //$characterArray = preg_split("//", $string);

            $result = [];

            foreach ($characterArray as $array)
            {
                if(!isset($result[$array])){
                    $result[$array] = 1;
                } else {
                    $result[$array] += 1;
                }
                $counter++;
            }

            echo "========" . '<br/>';
            echo "==Report==" . '<br/>';
            foreach ($result as $character => $count)
            {
                echo $character . ': ' . $count .'<br />';
            }
            echo "Total Characters: $counter";

        }        
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
                <h1>Input Form - QNO 2</h1>
            </div>

            <div class="row">
                <form name="randomForm" id="randomForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    Enter your input: <input type="text" id="value" name="value"><br/>
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>

        </div>

    </body>

</html>