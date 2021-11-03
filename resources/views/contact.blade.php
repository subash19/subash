
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel='stylesheet' href='{{url("custom/css/bootstrap.min.css")}}'>
</head>
<body>
    <blockquote>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
        <form action='{{route("contact")}}' method='post'>
           <input type='hidden' name='_token' value='{{csrf_token()}}'>
            <div class='form group'>
                <label for='username'>Username:{{$errors->first('username')}}</label>
                <input type='text' id='username' name='username' placeholder='enter your username'>
</div>
<div class='form group'>
                <label for='email'>email:{{$errors->first('email')}}</label>
                <input type='text' id='email' name='email' placeholder='enter your email address'>
</div>
<div class='form group'>
  <button type='submit'>submit</button>
</div>
</form>
</div>
</div>
</div>
</blockquote>
</body>
</html>