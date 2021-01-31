<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <title>Document</title>
</head>
<body>
    
    
    <form action = "<?php echo "feedback.inc.php?id=$payId"?>" method="POST">
        <h1>How do you want to label hygiene, safety and protective measures against covid provided by Namaste-India?</h1>
        <fieldset class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>            
            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>           
            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Avergae - 3 stars"></label>           
            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Poor - 2 stars"></label>    
            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Very Poor - 1 star"></label>
                       
        </fieldset>
        <label><br><br>Please add some additional comments for your rating</label>
        <br><input type ="text" id="comment1" name="comment" value="comment1" >
        <br><button type="submit" name="submit">SUBMIT</button>
    </form>

</body>
</html>