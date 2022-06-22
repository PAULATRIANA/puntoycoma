<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Punto Y Coma</title>
    <link rel="icon" type="image/x-icon" href="favicon-.ico" />
     <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
     <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="estilos.css" rel="stylesheet">
     
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
  </head>
  <body>
  

<main class="d-flex flex-nowrap">
  <h1 class="visually-hidden"></h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-white col-md-2 " style="background-color:rgb(158, 107, 107);" style="width: 280px;">
    <a  class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Administrador</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="administrador.html" class="nav-link text-white" " aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
      <button class="btn btn-outline-light"  type="submit">Volver</button>
    
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="usuario.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Triana Rodriquez</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">Salir</a></li>
      </ul>
    </div>
  </div>


  <div class="form-signin w-100 m-auto">
  <form  id="form" action="recoger3.php" method="post">
    <h1>Insertar libro</h1>
    <br>
    <label>Isbn</label>
    <input  type="number" name="isbn" size="20" placeholder="ISBN" required /><br/>
    <br>
    <label>Titulo</label>
    <input type="text" name="titulo" min="10" max="75" placeholder="Titulo" required /><br/>
    <br>
    <label>Descripción</label>
    <input type="text" name="descr" placeholder="Descripción" required /><br/>
    <br>
    <label>Numero de paginas</label>
    <input type="number" name="paginas" placeholder="Numero de páginas" required /><br/>
    <br>
    <label>Precio</label>
    <input type="number" name="precio" placeholder="Precio" required /><br/>
    <br>
    <label>Cantidad almacenada</label>
    <input type="number" name="cantidad" placeholder="Cantidad almacenada" required /><br/>
    <br>
    <label>Categoria</label>
    <input type="text" name="categoria" placeholder="Categoria" required /><br/>
    <br>
    <label>Genero</label>
    <input type="text" name="genero" placeholder="Genero" required /><br/>
    <br>

    <button id="boton" class="w-50 btn " style="background-color: rgb(195, 108, 108);" type="submit">Insertar libro </button>

  </div>

</main>