
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
        margin-top: 40px;
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
        padding: 20px 20px 10px 20px;
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
        font-size: 12px;
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
        <a href="https://api.whatsapp.com/send?phone=5199999999" target="_blank">
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
                
            Somos una agencia que cree
            <br> 
            en la efectividad del poder
            <br>
            de una marca publicitada 
            <br>
            persuasivamente y también 
            <br> 
            en el poder de una mente 
            <br>
            informada.
            </p>
        </div>
        <div class="box_footer" style="align-items:center;">
            <h3 class="titulo-footer">NUESTRAS REDES SOCIALES </h3>
                <div class="inline" >
                    <a href=""><i class="icono-social fab fa-facebook-f"></i></a>
                    <a href=""><i class="icono-social fab fa-instagram"></i></a>
                    <a href=""><i class="icono-social fab fa-tiktok"></i></a>
                    <a href=""><i class="icono-social fab fa-whatsapp"></i></a>
                    <a href=""><i class="icono-social fab fa-google"></i></a>
                </div>
        </div>
        <div class="box_footer">
            <h3 class="titulo-footer">VISÍTANOS</h3>
            <p class="subtitulo-footer"> Dirección</p>
            <a class="contenido-footer">Calle 25 de mayo #780</a>
            <p class="subtitulo-footer">Teléfonos</p>
            <a class="contenido-footer" href="#">+591 79786476</a>
            <p class="subtitulo-footer">Correo</p>
            <a class="contenido-footer" href="#">madakmusic@gmail.com</a>
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
                        Mente digital - Cochabamba - Bolivia<a href="#" style="color: #fff;"></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <br><br>
    </div>
</div>
