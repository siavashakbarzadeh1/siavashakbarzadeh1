@extends('layouts.user')

@section('title', 'Area Utente - Welcome')

@section('breadcrumbs')
    <nav class="breadcrumb-container" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Area Personale</a><span class="separator">/</span></li>
            <li class="breadcrumb-item active" aria-current="page">Anagrafica</li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-xl-12 position-static">
                <h4 class="text-center">Bentornato Mario!</h4>
                <!-- @include('layouts.user.partials.navigation') -->
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!-- prettier-ignore -->
                <div class="tab-content mt-5 mt-md-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                        aria-labelledby="tab1-tab">
                        <div class="row pt-md-5">
                            <div class="col d-lg-inline-flex">
                                <h2>Le mie pratiche</h2>
                                <div class="dropdown ml-lg-5 mt-4 mt-lg-0">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton-pratiche" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Stato della pratica
                                        <span class="badge badge-light">4</span>
                                    </button>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-pratiche">
                                        <a class="dropdown-item d-flex justify-content-between align-items-center"
                                            href="#">
                                            <span>in bozza</span>
                                            <span class="badge badge-light">4</span>
                                        </a>
                                        <a class="dropdown-item" href="#">inviate</a>
                                        <a class="dropdown-item" href="#">in elaborazione</a>
                                        <a class="dropdown-item" href="#">accettate</a>
                                        <a class="dropdown-item" href="#">rifiutate</a>
                                        <a class="dropdown-item" href="#">da integrare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive my-5 shadow">
                                        <table class="table mb-0 bg-white">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <span>Servizio</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col">
                                                        <span>Categoria</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col"><span>Protocollo</span></th>
                                                    <th scope="col"><span>Data</span></th>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col"><span>Cancella</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">certificato di nascita</td>
                                                    <td class="align-middle">Anagrafe</td>
                                                    <td class="align-middle">hi6j2j5h6jrs9485d</td>
                                                    <td class="align-middle">10/02/2019</td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento TARI</td>
                                                    <td class="align-middle">Riscossione tasse</td>
                                                    <td class="align-middle">h34kr3j4h3jh3k4tr</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento contravvenzione</td>
                                                    <td class="align-middle">Attivit?? amministrativa</td>
                                                    <td class="align-middle">lk34kl3k309dmk4sd</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <nav class="pagination-wrapper justify-content-center"
                                        aria-label="Esempio di navigazione della pagina">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-left">
                                                        </use>
                                                    </svg>
                                                    <span class="sr-only">Pagina precedente</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-current="page">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link focus--mouse" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <span class="sr-only">Pagina successiva</span>
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-right">
                                                        </use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div class="row pt-md-5">
                            <div class="col d-lg-inline-flex">
                                <h2>Pagamenti</h2>
                                <div class="dropdown ml-lg-5 mt-4 mt-lg-0">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton-pagamenti" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Stato dei pagamenti
                                        <span class="badge badge-light">4</span>
                                    </button>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-pagamenti">
                                        <a class="dropdown-item d-flex justify-content-between align-items-center"
                                            href="#">
                                            <span>in bozza</span>
                                            <span class="badge badge-light">4</span>
                                        </a>
                                        <a class="dropdown-item" href="#">inviate</a>
                                        <a class="dropdown-item" href="#">in elaborazione</a>
                                        <a class="dropdown-item" href="#">accettate</a>
                                        <a class="dropdown-item" href="#">rifiutate</a>
                                        <a class="dropdown-item" href="#">da integrare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive my-5 shadow">
                                        <table class="table mb-0 bg-white">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <span>Servizio</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col">
                                                        <span>Categoria</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col"><span>Protocollo</span></th>
                                                    <th scope="col"><span>Data</span></th>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col"><span>Cancella</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">certificato di nascita</td>
                                                    <td class="align-middle">Anagrafe</td>
                                                    <td class="align-middle">hi6j2j5h6jrs9485d</td>
                                                    <td class="align-middle">10/02/2019</td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search') }}">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento TARI</td>
                                                    <td class="align-middle">Riscossione tasse</td>
                                                    <td class="align-middle">h34kr3j4h3jh3k4tr</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento contravvenzione</td>
                                                    <td class="align-middle">Attivit?? amministrativa</td>
                                                    <td class="align-middle">lk34kl3k309dmk4sd</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <nav class="pagination-wrapper justify-content-center"
                                        aria-label="Esempio di navigazione della pagina">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-left">
                                                        </use>
                                                    </svg>
                                                    <span class="sr-only">Pagina precedente</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-current="page">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link focus--mouse" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <span class="sr-only">Pagina successiva</span>
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-right">
                                                        </use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <div class="row pt-md-5">
                            <div class="col d-lg-inline-flex">
                                <h2>Documenti</h2>
                                <div class="dropdown ml-lg-5 mt-4 mt-lg-0">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton-documenti" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Filtro documenti
                                        <span class="badge badge-light">4</span>
                                    </button>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-documenti">
                                        <a class="dropdown-item d-flex justify-content-between align-items-center"
                                            href="#">
                                            <span>in bozza</span>
                                            <span class="badge badge-light">4</span>
                                        </a>
                                        <a class="dropdown-item" href="#">inviate</a>
                                        <a class="dropdown-item" href="#">in elaborazione</a>
                                        <a class="dropdown-item" href="#">accettate</a>
                                        <a class="dropdown-item" href="#">rifiutate</a>
                                        <a class="dropdown-item" href="#">da integrare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive my-5 shadow">
                                        <table class="table mb-0 bg-white">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <span>Servizio</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col">
                                                        <span>Categoria</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col"><span>Protocollo</span></th>
                                                    <th scope="col"><span>Data</span></th>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col"><span>Cancella</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">certificato di nascita</td>
                                                    <td class="align-middle">Anagrafe</td>
                                                    <td class="align-middle">hi6j2j5h6jrs9485d</td>
                                                    <td class="align-middle">10/02/2019</td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento TARI</td>
                                                    <td class="align-middle">Riscossione tasse</td>
                                                    <td class="align-middle">h34kr3j4h3jh3k4tr</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento contravvenzione</td>
                                                    <td class="align-middle">Attivit?? amministrativa</td>
                                                    <td class="align-middle">lk34kl3k309dmk4sd</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <nav class="pagination-wrapper justify-content-center"
                                        aria-label="Esempio di navigazione della pagina">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-left">
                                                        </use>
                                                    </svg>
                                                    <span class="sr-only">Pagina precedente</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-current="page">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link focus--mouse" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <span class="sr-only">Pagina successiva</span>
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-right">
                                                        </use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <div class="row pt-md-5">
                            <div class="col d-lg-inline-flex">
                                <h2>Messaggi</h2>
                                <div class="dropdown ml-lg-5 mt-4 mt-lg-0">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton-messaggi" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Stato dei messaggi
                                        <span class="badge badge-light">4</span>
                                    </button>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-messaggi">
                                        <a class="dropdown-item d-flex justify-content-between align-items-center"
                                            href="#">
                                            <span>in bozza</span>
                                            <span class="badge badge-light">4</span>
                                        </a>
                                        <a class="dropdown-item" href="#">inviate</a>
                                        <a class="dropdown-item" href="#">in elaborazione</a>
                                        <a class="dropdown-item" href="#">accettate</a>
                                        <a class="dropdown-item" href="#">rifiutate</a>
                                        <a class="dropdown-item" href="#">da integrare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive my-5 shadow">
                                        <table class="table mb-0 bg-white">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <span>Servizio</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col">
                                                        <span>Categoria</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col"><span>Protocollo</span></th>
                                                    <th scope="col"><span>Data</span></th>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col"><span>Cancella</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">certificato di nascita</td>
                                                    <td class="align-middle">Anagrafe</td>
                                                    <td class="align-middle">hi6j2j5h6jrs9485d</td>
                                                    <td class="align-middle">10/02/2019</td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento TARI</td>
                                                    <td class="align-middle">Riscossione tasse</td>
                                                    <td class="align-middle">h34kr3j4h3jh3k4tr</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento contravvenzione</td>
                                                    <td class="align-middle">Attivit?? amministrativa</td>
                                                    <td class="align-middle">lk34kl3k309dmk4sd</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <nav class="pagination-wrapper justify-content-center"
                                        aria-label="Esempio di navigazione della pagina">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-left">
                                                        </use>
                                                    </svg>
                                                    <span class="sr-only">Pagina precedente</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-current="page">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link focus--mouse" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <span class="sr-only">Pagina successiva</span>
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-right">
                                                        </use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                        <div class="row pt-md-5">
                            <div class="col d-lg-inline-flex">
                                <h2>Scadenze</h2>
                                <div class="dropdown ml-lg-5 mt-4 mt-lg-0">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton-scadenze" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Stato delle scadenze
                                        <span class="badge badge-light">4</span>
                                    </button>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-scadenze">
                                        <a class="dropdown-item d-flex justify-content-between align-items-center"
                                            href="#">
                                            <span>in bozza</span>
                                            <span class="badge badge-light">4</span>
                                        </a>
                                        <a class="dropdown-item" href="#">inviate</a>
                                        <a class="dropdown-item" href="#">in elaborazione</a>
                                        <a class="dropdown-item" href="#">accettate</a>
                                        <a class="dropdown-item" href="#">rifiutate</a>
                                        <a class="dropdown-item" href="#">da integrare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive my-5 shadow">
                                        <table class="table mb-0 bg-white">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <span>Servizio</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col">
                                                        <span>Categoria</span>
                                                        <svg class="icon icon-xs">
                                                            <use
                                                                xlink:href="/svg/sprite.svg#it-expand">
                                                            </use>
                                                        </svg>
                                                    </th>
                                                    <th scope="col"><span>Protocollo</span></th>
                                                    <th scope="col"><span>Data</span></th>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col"><span>Cancella</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">certificato di nascita</td>
                                                    <td class="align-middle">Anagrafe</td>
                                                    <td class="align-middle">hi6j2j5h6jrs9485d</td>
                                                    <td class="align-middle">10/02/2019</td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento TARI</td>
                                                    <td class="align-middle">Riscossione tasse</td>
                                                    <td class="align-middle">h34kr3j4h3jh3k4tr</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">pagamento contravvenzione</td>
                                                    <td class="align-middle">Attivit?? amministrativa</td>
                                                    <td class="align-middle">lk34kl3k309dmk4sd</td>
                                                    <td class="align-middle"></td>
                                                    <td class="align-middle">
                                                        <a href="#"
                                                            class="btn btn-secondary btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-search">
                                                                </use>
                                                            </svg>
                                                            <span>Dettagli</span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-danger btn-xs btn-icon"
                                                            role="button" aria-disabled="true">
                                                            <svg class="icon icon-white">
                                                                <use
                                                                    xlink:href="/svg/sprite.svg#it-close-big">
                                                                </use>
                                                            </svg>
                                                            <span>Elimina</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <nav class="pagination-wrapper justify-content-center"
                                        aria-label="Esempio di navigazione della pagina">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-left">
                                                        </use>
                                                    </svg>
                                                    <span class="sr-only">Pagina precedente</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-current="page">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link focus--mouse" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <span class="sr-only">Pagina successiva</span>
                                                    <svg class="icon icon-primary">
                                                        <use
                                                            xlink:href="/svg/sprite.svg#it-chevron-right">
                                                        </use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/custom.css">--}}
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
