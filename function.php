<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>function</title>
</head>
<body>
    <h1>Function</h1>
    <h1>Basic</h1>
    <?php
        function basic(){
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");
        }
        basic();
        basic();
        basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
        function sum($left, $right){
            print($left+$right);
            print("<br>");
        }
        sum(2,4);
        sum(4,6);
    ?>
    <h2>return</h2>
    <?php
        function sum2($left, $right){
            return $left+$right;
        }
        print(sum2(2,4));
        file_put_contents('result.txt', sum2(2,4));
        // email('egoing@egoing.net', sum2(2,4));
        // upload('egoing.net', sum2(2,4));
    ?>
</body>
</html>
