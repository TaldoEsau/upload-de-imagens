<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
    background-color: antiquewhite;
}

section {
    width: 100%;
    max-width: 800px; 
    margin: 0 auto;
    padding: 2rem;

    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    align-items: center;
    justify-content: center;
}

img {
    border-radius: 20px;
    max-width: 100%; 
    height: auto;
    aspect-ratio: 3/2;
    flex-grow: 1;
    border-style: solid;
}

@media only screen and (max-width: 600px) {
    section {
        padding: 1rem;
    }

    img {
        width: 100%; 
    }
}

    </style>
<?php

$localDasImg = "./uploads";

$imagens = glob($localDasImg . "/*") ;

foreach($imagens as $imagem)
{
    
    echo "<section><div><img src='$imagem' alt='Imagem'></div></section>";
}
?>
    
</body>
</html>