<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <style type="text/css">
      @font-face { font-family: "Lato-Light";
                src: url('assets/Lato-Light.ttf');
                 }
      html{
        font-family: "Lato-Light";
        background-color: white;
      }
      body{
        background-color: white;
      }
    </style>
  </head>
  <body>
  <div class="container">
    
      <div class="col s12 m7">
        <h2 class="header" id="title" style="background-color: '#f85a40'"></h2>
      </div>
      <div class="col s12 m12">
       Gracias por visitar nuestro programa de Embajadores Colombianos, con este formulario se registrará en nuestra plataforma de oportunidades sin compromiso. Luego de completar su registro nos pondremos en contacto para asesorarlo en su búsqueda y resolución de inquietudes.
      </div>
      <div class="input-field col s12">
         <i class="material-icons prefix">account_circle</i>
         <input id="txtFirstName" type="text" class="validate">
         <label for="txtFirstName">Primer nombre*</label>
      </div>
      <div class="input-field col s12">
         <i class="material-icons prefix">perm_identity</i>
         <input id="txtLastName" type="text" class="validate">
         <label for="txtLastName">Apellido*</label>
      </div>
      <div class="input-field col s12">
         <i class="material-icons prefix">phone</i>
         <input id="txtPhone" type="text" class="validate">
         <label for="txtPhone">Teléfono*</label>
      </div>
      <div class="input-field col s12">
         <i class="material-icons prefix">settings_cell</i>
         <input id="txtMobil" type="text" class="validate">
         <label for="txtMobil">Celular*</label>
      </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input id="txtmail" type="email" class="validate">
        <label for="email">Email*</label> 
      </div>
      <div class="input-field col s12">
        <i class="material-icons prefix" >account_balance</i>
         <select class="listas" id="lstUniversidad">
           <option value="" disabled selected>Seleccione una universidad</option>             
         </select>
         <label>Universidad*</label>
     </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
        <input id="txtPassword" type="password" class="validate">
        <label for="txtPassword">Clave*</label>          
      </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
        <input id="txtSecondPassword" type="password" class="validate">
        <label for="txtSecondPassword">Repita la Clave*</label>
      </div>
      

     <div class="input-field col s12">
        <i class="material-icons prefix">event</i>
         <select class="listas" id="lstEntereConvocatoria">
           <option value="" disabled selected>Como me entere</option>
           <option value="1">Universidad</option>
           <option value="2">Correo</option>
           <option value="3">Redes Sociales</option>
           <option value="4">WebSite</option>
           <option value="5">Stand</option>
           <option value="6">Evento o Cartelera</option>  
           <option value="7">Google</option>
           <option value="8">Medios de comunicación (Periódicos, Radio, TV, Artículos...)</option>
           <option value="9">Evento, foro o conferencia</option>
           <option value="10">Un amigo o conocido</option>           
         </select>
         <label>¿Cómo se enteró de la convocatoria?*</label>
     </div>

     <div class="input-field col s12">
        <i class="material-icons prefix">person pin circle</i>
         <select class="listas" id="lstPaisPreferencia">
         <option value="" disabled selected>País de preferencia</option>
           <option value="1">Brasil</option>
           <option value="2">Argentina</option>
           <option value="3">Perú</option>
           <option value="4">México</option>           
         </select>
         <label>País de preferencia</label>
     </div>


     <div class="input-field col s12">
        <i class="material-icons prefix">person pin circle</i>
         <select class="listas" id="lstPaisPreferenciaSegunda">
          <option value="" disabled selected>Segunda preferencia</option>
           <option value="1">Brasil</option>
           <option value="2">Argentina</option>
           <option value="3">Perú</option>
           <option value="4">México</option>           
         </select>
         <label>Segunda Preferencia</label>
     </div>

     <div class="input-field col s12">
        <i class="material-icons prefix">directions run</i>
         <select class="listas" id="lstOds">
          <option value="" disabled selected>ODS</option>
           <option value="1">Poner fin a la ​pobreza​ en todas sus formas en todo el mundo</option>
           <option value="2">Poner fin al hambre, lograr la ​seguridad alimentaria​ y la mejora de la nutrición​ y promover la ​agricultura sostenible</option>
           <option value="3">Garantizar una ​vida sana​ y promover el bienestar para todos en todas las edades</option>
           <option value="4">Garantizar una ​educación inclusiva​, equitativa y de calidad y promover oportunidades de ​aprendizaje durante toda la vida​ para todos</option>  
           <option value="5">Lograr la ​igualdad entre los géneros​ y empoderar a todas las mujeres y las niñas</option>  
           <option value="6">Garantizar la disponibilidad de ​agua​ y su gestión sostenible y el saneamiento para todos</option>  
           <option value="7">Garantizar el acceso a una ​energía​ asequible, segura, sostenible y moderna para todos</option>  
           <option value="8">Promover el crecimiento económico sostenido, inclusivo y sostenible, el ​empleo pleno​ y productivo y el ​trabajo decente​ para todos</option>  
           <option value="9">Construir ​infraestructuras​ resilientes, promover la ​industrialización inclusiva y sostenible y fomentar la ​innovación</option>  
           <option value="10">Reducir la desigualdad en y entre los países</option>  
           <option value="11">Lograr que las ciudades y los asentamientos humanos sean inclusivos, seguros, resilientes y sostenibles</option>  
           <option value="12">Garantizar modalidades de consumo y producción sostenibles</option> 
           <option value="13">Adoptar medidas urgentes para combatir el ​cambio climático​ y sus efectos</option> 
           <option value="14">Conservar y utilizar en forma sostenible los ​océanos​, los mares y los recursos marinos para el desarrollo sostenible</option> 
           <option value="15">Proteger, restablecer y promover el uso sostenible de los ecosistemas​ terrestres, gestionar los bosques de forma sostenible, luchar contra la ​desertificación​, detener e invertir la degradación de las tierras y poner freno a la pérdida de la ​diversidad biológica</option> 
           <option value="16">Promover sociedades ​pacíficas​ e inclusivas para el desarrollo sostenible, facilitar el acceso a la justicia para todos y crear instituciones eficaces, responsables e inclusivas a todos los niveles</option>  
           <option value="17">Fortalecer los medios de ejecución y revitalizar la Alianza Mundial para el Desarrollo Sostenible</option>  
           
         </select>
         <label>ODS</label>
     </div>
     
     <div class="input-field col s12">          
        <input type="checkbox" id="rbAceptoTerminos" />
        <label for="rbAceptoTerminos">Estoy de acuerdo con los <a id="btnTerminosCondiciones"> términos y condiciones de privacidad </a></label>
     </div>

    <div class="input-field col s12">
    <a class="waves-effect waves-light btn" id=btnIngresar style="background-color: '#f85a40'">Registrarse</a>
    </div>
  
  </div>
     <style type="text/css">
      @font-face { font-family: "Lato-Light";
                src: url('<?php echo Yii::app()->request->baseUrl; ?>/assets/Lato-Light.ttf');
                 }
      html,body{
        font-family: "Lato-Light";
        color: #5d5d5d;
      }
      #btnIngresar{
        background-color: #f85a40; 
      }
      #title{
        color: #f85a40; 
      }
      .material-icons{
        color: #f85a40; 
      }
    </style>
   <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ProductPackaging.js"></script>
  </body>
</html>
