<?php
    include('head.php');
?>

<body>
    
<div class="header-rg fixed">
  <div class="header-parent clearfix">

      <div class="logo"></div>

      <ul class="main-nav nav-right clearfix">
        <li><a href="index.php#preamble" class="hidden-sm">Inicio</a></li>
          <li class="selected"><a href="index.php#servicios" class="hidden-sm">Servicios</a></li>
          <li><a href="index.php#nosotros" class="hidden-sm">Nosotros</a></li>
          <li><a href="index.php#contacto" class="hidden-sm">Contacto</a></li>
      </ul>

      <div class="bu" onclick="bu()"><span></span><span></span><span></span><span></span></div>
      <script type="text/javascript">var bu=()=>{document.querySelector('.main-nav').classList.toggle('show');document.querySelector('.bu').classList.toggle('open')}</script>

  </div>
</div>

<div class="row" style="position:relative">
  <div class="col-md-6">
    <div class="padding-30">
      <div>
        <section id="icons-list" class="padding-t100 text-center">
        <a href="index.php" class="go-back">&#60; Regresar</a>
          <div class="row">
            <div class="col-md-12 tierra page-icon"><div class="icon img-contain"></div><div class="title">Asistencia técnica de proyectos agropecuarios</div></div>
          </div>
        </section>
      </div>

      <div class="margin-t50">
          <p class="page-desc subtitle text-left">Lorem ipsum.</p>
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


  <div class="img-right" style="background-image:url('./img/asesoria-en-proyectos-agropecuarios.jpg');"></div>

</div>

<?php
    include('footer.php');
?>

</body>
</html>