<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<form method="post">
		<input type="text" name="name" 	</form>
    <?php
        function show($x) {
            return "Zmienna \$x wynosi: $x";
        }

        function sum(int $x, float $y) {
            return $x + $y;
        }

        function show_name(string $name, string $surname) {
            return "Imię i nazwisko: $name $surname";
        }

	echo show_name("jan", "nowak");
	

    ?>
</body>
</html>
