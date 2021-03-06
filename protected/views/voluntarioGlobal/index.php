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
       Gracias por visitiar nuestro programa de Voluntario Global, con este formulario se registrara en nuestra plataforma de oportunidades sin compromiso. Luego de completar su registro nos pondremos en contacto para asesorarlo en su b煤squeda y resoluci贸n de inquietudes.
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
         <label for="txtPhone">Tel茅fono*</label>
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
           <option value="" disabled selected>Como conocio la organizaci贸n</option>
           <option value="3">Google</option>
            <option value="11">Facebook</option>
            <option value="12">Instagram</option>
            <option value="14">WhatsApp</option>
            <option value="26">Linkedin</option>
            <option value="27">Twitter</option>
            <option value="28">Correo</option>
            <option value="15">Un amigo o conocido</option>
            <option value="16">P醙ina Web</option>
            <option value="17">Stand/Activaci贸n</option>
            <option value="18">Evento, foro o conferencia</option>
            <option value="10">Youth Speak</option>
            <option value="20">Instituto</option>
            <option value="4">Medios de comunicaci贸n(Peri贸dicos, Radio, TV, Art铆culos...)</option>
            <option value="24">Referido de un AIESECo</option>
            <option value="25">Un amigo que ya tom贸 un intercambio</option>
            <option value="29">Otro</option>
         </select>
         <label>驴C贸mo conoci贸 AIESEC?*</label>
     </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
          <select class="listas" id="lstPorque">
            <option value="" disabled selected>Por qu茅 te quieres ir de intercambio </option>
            <option value="1">Conocer una nueva cultura</option>
            <option value="2">Contribuir con las SDG's</option>
            <option value="3">Desarrollarme</option>
           </select>
         <label>驴Por qu茅 te quieres ir de intercambio?*</label>
        </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">Cupon</i>
         <input id="txtCupon" type="text" class="validate">
         <label for="txtCupon">Tienes codigo de referido escribelo aqu铆.</label>
      </div>     
     <div class="input-field col s12">
        <input type="checkbox" id="rbAceptoTerminos" />
        <label for="rbAceptoTerminos">Estoy de acuerdo con los <a id="btnTerminosCondiciones"> t閞minos y condiciones de privacidad </a></label>
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