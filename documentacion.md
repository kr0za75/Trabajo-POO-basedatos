# Trabajo-POO-basedatos

Formulario de VideoJuegos 'PESCAO CORPORATION'

Jonathan Vidal Sepúlveda
Lukas Castillo Rocello
Eduardo Paredes Salas

CFT LOTA-ARAUCO

VERSION 1.0

ALUMNOS 3er SEMESTRE TNS COMPUTACION E INFORMATICA

1 DE JULIO DEL 2022


-def. general del proyecto software Algoritmo de Videojuegos 'PESCAO CORPORATION'
El sistema que hemos desarrollado en cuestión, consiste en un formulario selector de videojuegos, su principal
función es ingresar un juego para el usuario, dependiendo de sus respuestas del formulario a una base de
datos, almacenarlos y entregarlos en pantalla para el dicho usuario, con el objetivo de brindar un juego para el
usuario en base a sus gustos personales y así ayudarlos a encontrar un juego para ellos, accesible para todos los
públicos.


-Especificaciones de requerimientos del proyecto
  /PREREQUISITOS DEL SISTEMA
    -Conexión a banda ancha.
    -Navegadores compatibles:
      -BRAVE(V. 101.1.38.119 (64-BIT))
      -GOOGLE CHROME(V. 101.0.4951.67 (64-BIT))
      -MICROSOF EDGE (V. 101.0.1210.53 (64-BIT))
      -OPERA GX (V. 86.0.4363.59 (64-BIT))
    -Tener instalado "XAMPP".
    -Tener acceso a la base de datos incluida en el proyecto.

  /REQUISITOS GENERALES
    -Crear una algoritmo que permita categorizar el nivel de un jugador y destinarle un único juego.
    -Registro de usuario, datos que permitan identificar fielmente al usuario, y nos permitan contactarle.
    -Aceptación de Políticas de uso de datos.
    -Landing para el acceso válido del usuario.
    -Manejo de sesiones en caso de exceder el máximo de intentos de acceso.
    -Formulario para definir la categoría o estilo de juego del usuario.
    -Formulario para definir la experiencia en juegos del usuario.
    -Formulario para estimación de la pericia del usuario.
    -Algoritmo de definición de selección de escala, estilo libre.
    -Modelo entidad relación de su proyecto.
    -Implementación de la base de datos con sus respectivas tablas.
    -Implementación de clases y evidenciar elementos de POO.
    -Documentación del proyecto en GitHub mediante un archivo .MD

  /INFORMACION DE AUTORIA Y LEGACY DEL PROYECTO
    -Este software fue creado desde 0, se usó código de fuente publica extraída de "geeksforgeeks.org".

  /ALCANCES DEL SISTEMA
    - Solo se puede registrar un juego por usuario, no se puede repetir el formulario una vez ya hecho,
    para ingresar a su cuenta de usuario solo tiene 4 intentos, si no se bloquea su cuenta, no se editan
    los juegos

-Especificaciones de Procedimientos
  -Entorno de desarrollo: VISUAL STUDIO CODE.
  -Herramientas: ATOM, XAMPP, BOOTSTRAP, JAVASCRIPT, COPILOT, NAVEGADOR (para visualizar el proyecto)

-Procedimientos de instalación y prueba
 -Obtener la carpeta del proyecto 'Trabajo-POO-basedatos'
 -Instalar XAMPP
 -Cargar la base de datos 'juegos.SQL' en el motor de base de datos 'phpMyadmin' que ofrece XAMPP al instalarlo.
 -Posteriormente ejecutar XAMPP y levantar los servicios necesarios (APACHE Y MYSQL)
 -En un navegador compatible con el software acceder a la url h.ref='localhost/Trabajo-POO-basedatos'/home'
 -Luego registrarse en la pagina, ingresar con su usuario y acceder al formulario.

-Arquitectura del sistema
  -La arquitectura utilizada para el desarrollo del algoritmo de videojuegos "PESCAO CORPORATION" es una arquitectura basada
  en capas orientada a objetos, dividiendo así el proyecto en distintas carpetas a lo largo de todo el desarrollo.

-Descripción individual de los módulos
trabajo_poo_basedatos
  -home.php
    -descripción general y propósito : pestaña de recibimiento del proyecto, muestra la fachada y da a entender de que se trata el proyecto, solo de bienvenida.
    -responsabilidad y restricciones: es la pestaña a la que se redirige a cualquier usuario que no esté registrado, funciona con un sistema de id´s dependiendo del propósito e instancia home.php llamara a diferentes
      vistas, no envía ni captura datos.
    -dependencias: requiere de los archivos formulario.php, fotos.php y juegos.php para su funcionalidad y de las librerías Bootstrap, Ajax y fontawesome para su estética.
  -index.php
    -descripción general y propósito: instancia para los usuarios registrados y logueados en el algoritmo, permite acceder al formulario y al juego brindado por el algoritmo una vez desarrollado el formulario.
    -responsabilidad y restricciones: dar acceso al usuario registrado el formulario de catalogación para que el algoritmo le entregue un juego pertinente.
    -dependencias: requiere de los archivos formulario.php, fotos.php, juegos.php, conexion.php y mantenerlogeado.php para su funcionalidad y de las librerías Bootstrap, Ajax y fontawesome para su estética.
  -trabajo_poo_basedatos/clases
    -conexion.php
      -descripción general y propósito: instancia una nueva conexión a la db, para así lograr cargar nuevos datos recién registrados.
      -responsabilidad y restricciones: tiene la función principal de poder heredar sus parámetros de conexión a las demás clases pertinentes del proyecto para así lograr cargar los basedatos
        que el algoritmo ingresara a la db , ya que por sí sola, esta clase no se le puede ingresar ningún dato directamente a la db.
      -dependencias: no necesita de otros archivos para funcionar.
    -jugador.php
      -descripción general y propósito: recibe los datos del formulario de categorizado de juegos y los envía a la db, para así designar un juego al usuario.
      -responsabilidad y restricciones: recibir datos del formulario para así enviarlos a una tabla en la db, no recibe datos de ninguna otra fuente su función es
        entregar un juego por usuario.
      -dependencias: necesita de los parámetros obtenidos de conexión al heredarlos de la clase conexion.php.
    -negocio.php
      -descripción general y propósito: recibir los datos de los formularios de registro de persona y del formulario de juego y enviarlos a la db.
      -responsabilidad y restricciones: instanciar los datos recibidos de los formularios, capturarlos y almacenarlos dentro de la db para así lograr
        guardarlos, no al revés, no puede llamar datos de la db.
      -dependencias: requiere para su funcionamiento los archivos conexion.php, jugador.php y persona.php.
    -persona.php
      -descripción general y propósito: recibe los datos del formulario de registro de usuario y así los envía a la db.
      -responsabilidad y restricciones: capturar los datos del formulario de registro de personas y así enviarlos a la db para almacenarlos, no puede invocar datos de la db solo enviar.
      -dependencias: necesita de los parámetros de conexión obtenidos al heredarlos de la clase conexion.php.

  -trabajo_poo_basedatos/css
    -estilos.css
      -descripción general y propósito: archivo para la estética del algoritmo
      -responsabilidad y restricciones: no maneja ningún dato, solamente estética para el algoritmo.
      -dependencias: no necesita de otros archivos para su funcionamiento.

  -trabajo_poo_basedatos/fonts
   -descripción general y propósito: carpeta destinada a las fuentes de texto utilizadas en el algoritmo.
   -responsabilidad y restricciones: no maneja datos, solo estética del algoritmo.
   -dependencias: no requiere de otros archivos para funcionar.

  -trabajo_poo_basedatos/img
    -descripción general y propósito: carpeta utilizada para almacenar imágenes y gif´s para la estética del algoritmo.
    -responsabilidad y restricciones: no maneja datos, solo estética del algoritmo, fondo de este y diferentes imágenes utilizadas a lo largo del proyecto.
    -dependencias: no requiere de ningún archivo para funcionar, solo debe ser enrutado hacia algún archivo.

  -trabajo_poo_basedatos/partes
    -formulario.php
      -descripción general y propósito: formulario de categorización disponible para el usuario para registrar sus respuestas y asignar un juego para el usuario.
      -responsabilidad y restricciones: registra las respuestas ingresadas por el usuario al momento de requerir un juego y las envía al archivo negocio.php para así capturarlas, enviarlas y
        almacenarlas en la db, solo envía datos, no captura datos, no invoca ningún dato alguno.
      -dependencias: requiere del archivo negocio.php para asi enviar las respuestas a ese archivo.
    -fotos.php
      -descripción general y propósito: mostrar en la primera pantalla juegos de ejemplo para asi dar a entender de que se trata nuestro proyecto.
      -responsabilidad y restricciones: solo muestra gif´s de juegos ejemplos, no trabaja con datos algunos, solo es estético.
      -dependencias: depende del archivo home.php e index.php ya que debe ser incluido por estos archivos para ser funcional.
    -juegos.php
      -descripción general y propósito: es una pestaña que muestra el juego ha sido seleccionado para el usuario al terminar de responder el formulario.
      -responsabilidad y restricciones: indica que juego ha sido seleccionado para el usuario, no registra ningún dato, solo es una vista.
      -dependencias: requiere de los archivos manternerlogeado.php y conexion.php para poder funcionar de manera óptima.

  -trabajo_poo_basedatos/login
    -cerrar.php
      -descripción general y propósito: cerrar la sesión iniciada por el usuario.
      -responsabilidad y restricciones: para poder cerrar sesión en nuestro algoritmo y así poder dar acceso a otras cuentas, no puede iniciar sesión ni registrar ningún dato alguno.
      -dependencias: no necesita de ningún archivo para funcionar.
    -manternerlogeado.php
      -descripción general y propósito: mantener al usuario en su cuenta al cambiar de pestaña.
      -responsabilidad y restricciones: mantiene al usuario con su cuenta logueada en todo momento hasta que el decida cerrarla, no puede cerrar sesión por sí mismo, no recibe ningún dato alguno.
      -dependencias: no requiere de otro archivo para funcionar.
    -valida.php
      -descripción general y propósito: validar que al intentar ingresar una cuenta sea de forma correcta al darle 4 intentos de ingreso de datos al usuario y captura de datos en la variable _SESSION.
      -responsabilidad y restricciones: almacena las variables de session y valida el ingreso de un usuario al intentar ingresar a una cuenta.
      -dependencias: requiere del archivo conexion.php para así lograr mantener una conexión directa a la db.


-Dependencias externas
  -BOOTSTRAP
  -XAMPP
  -FONTAWESOME
  -AJAX

-Diseño del modelo de datos
  -Es un diseño de orientado a objetos enfocado a persona y jugador, sin descartar las demás entidades a describir.
    -persona
      .id: Representa la clave primaria de la persona.
      .correo: correo electrónico del usuario para registrarse y poder contactarlo como se pide en los requisitos.
      .nombre: nombre del usuario a registrar.
      .clave: clave de la persona en cuestión para acceder a su cuenta.
      .apellido: apellido del usuario a registrar.
      .rut: campo único, rut de la persona a registrar.
      .telefono: número de teléfono para contactar al usuario.
      .validador: campo para contar los intentos de ingreso a la cuenta de un usuario.

    -categoría
      .id: Representa la clave primaria de la categoría.
      .categoria: define la categoría de los juegos a elegir.
      .valor_categoria: valor que se le asigna a cada categoría.

    -dedicacion
      .id: Representa la clave primaria de la dedicación.
      .horas: define las horas de dedicación de los juegos a elegir.
      .valor_dedicacion: valor que se le asigna a cada opción de dedicación.

    -externos
      .id: Representa la clave primaria de externos.
      .experiencia: define si el usuario tiene experiencia en alguna plataforma de gaming.
      .valor_externos: valor que se le asigna a cada opción de externos.

    -historial
      .id: representa la clave primaria de historial.
      .historial: define el historial personal del usuario en tema gaming.
      .valor_historial: valor que se le asigna a cada opción de historial.

    -pericia
      .id: representa la clave primaria de pericia.
      .pericia: define que rango de skill que el usuario sugiere que tiene.
      .valor_pericia: valor que se le asigna a cada opción de pericia.

    -preferencia
      .id: representa la clave primaria de preferencia.
      .preferencia: define que modalidad de juego prefiere el usuario.
      .valor_preferencia: valor que se le asigna a cada opción de preferencia.

    -tipo_jugador
      .id: representa la clave primaria de tipo de jugador
      .tipo_jugador: representa con qué tipo de jugador el usuario se identifica.
      .valor_tipo: valor que se le asigna a cada opción de tipo de jugador.

    -juego
      .id: representa la clave primaria de cada juego disponible.
      .juego_resultado: representa el nombre del juego que se le puede atribuir al usuario en base a sus respuestas.
      .valor_juego: es el valor de cada juego para que pueda ser asignado al usuario.

    -jugador
      .id_jugador: representa la clave primaria de jugador.
      .persona_id: clave foránea de la entidad persona.
      .externos_id: clave foránea de la entidad externos.
      .preferencia_id: clave foránea de la entidad preferencia.
      .pericia_id: clave foránea de la entidad pericia.
      .juego_id: clave foránea de la entidad juego.
      .dedicacion_id: clave foránea de la entidad dedicación.
      .historial_id: clave foránea de la entidad historial.
      .tipo_jugador_id: clave foránea de la entidad tipo_jugador.
      .categoria_id: clave foránea de la entidad categoría.

    -historico_usuarios
      .id : representa la clave primaria de historico_usuarios.
      .correo_hist : correo del usuario registrado y almacenado en el historial.
      .nombre_hist : nombre del usuario registrado y almacenado en el historial.
      .clave_hist : clave del correo del usuario registrado y almacenado en el historial.
      .apellido_hist : apellido del usuario registrado y almacenado en el historial.
      .rut_hist : rut del usuario registrado y almacenado en el historial.
      .telefono_hist : telefono del usuario registrado y almacenado en el historial.
      .fecha_hist : fecha en que el usuario se registró en el proyecto registrada y almacenada en el historial.
      .hora_hist : hora en el que el usuario se registró en el proyecto registrada y almacenada en el historial.

    -usuarios_eliminados
      .id: representa la clave primaria de usuarios_eliminados.
      .correo: correo del usuario eliminado registrado y almacenado en el historial.
      .nombre: nombre del usuario eliminado registrado y almacenado en el historial.
      .clave: clave del correo del usuario eliminado registrado y almacenado en el historial.
      .apellido: apellido del usuario eliminado registrado y almacenado en el historial.
      .rut: rut del usuario eliminado registrado y almacenado en el historial.
      .telefono: telefono del eliminado usuario registrado y almacenado en el historial.
      .fecha: fecha en que la cuenta del usuario se eliminó del proyecto registrada y almacenada en el historial.
      .hora: hora en el que la cuenta del usuario se eliminó del proyecto registrada y almacenada en el historial.

  -En este modelo se hace ingreso de datos por medio de formularios y se reciben datos de salida los cuales son adaptados
  y mostrados en tablas conectada directamente a la base de datos.
