@extends('layouts.app')

@section('content')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            @include('layouts.navbars.guest.navbar')
        </div>
    </div>
</div>
<header class="main-content  mt-0">
    <!-- <div class="page-header align-items-start min-vh-100 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('/img/bg-inicio-1.jpg'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span> -->
    <div class="container pt-5 ">
        <div class="row justify-content-center sobre-nosotros">
            <div class="col-lg-12 text-center mx-auto">
                <h1 class="text-black mb-2 mt-5 titulo">Sobre Nosotros</h1>
                <h4 class="text-lead text-black mb-3"> Somos un grupo de personas comprometidas que, mediante una plataforma informática, busca:</h4>
                <div class="sobre-nosotros__lista">
                    <li>Ayudar a familiares de menores con TEA a conocer, entender y atender este padecimiento, por medio de capacitación accesible y gratuita, ASÍ como, con el enlace con especialistas en TEA de la región</li>
                    <li>Apoyar a Los especialistas en TEA a incrementar el número de consultas realizadas y las ganancias generadas por este concepto, además, a mejorar su organización y seguimiento de pacientes.</li>

                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</header>

<main class="container">

    <div class="nosotros">
        <div class="nosotros_contenido">
            <h2 class="nosotros_contenido__titulo text-center">Nuestra Historia</h2>
            <p>
                Enlaza TEA nace de una plática con nuestros colaboradores en el cual al abordar temas personales pudimos visualizar que el trastorno espectro autista es un diagnóstico que afecta tanto al familiar como al paciente, debido a que muchas veces los padres de niños con este padecimiento llegan a consulta sin más que un diagnóstico por parte del médico, careciendo así de información y de la capacitación básica necesaria, lo que les provoca gran ansiedad, estrés y preocupación que contagia a los niños pudiendo empeorar el problema.
            </p>
            <p>
                Nuestra finalidad es poder conectar con los familiares de los infantes diagnosticados y especialistas mostrando empatía con sus emociones.
            </p>
        </div>
        <img class="img-fluid " src="/img/tea-5.jpg" alt="...">
    </div>
    <div class="nosotros">
        <div class="nosotros__informacion">
            <h2 class="nosotros_contenido__titulo text-center">Misión</h2>
            <p>
                Contribuir a que familias con menores con TEA alcancen el máximo bienestar posible, mediante capacitación tecnológicamente accesible y gratuita, y servicios que permitan el enlace con especialistas en la materia, socialmente comprometidos, que brinden atención y seguimiento profesionales.
            </p>
        </div>
        <div class="nosotros__informacion">
            <h2 class="nosotros_contenido__titulo text-center">Visión</h2>
            <p>
                Ser una organización reconocida por su compromiso con el bienestar de las familias que cuentan con miembros con padecimientos mentales o físicos, crónicos y/o degenerativos, con un amplio depósito de capacitaciones gratuitas enfocadas a disminuir la ansiedad, frustración, estrés, miedo y confusión causadas por su diagnóstico; así como, con un directorio nacional e internacional de especialistas socialmente comprometidos, distinguidos por su seguimiento y atención profesionales.
            </p>
        </div>
    </div><!--End Nosotros-->
    <div class="valores">
        <div class="row row-cols-1 row-cols-md-1 g-3 justify-content-center-media">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mx-auto">
                    <h2 class="text-black mb-2 mt-5 titulo">Nuestros Valores</h2>
                    <!-- <p class="text-lead text-black">Cree una cuenta para tener acceso a nuestras capacitaciones, soporte tecnico
                y desarrollo de software a la medida.</p> -->
                </div>
            </div>
            <div class="card mb-3 " style="max-width: 70%;">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="/img/valor-responsabilidad.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-grid justify-content-center align-items-center">
                        <div class="card-body ">
                            <h5 class="card-title">Responsabilidad</h5>
                            <p class="card-text">Ser responsables en el aspecto social es muy importante para nosotros, que las familias cuenten con esa seguridad de que la información que se encuentra dentro de nuestra plataforma es verídica.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end-media">
                <div class="card height-230 mb-3 " style="max-width: 70%;">
                    <div class="row g-0 d-flex flex-row-reverse">
                        <div class="col-md-4" style="background-size: cover; background-position: center;">
                            <img src="/img/valor-honestidad.jpeg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Honestidad</h5>
                                <p class="card-text">La confianza y tranquilidad es lo algo que como empresa queremos transmitir hacia los familiares y especialistas que se sientan seguros de poder utilizarla.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card height-230 mb-3" style="max-width: 70%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/valor-compromiso.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Compromiso</h5>
                            <p class="card-text">Es fundamental para nosotros poder centrarnos y comprometernos dando el máximo de nuestras capacidades para seguir en constante mejora.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end-media">
                <div class="card height-230 mb-3" style="max-width: 70%;">
                    <div class="row g-0 d-flex flex-row-reverse">
                        <div class="col-md-4">
                            <img src="/img/valor-solidaridad.jpeg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Solidaridad</h5>
                                <p class="card-text">Ser solidarios y brindar una plataforma que pueda ayudar a este padecimiento mejorando la calidad de vida de las personas.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card height-230 mb-3" style="max-width: 70%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/valor-amor.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Amor</h5>
                            <p class="card-text">Tener la pasión y el amor en este proyecto social nos ayuda a poder impulsarnos y motivarnos, porque cuando de amor se trata, se entrega el corazón en cada acción que realizamos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@include('layouts.footers.auth.footer')
@endsection