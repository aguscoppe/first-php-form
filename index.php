<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <style>
    body{
        font-family: calibri;
    }
    form, p{
        text-align: center;
    }
    input, textarea, button{
        width: 500px;
        margin-top:10px;
    }
    </style>
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form class="contact-form" action="form_tutorial.php" method="post">
            <input type="text" name="name" placeholder="Full name" ><br>
            <input type="text" name="mail" placeholder="Your e-mail" ><br>
            <input type="text" name="subject" placeholder="Subject" ><br>
            <textarea name="message" placeholder="Message"></textarea><br>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>
</body>
</html>