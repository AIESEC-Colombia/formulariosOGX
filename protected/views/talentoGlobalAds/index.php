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
        <h2 class="header" id="title" style="background-color: '#0a8eA0'">Talento Global</h2>
      </div>
      <div class="col s12 m12">
       Gracias por visitiar nuestro programa de talento Global, con este formulario se registrara en nuestra plataforma de oportunidades sin compromiso. Luego de completar su registro nos pondremos en contacto para asesorarlo en su búsqueda y resolución de inquietudes.
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
        <i class="material-icons prefix" >local_library</i>
         <select class="listas" id="lstCampos">
           <option value="" disabled selected>Campos de trabajos</option>             
         </select>
         <label>Campos de trabajos*</label>
     </div>
     <div class="input-field col s12">
        <i class="material-icons prefix">flight_land</i>
         <select class="listas" id="lstFechaViaje">
           <option value="" disabled selected>Cuando crees que sería la fecha de viaje?</option>
           <option value="1">De hoy a 6 meses</option>
           <option value="2">De 6 meses un año</option>
           <option value="3">Sin fecha fija pero quiero conocer más</option>        
         </select>
         <label>¿Cuando crees que ser�a la fecha de viaje?*</label>
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
       <i class="material-icons prefix">border_color</i>
         <select class="listas" id="lstNivelIngles">
           <option value="" disabled selected>Nivel de Inglés?</option>
           <option value="1">Básico</option>
           <option value="2">Intermedio</option>
           <option value="3">Avanzado</option>        
         </select>
         <label>¿Nivel de Inglés?*</label>
     </div>
     <div class="input-field col s12">
        <i class="material-icons prefix">rowing</i>
         <select class="listas" id="lstExperienciaTrabajo">
           <option value="" disabled selected>Experiencia de trabajo en el área de estudio?</option>
           <option value="1">Menos de 3 meses de experiencia</option>
           <option value="2">6 meses de experiencia</option>
           <option value="3">1 año de experiencia</option>   
           <option value="4">Más de 1 año de experiencia</option>        
         </select>
         <label>¿Experiencia de trabajo en el área de estudio?*</label>
     </div>
     <div class="input-field col s12">
        <i class="material-icons prefix">trending_up</i>
         <select class="listas" id="lstCarreraEstudiante">
           <option value="" disabled selected>Que carrera estudias/estudiaste?</option>
            <option value="1">Actividad física y del Deporte</option>
             <option value="2">Administración de Recursos Humanos</option>
             <option value="3">Administración de empresas</option>
             <option value="4">Agronomía</option>
             <option value="5">Antropología</option>
             <option value="6">Arqueología</option>
             <option value="7">Arquitectura</option>
             <option value="8">Arte</option>
             <option value="9">Astronomía</option>
             <option value="10">Bibliotecología</option>
             <option value="11">Biología</option>
             <option value="12">Biología Química</option>
             <option value="13">Ciencia Política y Gobierno</option>
             <option value="14">Ciencia y Tecnología de los Alimentos</option>
             <option value="15">Ciencias Ambientales</option>
             <option value="16">Comercio Internacional</option>
             <option value="17">Comunicación Social</option>
             <option value="18">Contaduría Pública y Auditoría</option>
             <option value="19">Derecho</option>
             <option value="20">Diseño Gráfico</option>
             <option value="21">Diseño Industrial</option>
             <option value="22">Diseño de Interiores</option>
             <option value="23">Diseño de Modas</option>
             <option value="24">Economía</option>
             <option value="25">Enfermería</option>
             <option value="26">Estadística</option>
             <option value="27">Farmacia</option>
             <option value="28">Filología</option>
             <option value="29">Filosofía</option>
             <option value="30">Finanzas</option>
             <option value="31">Física</option>
             <option value="32">Geografía</option>
             <option value="33">Geología</option>
             <option value="34">Historia</option>
             <option value="35">Historia del Arte</option>
             <option value="36">Ingeniería Administrativa</option>
             <option value="37">Ingeniería Catastral y Geodesia</option>
             <option value="38">Ingeniería Civil</option>
             <option value="39">Ingeniería Electrónica</option>
             <option value="40">Ingeniería Eléctrica</option>
             <option value="41">Ingeniería Industrial</option>
             <option value="42">Ingeniería Mecánica</option>
             <option value="43">Ingeniería Multimedia</option>
             <option value="44">Ingeniería de Desarrollo de Producto</option>
             <option value="45">Ingeniería de Procesos</option>
             <option value="46">Ingeniería de Producción</option>
             <option value="47">Ingeniería en Agrimensura</option>
             <option value="48">Ingeniería en Petróleos</option>
             <option value="49">Ingeniería en Sistemas</option>
             <option value="50">Ingeniería en Telecomunicaciones</option>
             <option value="51">Ingeniería mecatrónica</option>
             <option value="52">Licenciatura en Español y Literatura</option>
             <option value="53">Licenciatura en Lenguas Extranjeras/Modernas</option>
             <option value="54">Liderazgo Organizacional</option>
             <option value="55">Lingüística</option>
             <option value="56">Literatura</option>
             <option value="57">Matemática</option>
             <option value="58">Medicina</option>
             <option value="59">Mercadotecnia</option>
             <option value="60">Música</option>
             <option value="61">Nutrición y Dietética</option>
             <option value="62">Odontología</option>
             <option value="63">Pedagogía</option>
             <option value="64">Periodismo</option>
             <option value="65">Psicología</option>
             <option value="66">Psicopedagogía</option>
             <option value="67">Publicidad y Relaciones Públicas</option>
             <option value="68">Química</option>
             <option value="69">Relaciones Internacionales</option>
             <option value="70">Sociología</option>
             <option value="71">Tecnología en análisis y desarrollo de sistemas de Información</option>
             <option value="72">Tecnología en negocios internacionales</option>
             <option value="73">Teología</option>
             <option value="74">Trabajo Social</option>
             <option value="75">Traducción e Interpretación</option>
             <option value="76">Turismo</option>
             <option value="77">Veterinaria</option>
             <option value="78">Zootecnia</option>      
         </select>
         <label>¿Que carrera estudias/estudiaste?*</label>
     </div>
     <div class="input-field col s12">
        <i class="material-icons prefix">border_color</i>
         <select class="listas" id="lstSemestre">
           <option value="" disabled selected>Semestre?</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>   
           <option value="4">4</option> 
           <option value="5">5</option> 
           <option value="6">6</option> 
           <option value="7">7</option> 
           <option value="8">8</option> 
           <option value="9">9</option> 
           <option value="10">10</option> 
           <option value="11">Graduado</option> 
         </select>
         <label>¿Semestre?*</label>
     </div>
     <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
          <select class="listas" id="lstConocioOrganizacion">
            <option value="" disabled selected>Como conocia la organización</option>
            <option value="3">Google</option>
            <option value="4">Medios de comunicación(TV,Radio)</option>
            <option value="6">Redes sociales de un amigo</option>
            <option value="8">Página Web</option>
            <option value="9">Stand/Activación</option>
            <option value="10">Volantes o Publicidad impresa</option>
            <option value="11">Influencers</option>
            <option value="12">Instituto</option>
            <option value="13">Groupon</option>
          </select>
        <label>¿Cómo conoció AIESEC?*</label>
     </div>
     <div class="input-field col s12">          
        <input type="checkbox" id="rbAceptoTerminos" />
        <label for="rbAceptoTerminos">Estoy de acuerdo con los <a id="btnTerminosCondiciones"> términos y condiciones de privacidad </a></label>
     </div>

    <div class="input-field col s12">
    <a class="waves-effect waves-light btn" id=btnIngresar style="background-color: '#0a8eA0'">Registrarse</a>
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
        background-color: #0a8eA0; 
      }
      #title{
        color: #0a8eA0; 
      }
      .material-icons{
        color: #0a8eA0; 
      }
    </style>
   <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/talentoGlobalAds.js"></script>
  </body>
</html>
