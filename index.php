<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taller de Construcci&oacute; de Aplicaciones</title>
    </head>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>

    <body>
        <header id="headerSection" class="container">
            <img class="bordered" width="800px" 
                 src="http://static.cdn.ea.com/blog.bioware.com/wp-content/uploads/2013/02/Tech-Mastery-Aaron-Norton.png" 
                 alt="Esto es una imagen" />
        </header>
        <nav id="menuContainer" class="container">

        </nav>
        <div id="mainContainer" class="container">

        </div>
        <footer id="footerSection" class="footer-copyright">

        </footer>
    </body>

    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="css/materialize/js/materialize.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#menuContainer').load('/tca-app/tiles/menuTile.php', {
                "choices":
                        [
                            {
                                "id": "inicioId",
                                "Texto": "Inicio",
                                "loadPage": "/tca-app/tiles/inicioTile.php",
                                "targetDiv": "mainContainer"
                            },
                            {
                                "id": "quienesSomosId",
                                "Texto": "¿Quiénes somos?",
                                "loadPage": "/tca-app/tiles/quienesSomosTile.php",
                                "targetDiv": "mainContainer"
                            },
                            {
                                "id": "noticiasId",
                                "Texto": "Noticias",
                                "loadPage": "",
                                "targetDiv": ""
                            },
                            {
                                "id": "contactoId",
                                "Texto": "Contacto",
                                "loadPage": "",
                                "targetDiv": ""
                            },
                            {
                                "id": "loginId",
                                "Texto": "Login",
                                "loadPage": "",
                                "targetDiv": ""
                            }
                        ]
            }
            );
        });
    </script>

</html>
