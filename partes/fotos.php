<!-- Container  -->
<style>

        /* Setting container to flex and
           width to 80% of view port */
        .containerp {
          display: flex;
          width: 100%;
        }
        /*Adding background image to each section*/
        .one {
          background: url(./img/nfs.gif);

        }
        .two {
          background: url(./img/starcraft.gif);
        }
        .three {
          background: url(./img/fifa.gif);
        }
        .four {
          background: url(
 ./img/kazuha.gif);
        }
        .five {
          background: url(./img/plant.gif);
        }
        .six {
          background: url(./img/valo.gif);

          }
        /* Background properties and
           transition effect to section */
        .section {
          border-radius: 30px;
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          height: 80vh;
          cursor: pointer;
          flex: 0.1;
          margin: 8px;
          position: relative;
          transition: all 0.7s ease-out;
          color: rgba(255,255,255,0);
          font-size: 20px;
          font-family: 'fuente';
          padding-top:400px;
          padding-left: 30px;
          padding-right: 30px;
          border-color: white;
        }

        /* section with active class will
           grow flex to 3 times */
        .section.active {
          flex: 3;
          border-radius: 30px;
          color: white;
          font-size: 50px;
          font-family: 'fuente';
          padding-top: 300px;
          padding-left: 40px;
          padding-right: 30px;
          border-color: white;
        }

      </style>
      <title>Expanding Cards</title>
    </head>


    <body><div class="text-center"> <?php if (isset($_SESSION["nombre"])) { ?>
      <label id="bienvenido">bienvenido <?php echo $_SESSION['nombre'];?></label></div>
      <?php }else{
        ?>
        <label id="basado">inicia sesion</label>
        <?php
      } ?>
      <!-- Container -->
      <div class="containerp">

        <!-- Div with section and active -->
        <div class="section one active text-center"> Need For Speed: Most Wanted </div>

        <!-- All another div with section -->
        <div class="section two ">Starcraft II</div>
        <div class="section three "> FIFA 2021</div>
        <div class="section four">Genshin Impact</div>
        <div class="section five">Plants VS Zombies</div>
        <div class="section six">Valorant</div>
      </div>

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
