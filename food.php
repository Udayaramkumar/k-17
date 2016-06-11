
<html>
<head>
</head>
  <link rel="stylesheet" type="text/css" href="button.css"/> 
  <body  style="font-family:ulim, @GungsuhChe font-weight: normal; font-style: normal; text-decoration: none;color:blue;>
<div>
<ul class="horizontalul">
<script>
function check() {
var food1 = $("#food1").text();
var food2 = $("#food2").text();

     if ($.trim($("#food1").text()) == "") {
    document.getElementById("error").innerHTML = "Please fill entry";
return false;
	 }

    if ($.trim($("#food2").text()) == "") {
    document.getElementById("error").innerHTML = "Please fill entry";
return false;
	}

}
      
</script>
<center>
<h1>FOOD MENU</h1>

<form method="post" action="fod.php">  
  <table border="1">
<tr>
<th colspan=3>List of food</th>
</tr>
<tr>
<th>ITEM</th>
<th>UNIT PRICE</th>
<th>QUANTITY</th>
<tr>
<td>food1</td>
<td>10</td>
<td><input name="food1" value="" type="number" min="0" max=20 ></td>
</tr>
<tr>
<td>food2</td>
<td>20</td>
<td> <input type="number" name="food2" min="0" max="20"></td>
</tr>

<tr>
<td>food3</td>
<td>30</td>
<td> <input type="number" name="food3" min="0" max="20"></td>
</tr>
<tr>
<td>food4</td>
<td>40</td>
<td> <input type="number" name="food4" min="0" max="20"></td>
</tr>
<tr>
<td>food5</td>
<td>50</td>
<td> <input type="number" name="food5" min="0" max="20"></td>
</tr>
</table><br><br>
<input type=submit name=sumbit value=submit onclick="check();" >

</form>
<br>
<br>

</center>
<style type="text/css">
h1 {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding: 1;
	}

fieldset.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:5%;
padding-left:15px;
height:360px;
width:10%;
border-style:outset;
border-width:5px ;

}
body {
      font-color:white;
       background-repeat:no-repeat;
    }

</style>


</body>
</html>