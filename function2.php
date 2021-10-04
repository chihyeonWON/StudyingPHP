<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic() {
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");  
        }

        basic();
        basic();
    ?>

    <h2>parameter &amp argument</h2>
    <?php
        function sum($left,$right) {
            print($left+$right);
            print("<br>");
        }
        sum(4,2);
    ?>

    <h2>return</h2>
    <?php
         function sum2($left,$right){
             return $left+$right;
         }

         print(sum2(2,4));
         file_put_contents("result.txt",sum(2,4));
         // email("heungeob1003@gmail.net",sum2(2,4));
         // upload("heungeob1003.net",sum2(2,4);
    </body>
</html>