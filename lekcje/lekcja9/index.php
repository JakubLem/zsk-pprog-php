<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Kalkulator</h4> 
    <form method="post"> 
        <input type="number" name="x" placeholder="x" step="0.01" autofocus> 
        <select name="dzialanie"> 
            <option value="+">+</option> 
            <option value="-">-</option> 
            <option value="*">*</option> 
            <option value="/">/</option> 
        </select> 
        <input type="number" name="y" placeholder="y" step="0.01"> 
        <button>=</button>
        <input type="number" name="result" id="result" step="0.01" disabled> 
    <form>
    <?php
        function add($x, $y){
            return $x+$y;
        }
        function sub($x, $y){
            return $x-$y;
        }
        function mn($x, $y){
            return $x*$y;
        }
        function dz($x, $y){
            return $x/$y;
        }


        

        if(isset($_POST['button'])){
            if (!empty($_POST['x']) || $_POST['x'] == '0' && !empty($_POST['dzialanie'])){ 
                // echo 'wypelnione';
                // require_once './1_function.php';
                $x = $_POST['x'];
                $y = $_POST['y'];
                switch ($_POST) {
                    case '+':
                        $result = add($x, $y);
                        break;
                    case '-':
                        $result = sub($x, $y);
                        break;
                    case '*':
                        $result = mn($x, $y);
                        break;
                    case '/':
                        $result = dz($x, $y);
                        break;
                    default:
                        break;
                }
                
            ?>

            <script>
             document.getElementById("result").value = <?php echo $result; ?>;
            </script>


            <?php

            }
            else
            { 
                echo 'Wypełnij wszystkie pola w formularzu'; 
            }
        }
    ?>
</body> 
</html>
