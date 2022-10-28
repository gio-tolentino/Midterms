<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>
    <form  method = GET>
        <label for="imageSize">Select Photo Size:</label>
        <input type="range" id="imageSize" name="imageSize" value=50 min="10" max="100" step="10">
        <br>
        <label for="borderColor">Select Boarder Color:</label>
        <input type="color" name="borderColor" id="borderColor">
        <br>
        <input type="submit" name="Process" value="Process">
        <br><br><br>
       
    </form>

        <?php
            if(isset($_REQUEST['Process'])){
                $imageRange = 60;
                $imageRange = $_REQUEST['imageSize'];
                $border = $_REQUEST['borderColor'];
            }
        ?>
        <img src="guluGulu.jpg" style="width: <?php echo $imageRange . '%'; ?>;border-color: <?php echo $border; ?>;border-width: 5px; border-style: solid;">

</body>
</html>

