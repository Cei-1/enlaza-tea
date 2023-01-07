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
    <div class="page-header align-items-start min-vh-10 pt-2 pb-6 m-3 border-radius-lg" style="background-image: url('/img/tea-2.jpeg'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container pt-6 pb-5 m-auto">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mx-auto">
                    <h4 class="text-lead text-white mb-2 mt-5">Se parte de nuestra familia, recuerda tranquilidad y confianza con</h4>
                    <h1 class="text-white mb-0 mt-2">Enlaza-TEA</h1>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="container m-auto d-flex  justify-content-center ">
    <div class="card border-dark mb-1" style="max-width: 950px; background:white;">
        <div class="row flex-row-reverse align-items-center g-0">
            <div class="col-md-4">
                <img src="/img/tea-1.jpeg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <h5 class="card-title">Nuestra Historia</h5>
                    <p class="card-text">Enlaza TEA nace de una plática con nuestros colaboradores en el cual al abordar temas personales pudimos visualizar que el trastorno espectro autista es un diagnóstico que afecta tanto al familiar como al paciente, debido a que muchas veces los padres de niños con este padecimiento llegan a consulta sin más que un diagnóstico por parte del médico, careciendo así de información y de la capacitación básica necesaria, lo que les provoca gran ansiedad, estrés y preocupación que contagia a los niños pudiendo empeorar el problema.
                        Nuestra finalidad es poder conectar con los familiares de los infantes diagnosticados y especialistas mostrando empatía con sus emociones.
                    </p>
                    <p class="card-text"><small class="text-muted">-Sher</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footers.auth.footer')
@endsection