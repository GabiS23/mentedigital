@extends('principal.visita.layout_visita')

@section('content')
<style>
.card{
    border: 0px solid !important;
}
.formulario-contacto{
    text-align:center;
    padding-top:50px;
}
/* formulario  */
.formulario-servicio{
    width: 100%;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    background-color: #fff;
    border-radius: 50px;
}
.form-title{
    width: 100%;
    background-color: #2196F3;
    color: #fff;
    display: flex;
    padding: 30px 30px 30px 55px;
    border-top-left-radius: 50px 50px;
    border-top-right-radius: 50px 50px;
    text-transform: uppercase;
}
.form-contenido{
    padding: 30px 20px 20px 30px;
    border-radius:solid 2px rgb(241, 241, 241);
}
.form-input{
    padding: 10px 10px 10px 20px;
    border-radius: 50px;
    margin: 10px 0px 0px 0px;
    /* max-width: 600px; */
    width: 100%;
}
.section-global{
    padding-top:70px;
}
.section-global2{
    padding-top:30px;
    background-color:#f9f9f9;
}
.informacion{
    text-align:center;
    padding-top:40px;
}
.mapa{
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    margin: 0 20px 0 20px;
    width:500px;
    height:400px;
    align-item:center;
}
.map-responsive{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-responsive iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>
<section class="section-global" >
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
                                        <form action="mailto:mentedigitalbolivia@gmail.com" method="post" enctype="text/plain">
                                            <div class="form-group">
                                                <input type="text" name="Nombre" class="form-input form-control" placeholder="Nombre">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Correo" class="form-input form-control" placeholder="E-mail">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Celular" class="form-input form-control" placeholder="Celular">
                                            </div>
                                    
                                            <input type="submit" value="Enviar"  class="btn btn-primary" style="border-radius: 40px;background-color:#482359;border-color:#482359;padding: 10px 10px 10px 10px;border-radius: 50px;margin: 10px 0px 0px 0px;width:100%">
                                            <input type="reset" value="Reset" class="btn btn-primary" style="border-radius: 40px;background-color:#482359;border-color:#482359;padding: 10px 10px 10px 10px;border-radius: 50px;margin: 10px 0px 0px 0px;width:100%">
                                        </form>
                                        <br><br>
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
<section class="section-global2" >
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="informacion">
                    <h2><b style="color:#EB5D1C;">NUESTRA</b> OFICINA</h2>
                    <p style="color:#000"><b>Dirección</b></p>
                    <p style="color:#000">Av. Villarroel N° 1875 - Edificio Salvador 4B</p>
                    <p style="color:#000"><b>Teléfonos</b></p>
                    <p style="color:#000">+591 76985007 +591 74566201</p>
                    <p style="color:#000"><b>Correo</b></p>
                    <p style="color:#000">Contacto@mentedigital.com</p>
                    <br><br>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<section class="section-global" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3"></div>
            <div class="col-sm-12 col-md-6">
                <!-- Contacto -->
                <div class="seccion-productos">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">         
                                <div class="centrado" style="text-align:center;">
                                    <h2><b style="color:#EB5D1C;">NUESTRA</b> UBICACIÓN</h2>
                                    <p style="color:#000">Atención de lunes a sabado Hrs 8:00 a 19:00</p>
                                    <br>
                                    <div class="map-responsive">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.867067413322!2d-66.16142658450727!3d-17.37012846830473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37548b09c559b%3A0x6f3bd95c1759421f!2sMente%20Digital%20Bolivia!5e0!3m2!1ses!2sbo!4v1635808248069!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                    <br><br><br><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- fin contacto -->
            </div>
            <div class="col-sm-12 col-md-3"></div>
        </div>
    </div>
</section>
@stop
