<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Овощи</h1>
    <form action="cat.php" method="GET">
        <select name="vibor">
            <option value="0">Все овощи</option>
            <option value="1">Не дороже 25 руб.</option>
            <option value="2">от 25 до 50 руб.</option>
            <option value="3">50 руб. и выше</option>
        </select>
        <input type="submit" value="Отправить">
    </form>

    
    <table border="1">
        <tr>
            <td>
                <h2>Номер товара</h2>
            </td>
            <td>
                <h2>Фото</h2>
            </td>
            <td >
                <h2>Название овощей</h2>
            </td>
            <td>
                <h2>Количество</h2>
            </td>
            <td>
                <h2>Цена</h2> 
            </td>
        </tr>
        <?php
            foreach($vegetables as $vegetable){

                echo '<tr>';
                echo '<td>';
                echo $vegetable['id'];
                echo '</td>';
                echo '<td>';
                echo '<img src = "'.$vegetable['Photo'].'">';
                echo '</td>';
                echo '<td>';
                echo $vegetable['Name'];
                echo '</td>';
                echo '<td>';
                echo $vegetable['Number'].' шт';
                echo '</td>';
                echo '<td>';
                echo $vegetable['Price'].' руб/кг';
                echo '</td>';
                echo '</tr>';

            }
        ?>
    </table>

</body>
</html>