
<div class="it-header-wrapper it-header-sticky ">
    {{-- Toolbar area top --}}
    <div class="it-header-slim-wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                        <a class="d-lg-block navbar-brand" href="#"></a>
                        <div class="header-slim-right-zone">
                            <div class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#">
                                    <span>ITA</span>
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
                                                        <a class="list-item" href="#"><span>ITA</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="list-item" href="#"><span>ENG</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- @guest
                                @if (Auth::check()==false)
                                <button onclick="event.preventDefault(); window.location=this.getAttribute('href')" class="btn btn-primary btn-sm" href="{{route ('user-welcome')}}" type="button"> Accedi</button>
                                    {{-- <button onclick="event.preventDefault(); window.location=this.getAttribute('href')" class="btn btn-primary btn-sm" href="sso.ilmiotest.it/actArea={{$_SERVER['SERVER_NAME']}}" type="button"> Accedi</button> --}}
                            {{--    @endif
                            @endguest
                            {{-- @auth --}}
                                <div class="it-user-wrapper nav-item dropdown">
                                    <a aria-expanded="false" class="btn btn-primary btn-icon btn-full"
                                        data-toggle="dropdown" href="#">
                                        <span class="rounded-icon">
                                            <img src="https://lorempixel.com/20/20/people"
                                                class="border rounded-circle icon-white" alt="Mario Rossi" />
                                        </span>
                                        <span class="d-none d-lg-block">Mario Rossi</span>
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
                                                                        xlink:href="/svg/sprite.svg#it-external-link">
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
                            {{-- @endauth --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Header & Menu --}}
    <div class="it-nav-wrapper">
        <div class="it-header-center-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-header-center-content-wrapper">
                            {{-- Brand & Logo --}}
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
                            {{-- Social Area --}}
                            <div class="it-right-zone">
                                <div class="it-socials d-none d-md-flex">
                                    <span>Seguici su</span>
                                    <ul>
                                        <li>
                                            <a aria-label="Facebook" href="#" target="_blank">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/svg/sprite.svg#it-facebook">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Github" href="#" target="_blank">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/svg/sprite.svg#it-github">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-label="Twitter" href="#" target="_blank">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/svg/sprite.svg#it-twitter">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--access  -->
                                <div class="row">
                                    <div class="col p-0">
                                    <div class="it-search-wrapper">
                                    <!-- <span class="d-none d-md-block">access</span> -->
<!-- here -->
                                  <a aria-label="Accesss" class="search-link rounded-icon" title="area di accessibilità" href="#" onclick="dis_open();">
                                        <svg class="icon" >
                                            <use
                                                xlink:href="/svg/sprite.svg#it-user">
                                            </use>
                                        </svg>
                                    </a>
                                </div>
                                    </div>
                                <div class="col p-0">
                                <div class="it-search-wrapper">
                                    <span class="d-none d-md-block">Cerca</span>
                                    <a aria-label="Cerca" class="search-link rounded-icon" href="#">
                                        <svg class="icon">
                                            <use
                                                xlink:href="/svg/sprite.svg#it-search">
                                            </use>
                                        </svg>
                                    </a>
                                </div>
                                </div>

                                </div>
                                
  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Menu Header --}}
        <div class="it-header-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg has-megamenu">
                            <button aria-controls="nav10" aria-expanded="false" aria-label="Toggle navigation"
                                class="custom-navbar-toggler" data-target="#nav10" type="button">
                                <svg class="icon">
                                    <use
                                        xlink:href="/svg/sprite.svg#it-burger">
                                    </use>
                                </svg>
                            </button>
                            <div class="navbar-collapsable" id="nav10">
                                <div class="overlay"></div>
                                <div class="close-div sr-only">
                                    <button class="btn close-menu" type="button">
                                        <span class="it-close"></span>close
                                    </button>
                                </div>

                                <div class="menu-wrapper"  >
                                    <ul class="navbar-nav"  id="menuHam">
                                         <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('user-dashboard') }}">
                                                <span>Dashboard</span>

                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('user-anagrafica') }}">
                                                <span>Anagrafica</span>

                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('user-documenti')}}">
                                                <span>Documenti</span>

                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('user-iscrizioni')}}">
                                                <span>Le Tue Iscrizioni</span>

                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('user-pagamenti')}}">
                                                <span>Pagamenti</span>

                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>

                        </nav>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div style="min-height:50px" class="bg-primary">

</div>
</div>



