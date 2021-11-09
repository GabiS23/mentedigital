@extends('principal.visita.layout_visita')

@section('content')
<style>
.titulo-seccion{
    text-align:center;
}
.mision{ 
    /* width: 90%; */
    border-radius: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding: 40px;
    text-align: center;
    background-color: #ffffff;
    border-botom: 6px solid #85c0ff;
}
.mision-titulo{
    color: rgb(39, 39, 39);
}
.mision-contenido{
    color: #5f5f5f;
    padding: 20px 20px 20px 20px;
    border: 10px;
}
</style>
<section class="section-global">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nosotros">
                    <br><br><br><br><br><br>
                    <div class="titulo-seccion">
                        <h2><b style="color:#EB5D1C;">SOBRE</b> NOSOTROS</h2>
                        <!-- <p style="color:#000"></p> -->
                        <br><br>
                    </div>
                    <!-- servicio-catalogo -->
                </div>
            </div>
            <div class="row " style="text-align: center;">
                <div class="col-sm-12 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                    <div class="mision">
                        <div class="mision-titulo">
                            <h2>MISIÓN</h2>
                        </div>
                        <p class="mision-contenido">
                            Transformar marcas humanizándolas 
                            y empoderar las mentes de los emprendedores 
                            que interactúa con nosotros.
                        </p>
                    </div>
                </div>
                <br>.
                <div class="col-sm-12 col-md-4 col-lg-4">
                </div>
                <br><br>
            </div>
            <div class="row " style="text-align: center;">
                <div class="col-sm-12 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                    <div class="mision">
                        <div class="mision-titulo">
                            <h2>VISIÓN</h2>
                        </div>
                        <p class="mision-contenido">
                        A. Crear, construir y desarrollar marcas 
                        poderosas con presencia efectiva en redes sociales.
                        <br><br>
                        B. Gestionar capacitaciones 
                        en marketing digital persuasivo.
                        </p>
                    </div>
                </div>
                <br>.
                <div class="col-sm-12 col-md-4 col-lg-4">
                </div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="mision">
                        <div class="mision-titulo">
                            <h2>VALORES</h2>
                        </div>
                        <p class="mision-contenido">
                        <b>PODER MENTAL</b><br>
                        Con nuestros pensamientos creamos al mundo.
                        <br><br>
                        <b>INNOVACIÓN</b><br>
                        Todo se transforma, nada permanece, solo el cambio.
                        <br><br>
                        <b>CREATIVIDAD</b><br>
                        La inteligencia divirtiéndose generando ideas
                        innovadoras.
                        <br><br>
                        <b>EXCELENCIA</b><br>
                        Proceso sin fin de mejora continua en la calidad.
                        <br><br>
                        <b>POSITIVIDAD</b><br>
                        Actitud positiva, la clave del éxito.
                        <br><br>
                        <b>ESPIRITU EMPRENDEDOR</b><br>
                        Convicción de éxito.
                        </p>

                    </div>
                    <br><br><br><br>
                <div class="col-md-4"></div>
            </div>
            
        </div>
    </div>
</section>
@stop