<?php
include('clases/mantenerlogeado.php');

?>
          <style>

        /* Setting container to flex and
           width to 80% of view port */
        .containerp {
          display: flex;
          width: 100%;
        }
        /*Adding background image to each section*/
        .one {
          background: url(./img/coop.jpg);

        }
        .two {
          background: url(./img/ana.jpeg);
        }
        .three {
          background: url(./img/conqueror.jpg);
        }
        .four {
          background: url(
 ./img/guachupe2.gif);
        }
        .five {
          background: url(./img/klee.gif);
        }
        /* Background properties and
           transition effect to section */
        .section {
          border-radius: 30px;
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          height: 20vh;
          cursor: pointer;
          flex: 0.1;
          margin: 8px;
          position: relative;
          transition: all 0.7s ease-out;
          color: rgba(255,255,255,0);
          font-size: 10px;
          font-family: 'fuente';
          border-color: white;
          border-width:10px;
        }

        /* section with active class will
           grow flex to 3 times */
        .section.active {
          height: 30vh;
          cursor: pointer;
          margin: 8px;
          flex: 3;
          border-radius: 30px;
          color: white;
          padding-top: 100px;
          font-size: 40px;
          font-family: 'fuente';
          border-width:10px;
          border-color: white;

        }
        a {
  background-color: rgba(0,0,0,0);
  transition: background-color .5s;
}

a:hover {
  background-color: red;
}
      </style>
<div class="container-fluid">

  <form class="" action="clases/negocio.php" method="post">
        <div class="row">

          <div class="col-md-3">
              <label id="idjogotitle">Tipo de jugador</label><br><br>
      <!-- Container -->
      <div class="containerp">

        <!-- Div with section and active -->


        <div class="section one active text-center"><a data-bs-toggle="modal" data-bs-target="#socializador">Socializador </a>
        <div class="form-check">
        <?php
  $con = mysqli_connect('localhost','root','','juegos');
  $socializador = "SELECT * FROM tipo_jugador where tipo_jugador = 'socializador'";
  $res = $con->query($socializador);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="radio" id="radio" value="<?php echo $row['id']?>" checked>
<?php } ?>
  <label class="form-check-label" for="radio" id="idjogoescoge">
    Escoger
  </label>
</div>
        </div>

        <!-- All another div with section -->
        <div class="section two text-center"><a data-bs-toggle="modal" data-bs-target="#anarquista">Anarquista</a> <div class="form-check">
        <?php
              $anarquista = "SELECT * FROM tipo_jugador where tipo_jugador = 'anarquista'";
              $res = $con->query($anarquista);
            while ($row=$res->fetch_assoc()){?>
 <input class="form-check-input" type="radio" name="radio" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
  <label class="form-check-label" for="radio" id="idjogoescoge">
    Escoger
  </label>
</div></div>
  <div class="section three text-center"><a data-bs-toggle="modal" data-bs-target="#conquistador">Conquistador </a> <div class="form-check">
  <?php

              $conquistador = "SELECT * FROM tipo_jugador where tipo_jugador = 'conquistador'";
              $res = $con->query($conquistador);
            while ($row=$res->fetch_assoc()){?>
 <input class="form-check-input" type="radio" name="radio" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
  <label class="form-check-label" for="radio" id="idjogoescoge">
    Escoger
  </label>
</div></div>
        <div class="section four text-center"><a data-bs-toggle="modal" data-bs-target="#competidor">Competidor </a> <div class="form-check">
        <?php
              $competidor = "SELECT * FROM tipo_jugador where tipo_jugador = 'competidor'";
              $res = $con->query($competidor);
            while ($row=$res->fetch_assoc()){?>
 <input class="form-check-input" type="radio" name="radio" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
  <label class="form-check-label" for="radio" id="idjogoescoge">
    Escoger
  </label>
</div></div>
    <div class="section five text-center"><a data-bs-toggle="modal" data-bs-target="#explorador">Explorador </a>
    <div class="form-check">
    <?php

              $explorador = "SELECT * FROM tipo_jugador where tipo_jugador = 'explorador'";
              $res = $con->query($explorador);
            while ($row=$res->fetch_assoc()){?>
 <input class="form-check-input" type="radio" name="radio" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
  <label class="form-check-label" for="radio" id="idjogoescoge">
    Escoger
  </label>
</div>

</div>

          </div>
          <label id="margin">Tiempo dedicado a jugar</label>
          <select class="form-select" aria-label="Default select example" id="select" name="tiempodedicado"><br>
          <?php
          $query = "SELECT * FROM dedicacion";
              $res = $con->query($query);
            while ($row=$res->fetch_assoc()){
          echo "<option value='{$row['id']}'>{$row['horas']}</option>";
        }
        ?>
      </select><br>
        <label id="marginabajo">Historial Personal</label><br><br>
        <select class="form-select" aria-label="Default select example" name="historialpersonal" id="select">
        <?php
          $query = "SELECT * FROM historial";
              $res = $con->query($query);
            while ($row=$res->fetch_assoc()){

          echo "<option value='{$row['id']}'>{$row['historial']}</option>";
        }
        ?>
        </select>
      </div>


        <div class="col-md-5">
        <label id="categoria">Categoria Juegos</label>
            <select class="form-select" aria-label="Default select example" name="categoria" id="categoriainput">
            <?php
            $query = "SELECT * FROM categoria";
                $res = $con->query($query);
              while ($row=$res->fetch_assoc()){
            echo "<option value='{$row['id']}'>{$row['categoria']}</option>";
            }
            ?>
            </select><br>




          </div>
          <div class="col-md-4">
            <label id="marginderecha2">Preferencia de juego</label>
            <select class="form-select" aria-label="Default select example" name="pref" id="selectpref">
            <?php
          $query = "SELECT * FROM preferencia";
              $res = $con->query($query);
            while ($row=$res->fetch_assoc()){

          echo "<option value='{$row['id']}'>{$row['preferencia']}</option>";
        }
        ?>
            </select><br>

            <label id="marginderecha">Conocimientos Externos</label><br><br>
            <select class="form-select" aria-label="Default select example" name="conocimientos" id="selectderecha">
            <?php
          $query = "SELECT * FROM externos";
              $res = $con->query($query);
            while ($row=$res->fetch_assoc()){

          echo "<option value='{$row['id']}'>{$row['experiencia']}</option>";
        }
        ?>
            </select><br>
            <label id="marginpericia">Pericia del jugador</label><br><br>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width:100%;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>

    </div>
    <div class="carousel-inner" style="border-radius: 50px;">
      <div class="carousel-item active">
        <img src="./img/neofito.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Neófito</h5>
          <?php
          $con = mysqli_connect('localhost','root','','juegos');
  $neofito = "SELECT * FROM pericia where pericia = 'neofito'";
  $res = $con->query($neofito);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/noob.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Novato</h5>
          <?php
  $novato = "SELECT * FROM pericia where pericia = 'novato'";
  $res = $con->query($novato);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/amateur.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Amateur</h5>
          <?php
  $amateur = "SELECT * FROM pericia where pericia = 'amateur'";
  $res = $con->query($amateur);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/training.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Training</h5>
          <?php
  $training = "SELECT * FROM pericia where pericia = 'training'";
  $res = $con->query($training);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/intermedio.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Intermedio</h5>
          <?php
  $intermedio = "SELECT * FROM pericia where pericia = 'intermedio'";
  $res = $con->query($intermedio);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/rookie.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Rookie</h5>
          <?php
  $rookie = "SELECT * FROM pericia where pericia = 'rookie'";
  $res = $con->query($rookie);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/senior.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Senior</h5>
          <?php
  $senior = "SELECT * FROM pericia where pericia = 'senior'";
  $res = $con->query($senior);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/semipro.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Semi-Pro</h5>
          <?php
  $semipro = "SELECT * FROM pericia where pericia = 'semi-pro'";
  $res = $con->query($semipro);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/expert.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Experto</h5>
          <?php
  $experto = "SELECT * FROM pericia where pericia = 'experto'";
  $res = $con->query($experto);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/profesional.gif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Profesional</h5>
          <?php
  $profesional = "SELECT * FROM pericia where pericia = 'profesional'";
  $res = $con->query($profesional);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/veterano.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="textonegro">
          <h5>Veterano</h5>
          <?php
  $veterano = "SELECT * FROM pericia where pericia = 'veterano'";
  $res = $con->query($veterano);
while ($row=$res->fetch_assoc()){?>
  <input class="form-check-input" type="radio" name="pericia" id="radio" value="<?php echo $row['id']?>">
<?php } ?>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden" >Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button><BR>

  </div>
            <div class="text-center">
                <button class="btn btn-danger text-center" type="submit" name="enviar">ENVIAR ENCUESTA</button>
            </div>

          </div>
        </div>
    </div>
      </div>
</form>
<script>

          // selecting all sections with class of section
          const sections = document.querySelectorAll(".section");

          // Foreach section when clicked
          sections.forEach((section) => {
            section.addEventListener("click", () => {

              // remove active class from all another section and
              // add it to the selected section
              sections.forEach((section) => {
                section.classList.remove("active");
              });
              section.classList.add("active");
            });
          });
        </script>
        <!--Socializador-->
<div class="modal fade" id="socializador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" id="fondomodal">
      <div class="modal-header">
        <h5 class="modal-title" id="modallogintit">Socializador</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="idjogo2">
      aquel jugador que tiende a generar comunidades dentro de un juego y que
usualmente incursiona en alianzas y otras similares para poder lograr sus objetivos
acompanado de otros jugadores.
      </div>
    </div>
  </div>
</div>
<!--Anarquista-->
<div class="modal fade" id="anarquista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" id="fondomodal">
      <div class="modal-header">
        <h5 class="modal-title" id="modallogintit">Anarquista</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="idjogo2">
      Jugador que no asume su rol y va por libre realizando acciones solo por su afan personal sin
que esta vaya de la mano de la linea argumental del juego.
      </div>
    </div>
  </div>
</div>
<!--Añadir calendario -->
<div class="modal fade" id="conquistador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" id="fondomodal">
      <div class="modal-header">
        <h5 class="modal-title" id="modallogintit">Conquistador</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="idjogo2">
      Jugador experimentado en armas y en combates cuerpo a cuerpo, se caracteriza por definir
sus personajes como guerreros, lideres o similares.
      </div>
    </div>
  </div>
</div>
<!--Añadir calendario -->
<div class="modal fade" id="competidor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" id="fondomodal">
      <div class="modal-header">
        <h5 class="modal-title" id="modallogintit">Competidor</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="idjogo2">
      Jugador que se desempena bien en escuadras y que es un pilar fundamental para su
equipo, ya que aporta desde esa transversalidad a alcanzar los desafios del mismo.
      </div>
    </div>
  </div>
</div>
<!--Añadir calendario -->
<div class="modal fade" id="explorador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" id="fondomodal">
      <div class="modal-header">
        <h5 class="modal-title" id="modallogintit">Explorador</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="idjogo2">
      Jugador que recorre grandes extensiones de juego explorando distintas alternativas de
recursos o armas para el y su equipo, usualmente no realiza ataques puesto que su perfil se
aleja de aquellos líderes o precursores de hazañas gloriosas
      </div>
    </div>
  </div>
</div>
