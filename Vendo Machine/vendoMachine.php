<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Vendo machine</title>
</head>
<body>
<h1>Vendo Machine</h1>

<form method = "GET">
 <fieldset class="fieldset">
  <legend >Product:</legend>
  <input type="checkbox" name="indx[]" id="Coke" value=0 > <label for = "Coke">Coke - ₱15</label><br>
  <input type="checkbox" name="indx[]" id="Sprite" value=1> <label for = "Sprite">Sprite - ₱20</label><br>
  <input type="checkbox" name="indx[]" id="Royal" value=2> <label for = "Royal">Royal - ₱20</label><br>
  <input type="checkbox" name="indx[]" id="Pepsi" value=3> <label for = "Pepsi">Pepsi - ₱15</label><br>
  <input type="checkbox" name="indx[]" id="Mountaindew" value=4> <label for = "Mountaindew">Mountain Dew - ₱20</label><br>
  
</fieldset>
<fieldset class="fieldset">
  <legend>Options:</legend>
  <label for="size">Size:</label>
<select name="size" id="sizes">
  <option value="Regular">Regular </option>
  <option value="Up-Size">Up-Size (add ₱5)</option>
  <option value="Jumbo">Jumbo (add ₱10)</option>
</select>

<label for="quantity"> Quantity: </label>
<input type="number" name="quantity" id="quantity" value=1 min="1">
<input type="submit" name="CheckOutbtn" value ="Check Out">
</fieldset>
</form>

<?php
if(isset($_GET['CheckOutbtn'])) {
    if(empty($_GET['indx'])){
        echo '<hr>';
        echo '<b>No Selected Product, Try Again.</b>';
    }else{
        echo '<hr>';
        echo '<h3>Purchase Summary:</h3>';
    }
}

    $indx = $_REQUEST['indx']; // Get Value indx[value= 0 1 2 3 4];
    $size = $_REQUEST['size'];//Get Value Size[Regular or Up-Size or Jumbo];
    $qty = $_REQUEST['quantity']; // Get the Quantity of Sodas
    $total = 0; // Total starts at 0;
    $sodas = array("Coke","Sprite","Royal","Pepsi","Mountain Dew" ); // Array of Sodas
    $prices = array(15, 20, 20, 15, 20); // Array of Prices
       for($i=0; $i< count($indx);$i++){// Get the Value of index that is selected
        for($j=0; $j< count($sodas);$j++){// Get the value of Sodas and Prices
            if($j==$indx[$i]){ // If  statement to get the indx value so that I can get the Index for prices and sodas, if the indx value same into J so the J is the index of Selected in the Vendo
                $total = $total + $prices[$j]; // Getting the Total of all selected Sodas
                $sodasPrices = $prices[$j];
                if($size=="Up-Size"){ // adding for Upsize
                    $sodasPrices += 5; 
                    $total += 5;
                }
                if($size=="Jumbo"){ // adding for Jumbo
                    $sodasPrices += 10; 
                    $total += 10; 
                }
                if($qty > 1){
                    
                    echo '<ul><li>' . $qty .' pieces of '. $size . ' '. $sodas[$j] . ' ammounting to '. $sodasPrices*$qty. '</ul>'; // Printing the Selected Quantity,Size, Sodas and Prices    
                }else{
                    echo '<ul><li>' . $qty .' piece of '. $size . ' '. $sodas[$j] . ' ammounting to '. $sodasPrices. '</ul>'; // Printing the Selected Quantity,Size, Sodas and Prices 
                }
            }
        }
    }
    echo '<b>Total Number of Items: </b>'. count($indx)*$qty;
    echo '<br><b>Total Ammount: </b>' . $total*$qty;


?> 
</body>
</html>