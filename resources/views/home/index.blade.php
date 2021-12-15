<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
    margin: 0;
    font-family: "Lato", sans-serif;
    }

    .sidebar {
    margin: 0;
    padding: 0;
    width: 250px;
    background-color: rgb(36, 36, 36);
    position: fixed;
    height: 100%;
    overflow: auto;
    }
    .sidebar footer{
        color: white;
        font-family: "Libre Franklin";
        font-size: 10px;
        margin: 5px;
    }

    .sidebar a {
    margin: 5px;
    display: block;
    color: white;
    padding: 16px;
    text-decoration: none;
    font-size: 15px;
    font-family: "Libre Franklin";
    border-radius:5px;
    }

    .sidebar h4{
        margin: 10px;
        text-align: center;
        color: white;
        font-family: "Libre Franklin";
        font-size: 15px;
    }

    .sidebar a.active {
    background-color: beige;
    color: black;
    }

    .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
    }

    div.content {
    margin-left: 250px;
    height: 600px;
    }

    @media screen and (max-width: 700px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
    }

    @media screen and (max-width: 400px) {
    .sidebar a {
        text-align: center;
        float: none;
    }
    }
    ::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    }
    ::-webkit-scrollbar-track {
    background-color: transparent;
    border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.4);
    border-radius: 10px;
    }
    body,h1 {
        font-family: "Raleway", sans-serif;
    }
    body, html {
        height: 600px
    }
    .bgimg {
    background-image: url('img/background.jpg');
    min-height: 600px;
    background-position: center;
    background-size: cover;
    }
    </style>
</head>
<body>

<div class="sidebar">
    <img src="img/foto diri.jpg" style="width:100px;margin-left:75px;margin-top:20px;border-radius:30px">
    <h4>Girhan Nuriski Lusandi 5026201149</h4>
  <a href="/home">Home</a>
  <a href="/pegawai">Pegawai</a>
  <a href="/absen">Absen</a>
  <a href="/pendapatan">Pendapatan</a>
  <a href="/penggaris">Penggaris</a>
  <a href="/belanja">EAS</a>
  <footer>
      Copyright &copy; 2021 Hak Cipta Oleh Girhan Nuriski 5026201149
  </footer>
</div>

<div class="content">
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">
          Choose database on sidebar
        </div>
        <div class="w3-display-middle">
          <h1 class="w3-jumbo w3-animate-top">WELCOME</h1>
          <hr class="w3-border-grey" style="margin:auto;width:40%">
          <p class="w3-large w3-center">Laravel Database Project</p>
        </div>
      </div>
</div>

</body>
</html>
