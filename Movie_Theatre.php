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
        <label for="exampleFormControlInput1" class="form-label">Movie Theatre Admittance</label>
        <br>
        <?php
        const Ages = [
          [
            "Age" => 14,
            "is_Supervised" => true,
          ],
          [
            "Age" => 14,
            "is_Supervised" => false,
          ],
          [
            "Age" => 16,
            "is_Supervised" => false,
          ]
        ];

        echo '( ' . Ages[0]['Age'] . ' , ' . (Ages[0]['is_Supervised'] ? 'true' : 'false') . ')=> ', (Ages[0]['Age'] > 15 || Ages[0]['is_Supervised']) ? 'true' : 'false', ' <br/>';
        echo '( ' . Ages[1]['Age'] . ' , ' . (Ages[1]['is_Supervised'] ? 'true' : 'false') . ')=> ', (Ages[1]['Age'] > 15 || Ages[1]['is_Supervised']) ? 'true' : 'false', ' <br/>';
        echo '( ' . Ages[2]['Age'] . ' , ' . (Ages[2]['is_Supervised'] ? 'true' : 'false') . ')=> ', (Ages[2]['Age'] > 15 || Ages[2]['is_Supervised']) ? 'true' : 'false', ' <br/>';

        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>