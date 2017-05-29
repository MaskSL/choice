<?php
$answer='Select an option';

if(isset($_POST['submit'])){
  if(isset($_POST['animal'])){

    $animal = $_POST['animal'];

    if($animal == 'cat'){
      $answer = "Correct Answer";
    }
    if($animal == 'dog'){
      $answer = "Wrong Answer";
    }
    if($animal == 'cow'){
      $answer = "Wrong Answer";
    }

  //  $answer= "You have selected :".$animal;


  }
}

 ?>

<table>
<tr>
<th>Picture</th>
<th>Choices</th>
</tr>
<tr>
  <td><a><img src="cat.jpg"></a></td>
  <td>
<form action="index.php" method="post">
    <input type="radio" name="animal" value="cat" >Cat<br>
    <input type="radio" name="animal" value="dog">Dog <br>
    <input type="radio" name="animal" value="cow">Cow<br>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
  </td>
</tr>
<tr>
    <td></td>
    <td><h2><?php echo $answer ?></h2></td>
</tr>


</table>






<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;


}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
img {
    width: 400px;
    height: 400px;
}

</style>
