<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My Dom</title>
        <script src="js/myscript.js"></script>
    </head>
    <body>
        


 <form action="chapter2.php" name="formUser">
  <div id="demo"></div>
  Name: <input type="text" id="firstName" required="true" ><br>
  E-mail: <input type="email" ><br>
  Birthday: <input type="date" ><br>
  Age: <input type="number" ><br>
 <br>

 <table id="myTable" style="border: 1px solid black">
<tr>
<td>Row1 cell1</td>
<td>Row1 cell2</td>
</tr>
<tr>
</table>
<input type="button" onclick="insRow('myTable')" value="Insert row">
<br>


<input type="button" value="Hide text" onclick="document.getElementById('demo').style.visibility='hidden'">

<input type="button" value="Show text" onclick="document.getElementById('demo').style.visibility='visible'">

 <br> <br>
  <input type="submit">
</form>


    </body>
</html>
<script>
document.getElementById("demo").innerHTML = "The name of this form is " + document.forms[0].name;
document.getElementById("firstName").value = "John";

</script>