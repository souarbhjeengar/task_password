<?php
function pgenerator() 
{
    glob($l=$_POST['password']??10);
    $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_';
    $pass = array(); 
    $length = strlen($string) - 1; 
    for ($i = 0; $i < $l; $i++) {
        $n = rand(0, $length);
        $pass[] = $string[$n];
}
    echo implode($pass);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password pgenerator</title>
</head>
<body>
        <div class="text-center">
            <h1>PASSWORD= <?=pgenerator();?></h1>
        </div>
<br>
<div class="text-center"><h5><?='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_';?></h5></div>
<div class=" text-center">
        <form method="post">
                <div class="form-group container col-10">
                    <label for="password"><h3>LENGTH</h3></label>
                    <input id="password" class="col-sm-8 rounded" type="number" name="password" value="10">
                </div><br>
                    <div>
                        <button type="submit" class="btn btn-success ">GENERATE</button>
                    </div>
        </form>
</div>
</body>
</html>