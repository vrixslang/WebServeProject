<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
             <form action="http://127.0.0.1:8000/api/logout" method="POST">
                <input type="hidden" name="token" value="{{ Session::get('token') }}">
                <input type="submit" value="Sign Out"></input>
            </form>
</body>
</html>