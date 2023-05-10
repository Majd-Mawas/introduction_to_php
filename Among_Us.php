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
        <label for="exampleFormControlInput1" class="form-label">Among Us Imposter Formula</label>
        <br>
        <?php
        const imp = [
          [
            "i" => 1,
            "p" => 10,
          ],
          [
            "i" => 2,
            "p" => 5,
          ],
          [
            "i" => 1,
            "p" => 8,
          ]
        ];
        echo '( ' . imp[0]['i'] . ' , ' . imp[0]['p'] . ' )=> ' . round(100 * imp[0]['i'] / imp[0]['p']) . '% <br/>';
        echo '( ' . imp[1]['i'] . ' , ' . imp[1]['p'] . ' )=> ' . round(100 * imp[1]['i'] / imp[1]['p']) . '% <br/>';
        echo '( ' . imp[2]['i'] . ' , ' . imp[2]['p'] . ' )=> ' . round(100 * imp[2]['i'] / imp[2]['p']) . '% <br/>';
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>