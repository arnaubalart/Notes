<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Notes</title>
</head>
<body>
    <div class="content">
        <div class="form_crear_nota">
            <form action="">
                <p>Título</p>
                <input type="text" placeholder="Título de la nota" name="titulo_nota">
                <p>Descripción</p>
                <input type="text" placeholder="Crea la nota..." name="descripcion_nota">
                <input type="submit" name="enviar" value="Crear">
            </form>
        </div>
        <div class="contenido_notas">
            <table class="mostrar_notas">
                <tr>
                    <th class="titulo">Título</th>
                    <th class="descripcion">Descripción</th>
                    <th class="acciones">Acciones</th>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>