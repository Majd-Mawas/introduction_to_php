<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="container m-4">
    <div class="card p-3 my-3" style="width: 18rem;margin-inline:auto;">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Check if an Integer is Divisible By Five</label>
        <?php
        const Num = [5, -55, 37, 48, 150];
        echo !(Num[0] % 5) ? 'The number ' . Num[0] . ' is Divisible By 5 <br/>' : 'The number ' . Num[0] . ' isn\'t Divisible By 5 <br/>';
        echo !(Num[1] % 5) ? 'The number ' . Num[1] . ' is Divisible By 5 <br/>' : 'The number ' . Num[1] . ' isn\'t Divisible By 5 <br/>';
        echo !(Num[2] % 5) ? 'The number ' . Num[2] . ' is Divisible By 5 <br/>' : 'The number ' . Num[2] . ' isn\'t Divisible By 5 <br/>';
        echo !(Num[3] % 5) ? 'The number ' . Num[3] . ' is Divisible By 5 <br/>' : 'The number ' . Num[3] . ' isn\'t Divisible By 5 <br/>';
        echo !(Num[4] % 5) ? 'The number ' . Num[4] . ' is Divisible By 5 <br/>' : 'The number ' . Num[4] . ' isn\'t Divisible By 5 <br/>';
        ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
</body>

</html>