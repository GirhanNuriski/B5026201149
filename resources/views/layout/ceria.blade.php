<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">


	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <style>
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
        <img src="{{asset('img/foto diri.jpg')}}" style="width:100px;margin-left:75px;margin-top:20px;border-radius:30px">
        <h4>Girhan Nuriski Lusandi 5026201149</h4>
      <a href="/home">Home</a>
      <a href="/pegawai">Pegawai</a>
      <a href="/absen">Absen</a>
      <a href="/pendapatan">Pendapatan</a>
      <a href="/penggaris">Penggaris</a>
      <footer>
          Copyright &copy; 2021 Hak Cipta Oleh Girhan Nuriski 5026201149
      </footer>
    </div>
    <div class="content">

	<br/>

    @section('isikonten')
    @show
    </div>
</body>
</html>
