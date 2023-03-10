<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuadros</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="../static/img/icon_pag.png">
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../static/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../static/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../static/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/adminlte.min.css')}}">
    <link rel="stylesheet" href="../static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../static/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../static/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../static/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>

     <script >
        var btnwpp = new Audio();
        btnwpp.src="../static/audios/Whatsapp.mp3"
    </script>
   
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../static/img/logonegro.png" alt="C&C" height="150" width="150">
        </div>

       <nav class="main-header navbar navbar-expand navbar-blue navbar-dark"> 

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="#" role="button">
                        <i class="fas fa-shopping-cart"></i>&nbsp&nbsp
                        <i class="fas fa-user-slash"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <a href="../index.php" class="brand-link">
                <img src="../static/img/CycLogo.png" alt="C&C logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">C&C</span>
            </a>

            <div class="sidebar">

               <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="list.php" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>Cuadros</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="precio.php" class="nav-link">
                                 <i class="nav-icon fas fa-store"></i>
                                 <p>Consulta precio</p>
                             </a>
                        </li>
 
                        <li class="nav-item">
                            <a href="contactos.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Contactanos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="quejas.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Quejas y reclamos</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
<!--------------------------------------------------------------------------------------------->
    <div class="content-wrapper" style="background-image: url('../static/img/fondo4.png');">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">


                    <div id="contenedor" class="col-12" align="center">
                        <br>
                        <p id="txt2">SUSCRIBETE</p>

                        <img src="../static/img/logoCuadros.png" alt="C&C" height="200" width="200">
                        <br><br><br>
                        <h3 id="txt8">S?? el primero en recibir informaci??n de nuestras promociones</h3>
                        <br><br>

                        <div class="12">
                            <br>
                            <input id="emailconta" type="email" placeholder="correo@ejemplo.com" required aria-required="true" pattern="^.+@.+\.[a-zA-Z]{2,63}$" maxlength="700" aria-label="correo@ejemplo.com"
                            value aria-invalid="false">
                            <button type="button" class="btn btn-success ">Enviar</button>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
        <div id="contenedor4" align="center">
            <br>
            <h5 class="textos" id="txt4">Siguenos en nuestras redes sociales</h5>
            <br>
            <a class="botonContacto" href="https://www.facebook.com/Cuadrosymascuadros999"  target="_blank">
                <img src="../static/img/iconof.png" alt="Facebook">
                &nbsp &nbsp&nbsp &nbsp
            </a>

            <a  class="botonContacto" href="https://instagram.com/cuadros_y.mas_cuadros?igshid=YmMyMTA2M2Y="  target="_blank">
                <img src="../static/img/iconoi.png" alt="Instagram">
                &nbsp &nbsp&nbsp &nbsp
            </a>

            <a class="botonContacto" href="https://www.tiktok.com/@cuadros_y.mas_cuadros"  target="_blank">
                <img src="../static/img/iconot.png" alt="TikTok">
            </a>
            <br><br>
          
            <h5 class="textos" id="txt4">+57 3175275953
            
                <img src="../static/img/icontel.png" width="30" height="30" alt="Tel">
                
            </h5>

            <br>
            <h5 class="textos" id="txt4">cuadrosymascuadroscyc@hotmail.com
            
                <img src="../static/img/iconcor.png" width="30" height="30" alt="Tel">
                
            </h5>
        </div>
<!--------------------------------------------------------------------------------------------->
                 <footer>
                <a class="appWhatsapp" href="https://wa.me/message/BH3BJKU6EVRON1"  onmousedown="btnwpp.play()" target="_blank">
                    <img src="../static/img/logowpp.png" alt="WhatsApp"> 
                </a>
                <div id="fb-root"></div>
            </footer>         

            </section>
            
            </div>

            <footer class="main-footer">
                <strong>Copyright &copy; 2023 <a href="https://www.facebook.com/Cuadrosymascuadros999"  target="_blank">@Cuadrosymascuadros999</a>.</strong> Todos los derechos reservados.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0.0
                </div>
            </footer>

            <aside class="control-sidebar control-sidebar-dark">
            </aside>
<!--------------------------------------------------------------------------------------------->            
            </div>  


<!--------------------------------------------------------------------------------------------->
    <script src="../static/plugins/jquery/jquery.min.js"></script>
    <script src="../static/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="../static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../static/plugins/chart.js/Chart.min.js"></script>
    <script src="../static/plugins/sparklines/sparkline.js"></script>
    <script src="../static/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../static/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="../static/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="../static/plugins/moment/moment.min.js"></script>
    <script src="../static/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../static/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../static/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="../static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="../static/js/adminlte.js"></script>
    <script src="../static/js/pages/dashboard.js"></script>
    <script src="../static/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="../static/js/adminlte.min.js"></script>   
    <script src="../static/js/confirmacion.js"></script>
</body>
</html>
<!--------------------------------------------------------------------------------------------->
