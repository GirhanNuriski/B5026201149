<html>
    <head>
        <title>ETS Pemrograman Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
        <style>
        body{
            font-family:'Poppins', sans-serif;
        }
        .container{
            margin-top: 50;
            margin-left: 25;
        }
        form label{
            float: left;
            clear: left;
            width: 200px;
            text-align: left;
            margin-right: 10px;
            font-family:'Poppins', sans-serif;
            font-size:14px;
        }

        form input, select, span {
            float: left;
            margin-bottom: 10px;
            padding: 5px 5px 5px 5px;
            box-sizing: border-box;
            border: 1px solid blue;
            border-radius: 4px;
            font-family:'Poppins', sans-serif;
        }

        form select {
            width: 370;
            font-family:'Poppins', sans-serif;
        }

        h1{
            font-size: 30;
        }

        h3{
            font-size: 15;
        }

        [type="submit"] {
            margin: 20px 0 0 100px;
            font-size:20px;
            border-radius: 5px;
            padding: 7px 7px 7px 7px;
            box-sizing: border-box;
            border: 1px solid blue;
            background-color: blue;
            transition-duration: 0.4s;
            color: white;
        }

        [type="submit"]:hover{
            background-color: white;
            color: blue;
        }

        [type="reset"] {
            margin: 20px 0 0 100px;
            font-size:20px;
            border-radius: 5px;
            padding: 7px 7px 7px 7px;
            box-sizing: border-box;
            border: 1px solid blue;
            background-color: greenyellow;
            transition-duration: 0.4s;
        }

        [type="reset"]:hover{
            background-color:white;
            color: black;
        }
        </style>
        <script>
            function formValid(){
                var bookTitle = document.registration.bookTitle;
                var bookNumber = document.registration.bookNumber;
                var loanType = document.registration.loanType;
                var loanDate = document.registration.loanDate;

                if(titleValid(bookTitle,10)){
                    if(numberValid(bookNumber,5)){
                        if(typeValid(loanType)){
                            if(dateValid(loanDate)){
                            }
                        }
                    }
                }
                return false;
            }

            function titleValid(bookTitle,min){
                var titleLength = bookTitle.value.length;
                if (titleLength <= min){
                    alert("Judul wajib diisi dengan minimal "+min+" karakter!");
                    bookTitle.focus();
                    return false;

                }
                return true;
            }

            function numberValid(bookNumber,jumlah){
                var numberLength = bookNumber.value.length;
                var numberFormat = /^[0-9]+$/;
                if (numberLength == 5 && bookNumber.value.match(numberFormat)){
                    return true;
                }
                alert("Nomor buku wajib diisi dengan 5 angka!")
                bookNumber.focus();
                return false;
            }

            function typeValid(loanType) {
            if (loanType.selectedIndex < 1) {
                alert("Pilih jenis peminjaman!");
                loanType.focus();
                return false;
            }
            return true;
        }

            function dateValid(loanDate) {
                var dateLength = loanDate.value.length;
                if (dateLength == 0) {
                    alert("Pilih tanggal pengembalian");
                    return false;
                    loanDate.focus();
                }
                alert("Form berhasil dikumpulkan!");
                windows.location.reload();
                return true;
            }


        </script>
    </head>
    <body>
        <h3>Girhan Nuriski Lusandi</h3>
        <h3>Girhan</h3>
        <h3>5026201149</h3>
    <div class="container">
        <h1>Form Input Peminjaman Buku</h1>
        <form name='registration' onSubmit="return formValid();">
            <label for="bookTitle">Judul Buku:</label>
                <input type="text" name="bookTitle" size="50" /><br><br>
            <label for="bookNumber">No Buku:</label>
                <input type="text" name="bookNumber" size="50" /><br><br>
            <label for="loanType">Jenis Peminjaman:</label>
                <select name="loanType" size="">
                    <option selected="" value="Default">(Pilih jenis peminjaman)</option>
                    <option value="BS">Biasa</option>
                    <option value="KL">Kilat</option>
                    <option value="LM">Lama</option>
                </select><br><br>
            <label for="loanDate">Tanggal Peminjaman:</label>
                <input type="date" name="loanDate"/><br><br><br>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" name="reset" value="Reset" />
        </form>
    </div>
    </body>
</html>
