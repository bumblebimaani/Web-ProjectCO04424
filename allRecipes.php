
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  <style>
  *{
	  font-family : Aril, Helvetica, sans-serrif;
  }
  body {
    background-color: lightblue;
	}
#accordion{
	 background-color :#ffe6e6;
}
  .ui-accordion-header{
   background:lightpink;
}
    .ui-accordion-content{
   background:thistle;
}
  </style>
  <!--home page button-->
   <a href="index.html" class="btn btn-block btn-primary btn-warning" style="background-color:grey"><span class="glyphicon glyphicon-star-empty"></span>HOME PAGE</a>

  </head>
  <?php
#data base connection and sql statement to get data from it.
include "db_connect.php";
$sql = "SELECT RecipeID, RecipeType,RecipeNeeds,RecipeDescription FROM recipes_table ";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) #if we get smth back that is
{
	?>
	<!--jquery accordion-->
	<div id="accordion" >
	<?php
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "RecipeID: " . $row["RecipeID "]. "Type of Recipe : " ."  ". $row["RecipeType"]. "Recipe Ingredients: " . $row["RecipeNeeds"] ." " . $row["RecipeDescription"].  "<br>";
	   
	   
	    //echo "</br>". "RecipeID :" . $row["RecipeID"]."</br>". "</br>"."Type of Recipe : ".$row["RecipeType"]."</br>"."</br>"."Recipe ingredients :" .$row["RecipeNeeds"]."</br>". "</br>" ."Instructions : ".$row["RecipeDescription"]. "</br>"."</br>";
		
		echo "<h3>$row[RecipeType]</h3>";
		echo "<div><p>$row[RecipeNeeds] </br> <hr> </br>$row[RecipeDescription]</p></div>";
    }
}
 else {
    echo "0 results";
}

?>
</div>
<!--Home page button-->
   <a href="index.html" class="btn btn-block btn-primary btn-warning" style="background-color:grey"><span class="glyphicon glyphicon-star-empty"></span>HOME PAGE</a>


