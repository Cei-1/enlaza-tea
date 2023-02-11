@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Inicio'])
<div class="container-fluid py-4">
    <div class="row">
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Nuevos Especialista</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <td class="w-30">
                                    <div class="container_dashboard_family">
                                        <div class="card">
                                            <center><img src="/img/Marie.jpg"></center>
                                            <h4>Luisa Angela Pacheco</h4>
                                            <p>Especialista reconocida</p>
                                            <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
                                                <span class="nav-link-text ms-1">Conoce más</span>
                                            </a>

                                        </div>

                                        <div class="card">
                                            <center><img src="/img/team-1.jpg"></center>
                                            <h4>Daniela Horta Delgado</h4>
                                            <p>Doctor</p>
                                            <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
                                                <span class="nav-link-text ms-1">Conoce más</span>
                                            </a>
                                        </div>

                                        <div class="card">
                                            <center><img src="/img/bruce-mars.jpg"></center>
                                            <h4>Brian Aguirre Guerra</h4>
                                            <p>Especialista</p>
                                            <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
                                                <span class="nav-link-text ms-1">Conoce más</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                            </tr>
                        </tbody>

                    </table>
                 
                </div>
                <a class="nav-link {{ str_contains(request()->url(), 'user-management') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'user-management']) }}">
                        <span class="nav-link-text ms-1">Ver más</span>
                    </a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Nuevas Infografias</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <td class="w-30">
                                    <div class="container_dashboard_family">
                                        <div class="card">
                                            <center><img src="/img/tea-3.jpeg"></center>
                                            <h4>Tips</h4>
                                            <p>Especialista reconocido</p>
                                            <a href="/img/tea-3.jpeg">Ver más</a>
                                        </div>

                                        <div class="card">
                                            <center><img src="/img/tea-4.jpeg"></center>
                                            <h4>Sabias que?</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
                                            <a href="/img/tea-4.jpeg">Ver más</a>
                                        </div>

                                        <div class="card">
                                            <center><img src="/img/tea-5.jpg"></center>
                                            <h4>Visitanos</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
                                            <a href="/img/tea-5.jpg">Ver más</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Nuevos Podcast</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <td class="w-30">
                                    <div class="container_dashboard_family">
                                        <div class="card">
                                            <center><img src="/img/Disc-1.jpg"></center>
                                            <h4>Tips</h4>
                                            <p>Especialista reconocido</p>
                                            <a href="/aud/audio-0001.mp3">Escuchame</a>
                                        </div>

                                        <div class="card">
                                            <center><img src="/img/Disc-1.jpg"></center>
                                            <h4>Sabias que?</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
                                            <a href="/aud/audio-0001.mp3">Escuchame</a>
                                        </div>

                                        <div class="card">
                                            <center><img src="/img/Disc-1.jpg"></center>
                                            <h4>Visitanos</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
                                            <a href="/aud/audio-0001.mp3">Escuchame</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection

@push('js')
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#2F6DF1",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>
@endpush