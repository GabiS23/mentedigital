@extends('principal.visita.layout_visita')

@section('content')
<style>
.card{
  border: 0px solid !important;
  /* border: 1px solid rgba(0,0,0,.125); */
}
</style>
<br>
<section class="section fondo_componente">
    <div class="container">
        <div class="row" style="padding:0;margin:0;">
            <div class="col-sm-12 col-md-7 col-lg-7"style="padding:0;margin:0;">
                <div class="izquierda">
                    <div class="contenido-iz" style="text-align:left;">
                    <br><br>
                        <p>¿List@ para potenciar tu marca?</p>
                        <br>
                        <h1>AGENCIA DE MARKETING DIGITAL 
                        Y CREACIÓN DE CONTENIDO 
                        PARA REDES SOCIALES
                        </h1>
                        <br>
                        <button type="button" class="btn btn-default boton_personalizado" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;" >Mira nuestros servicios y planes</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5"style="padding:0;margin:0;">
                <div class="derecha">
                    <div class="contenido-dr"style="text-align:left;">
                        <img class="img-principal" src="./visita/imagen_empresa/img/mentedigital.png" alt="mente digital" height 30 style="height:400px;widht:500px;">
                    <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            <div class="frace">
                    <h2><b style="color:#EB5D1C;">DIGITALIZAMOS</b> TU MARCA</h2>
                    <p style="color:#000;">Nos especializamos en creación de contenido 
                    para redes sociales, generando una publicidad 
                    emocional y persuasiva</p>
                    <br>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./visita/imagen_empresa/slider/audivisual-ig.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./visita/imagen_empresa/slider/diseno-ig.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./visita/imagen_empresa/slider/fotografia-ig.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<br><br><br>

<section class="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="servicio-catalogo">
                    <br><br>
                    <h2><b style="color:#EB5D1C;">NUESTROS</b> SERVICIOS</h2>
                    <p style="color:#000">Destácate de la competencia y escala al éxito de tu negocio o marca personal</p>
                    <br><br>
                    <!-- servicio-catalogo -->
                    
                    <div class="seccion-productos">
            
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/branding-social-media.svg" class=" card-img-top" alt="...">
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/diseno-grafico.svg" class=" card-img-top" alt="...">
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/tiktok-comercio.svg" class="card-img-top" alt="...">
                                    
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/fotografia-comercia.svg" class="card-img-top" alt="...">
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/produccion-audiovisua.svg" class="card-img-top" alt="...">
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/desarrollo-web.svg" class="card-img-top" alt="...">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin servicio catalogo -->
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Contacto -->
                <div class="seccion-productos">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="formulario-contacto">
                                <h2><b style="color:#EB5D1C;">CON</b>TACTO</h2>
                                    <p style="color:#000">Nos encantaría escucharte y saber lo que necesitas</p>
                                    <br><br>
                                    <img src="./visita/imagen_empresa/logos/perfilFace.png" class="" alt="logo mente digital">
                                    <br>
                                    <div class="form-contenido thumbnail">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-input form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Nombre" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;font-weight: normal !important;">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-input form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Email" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;font-weight: normal !important;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-input form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Celular" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;font-weight: normal !important;">
                                            </div>

                                            <!-- <div class="form-outline">
                                                <textarea class="form-input  form-control" id="textAreaExample1" placeholder="Mensaje"
                                                    rows="4"></textarea>
                                            </div> -->
                                           
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="button" style="border-radius: 40px;background-color:#482359;border-color:#482359;padding: 10px 10px 10px 10px;
                                                border-radius: 50px;
                                                margin: 10px 0px 0px 0px;">Enviar</button>
                                            </div>
                                            <!-- <button class="btn btn-primary" label="Enviar"
                                                style="font-weight: bold; border-radius: 50px;"><i class="pi pi-envelope"
                                                    style="font-size: 1rem; width: 30px; font-weight: bold;"></i></button> -->
                                        </form>
                                        <br><br><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- fin contacto -->
            </div>
        </div>
    </div>
</section>
@stop