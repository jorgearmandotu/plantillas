<?php
/**
* Template Name: Plantilla de Contacto
*/
?>
<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <section>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
                <form class="formulario" action="formularioConAdjuntos3.php" id="formulario" method="post" enctype="multipart/form-data" name="formulario" runat="server" accept-charset="utf_8"> 
           <fieldset>
               <legend><strong>Contactos:</strong></legend>
            <div> 
                    <span class="notificacion">* Datos requeridos</span> 
                <ul>
                    <li> 
                    <label for="nombre">Nombre:<span class="requeridos">*</span></label> 
                        <input type="text" name="nombre" placeholder="Ivan Narvaez" required maxlength="50" /> </li>
                    <li>
                    <label for="email">Email:<span class="requeridos" >*</span></label> 
                    <input type="email" name="email" placeholder="ejemplo@micorreo.com" required maxlength="50" /> 
                        <span class="formatocorrecto">Formato correcto: "name@something.com"</span> </li>
                   <li> 
                    <label for="mensaje">Mensaje:<span class="requeridos">*</span></label> 
                       <textarea name="mensaje" cols="30" rows="6" required></textarea> </li>
                       
                    <li>
                        <p>Sí eres empresa y deseas una cotización no olvides adjuntar una copia del Rut y certificado de cámara de comercio, maximo 1mb por achivo</p>
                    </li>
                    <li>
                      <div id="enviando"><span>enviando espere... </span><img src="../imagenes/estilo/cargando_small.gif"></div>
                       <span>Rut: </span>
                        <input type= "file" name="Rut" id="rut">
                    </li>
                    <li>
                        <span>Cámara de comercio: </span><input type="file" name="camara" id="camara">
                    </li>
                    <li>
                        
                    <button class="submit" type="submit" name="submit" onclick="submit" id="enviarFormulario">Enviar mensaje</button> 
                    <button class="submit" type="reset" name="reset" onclick="reset" id="borrar">Borrar Todo</button>
                    </li>
                </ul>
                 <div id="result"></div>
            </div> 
            </fieldset>
        </form> 
  </section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>