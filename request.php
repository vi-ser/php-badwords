<?php

$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

// trasformo la stringa in un array di parole
$splitParagraph = explode(" ", $paragraph);

// var_dump ($splitParagraph);

// creo una variabile con la lunghezza dell'array di parole
$length = count($splitParagraph);

// ciclo su tutte le parole dell'array e, se presente, sostituisco la parola da censurare con '***'
for ($i = 0; $i < $length; $i++) {
    if ($splitParagraph[$i] == $badword) {
        $splitParagraph[$i] = '***';
    }
}

// ricompongo la stringa
$censoredParagraph = implode(" ", $splitParagraph);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura parola</title>

     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="container text-center p-5 mt-5 rounded-5" style="background-color: #E5EFFE">
    
        <h1>
            *******
        </h1>
    </div>

    <div class="container text-center p-5 mt-2 rounded-5" style="background-color: #E5EFFE">
    
        <p>
        <strong>Paragrafo:</strong> <br> <?php echo $paragraph?> <br><br>
        <strong>Lunghezza:</strong> <br> <?php echo strlen($paragraph)?> <br>
        </p>
    </div>

    <div class="container text-center p-5 mt-2 rounded-5" style="background-color: #E5EFFE">
    
    <p>
    <strong>Paragrafo censurato:</strong> <br> <?php echo $censoredParagraph?> <br><br>
    <strong>Lunghezza:</strong> <br> <?php echo strlen($censoredParagraph)?> <br>
    </p>
</div>
    
     <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>