<?php 
$user_input = $_GET['inputText'];
$input_size = strlen(trim($user_input));
$bad_word = $_GET[trim('badWord')];
$word_censured = str_replace($bad_word, '*****', $user_input);
$word_censured_size = strlen(trim($word_censured));;

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
    <div class="container">
        <div class="my-5">
            <div> 
                <h4>Il testo da te inserito:</h4>
                <div><?php echo $user_input ?></div>
            </div>
            <h5>La lunghezza della stringa : <?php echo $input_size ?></h5>
            <h5>la parola da censurare: <?php echo $bad_word ?></h5>
        </div> 
        <div>
            <div>
                <h4>Il testo censurato:</h4>
                <div> <?php echo $word_censured ?></div>
                <h5>La nuova lunghezza della stringa : <?php echo $word_censured_size ?></h5>
            </div>
        </div>
    </div>   
    

    





    
        
   
</body>
</html>