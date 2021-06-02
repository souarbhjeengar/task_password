<?php
$l=$_POST['password'];
//print_r($_POST['password']);
$str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@$%^&*_";
$str = str_shuffle($str);
$str= substr($str,0,$l);
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
</head>
<body>
<div class="text-center">
    <h1>PASSWORD= <?=$str?></h1>
</div>
<br>
<div class=" text-center">
<form method="post">
    <div class="form-group container col-10">
    <label for="password">LENGTH</label>
        <input id="password" class="col-sm-8 rounded" type="number" name="password" value="10">
    </div><br>
    <div>
    <button type="submit" class="btn btn-success ">SUBMIT</button>
    </div>
    </form>
    </div>
</body>
</html>
