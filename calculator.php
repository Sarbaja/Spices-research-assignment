<?php

    error_reporting(0);

    //checking if the calculate value, submit is clicked or not
    if(isset($_POST['submit'])){

        //getting first number after form submission
        $num1 = $_POST['num1'];

        //getting second number after form submission
        $num2 = $_POST['num2'];

        //getting select value after form submission
        $sel = $_POST['sel'];

        switch ($sel){

            //addition criteria
            case 'add':
            $result = $num1 + $num2;
            break;

            //substraction criteria
            case 'sub':
            $result = $num1 - $num2;
            break;

            //Division criteria
            case 'div':
            $result = $num1 / $num2;
            break;

            //Multiplication criteria
            case 'mul':
            $result = $num1 * $num2;
            break;

            //Modulus criteria
            case 'mod':
            $result = $num1 % $num2;
            break;

            default:
            $result ="Invalid Format";
            break;
        }

        echo $result;
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
                    First Input: <input type="text" name="num1"  value="<?php if(isset($_POST['num1'])){ echo $_POST['num1']; }?>" required autofocus><br/><br/>
                    Second Input: <input type="text" name="num2" value="<?php if(isset($_POST['num2'])){ echo $_POST['num2']; }?>" required autofocus><br/><br/>
                    <select name="sel" required autofocus>
                        <option value="">Select</option>
                        <option value="add">Addition</option>
                        <option value="sub">Subtraction</option>
                        <option value="div">Division</option>
                        <option value="mul">Multiplication</option>
                        <option value="mod">Modulus</option>
                    </select><br/><br/>
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>

        </div>

    </body>

</html>