<?php
    include('head.php');
?>

<body>
    
<div class="header-rg fixed">
  <div class="header-parent clearfix">

      <div class="logo"></div>

      <ul class="main-nav nav-right clearfix">
          <li><a href="#preamble" class="hidden-sm">Inicio</a></li>
          <li class="selected"><a href="#servicios" class="hidden-sm">Servicios</a></li>
          <li><a href="#nosotros" class="hidden-sm">Nosotros</a></li>
          <li><a href="#contacto" class="hidden-sm">Contacto</a></li>
      </ul>

      <div class="bu" onclick="bu()"><span></span><span></span><span></span><span></span></div>
      <script type="text/javascript">var bu=()=>{document.querySelector('.main-nav').classList.toggle('show');document.querySelector('.bu').classList.toggle('open')}</script>

  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="padding-30">
      <div>
        <section id="icons-list" class="padding-t100 text-center">
          <div class="row">
            <div class="col-md-12 lupa"><div class="icon img-contain"></div><div class="title">Realización y gestión de estudios ambientales</div></div>
          </div>
        </section>
      </div>

      <div class="margin-t50">
          <p class="subtitle text-left">De acuerdo a la LGEEPA, en todas sus modalidades (Informes Preventivos de Impacto Ambiental, Mani-festaciones de Impacto Ambiental, Estudios Técni-cos Justificativos, Cambios de Uso de Suelo, etc.), a nivel  regional,  municipal,  estatal  y  federal.  Así mismo  ofrecemos  seguimientos  ambientales  en cualquiera de las dependencias a las que aplique la actividad en cuestión</p>
      </div>

      <div id="contacto" class="row">
          <div class="padding-20">
          <div class="row margin-b50">
              <div class="col-md-10 col-md-offset-1">
              <h3 class="color-green margin-t50">CONTÁCTENOS</h3>
              <form class="frm-contact form-material" method="post" action="mail.php">
                  <div class="row">
                    <div class="group">
                        <input type="text" name="name" id="name" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="name">Nombre</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="group">
                        <input type="text" name="tel" id="tel" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="tel">Teléfono</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="group">
                        <input type="text" name="email" id="email" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="email">Correo</label>
                    </div>
                  </div>
                  

                <textarea class="margin-b20" name="message" placeholder="Mensaje"></textarea>
                <div class="row text-center"><button type="submit" class="btn-md btn-dark">Enviar</button></div>
              </form>
              </div>
          </div>
          </div>

      </div>
    </div>
  </div>


  <div class="col-md-6">
    right img
  </div>

</div>

</body>
</html>
