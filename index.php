<?php

include_once 'controllers/register.controller.php';
include_once 'models/register.model.php';

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Registro HConstructora</title>
  </head>
  <body>


<!-- Inicio Formulario -->
    <div class="container">
        <br>
        <h1 align="center">Formulario de Registro</h1>
        <br>

        <form class="row g-3" id="formu-new-register" method="POST">
            <div class="col-md-6">
                <label for="inputNombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="inputNombres" name="name" required>
            </div>

            <div class="col-md-6">
                <label for="inputApellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="inputApellidos" name="last" required>
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="" required>
            </div>

            <div class="col-12">
                <label for="inputEmail" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="" required>
            </div>

            <div class="col-md-6">
                <label for="inputPhone" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="inputPhone" name="phone" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            </form>
        
        </div>
    
    </div>

<!-- Fin Formulario -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="dist/js/jquery-3.3.1.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="js/register.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script>

  </body>
</html>