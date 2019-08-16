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
        <h2 class="header" id="title" style="background-color: '#f85a40'">Voluntario Global</h2>
      </div>
      <div class="col s12 m12">
       Gracias por visitiar nuestro programa de Voluntario Global, con este formulario se registrara en nuestra plataforma de oportunidades sin compromiso. Luego de completar su registro nos pondremos en contacto para asesorarlo en su búsqueda y resolución de inquietudes.
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
        <i class="material-icons prefix" >email</i>
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
        <i class="material-icons prefix">email</i>
         <select class="listas" id="lstConocioOrganizacion">
           <option value="" disabled selected>Como conocia la organización</option>
           <option value="1">Universidad</option>
           <option value="2">Redes sociales</option>
           <option value="3">Google</option>
           <option value="4">Medios de comunicación (Periódicos, Radio, TV, Artículos...)</option>
           <option value="5">Youth Speak</option>
           <option value="23">Comunidad KOF</option>
           <option value="24">Referido de un AIESECo</option>
           <option value="25">Un amigo que ya tomó un intercambio</option>
         </select>
         <label>¿Cómo conoció AIESEC?*</label>
     </div>

     <div class="input-field col s12">
        <i class="material-icons prefix">flight_land</i>
         <select class="listas" id="lstFechaViaje">
           <option value="" disabled selected>Cuando crees que sería la fecha de viaje?</option>
           <option value="1">De hoy a 6 meses</option>
           <option value="2">De 6 meses un año</option>
           <option value="3">Sin fecha fija pero quiero conocer más</option>
         </select>
         <label>¿Cuando crees que sería la fecha de viaje?*</label>
     </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">Cuponp</i>
         <input id="txtCupon" type="password" class="validate">
         <label for="txtCupon">Tienes codigo de referido escribelo aqu�.</label>
      </div>
     <div class="input-field col s12">
        <i class="material-icons prefix">group</i>
         <select class="listas" id="lstContactoPreferencia">
           <option value="" disabled selected>Preferencia de Contacto?</option>
           <option value="1">Correo Electrónico</option>
           <option value="2">Llamada</option>
           <option value="3">Whatsapp</option>
         </select>
         <label>¿Preferencia de Contacto?*</label>
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
   <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/voluntarioGlobal.js"></script>
  </body>
</html>
