<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, min-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="./includes/css/-style.css" type="text/css"/>
    <link rel="stylesheet" href="./includes/css/contacto.css" type="text/css"/>
    <link rel="stylesheet" href="./includes/fonts/style.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Portfolio María S Vielba</title>
</head>
<body>

    <?php include ('./includes/header.php') ?>
        
    <div class= "contenido-formacion">
        <p class="titulo">- Formulario de Contacto -</p>
            <form action="/gracias/" name="contacto">
                <fieldset>
                    <legend>Contáctanos:</legend>
                        ¡Hola!
                            <label for="name">Me llamo</label>
                            <input name="nombre" id="name" type="text" placeholder="Tu nombre"><br>
                            <label for="project">Tengo un proyecto de</label>
                            <select name="proyecto" id="project"><br>
                                <option value="desarrollo">Desarrollo Web</option>
                                <option value="maquetacion">Maquetación Web</option>
                                <option value="diseno">Diseño Web</option>
                                <option value="otro">Otro</option>
                            <select><br>
                        En el que me gustaría que me ayudaras.
                            <label for="email"><br>
                        Me puedes escribir a
                            </label>
                        <input name="email" required id="email" type="email" placeholder="Tu email"><br>
                        ¡Gracias!<br>
                        <br><button type="submit" class="contacto-enviar">Enviar</button>
                </fieldset>
            </form>
    </div>

    <?php include ('./includes/footer.php') ?>
    <script src="./../../js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    
