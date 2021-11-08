<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Чат</title>

    <link rel="stylesheet" href="./css/mystyle.css">
</head>
<body>
    <div class="app">
        <header>
        <h1>Чат</h1>
            <input type="text" name="username" id="username" placeholder="Вкажіть ваше ім'я">
        </header>

        <div id="messages"></div>

        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Написати повідомлення...">
            <button type="submit" id="message_send">Відправити повідомлення</button>
        </form>
    </div>

<script src="./js/app.js"></script>
</body>
</html>
