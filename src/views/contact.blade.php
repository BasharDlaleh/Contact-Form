<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form action="/contact" method="post">
        <input type="text" name="name" id="name" placeholder="your name...">
        <input type="text" name="email" id="email" placeholder="your email...">
        <textarea name="message" id="message" rows="10" cols="20" placeholder="your message..."></textarea>
        <input type="submit" value="send">
    </form>
</body>
</html>