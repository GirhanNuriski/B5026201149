<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    padding: 1px 16px;
    height: 1000px;
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
    </style>
</head>
<body>

<div class="sidebar">
    <img src="img/foto diri.jpg" style="width:100px;margin-left:75px;margin-top:20px;border-radius:30px">
    <h4>Girhan Nuriski Lusandi 5026201149</h4>
  <a class="active" href="/home">Home</a>
  <a href="/pegawai">Pegawai</a>
  <a href="/absen">Absen</a>
  <a href="/pendapatan">Pendapatan</a>
  <a href="#">Minggu depan</a>
  <a href="#">Praktikum</a>
  <footer>
      Copyright &copy; 2021 Hak Cipta Oleh Girhan Nuriski 5026201149
  </footer>
</div>

<div class="content">
  <h2>Responsive Sidebar Example</h2>
  <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
  <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
  <h3>Resize the browser window to see the effect.</h3>
</div>

</body>
</html>
