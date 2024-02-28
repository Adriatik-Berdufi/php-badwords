<?php 
$user_input = $_GET['inputText'];
$input_size = strlen(trim($user_input));
$bad_word = $_GET[trim('badWord')];
$word_censured = str_replace($bad_word, '*****', $user_input);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php echo $user_input ?>
<br>
<?php echo $input_size ?>
<br>
<?php echo $bad_word ?>
<br>
<?php echo $word_censured ?>
    
        
   
</body>
</html>