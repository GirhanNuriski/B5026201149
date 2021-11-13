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
        <h1 class="text-center">Please Insert a Numbers</h1>
        <br><br>
        <form action="indexphp" method="post">
            @csrf
            <div class="row">
                <div class="col-5">
                    Degree to Fahrenheit (celsius)
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-6">
                    <input type="text" name="number">
                </div>
            </div>
            <br><br>
            <div class="button text-center">
                <button class="btn-primary submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
