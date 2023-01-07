@extends('layouts.app')

@section('content')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            @include('layouts.navbars.guest.navbar')
        </div>
    </div>
</div>
<main class="main-content  mt-0">
    <!-- <div class="page-header align-items-start min-vh-100 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('/img/bg-inicio-1.jpg'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span> -->
    <div class="container pt-6 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center mx-auto">
                <h1 class="text-black mb-2 mt-5">Sobre Nosotros</h1>
                <p class="text-lead text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum felis ipsum, vitae maximus est.</p>
            </div>
        </div>
    </div>
    <!-- </div> -->
</main>

<div class="container">
    <section>
        <div class="nosotros">
            <div class="nosotros_contenido">
                <h2>Nuestra Historia</h2>
                <p>
                    Enlaza TEA nace de una plática con nuestros colaboradores en el cual al abordar temas personales pudimos visualizar que el trastorno espectro autista es un diagnóstico que afecta tanto al familiar como al paciente, debido a que muchas veces los padres de niños con este padecimiento llegan a consulta sin más que un diagnóstico por parte del médico, careciendo así de información y de la capacitación básica necesaria, lo que les provoca gran ansiedad, estrés y preocupación que contagia a los niños pudiendo empeorar el problema.
                </p>

                <p>
                    Nuestra finalidad es poder conectar con los familiares de los infantes diagnosticados y especialistas mostrando empatía con sus emociones.
                </p>
            </div>
            <img class="nosotros__imagen" src="/img/tea-5.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        </div>
    </section>
    <div class="container dos-columnas ">
        <article class="informacion-mv">
            <h2>Misión</h2>
            <p>
                Ofrecer sevicios que faciliten y ayuden a familias con espectro autista (TEA), a través de capacitación, asesorías y atención profesional con la finalidad de cuidar la integridad y bienestar de los niños.
            </p>
        </article>
        <article class="informacion-mv">
            <h2>Visión</h2>
            <p>
                Ser una organización que garantice la atención necesaria a personas con TEA, brindando un servicio de calidad creando lazos entre los especialistas y los padres de familia para lograr un servicio sólido y un acompañamiento del mismo.
            </p>
        </article>
    </div>
    <section>
        <div class="row row-cols-1 row-cols-md-1 g-3 justify-content-center-media">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mx-auto">
                    <h2 class="text-black mb-2 mt-5">Nuestros Valores</h2>
                    <!-- <p class="text-lead text-black">Cree una cuenta para tener acceso a nuestras capacitaciones, soporte tecnico
                y desarrollo de software a la medida.</p> -->
                </div>
            </div>
            <div class="card mb-3 " style="max-width: 70%;">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="/img/v-libertad.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-grid justify-content-center align-items-center">
                        <div class="card-body ">
                            <h5 class="card-title">Libertad</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in odio gravida ligula dignissim efficitur varius sed orci. Maecenas ac commodo massa. Integer ac egestas odio.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end-media">
                <div class="card height-230 mb-3 " style="max-width: 70%;">
                    <div class="row g-0 d-flex flex-row-reverse-media">
                        <div class="col-md-4" style="background-size: cover; background-position: center;">
                            <img src="/img/v-excelencia.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Enseñanza</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in odio gravida ligula dignissim efficitur varius sed orci. Maecenas ac commodo massa. Integer ac egestas odio.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card height-230 mb-3" style="max-width: 70%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/v-puntualidad.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Respeto</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in odio gravida ligula dignissim efficitur varius sed orci. Maecenas ac commodo massa. Integer ac egestas odio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end-media">
                <div class="card height-230 mb-3" style="max-width: 70%;">
                    <div class="row g-0 d-flex flex-row-reverse-media">
                        <div class="col-md-4">
                            <img src="/img/v-trabajo-equipo.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Solidaridad</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in odio gravida ligula dignissim efficitur varius sed orci. Maecenas ac commodo massa. Integer ac egestas odio.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card height-230 mb-3" style="max-width: 70%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/v-responsabilidad.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Honestidad</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in odio gravida ligula dignissim efficitur varius sed orci. Maecenas ac commodo massa. Integer ac egestas odio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end-media">
                <div class="card height-230 mb-3" style="max-width: 70%;">
                    <div class="row g-0 d-flex flex-row-reverse-media">
                        <div class="col-md-4">
                            <img src="/img/v-honestidad.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Amor</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in odio gravida ligula dignissim efficitur varius sed orci. Maecenas ac commodo massa. Integer ac egestas odio.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-10 pt-2 pb-6 m-3 border-radius-lg" style="background-image: url('/img/tea-2.jpeg'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container pt-6 pb-5 m-auto">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mx-auto">
                    <h4 class="text-lead text-black mb-2 mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel neque sit amet felis dapibus.</h4>
                    <h1 class="text-black mb-0 mt-2">Enlaza-TEA</h1>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="container m-auto d-flex  justify-content-center ">
    <div class="card mb-0" style="max-width: 950px; background:white;">
        <div class="row flex-row-reverse align-items-center g-0">
            <div class="col-md-4">
                <img src="/img/tea-1.jpeg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <h5 class="card-title">titulo</h5>
                    <p class="card-text">Enlaza TEA nace de una plática con nuestros colaboradores en el cual al abordar temas personales pudimos visualizar que el trastorno espectro autista es un diagnóstico que afecta tanto al familiar como al paciente, debido a que muchas veces los padres de niños con este padecimiento llegan a consulta sin más que un diagnóstico por parte del médico, careciendo así de información y de la capacitación básica necesaria, lo que les provoca gran ansiedad, estrés y preocupación que contagia a los niños pudiendo empeorar el problema.
                        Nuestra finalidad es poder conectar con los familiares de los infantes diagnosticados y especialistas mostrando empatía con sus emociones.
                    </p>
                    <p class="card-text"><small class="text-muted">-Sher</small></p>
                </div>
            </div>
        </div>
    </div>
</div> -->

@include('layouts.footers.auth.footer')
@endsection