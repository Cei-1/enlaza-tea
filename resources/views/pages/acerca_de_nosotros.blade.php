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
    <div class="page-header align-items-start min-vh-100 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('/img/bg-inicio-1.jpg'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Enlaza-TEA</h1>
                    <p class="text-lead text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum felis ipsum, vitae maximus est.</p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-1 justify-content-between ">
                <div class="col mt-0">
                    <div class="row mt-lg-n3 mt-md-n12 mt-n2 justify-content-center">
                        <div class="card card-plain mb-0" style="height: 340px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Lorem ipsum</h5>
                                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ultrices dolor, ac sodales arcu. Vestibulum commodo faucibus lectus, vitae euismod sapien tristique ac. Phasellus nec dolor leo. Integer elementum massa ac sapien consequat malesuada. Etiam tincidunt mi a ligula egestas, ac mollis odio efficitur. Praesent egestas dui vitae dictum laoreet. Maecenas blandit ex vitae tincidunt luctus.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row mt-lg-n3 mt-md-n11 mt-n2 justify-content-center">
                        <div class="card card-plain mb-0" style="height: 340px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Lorem ipsum</h5>
                                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ultrices dolor, ac sodales arcu. Vestibulum commodo faucibus lectus, vitae euismod sapien tristique ac. Phasellus nec dolor leo. Integer elementum massa ac sapien consequat malesuada. Etiam tincidunt mi a ligula egestas, ac mollis odio efficitur. Praesent egestas dui vitae dictum laoreet. Maecenas blandit ex vitae tincidunt luctus.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

    <!-- <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-1 justify-content-between">
            <div class="col">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                    <div class="card card-plain mb-11" style="height: 340px;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Desarrollo Web</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ultrices dolor, ac sodales arcu. Vestibulum commodo faucibus lectus, vitae euismod sapien tristique ac. Phasellus nec dolor leo. Integer elementum massa ac sapien consequat malesuada. Etiam tincidunt mi a ligula egestas, ac mollis odio efficitur. Praesent egestas dui vitae dictum laoreet. Maecenas blandit ex vitae tincidunt luctus.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                    <div class="card card-plain mb-9" style="height: 340px;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Soporte Técnico</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ultrices dolor, ac sodales arcu. Vestibulum commodo faucibus lectus, vitae euismod sapien tristique ac. Phasellus nec dolor leo. Integer elementum massa ac sapien consequat malesuada. Etiam tincidunt mi a ligula egestas, ac mollis odio efficitur. Praesent egestas dui vitae dictum laoreet. Maecenas blandit ex vitae tincidunt luctus.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    @include('layouts.footers.auth.footer')
@endsection