<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function removeText(){
    $("p").empty();
}
function appendText1() {
    var ele1 = "<p>Element 1</p>";
    $("body").append(ele1);
}
function appendText2() {
    var ele2 = "<p>Element 2</p>";
    $("body").append(ele2);
}
$("#addelement3").click(function(){
    var ele3 = "<p>Element 3</p>";
    $("body").append(ele3);
})
</script>
<style>
#ele1 {
  color: red;
  font-size: 20px;
}
#ele2 {
  color: green;
  font-size: 20px;
}
#ele3 {
  color: maroon;
  font-size: 20px;
}
</style>
</head>
<body>

<button onclick="removeText()" id="removebutton">Remove All Elements</button>
<button onclick="appendText1()" id="addelement1">Click to Add Elements 1</button>
<button onclick="appendText2()" id="addelement2">Click to Add Elements 2</button>
<button id="addelement3">Click to Add Element 3</button>

<h1>Tugas Kustomisasi JQuery</h1>
<p id="ele1">Element 1</p>
<p id="ele2">Element 2</p>
<p id="ele3">Element 3</p>

</body>
</html>
