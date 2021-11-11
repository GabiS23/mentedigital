
<style>
    .footer {
        width: 100%;
        padding: 0px 0px;
        background-color: #482359;
        color: #fff;
    }

    .container_footer {
        display: flex;
        /*separar en columnas */
        flex-wrap: wrap;
        /*se pongan una debajo de otra*/
        justify-content: space-between;
        /*espacio completo*/
        max-width: 1250px;
        margin: auto;
        /*espacio de arriba*/
    }

    .logo_footer {
        position: static !important;
        width: 100%;
        text-align: center;
        /* margin-top:0px; */
    }

    .box_footer1 {
        display: flex;
        /*para que los elementos se pongan uno ensima de otro*/
        flex-direction: column;
        padding: 10px 20px 10px 20px;
    }
    .box_footer {
        display: flex;
        /*para que los elementos se pongan uno ensima de otro*/
        flex-direction: column;
        padding: 10px 20px 20px 20px;
    }

    .box_footer .logo img {
        width: 150px;
        
    }

    .box_footer .terms {
        max-width: 350px;
        margin-top: 20px;

        color: #ffffff;
        /* font-size: px; */
    }

    .box_footer h6 {
        margin-bottom: 18px;
        /*espacio del titulo  y los links*/
        color: #ffffff;
    }

    .box_footer a {
        margin-top: 10px;
        color: #ffffff;
        font-size: 15px;
        border-radius: 50%;
    }
    i.fas {
        display: inline-block;
        border-radius: 60px;

        box-shadow: 0px 0px 2px #fff;
        padding: 0.1em 0.2em;
    }

    .box_footer a:hover {
        color: rgb(231, 231, 231);
    }

    .box_footer a .fa {
        font-size: 25px;
        display: inline;
    }

    .box_copyright {
        max-width: 1200px;
        margin: auto;
        text-align: center;
        padding: 0px 10px;
        font-size: 12px;
    }
    *, ::after, ::before {
    box-sizing: border-left;
    }
    .box_copyright p {
        margin-top: 0px;
        margin-bottom: 20px;
        color: #7a7a7a !important;
        font-size: 10px;
    }

    .box_copyright hr {
        border: none;
    }

    .titulo-footer {
        text-align: left;
        color: white;
        display: flex;
        text-decoration: none;
        padding: 0;
    }

    .subtitulo-footer {
        color: white;
        margin-top: 5px;
        display: flex;
        text-align: left;
        text-decoration: none;
        margin-bottom: 0 !important;
    }

    .contenido-footer {
        color: white;
        /* font-size: 12px; */
        margin-top: 0px !important;
        display: flex;
        text-align: left;
        text-decoration: none;

    }

    .img-footer {
        height: 50px;
        padding: 2px;
    }

    .inline {
        align-items: inline;
    }
    @media only screen and (max-width: 595px) {
        .logo_footer {
        position: static !important;
        width: 100%;
        text-align: left;
        /* margin-top:0px; */
        }
    }
    .btn-whatsapp {
        display:block;
        width:70px;
        height:70px;
        color#fff;
        position: fixed;
        right:20px;
        bottom:20px;
        border-radius:50%;
        line-height:80px;
        text-align:center;
        z-index:999;
}
</style>

<div class="footer">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=+59176985007" target="_blank">
        <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
    <div class="container_footer">
        <div class=" box_footer1 logo_footer">
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                    <img src="./visita/imagen_empresa/logos/logo-blanco.png" alt="..." height="100" class="imgzoom p-mr-2 ng-star-inserted">
                    </div>
                </div>
               
            </div>

        </div>
        <div class="box_footer" >
            <h3 class="titulo-footer">SOBRE NOSOTROS</h3>
            <p class="contenido-footer">
            Somos una agencia que cree en la <br> 
            efectividad del poder de una marca <br> 
            publicitada persuasivamente y también <br> 
            en el poder de una mente informada.<br> <br> 

            La creación de contenido para redes <br> 
            sociales se basa en el conocimiento <br> 
            actualizado sobre marketing digital <br> 
            desde una perspectiva de psicología <br> 
            del consumidor.

            </p>
        </div>
        <div class="box_footer">
            <h3 class="titulo-footer">UBICACIÓN</h3>
            <a class="subtitulo-footer"> Dirección</a>
            <p class="contenido-footer">Av. Villarroel N° 1875 - Edificio Salvador 4B</p>
            <a class="subtitulo-footer">Teléfonos</a>
            <p class="contenido-footer" href="#">+591 76985007
                    +591 74566201</p>
            <a class="subtitulo-footer">Correo</a>
            <p class="contenido-footer" href="#">Contacto@mentedigital.com</p>
            <br>
                <div class="inline"  >
                
                    <a href="https://www.facebook.com/mentedigitalboliviaa/" target="_blank" class="icono-socia"><i target="_blank" class="icono-social fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/mentedigitalbolivia/?hl=es" target="_blank" class="icono-socia"><i class="icono-social fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/search?q=mentedigitalbolivia&t=1636655640608" target="_blank" class="icono-socia"><i class="icono-social fab fa-tiktok"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=+59176985007" target="_blank" class="icono-socia"><i class="icono-social fab fa-whatsapp"></i></a>
                    <a href="mailto:mentedigitalbolivia@gmail.com" target="_blank" class="icono-socia"><i class="icono-social far fa-envelope"></i></a>
                </div>
        </div>
        <div class="box_footer">
            <h3 class="titulo-footer">SEVICIOS</h3>
            <br>
            <p class="contenido-footer">Branding estratégico</p>
            <p class="contenido-footer">Social media marketing</p>
            <p class="contenido-footer">Creación y diseño de contenido gráfico</p>
            <p class="contenido-footer">Tik tok comercial</p>
            <p class="contenido-footer">Producción fotográfica comercial</p>
            <p class="contenido-footer">Producción audiovisual publicitario</p>
            <p class="contenido-footer">Desarrollo Web</p>

            <!-- <a class="subtitulo-footer">Formación en marketing digital</a>
            <p class="contenido-footer" href="#">Cursos y conferencias web</p>
            <p class="contenido-footer" href="#">Capacitaciones personalizadas para empresas</p>
            <p class="contenido-footer" href="#">Asesoramiento en línea</p> -->
        </div>
    </div>
    <div class="box_copyright">
        <hr>
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        Mente digital<a href="#" style="color: #fff;"></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <br><br>
    </div>
</div>
