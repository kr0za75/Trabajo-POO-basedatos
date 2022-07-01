<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css  /estilos.css"><!---Llamamos la carpeta de css donde están todos los estilos--->
  <link rel="icon" href="img/kokomicon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/3bca6af8ff.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Pescao Corporation</title>
</head>
<?php
?>
<style>
a {
background-color: rgba(0,0,0,0);
transition: background-color .5s;
}

a:hover {
background-color: red;
}
</style>
<body id="body">
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="logo">pescao corporation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" id="letranav">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?id=1" id="letranav">Formulario </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="index.php?id=2" id="letranav">Mi juego </a>
        </li>
      </ul>
      <a class="btn" data-bs-toggle="modal" data-bs-target="#añadir" id="botonreg">Registrarse</a>

<a class="btn-primary"data-bs-toggle="modal" data-bs-target="#login" id="botonlogin">Iniciar sesion</a>
    </div>
</div>
</nav><br>
</div>

<div class="container">
<p id="error" class="text-center"><?php
?>
  </p>
<div class="card" id="opacidad">
<br><br><br>
                <div class="card-body" >
                <?php
            if (isset($_GET["id"])) { //isset = si existe la variable se va a conseguir la ID
                  switch ($_GET["id"]) {
                    case '1';
                    include "partes/formulario.php";
                    break;
                    case '2';
                    include 'partes/juegos.php';
                    }
                    }
                  else {
                      include "partes/fotos.php";
                    }
                    ?>
                  </div>
                </div>
                </div>
</body>
</html>
<!--Añadir calendario -->
<!--Añadir calendario -->
<div class="modal fade" id="añadir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-md" >
<div class="modal-content" id="fondomodal">
<div class="modal-header">
  <label class="modal-title" id="modal">Registrarse</label>
<br>
</div>
<div class="modal-body">
  <div class="container">
  <form class="" action="clases/negocio.php" method="post">
      <div class="text-center">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <div class="input-field">
            <input type="text" name="correo" id="correo" required />
             <label for="correo">Correo:</label><br>
            </div><br><br>
            <div class="input-field">
            <input type="password" name="clave" id="clave" required />
             <label for="clave">Clave:</label><br>
            </div><br><br>
            <div class="input-field">
            <input type="text" class="text" id="rut" name="rut" value="" oninput="checkRut(this)" required>
<script type="text/javascript">
function checkRut(rut) {
      // Despejar Puntos
      var valor = rut.value.replace('.','');
      // Despejar Gui�n
      valor = valor.replace('-','');
      // Aislar Cuerpo y D�gito Verificador
      cuerpo = valor.slice(0,-1);
      dv = valor.slice(-1).toUpperCase();
      // Formatear RUN
      rut.value = cuerpo + '-'+ dv
      // Si no cumple con el m�nimo ej. (n.nnn.nnn)
      if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
      // Calcular D�gito Verificador
      suma = 0;
      multiplo = 2;
      // Para cada d�gito del Cuerpo
      for(i=1;i<=cuerpo.length;i++) {
          // Obtener su Producto con el M�ltiplo Correspondiente
          index = multiplo * valor.charAt(cuerpo.length - i);
          // Sumar al Contador General
          suma = suma + index;
          // Consolidar M�ltiplo dentro del rango [2,7]
          if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
      }

      // Calcular D�gito Verificador en base al M�dulo 11
      dvEsperado = 11 - (suma % 11);
      // Casos Especiales (0 y K)
      dv = (dv == 'K')?10:dv;
      dv = (dv == 0)?11:dv;
      // Validar que el Cuerpo coincide con su D�gito Verificador
      if(dvEsperado != dv) { rut.setCustomValidity("RUT Invalido"); return false; }
      // Si todo sale bien, eliminar errores (decretar que es v�lido)
      rut.setCustomValidity('');
  }
</script>
             <label for="rut">Rut:</label><br>
            </div><br><br>
           </div>
           <div class="col-md-6">
             <div class="input-field">
            <input type="text" name="nombre" id="name" required />
             <label for="name">Nombre:</label><br>
            </div><br><br>
            <div class="input-field">
            <input type="text" name="apellido" id="apellido" required />
             <label for="apellido">Apellido:</label><br>
            </div><br><br>
            <div class="input-field">
            <input type="number" name="telefono" id="tel" required />
             <label for="tel">Telefono:</label><br>
            </div><br><br>
          </div>
        </div>
       </div>
      </div>
      <div class="form-check">
<input class="form-check-input" type="checkbox" value="terminos" id="terminos" required>
<p class="form-check-label" for="terminos" id="terminos">
Deseo aceptar los <a href="terminos.php" target="_blank">términos y condiciones</a>
</p>
    </div>

  </div>

</div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="botoncerrar">Cerrar</button>
    <button type="submit" class="btn btn-primary" name="register" id="botonlogin">Registrar</button>
  </div>
  </form>
</div>
</div>
</Div>
</div>
<!--Añadir calendario -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-sm" >
<div class="modal-content" id="fondomodal">
<div class="modal-header">
  <label class="modal-title text-center" id="modallogin">Iniciar sesion</label>
<br>
</div>
<div class="modal-body">
  <div class="container">
  <form class="" action="login/valida.php" method="post">
      <div class="text-center">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <div class="input-field">
            <input type="text" class="text" id="rutlogin" name="rutlog" value="" oninput="checkRut(this)" required>
<script type="text/javascript">
function checkRut(rut) {
      // Despejar Puntos
      var valor = rut.value.replace('.','');
      // Despejar Gui�n
      valor = valor.replace('-','');
      // Aislar Cuerpo y D�gito Verificador
      cuerpo = valor.slice(0,-1);
      dv = valor.slice(-1).toUpperCase();
      // Formatear RUN
      rut.value = cuerpo + '-'+ dv
      // Si no cumple con el m�nimo ej. (n.nnn.nnn)
      if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
      // Calcular D�gito Verificador
      suma = 0;
      multiplo = 2;
      // Para cada d�gito del Cuerpo
      for(i=1;i<=cuerpo.length;i++) {
          // Obtener su Producto con el M�ltiplo Correspondiente
          index = multiplo * valor.charAt(cuerpo.length - i);
          // Sumar al Contador General
          suma = suma + index;
          // Consolidar M�ltiplo dentro del rango [2,7]
          if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
      }

      // Calcular D�gito Verificador en base al M�dulo 11
      dvEsperado = 11 - (suma % 11);
      // Casos Especiales (0 y K)
      dv = (dv == 'K')?10:dv;
      dv = (dv == 0)?11:dv;
      // Validar que el Cuerpo coincide con su D�gito Verificador
      if(dvEsperado != dv) { rut.setCustomValidity("RUT Invalido"); return false; }
      // Si todo sale bien, eliminar errores (decretar que es v�lido)
      rut.setCustomValidity('');
  }
</script>
             <label for="rutlogin">     Rut:</label><br>
            </div><br><br>
            <div class="input-field">
            <input type="password" name="clavelog" id="passwordlogin" required>
             <label for="passwordlogin">     Clave:</label><br>
            </div><br><br>
            </div>
            <div class="col-md-5"></div>
            </div>
      </div>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="botoncerrarmodal">Cerrar</button>
    <button type="submit" class="btn btn-primary" name="añadir" id="botonloginmodal">Iniciar sesion</button>
  </div>
  </form>
</div>
</div>
</Div>
</div>
