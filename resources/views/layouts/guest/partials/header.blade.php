<div class="it-header-wrapper it-header-sticky">
    <div class="it-header-slim-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                        <span class="text-white">Area Riservata</span>
                        <div class="nav-mobile">
                            <nav>
                                <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu4" role="button"
                                    aria-expanded="false" aria-controls="menu4">
                                    <span>Ente appartenenza/Owner</span>
                                    <svg class="icon">
                                        <use xlink:href="/svg/sprite.svg#it-expand"></use>
                                    </svg>
                                </a>
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
                            <div class="it-access-top-wrapper">

                                 <a class="btn btn-primary btn-sm" href="{{route('enterlog')}}">Accedi</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="it-nav-wrapper">
        <div class="it-header-center-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-header-center-content-wrapper">
                            <div class="it-brand-wrapper">
                            <a href="#">
                                    <svg class="icon">
                                        <use
                                            xlink:href="/svg/sprite.svg#it-pa">
                                        </use>
                                    </svg>
                                    <div class="it-brand-text">
                                        <h2 class="no_toc">NOME CLIENTE</h2>
                                        <h3 class="no_toc d-none d-md-block">
                                            subarea nome cliente
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="it-right-zone">
                                <div class="it-socials d-none d-md-flex">
                                    <span>Seguici su</span>
                                    <ul>
                                        <li>
                                            <a href="#" aria-label="Facebook" target="_blank">
                                                <svg class="icon">
                                                    <use xlink:href="/svg/sprite.svg#it-facebook">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Github" target="_blank">
                                                <svg class="icon">
                                                    <use xlink:href="/svg/sprite.svg#it-github">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Twitter" target="_blank">
                                                <svg class="icon">
                                                    <use xlink:href="/svg/sprite.svg#it-twitter">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="it-search-wrapper py-4">
                                    <!-- <span class="d-none d-md-block">Cerca</span> -->

                                </div>
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
                            <button class="custom-navbar-toggler" type="button" aria-controls="nav02"
                                aria-expanded="false" aria-label="Toggle navigation" data-target="#nav02">
                                <svg class="icon">
                                    <use xlink:href="/svg/sprite.svg#it-burger"></use>
                                </svg>
                            </button>
                            <div class="navbar-collapsable" id="nav02" style="display: none;">
                                <div class="overlay" style="display: none;"></div>
                                <div class="close-div sr-only">
                                    <button class="btn close-menu" type="button"><span
                                            class="it-close"></span>close</button>
                                </div>
                                <!-- <div class="menu-wrapper">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class=" text-white nav-link text-primary {{ Route::is('user-dashboard') ? 'active' : '' }}" id="Dashboard"
                                            href="{{ route('user-dashboard') }}" role="tab" aria-controls="dashboard" aria-selected="true">
                                            <i class="fas fa-home fa-x  text-white"></i>
                                            Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="text-white nav-link text-primary {{ Route::is('user-anagrafica') ? 'active' : '' }}" id="anagrafica"
                                            href="{{ route('user-anagrafica') }}" role="tab" aria-controls="anagrafica" aria-selected="true">
                                            <i class="far fa-id-card fa-x text-white"></i>Anagrafica</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#">
                                            <a class="text-white nav-link text-primary {{ Route::is('user-documenti') ? 'active' : '' }}" id="documenti"  href="{{ route('user-documenti')}}"
                                            role="tab" aria-controls="user-documeni" aria-selected="true"  aria-selected="true">
                                            <i class="text-white far fa-folder-open fa-x"></i>Documenti</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class=" text-white nav-link text-primary {{ Route::is('user-iscrizioni') ? 'active' : '' }}" id="pratiche"
                                            href="{{ route('user-iscrizioni')}}" role="tab" aria-controls="pratiche" aria-selected="true">
                                            <i class="text-white far fa-file fa-x "></i>
                                            Tue Iscrizioni</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="text-white nav-link text-primary {{ Route::is('user-payment') ? 'active' : '' }}" id="pagamenti"  href="{{ route('user-pagamenti')}}"
                                            role="tab" aria-controls="pagamenti" aria-selected="false">
                                            <i class="far fa-credit-card fa-x "></i>
                                            Pagamenti</a>
                                        </li>

                                    </ul>
                                </div> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->



