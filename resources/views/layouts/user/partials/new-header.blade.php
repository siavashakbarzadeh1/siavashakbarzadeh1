<div class="it-header-wrapper it-header-sticky ">
    <div class="it-header-slim-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                        <span class="text-white">Area Riservata</span>
                        <div class="nav-mobile">
                            <nav>
                                <!-- <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu4" role="button"
                                    aria-expanded="false" aria-controls="menu4">
                                    <span>Ente appartenenza/Owner</span>
                                    <svg class="icon">
                                        <use xlink:href="/svg/sprite.svg#it-expand"></use>
                                    </svg>
                                </a> -->
                                <!-- <div class="link-list-wrapper collapse" id="menu4">
                                    <ul class="link-list">
                                        <li><a class="list-item" href="#"></a></li>
                                        <li><a class="list-item " href="#"></a></li>
                                    </ul>
                                </div> -->
                            </nav>
                        </div>
                        <div class="it-header-slim-right-zone">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <span>ITA</span>
                                    <svg class="icon d-none d-lg-block">
                                        <use xlink:href="/svg/sprite.svg#it-expand"></use>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list">
                                                    <li><a class="list-item" href="#"><span>ITA</span></a></li>
                                                    <li><a class="list-item" href="#"><span>ENG</span></a></li>
                                                    <li><a class="list-item" href="#"><span>GER</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- must put user access here -->
                            <div class="it-access-top-wrapper collapse">
                                <!-- <a class="btn btn-primary btn-sm" href="#">Accedi</a> -->
                                <a aria-expanded="false" class="btn btn-primary btn-icon btn-full"
                                   data-toggle="dropdown" href="#">
                                    <!-- <span class="rounded-icon">
                                        <img src="https://lorempixel.com/20/20/people"
                                            class="border rounded-circle icon-white" alt="Mario Rossi" />
                                    </span> -->
                                    @if(isset($UserMetadatas) && count($UserMetadatas) > 0 )
                                        @foreach($UserMetadatas as $UserMetadata)
                                            <h5 class="card-title mb-3">{{$UserMetadata->codicefiscale}} </h5>
{{--                                            <span class="d-none d-lg-block text-uppercase">sdinsm84r16h501i</span>--}}
                                        @endforeach
                                    @endif
{{--                                    <span class="d-none d-lg-block text-uppercase">sdinsm84r16h501i</span>--}}
                                    <svg class="icon icon-white d-none d-lg-block">
                                        <use
                                            xlink:href="/svg/sprite.svg#it-expand">
                                        </use>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list">
                                                    <li>
                                                        <a class="list-item" href="#"><span>I miei
                                                                    servizi</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="list-item" href="#"><span>Le mie
                                                                    pratiche</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="list-item" href="#"><span>Notifiche</span></a>
                                                    </li>
                                                    <li>
                                                        <span class="divider"></span>
                                                    </li>
                                                    <li>
                                                        <a class="list-item" href="#"><span>Impostazioni</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="list-item left-icon" href="#">
                                                            <svg class="icon icon-primary icon-sm left">
                                                                <use
                                                                    xlink:href="{{ asset('vendor/') }}/bootstrap-italia/dist/svg/sprite.svg#it-external-link">
                                                                </use>
                                                            </svg>
                                                            <span class="font-weight-bold">Esci</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="it-nav-wrapper  ">
        <div class="it-header-center-wrapper theme1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-header-center-content-wrapper">
                            <div class="it-brand-wrapper brand">
                                <a href="#">
                                    <!-- place for logo -->
                                    <!-- <img src="/images/logo1.png" width="70" style="filter: saturate(5);" class="rounded pr-4" height="70" alt=""> -->
                                    <div class="it-brand-text text-white">
                                        <h3 class="no_toc px-3">Agenzia Nazionale Per I Giovani</h3>
                                        <h4 class="no_toc d-none d-md-block">
                                            Iscrizioni online
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div class='it-right-zone'>
                                <img src="https://www.selexi.it/it/images/logo_selexi.svg" width="100" height="100" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-header-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--start nav-->
                        <nav class="navbar navbar-expand-lg has-megamenu">
                            <a class="navbar-brand" href="#"></a>
                            <button class="custom-navbar-toggler" type="button" aria-controls="nav02"
                                    aria-expanded="false" aria-label="Toggle navigation" data-target="#nav02">
                                <svg class="icon">
                                    <use xlink:href="/svg/sprite.svg#it-burger"></use>
                                </svg>

                            </button>
                            <div class="navbar-collapsable" id="nav02" style="display: none;">

                                <!--      user  acccess here            -->
                                <!--  -->
                                <div class="overlay"  style="display: none;"></div>
                                <div class="close-div sr-only">
                                    <button class="btn close-menu" type="button"><span
                                            class="it-close"></span>close</button>
                                </div>

                                <div class="menu-wrapper bg-primary menuSize">
                                    <h4 class="userName ">Mario Rossi</h4>
                                    <hr class='lineSep'>

                                    <ul class="navbar-nav" style="margin:0 auto;">
                                        <li class="nav-item ">
                                            <a  class="text-dec text-white  nav-link  {{ Route::is('user-dashboard') ? 'active1' : '' }}" id="Dashboard"
                                                href="{{ route('user-dashboard') }}" role="tab" aria-controls="dashboard" aria-selected="true">
                                                <i class="fas fa-home fa-x  text-white"></i>
                                                <span class="pl-2 txtSize">
                                            Dashboard
                                            </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="text-white text-dec nav-link {{ Route::is('user-anagrafica') ? 'active1' : '' }}" id="anagrafica"
                                               href="{{ route('user-anagrafica') }}" role="tab" aria-controls="anagrafica" aria-selected="true">
                                                <i class="far fa-id-card fa-x text-white"></i> <span class="pl-2 txtSize">
                                            Anagrafica
                                            </span></a>
                                        </li>
                                        <li class="nav-item">

                                            <a class="text-white text-dec nav-link {{ Route::is('user-documenti') ? 'active1' : '' }}" id="documenti"  href="{{ route('user-documenti')}}"
                                               role="tab" aria-controls="user-documeni" aria-selected="true"  >
                                                <i class="text-white far fa-folder-open fa-x"></i>
                                                <span class="pl-2 txtSize">
                                            Documenti Anagrafici
                                            </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class=" text-white text-dec nav-link  {{ Route::is('user-iscrizioni') ? 'active1' : '' }}" id="pratiche"
                                               href="{{ route('user-iscrizioni')}}" role="tab" aria-controls="pratiche" aria-selected="true">
                                                <i class="text-white far fa-file fa-x "></i>
                                                <span class="pl-2 txtSize">
                                                    Tue Iscrizioni
                                                    </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class=" text-white text-dec nav-link  {{ Route::is('user-pagamenti') ? 'active1' : '' }}" id="pratiche"
                                               href="{{ route('user-pagamenti')}}" role="tab" aria-controls="pratiche" aria-selected="true">
                                                <i class="text-white far fa-file fa-x "></i>
                                                <span class="pl-2 txtSize">
                                                    Pagamenti
                                                    </span>
                                            </a>
                                        </li>


                                    </ul>
                                    <div class=" btnExit">
                                        <a href="#" class=" exit-a text-decoration-none">Esci</a>
                                    </div>


                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
