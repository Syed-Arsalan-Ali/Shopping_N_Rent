<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <title>Send mail</title>
    </head>
    <body>
        <h1 align="center">Notification Panel</h1>
        <form class="" action="mail.php" method="post" style="margin: auto; width: 220px;">
            Email <input type="email" name="email" value="" placeholder="Enter customer email"> <br>
            Subject <input type="text" name="subject" value="" placeholder="Enter subject"> <br>
            Message <textarea type="text" name="message" value=""  rows="5" cols="40" placeholder="Enter message here"> </textarea><br>
            <button type="submit" name="send" class='btn btn-primary btn-sm'>Send</button><br>
        </form>
    </body>
</html>