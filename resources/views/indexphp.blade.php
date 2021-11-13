<html>
<head>
<title>Celcius to Fahrenheit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
            align-items: center;
            justify-content: center;
            width: 670px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;
        }
        input {
            width: 100%;
        }
    </style>
</head>
  <body>
    <div class="container">
        <h1 class="text-center mt-3">Result :</h1>
        <h1 class="text-center">
            <?php
            $number = $_POST['number'];
            $fahrenheit = (9 / 5) * $number+32;
            ?>
        </h1>
        <h1 class="text-center mt-5">The fahrenheit for
            <?php echo $number ?> celcius is
            <?php echo $fahrenheit; ?>
        </h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
