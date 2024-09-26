<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
</head>
<body>

    <form id="datosPersonales">
        <input type="text" name="nombre" id="nombre"> <br> <br>
        <input type="text" name="apellido" id="apellido"> <br>
    </form>
    <br>
    <button onclick="enviodatos()">Enviar Datos</button>

    <div id="dato2">

    </div>

    <script>
        function enviodatos() {
            var datos= $('#datosPersonales').serialize();
                $.ajax ({
                    url:'datos.php',
                    type: 'POST',
                    data: datos,
                    success: function(res){
                        $('#dato2').html(res);
                    }
                })
        }
    </script>
</body>
</html>