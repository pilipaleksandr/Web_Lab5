<!DOCTYPE html>
<html>
<head>
    <title>Контакти</title>
</head>
<body>
    <h1>Зв'яжіться з нами</h1>
    <form action="/contact" method="POST">
        @csrf
        <label for="name">Ім'я:</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <button type="submit">Надіслати</button>
    </form>
</body>
</html>