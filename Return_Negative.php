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
    <div class="card p-3 my-3 mx-auto" style="width: 18rem;">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Return Negative</label>
        <br>

        <?php
        const Negative = [4, 15, -4, 0];
        echo '( ' . Negative[0] . ' )=> ', Negative[0] > 0 ? -Negative[0] : Negative[0], ' <br>';
        echo '( ' . Negative[1] . ' )=> ', Negative[1] > 0 ? -Negative[1] : Negative[1], ' <br>';
        echo '( ' . Negative[2] . ' )=> ', Negative[2] > 0 ? -Negative[2] : Negative[2], ' <br>';
        echo '( ' . Negative[3] . ' )=> ', Negative[3] > 0 ? -Negative[3] : Negative[3], ' <br>';
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>