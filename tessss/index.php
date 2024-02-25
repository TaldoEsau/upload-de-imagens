<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
            body{
            background-color: #f2f2f2;
        }
        form{
            width:100%;
            height: 100vh;
            align-items:center;
            justify-content: center;
            display: flex;
        }
        button{
            color:white;
        }
    </style>
</head>
    <body>
        <?php
    
            if(isset($_POST['acao']))
            {
                $arquivo = $_FILES['file'];
    
                $arquivoNovo = explode('.', $arquivo['name']);
                
                if($arquivoNovo[sizeof($arquivoNovo)-1] != 'png' && $arquivoNovo[sizeof($arquivoNovo)-1] != 'pdf' && $arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg' && $arquivoNovo[sizeof($arquivoNovo)-1] != 'jfif' )
                {
                    die('voce nao pode fazer upload desse arq');
                } else {
                    echo'Upload foi feito com sucesso';
                    move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
                }
            }
        ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <input class="btn btn-primary"type="file" name="file" />
                    <input class="btn btn-primary"type="submit" name="acao" value="enviar" />
                    <a href="..\tessss\tela.php"></a>
                    <button class="btn btn-primary">ver<a href="..\tessss\tela.php"></button>
                </form>
            
    </body>
</html>
