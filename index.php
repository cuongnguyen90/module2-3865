<?php


$arr = [];
for ($i = 0 ;$i < 10;$i++){
    $number = rand(0,99);
    array_push($arr,$number);
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $num = $_POST['num'];
    $_index = findMin($arr,$num);

}


function findMin($arr,$num){
    $index = NULL;
    $min = $arr[0];
    for ($j = 1 ; $j < count($arr);$j++){
        if ($arr[$j] < $min ){
            if ($arr[$j] < $num) {
                $min = $arr[$j];
                $index = $j;
            }
        }
    }
    if ($min > $num){
        return $index = "Khong co so nao nho hon so truyen vao";
    }
    return $index;

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="" method="POST" role="form">
                <legend>Day so</legend>
                <?php foreach ($arr as $item){
                    echo $item.",";
                };?>
                <div class="form-group">
                    <label for=""></label>
                    <input type="nubmer" class="form-control" name="num" id="" placeholder="Input random number">
                </div>
                <button type="submit" class="btn btn-primary">Find</button>
            </form>
            <?php
            if ($_index && $_REQUEST){
                ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Index number min is :<?= $_index;?>
                </div>
                <?php
            }
            ;?>
        </div>

    </div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>



