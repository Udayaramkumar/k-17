<html>


<form name=fod.php><center>
<?php


$food1 = $food2 = $food3 = $food4 = $food5 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	

  $food1 = test_input($_POST["food1"]);
  $food2 = test_input($_POST["food2"]);
  $food3= test_input($_POST["food3"]);
  $food4 = test_input($_POST["food4"]);
  $food5 = test_input($_POST["food5"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<table border=1>
<tr>
<th colspan=4><h1>BILL AMOUNT</h1></th>
</tr>
<tr>
<th>ITEM</th>
<th>UNIT PRICE</th>
<th>QUANTITY ORDERED</th>
<th>AMOUNT</th>
<tr>
<td>food1</td>
<td>10</td>
<td><?php echo $food1;?></td>
<td><?php $a=$food1*10; echo $a?></td>
</tr>
<tr>
<td>food2</td>
<td>20</td>
<td><?php echo $food2;?></td>
<td><?php $b=$food2*20; echo $b?></td>
</tr>

<tr>
<td>food3</td>
<td>30</td>
<td><?php echo $food3;?></td>
<td><?php $c=$food3*30; echo $c?> </td>
</tr>
<tr>
<td>food4</td>
<td>40</td>
<td><?php echo $food4;?></td>
<td> <?php $d= $food4*40; echo $d?></td>
</tr>
<tr>
<td>food5</td>
<td>50</td>
<td><?php echo $food5;?></td>
<td> <?php $e=$food5*50; echo $e?></td>
</tr>
<tr>
<th colspan=3>TOTAL AMOUNT</th>
<th><?php echo $a+$b+$c+$d+$e;?>
</tr>
</table>
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
</html>