<html>
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .container{
        margin-top: 50px;
    }

    h1 {
        margin-left: 35px;
        }

    form label{
        float: left;
        clear: left;
        width: 100px;
        text-align: right;
        margin-right: 10px;
        font-family:Verdana, Arial, Helvetica, sans-serif;
        font-size:14px;
        }

    form input, select, span {
        float: left;
        margin-bottom: 10px;
        }

    form select {
        width: 370;
    }

    form textarea {
        float: left;
        width: 350px;
        height: 150px;
    }

    [type="submit"] {
        clear: left;
        margin: 20px 0 0 230px;
        font-size:18px
        }

    </style>
    <script>
        function formValidation(){
    var uid = document.registration.userid;
    var passid = document.registration.passid;
    var uname = document.registration.username;
    var ucountry = document.registration.country;
    var uzip = document.registration.zip;
    var uemail = document.registration.email;
    var sex = document.registration.sex;


    if(userid_valid(uid,5,12)){
        if(pass_valid(passid,7,12)){
            if(alphabetChar(uname)){
                if(countrySelect(ucountry)){
                    if(numericChar(uzip)){
                        if(validEmail(uemail)){
                            if(validSex(sex)){
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
    }

    function userid_valid(uid,min,max){
    var uidLength = uid.value.length;
    if (uidLength == 0 || uidLength >= max || uidLength < min){
        alert("User ID should be filled with length between "+min+" to "+max);
        return false;
    }
        return true;
    }

    function pass_valid(passid,min,max){
    var passidLength = passid.value.length;
    if (passidLength == 0 ||passidLength >= max || passidLength < min){
        alert("Password should be filled with length between "+min+" to "+max);
        passid.focus();
        return false;
    }
        return true;
    }

    function alphabetChar(uname){
    var letters = /^[A-Za-z]+$/;
    if(uname.value.match(letters)){
        return true;
    }
    else{
        alert('Username must contain alphabet characters only');
        uname.focus();
        return false;
    }
    }


    function countrySelect(ucountry){
    if(ucountry.value == "Default"){
        alert('Select your country from the list');
        ucountry.focus();
        return false;
    }
    else{
        return true;
    }
    }

    function numericChar(uzip){
    var numbers = /^[0-9]+$/;
    if(uzip.value.match(numbers)){
        return true;
    }
    else{
        alert('ZIP code must have numeric characters only');
        uzip.focus();
        return false;
    }
    }

    function validEmail(uemail){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(uemail.value.match(mailformat)){
        return true;
    }
    else{
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
    }

    function validSex(sex){
    x=0;

    if(sex.value.match('Female')){
        x++;
    }
    if(sex.value.match('Male')){
        x++;
    }
    if(x==0){
        alert('Select Male/Female');
        umsex.focus();
        return false;
    }
    else{
        alert('Form Succesfully Submitted');
        window.location.reload();
        return true;
    }
    }
    </script>
</head>
<body id="body" onload="document.registration.userid.focus();">
<div class="container">
    <h1>Registration Form</h1>
    <form name='registration' onSubmit="return formValidation();" >
        <label for="userid">User ID:</label>
            <input type="text" name="userid" size="50" /><br><br>
        <label for="passid">Password:</label>
            <input type="password" name="passid" size="50" /><br><br>
        <label for="username">Name:</label>
            <input type="text" name="username" size="50" /><br><br>
        <label for="address">Address:</label>
            <input type="text" name="address" size="50" /><br><br>
        <label for="country">Country:</label>
            <select name="country" size="">
                <option selected="" value="Default">(Please select a country)</option>
                <option value="ID">Indonesia</option>
                <option value="MY">Malaysia</option>
                <option value="US">Amerika Serikat</option>
            </select><br><br>
        <label for="zip">ZIP Code:</label>
            <input type="text" name="zip" size="50" /><br><br>
        <label for="email">Email:</label>
            <input type="text" name="email" size="50" /><br><br>
        <label id="gender">Sex:</label>
            <input type="radio" name="sex" value="Male" /><span>Male</span>
            <input type="radio" name="sex" value="Female" /><span>Female</span><br><br>
        <label>Language:</label>
            <input type="checkbox" name="en" value="en" checked /><span>English</span>
            <input type="checkbox" name="nonen" value="noen" /><span>Non English</span><br><br>
        <label for="desc">About:</label>
            <textarea name="desc" id="desc"></textarea><br><br>
        <input type="submit" name="submit" value="Submit" />
        <input type="submit" name="reset" value="Reset" />
        </form>
</div>
</body>
</html>
