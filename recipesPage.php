<!DOCTYPE>
<html>


<head>

 <!-- Latest compiled and minified CSS -->
 <!--i got part of the bootstrap code from a form builder online, then i adjusted it -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>

<!--/* <style>
body {
    background-color:  #ffcccc;
}
</style> */-->

<body>
 <a href="index.html" class="btn btn-block btn-primary btn-warning" style="background-color:grey"><span class="glyphicon glyphicon-star-empty"></span>HOME PAGE</a>

<!--<h1>Welcome to my web server.</h1> -->

<?php 


include "db_connect.php";

//include "search_all_recipes.php";
?>
  

<form class="form-horizontal" action = "search_keyword.php">
<fieldset>
<a<a href="#" class="btn btn-block btn-primary btn-info" style= "background-color:pink"></a>
<!-- Form Name -->
<legend>SEARCH FOR A RECIPE</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Recipe: </label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g: chocolate" class="form-control input-md" required="">
    <p class="help-block">enter a word to search for in all recipes ...</p>
  </div>
</div>
</a>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-info ">Search</button>
  </div>
</div>

</fieldset>
</form>
 </br></br></br>
 <a href="allRecipes.php" class="btn btn-block btn-primary btn-warning" style="background-color:deeppink"><span class="glyphicon glyphicon-star-empty"></span>VIEW ALL RECIPES </a>
 <p class="help-block" align="center">enter a word to search for in all recipes ...</p>
 </br></br></br>
<a<a href="#" class="btn btn-block btn-primary btn-info"></a>


<!-- this is the html form i built first-->
 <!--<form action = "add_recipe.php">
  Please enter a new Recipe:<br>
  <input type="text" name="newRecipe"><br>
  <hr>
  Please enter Recipe Ingredients:<br>
  <input type="text" name="newIngredients"><br>
  <hr>
  Please enter Recipe Instructions:<br>
  <input type="text" name="newDescription"><br>
  <input type="submit" value = "submit">
</form> -->



<style>
body{
background-color : lightgrey;
}
</style>
<!-- this is a bootstrap form-->
<form class="form-horizontal" action = "add_recipe.php">
<fieldset>

<!-- Form Name -->
<legend>ADD A RECIPE</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newRecipe">Recipe name:</label>  
  <div class="col-md-6">
  <input id="newRecipe" name="newRecipe" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">enter the name of your recipe here...</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newIngredients">Ingredients needed:</label>  
  <div class="col-md-5">
 <!-- <input id="newIngredients" name="newIngredients" type="text" placeholder="e.g: flour, sugar..." class="form-control input-md">
  <span class="help-block">Enter the ingredients for your recipe here...</span>  -->
   <textarea class="form-control" id="textarea" name="textarea"> </textarea>
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newDescription">Recipe Instructions: </label>  
  <div class="col-md-5">
 <!--<input id="newDescription" rows="3" name="newDescription" type="textarea" placeholder="" class="form-control input-md">-->
  <textarea class="form-control" id="textarea" name="textarea"> </textarea>
  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">ADD RECIPE</button>
  </div>
</div>

</fieldset>
</form>

<?php
//include "search_keyword.php";


$mysqli->close();


?>

</body>

</html>

