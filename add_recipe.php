
<?php

 include "db_connect.php";
 #variables to insert in database from input
 $new_recipe_type = $_GET["newRecipe"];
 $new_recipe_ingredients = $_GET["newIngredients"];
 $new_recipe_description = $_GET["newDescription"];

 #adds slashes 
  $new_recipe_type = addslashes($new_recipe_type,"");
  $new_recipe_ingredients = addslashes($new_recipe_ingredients,"");
  $new_recipe_description = addslashes($new_recipe_description,"");

//search the database for the word keyword.

#echo "<h2>Trying to add a new Recipe..";
#sql statement to add the variables gotten
$sql = "INSERT INTO recipes_table(RecipeID, RecipeType,RecipeNeeds,RecipeDescription ) VALUE (NULL, '$new_recipe_type', '$new_recipe_ingredients', '$new_recipe_description'  )";
$result = $mysqli->query($sql) or die("</br></br> ". mysqli_error($mysqli));
//die means the program will stop working, we used it like to catch exception
include "search_all_recipes.php";
?>

