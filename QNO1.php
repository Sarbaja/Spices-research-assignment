<?php

    error_reporting(0);

    //checking if the submit value is clicked or not
    if(isset($_POST['submit'])){

        //Checking if the input value is empty or not
        if(empty($_POST['text'])){
            echo "<span style='color:red;'>Please enter your input</span>";
        }

        $s = $_POST['text'];
        $i=0;
        while ($s[$i] != '') {
            $i++;
        }
        //echo $i;
       
        //Recursive function
        function recursive($string, $index){

            if($string[$index] == 'a'){
                return $index+1;
            }
            else{
                return recursive($string, $index+1);
            }

        }

        
        //Set our start number to 1.
        $index = 0;
        $string = $_POST['text'];
        
        //call recursive function.
        $result = recursive($string, $index);

        //Displaying the result
        echo "Position: $result";

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
                <h1>Input Form - QNO 1</h1>
            </div>

            <div class="row">
                <form name="inputForm" id="inputForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    Enter your input: <input type="text" id="text" value="<?php if(isset($_POST['text'])){ echo $_POST['text']; }?>" name="text"><br/>
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>

        <script src="js/custom.js" type="text/javascript">
        </script>

    </body>

</html>