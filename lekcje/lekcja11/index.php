<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h4>Formularz</h4>
    <form action="./zakupy.php" method="post">
    <table>
        <tbody>
            <tr>
                <td>Lp.</td>
                <td>Nazwa produktu</td>
                <td>Koszt produktu</td>
                <td>Liczba produktów</td>
            </tr>
            <tr>
                <td>1</td>
                <td class="product_name">Jabłko</td>
                <td class="product_cost">2,50</td>
                <td class="quantity"><input name="p1" type="number" value=0></td>
            </tr>
            <tr>
                <td>2</td>
                <td class="product_name">Jabłko</td>
                <td class="product_cost">12,50</td>
                <td class="quantity"><input name="p2" type="number" value=0></td>
            </tr>
            <tr>
                <td>3</td>
                <td class="product_name">Jabłko</td>
                <td class="product_cost">10,50</td>
                <td class="quantity"><input name="p3" type="number" value=0></td>
            </tr>
            <tr>
                <td>4</td>
                <td class="product_name">Jabłko</td>
                <td class="product_cost">8,50</td>
                <td class="quantity"><input name="p4" type="number" value=0></td>
            </tr>
            <tr>
                <td>5</td>
                <td class="product_name">Poziomka</td>
                <td class="product_cost">3</td>
                <td class="quantity"><input name="p5" type="number" value=0></td>
            </tr>
        </tbody>
    </table>
        <input type="submit" value="Przejdź do koszyka">
    </form>
</body>
</html>