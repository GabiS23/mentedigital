@extends('principal.visita.layout_visita')

@section('content')
<style>
.fondo_componente{
    margin: 0 auto;
    background-color:#482359;
}
.banner-principal{
  align-items: center; 
}
.izquierda{
  height:500px;
  display: flex;
  align-items: center;
}
.contenido-izquierda{
  width: 100px;
}
.derecha{
  height:500px;
  display: flex;
  align-items: center;
}
.contenido-dr{
  width:300px;
}
.boton_personalizado{
    background-color:#EB5D1C;
    color:#fff;
    border-radius:50px;
    /* box-shadow: 2px 2px 5px #EB5D1C; */
}
.frace{
    padding-top: 100px;
    padding-botom:100px;
    text-align: center;
}
.section3{
    background-color:#f9f9f9;
    padding-top:50px;
    text-align:center;
}
/* Subscribe Section
--------------------------------*/
#subscribe {
  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(./visita/imagen_empresa/servicios/fotografia-comercia.svg) fixed center center;
  background-size: cover;
  padding: 80px 0;
}

#subscribe .subscribe-title {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

#subscribe .subscribe-text {
  color: #fff;
}

#subscribe .subscribe-btn-container {
  text-align: center;
  padding-top: 20px;
}

#subscribe .subscribe-btn {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 20px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
  color: #fff;
}

#subscribe .subscribe-btn:hover {
  background: #33A8FF;
  border: 2px solid #33A8FF;
}
/* slider */
</style>
<section class="section fondo_componente">
    <div class="container">
        <div class="row" style="padding:0;margin:0;">
            <div class="col-sm-12 col-md-7 col-lg-7"style="padding:0;margin:0;">
                <div class="izquierda">
                    <div class="contenido-iz" style="text-align:left;">
                        <p>¿List@ para potenciar tu marca?</p>
                        <br>
                        <h1>AGENCIA DE MARKETING DIGITAL 
                        Y CREACIÓN DE CONTENIDO 
                        PARA REDES SOCIALES
                        </h1>
                        <br>
                        <button type="button" class="btn btn-default boton_personalizado" >Mira nuestros servicios y planes</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5"style="padding:0;margin:0;">
                <div class="derecha">
                    <div class="contenido-dr"style="text-align:left;">
                        <img class="img-principal" src="./visita/imagen_empresa/img/mentedigital.png" alt="mente digital" height 30 style="height:500px;widht:400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section2">
    <div class="container">
        <div class="row" style="padding:0;margin:0;">
            <div class="col-sm-12 col-md-12 col-lg-12"style="padding:0;margin:0;">
                <div class="frace">
                    <h2>DIGITALIZAMOS TU MARCA</h2>
                    <p style="color:#000;">Nos especializamos en creación de contenido 
                    para redes sociales, generando una publicidad 
                    emocional y persuasiva</p>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./visita/imagen_empresa/slider/curso1a.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./visita/imagen_empresa/slider/curso1b.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./visita/imagen_empresa/slider/curso1c.jpg" class="d-block w-100" alt="...">
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
        </div>
    </div>
</section>

<section id="subscribe">
    <div class="container">
        <div class="row">
                <div class="col-md-8">
                    <div class="wow-fadeInUp">
                        <h3 class="subscribe-title">Suscribete en nuestras redes sociales</h3>
                        <p class="subscribe-text">Ahorra tiempo, consultanos tus dudas...</p>
                        </div>
                        <div class="col-md-4 subscribe-btn-container">
                        <a class="subscribe-btn"
                            href="https://www.facebook.com/Madak-Music-104466154267058/?modal=admin_todo_tour">Enviar mensaje por
                            facebook</a>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="servicio-catalogo">
                    <h2>NUESTROS SERVICIOS</h2>
                    <p style="color:#000">Destácate de la competencia y escala al éxito de tu negocio o marca personal</p>
                    <br><br>
                    <!-- servicio-catalogo -->
                    
                    <div class="seccion-productos">
            
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-3">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/branding-social-media.svg" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-3">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/diseno-grafico.svg" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-3">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/tiktok-comercio.svg" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-3">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/fotografia-comercia.svg" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-3">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/produccion-audiovisua.svg" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-3">         
                                <div class="card">
                                    <img src="./visita/imagen_empresa/servicios/desarrollo-web.svg" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin servicio catalogo -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop