<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Введите сайт</p>
    <form>
        <input name="pingme" type="text"/>
        <button type="submit">Отправить</button>
    </form>
    <?
    if (isset($_GET["pingme"])) {
        echo '<pre>';
        $cmd = 'ping -c 10' . $_GET["pingme"];
        passthru($cmd);
        echo '</pre>';
    }

    ?>
</body>
</html>