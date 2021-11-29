@extends('layouts.user')

@section('title', 'Area Utente - Pagamenti')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a><span class="separator">/</span></li>
        <li class="breadcrumb-item"><a href="#">Area Personale</a><span class="separator">/</span></li>
        <li class="breadcrumb-item active" aria-current="page">Pagamenti</li>
    </ol>
@stop

@section('content')
    <!-- <div class="container position-relative">
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
                        <h3 class="mb-4 text-primary">il tuo pagamento</h3>
                    </div>
                </div>
                <div class="row py-3">
<!-- design for responsive table started -->
                    <div class="col">
                        <div class="container bg-white col-md-12 col-sm-12">
                            <div class="table-responsive-sm table-responsive-lg table-responsive-md ">
                            <table class="table table-hover my-3 my-2 ">

                                <thead >
                                    <tr>
                                    <td scope="col" class="text-center  ">ID</td>
                                    <td scope="col" class="text-center ">Status Del Pagamento</td>
                                    <td scope="col" class="text-center  text-wrap">Dati Nel Mese Pagato</td>
                                    <td scope="col " class="text-center  text-wrap" >Ricevuta Di Pagamento</td>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="row">
                                               
                                                    <a href="#"class=" m-auto" >
                                                        <span class="rounded-icon">
                                                        <svg class="icon icon-primary ">
                                                        <use xlink:href="/svg/sprite.svg#it-note"></use>
                                                        </svg>
                                                        </span>

                                                    </a>
                                                
                                              
                                            </div>
                                        

                                        </td>


                                        
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td >
                                        <div class="row">
                                                
                                                    <a href="#"class="m-auto" >
                                                        <span class="rounded-icon">
                                                        <svg class="icon icon-primary ">
                                                        <use xlink:href="/svg/sprite.svg#it-note"></use>
                                                        </svg>
                                                        </span>

                                                    </a>
                                                
                                             
                                            </div>
                                        </td>
                                   
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td >
                                        <div class="row">
                                                
                                                    <a href="#"class=" m-auto" >
                                                        <span class="rounded-icon">
                                                        <svg class="icon icon-primary ">
                                                        <use xlink:href="/svg/sprite.svg#it-note"></use>
                                                        </svg>
                                                        </span>

                                                    </a>
                                                
                                              
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
        </div>
    </div>
    
                       
    </section>
@stop

@section('css')
    {{--    <link rel="stylesheet" href="/css/custom.css">--}}
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
