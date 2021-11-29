@extends('layouts.user')

@section('title', 'Area Utente - Le tue Iscrizioni')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a><span class="separator">/</span></li>
        <li class="breadcrumb-item"><a href="#">Area Personale</a><span class="separator">/</span></li>
        <li class="breadcrumb-item active" aria-current="page">Le tue Iscrizioni</li>
    </ol>
@stop

@section('content')
    <!-- <div class="container position-relative" >
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-xl-12 position-static" style="min-height:80px;">
                
            </div>
        </div>
    </div> -->
   

    <section id="in-evidenza mt-1">
        <div class="bg-100 py-5">
            <div class="container px-4">
                <div class="row">
                    <div class="col p-2">
                        <h3 class="mb-4 text-primary">Le tue iscrisione</h3>
                    </div>
                </div>
                <div class="row py-3">
<!-- design for responsive table started -->
                    <div class="col" id="tables">
                        <div class="container bg-white col-md-12 col-sm-12">
                            <div class="table-responsive-sm table-responsive-lg table-responsive-md ">
                            <table class="table table-hover my-3 my-2 ">

                                <thead >
                                    <tr>
                                    <td scope="col" class="text-center  ">Numero Di Domanda</td>
                                    <td scope="col" class="text-center ">Status</td>
                                    <!-- <td scope="col" class="text-center  text-wrap">ID Evento</td> -->
                                    <td scope="col" class="text-center  text-wrap">Creazione</td>
                                    <td scope="col" class="text-center text-wrap">Modificato</td>
                                    <td scope="col" class="text-center text-wrap">Pagamenti</td>
                                    <td scope="col " class="text-center col-2" >Azioni</td>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <!-- <td></td> -->
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#"class=" p-1" >
                                                        <span class="rounded-icon">
                                                        <svg class="icon icon-primary ">
                                                        <use xlink:href="/svg/sprite.svg#it-password-visible"></use>
                                                        </svg>
                                                        </span>

                                                    </a>
                                                </div>
                                                <div class="col">
                                                <a href="#" class=" p-1" >
                                                    
                                                    <svg class="icon icon-danger">
                                                    <use xlink:href="/svg/sprite.svg#it-pencil"></use>
                                                    </svg>
                                                    

                                                </a>
                                                </div>
                                                <div class="col">
                                                <a href="#"class="p-1" >
                                                    <span class="rounded-icon">
                                                    <svg class="icon icon-sucess">
                                                    <use xlink:href="/svg/sprite.svg#it-file"></use>
                                                    </svg>
                                                    </span>                                         
                                                </a>
                                                </div>
                                            </div>
                                        

                                        </td>


                                        
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <!-- <td></td> -->
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td >
                                        <div class="row">
                                                <div class="col">
                                                    <a href="#"class=" p-1" >
                                                        <span class="rounded-icon">
                                                        <svg class="icon icon-primary ">
                                                        <use xlink:href="/svg/sprite.svg#it-password-visible"></use>
                                                        </svg>
                                                        </span>

                                                    </a>
                                                </div>
                                                <div class="col">
                                                <a href="#" class=" p-1" >
                                                    
                                                    <svg class="icon icon-danger">
                                                    <use xlink:href="/svg/sprite.svg#it-pencil"></use>
                                                    </svg>
                                                    

                                                </a>
                                                </div>
                                                <div class="col">
                                                <a href="#"class="p-1" >
                                                    <span class="rounded-icon">
                                                    <svg class="icon icon-sucess">
                                                    <use xlink:href="/svg/sprite.svg#it-file"></use>
                                                    </svg>
                                                    </span>                                         
                                                </a>
                                                </div>
                                            </div>
                                        </td>
                                   
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <!-- <td></td> -->
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td >
                                        <div class="row">
                                                <div class="col">
                                                    <a href="#"class=" p-1" >
                                                        <span class="rounded-icon">
                                                        <svg class="icon icon-primary ">
                                                        <use xlink:href="/svg/sprite.svg#it-password-visible"></use>
                                                        </svg>
                                                        </span>

                                                    </a>
                                                </div>
                                                <div class="col">
                                                <a href="#" class=" p-1" >
                                                    
                                                    <svg class="icon icon-danger">
                                                    <use xlink:href="/svg/sprite.svg#it-pencil"></use>
                                                    </svg>
                                                    

                                                </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#"class="p-1" >
                                                        <span class="rounded-icon">
                                                        <svg class="icon icon-sucess">
                                                        <use xlink:href="/svg/sprite.svg#it-file"></use>
                                                        </svg>
                                                        </span>                                         
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <!-- end of table design -->
                </div>
                <!-- start of cards part -->



                <div class="container px-4 pt-4" id="cards" onload="brdClr();">
                    <div class="row">
            <!-- start first card -->
                    <div class=" col-lg-6 col-sm-12">
                        <!--start card-->
  
                        <div class="card-wrapper card-space" id="card1">

                        <div class="card card-bg card-big " >
                            <div class="card-header bg-primary">
                                <span class="float-right text-white size-sm">Numero Di Domanda: -------------</span>
                            </div>
                           
                            <div class="card-body">
                            <h5 class="card-title text-primary text-center p-2">Nome Evento: <span></span></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class=" row text-center pt-5 mt-5">
                                    <!-- <div class="col-md-2"></div> -->
                                    <div class="col-md-4 px-2 my-1">
                                    <button type="button" class="btn btn-sm btn-block btn-outline-danger">Modifica</button>
                                    </div>
                                    <div class="col-md-4 px-2 my-1">
                                    <button type="button" class="btn btn-sm btn-block btn-outline-success">Logs</button>
                                    </div>
                                    <div class="col-md-4 px-2 my-1">
                                    <button type="button" class="btn btn-sm  btn-block btn-outline-primary">Visualizza</button>
                                    </div>
                                    <!-- <div class="col-md-1"></div> -->
                                </div>
                           
                            </div>
                            <span class="read-more pt-5 px-4">
                                <span class="text text-muted float-right">Last Modification: --------</span>
                            </span>
                        </div>
                        
                        </div>
                        <!--end card-->
                    </div>
                    <!--  end first card     -->
                    <div class=" col-lg-6 col-sm-12">
                        <!--start card-->
  
                        <div class="card-wrapper card-space " id="card2">

                        <div class="card card-bg card-big ">
                            <div class="card-header bg-primary">
                                <span class="float-right text-white size-sm">Numero Di Domanda: ------------- </span>
                            </div>
                            <div class="card-body">
                            <h5 class="card-title text-primary text-center p-2">Nome Evento: <span></span></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class=" row text-center pt-5 mt-5">
                                    <!-- <div class="col-md-2"></div> -->
                                    <div class="col-md-4 px-2 my-1">
                                    <button type="button" class="btn btn-sm btn-block btn-outline-danger">Modifica</button>
                                    </div>
                                    <div class="col-md-4 px-2 my-1">
                                    <button type="button" class="btn btn-sm btn-block btn-outline-success">Logs</button>
                                    </div>
                                    <div class="col-md-4 px-2 my-1">
                                    <button type="button" class="btn btn-sm  btn-block btn-outline-primary">Visualizza</button>
                                    </div>
                                    <!-- <div class="col-md-1"></div> -->
                                </div>
                           
                            </div>
                            <span class="read-more pt-5 px-4">
                                <span class="text text-muted float-right">Last Modification: --------</span>
                            </span>
                        </div>
                        
                        </div>
                        <!--end card-->
                    </div>
        
                    </div>
                </div>
       

   
                        <!-- prettier-ignore -->
                       
    </section>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/custom.css">--}}
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
