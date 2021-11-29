<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.mltlog.partials.head')
    @inject('SPIDAuth', 'SPIDAuth')
    @extends('layouts.app')
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <link href="{{ asset('css/bootstrap-italia.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap-italia-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap') }}" rel="stylesheet">
</head>

<body id="body"  >

@include('layouts.mltlog.partials.header')
<main>

    <div class=" access acc-btn ">
        <!-- <span class="d-none d-md-block">Cerca</span> -->
        <a class="btn  "  href="#">
            <svg stroke="#0066cc" fill="#0066cc" data-toggle="modal" width="70"height="70" data-target="#modalLeft"   class="rounded-circle" data-backdrop="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63"><defs></defs><title>Asset 10</title><circle class="a" cx="31.49" cy="16.08" r="5.5" transform="translate(-2.14 26.98) rotate(-45)"/><path class="a" d="M47.62,22.28a88.73,88.73,0,0,1-32.25,0,1.63,1.63,0,0,0-1.92,1.32,1.64,1.64,0,0,0,1.32,1.92,92,92,0,0,0,10.92,1.34,2.62,2.62,0,0,1,2.42,2.93l-.32,2.75a54.14,54.14,0,0,1-3,12.67l-2,5.35a1.65,1.65,0,0,0,3.09,1.16v0l.49-1c1.6-3.41,3.09-6.9,4.45-10.43a.74.74,0,0,1,1.38,0c1.36,3.53,2.85,7,4.45,10.44l.51,1.09h0a1.64,1.64,0,0,0,1.48,1,1.6,1.6,0,0,0,.57-.11,1.64,1.64,0,0,0,1-2.12l-2-5.35a54.67,54.67,0,0,1-3-12.67l-.31-2.77a2.61,2.61,0,0,1,2.42-2.91,92.51,92.51,0,0,0,10.83-1.32,1.73,1.73,0,0,0,1.44-1.67A1.65,1.65,0,0,0,47.62,22.28Z"/><path class="b" d="M31.5,0A31.5,31.5,0,1,0,63,31.5,31.53,31.53,0,0,0,31.5,0Zm0,60A28.5,28.5,0,1,1,60,31.5,28.54,28.54,0,0,1,31.5,60Z"/></svg>




            <!-- <img src=""   alt="" srcset="" > -->
        </a>
    </div>

    <!-- Modal -->
    <div class="modal it-dialog-scrollable fade mx-4 my-4" tabindex="-1" role="dialog" id="modalLeft">
        <div class="modal-dialog modal-dialog-left" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color ">
                    <h5 class="modal-title text-white text-center">
                        menu accessibilità
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
                        <svg class="icon icon-md icon-white " >
                            <use xlink:href="/svg/sprite.svg#it-close"></use>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container my-4 ">
                        <!-- row1==contrast part -->
                        <div class="row p-4">
                            <div class="col-md-4 mb-2">
                                <img src="/images/brightness.png" class="mx-auto d-block " style="width:40px;height:40px; cursor:pointer;" onclick="sfondo_nero();" alt="" srcset="">
                                <p class="text-center">Sfondo Nero</p>
                            </div>

                            <div class="col-md-4  mb-2">
                                <img src="/images/gray.png" class="mx-auto d-block"  style="width:40px;height:40px;cursor:pointer;" onclick="scala_grigi();" alt="">
                                <p class="text-center">scala Di Grigi</p>
                            </div>

                            <div class="col-md-4 mb-2 ">
                                <img src="/images/sun.png" class="mx-auto d-block" style="width:40px;height:40px;cursor:pointer;" onclick="defaults_them()" alt="">
                                <p class="text-center">Default</p>
                            </div>
                        </div>
                        <hr class="divider">
                        <!-- row 2=text size -->
                        <div class="row py-3">
                            <div class="col-md-4 mb-2 ">
                                <img src="/images/t.png" class="mx-auto d-block"  style="width:20px;height:20px;cursor:pointer;" onclick="javascript:body.style.fontSize='0.85em';" alt="">
                                <p class="text-center">Testo Piccolo</p>
                            </div>

                            <div class="col-md-4 mb-2">
                                <img src="/images/t.png" class="mx-auto d-block"style="width:30px;height:30px;cursor:pointer;" onclick="javascript:body.style.fontSize='1.00em';" alt="">
                                <p class="text-center">Testo Medio</p>
                            </div>

                            <div class="col-md-4 mb-2">
                                <img src="/images/t.png" class="mx-auto d-block"  style="width:40px;height:40px;cursor:pointer;" onclick="javascript:body.style.fontSize='1.5em';" alt="">
                                <p class="text-center">Testo Grande</p>
                            </div>
                        </div>
                        <hr class="divider">
                        <!-- cursor size -->
                        <div class="row py-3">
                            <div class="col-md-6 mb-2">


                                <img src="/images/cursor.png" class="mx-auto d-block" style="width:40px;height:40px;cursor:pointer;margin:0 auto;" alt="" onclick="cursor();">
                                <p class="text-center">Grande Cursore</p>
                            </div>

                            <div class="col-md-6 mb-2">
                                <img src="/images/cursor2.png" class="mx-auto d-block"  style="width:20px;height:20px;cursor:pointer;margin:0 auto;" alt="" onclick="defaultCursor();">
                                <p class="text-center">Cursore Predefinito</p>
                            </div>
                        </div>
                        <hr class="divider">

                        <!-- zoom part -->
                        <div class="row py-3">
                            <div class="col-md-6 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="/images/lop.png" class="mx-auto d-block " style="width:30px;height:30px;"   alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="range" id="myrange" class="mx-auto d-block py-3  range-style "  min="50" max="150" value="100" onchange="zoom(this.value);">
                                    </div>
                                    <div class="col-md-12">
                                        <span id="showper" class="text-center mx-auto d-block">100 %</span>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <span style="cursor:pointer; margin:3px auto;" onclick="default_zoom();" class="my-3 py-4 text-primary h6 mx-auto d-block text-center mx-3 my-1 text-center text-"> Reset Zoom </span>

                            </div>




                        </div>
                        <hr class="divider">
                        <!-- screen reader -->
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <a href="https://www.nvaccess.org/">
                                    <img src="/images/windows.png" class=" rounded mx-auto d-block" style="cursor:pointer;width:120px;height:120px;"  onclick="default_zoom();" alt="">
                                    <span class="h6 text-center d-block mx-auto pt-3">NV Acess Per Windows</span>
                                </a>
                            </div>
                            <div class="col-md-6 mb-2">
                                <a href="https://wiki.gnome.org/Projects/Orca/">
                                    <img src="/images/ububtu.jpg" class=" rounded mx-auto d-block" style="cursor:pointer;width:120px;height:120px;"  onclick="default_zoom();" alt="">
                                    <span class="h6 text-center d-block mx-auto pt-3">Orca per Ubuntu</span>
                                </a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <p class="px-3 py-3 text-justify text-primary ">
                                    La preghiamo di consultare la relativa documentazione riguardo il loro utilizzo cliccando su uno dei precedenti link. Verrà indirizzato su un sito esterno.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-white mb-5">
                    <button class=" btn btn-block btn-outline-primary rounded" type="button" data-dismiss="modal" aria-label="Close" >
                        <h6  class="text-center text-primary" style="text-decoration: none;">Chiuso</h6>

                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <section id="area-riservata">

        <div class="section section  section-user-header py-5">
            <div class="container position-relative" style="min-height:850px;margin-top:70px;">
                <!-- part1 SpiD -->
                <div class="row mt-3 mx-2">
                    <div class="col-md-4 col-sm-12 px-1 my-2">
                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ml-2">
                                  <span class=" text-left h5">
                                  Accedi con SPID
                                  </span>

                            </div>
                            <div class="col-md-12 col-sm-12 ml-2">
                                <hr class="w-25 float-left ">
                            </div>
                        </div>
                        <!-- row2 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ml-2">
                                <!-- <button class="btn btn-primary rounded btn-icon btn-lg hoverbtn"> -->
                                <!-- <i class="fas fa-user-circle fa-2x" ></i> -->
                                <!-- <span class="pl-3">Entra Con SPID</span> -->

                                <!-- </button> -->
                                @include('spid-auth::spid-button', ['size' => 'l'])
                            </div>
                        </div>
                        <!-- row3 -->
                        <div class="row mt-3 mx-2">
                            <div class="col-md-12 col-sm-12 ">
                                <p class="text-justify px-2 py-2 ">
                                    SPID, il Sistema Pubblico di Identità Digitale, ti permette di accedere a tutti i servizi online della Pubblica Amministrazione con un'unica Identità Digitale (username e password)
                                </p>
                            </div>
                        </div>
                        <!-- row 4 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ml-2">
                                <a href="https://www.spid.gov.it/">
                                    <img src="/images/spid.png" alt="spid-agid-logo" class="mx-3 mt-1" style="width:90%;height:40px;" >
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- part2 CIE -->
                    <div class="col-md-4 col-sm-12  my-2 px-1 ">
                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ml-2">
                                  <span class=" text-left h5">
                                  Accedi con CIE
                                  </span>

                            </div>
                            <div class="col-md-12 col-sm-12 ml-2">
                                <hr class="w-25 float-left ">
                            </div>
                        </div>
                        <!-- row2 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ml-2">
                                <!-- we will implement at the other time for CIE -->
                                <!--  onclick="location.replace('https://idserver.servizicie.interno.gov.it/idp/x509-prompt.jsp?conversation=e1s2')" -->
                                <button class=" btn-primary  btn-icon logBtn hoverbtn">
                                    <img src = "images/images/cie.svg" alt="cieId-img" style="width:35px;height:35px;padding-right:2px;"/>
                                    <span class="pl-3 float-left">Entra Con CIE</span>
                                </button>
                            </div>
                        </div>
                        <!-- row3 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <p class="text-justify px-2 py-1 my-4 ">

                                    CIE, Carta Identità Elettronica, ti permette anche di accedere a tutti i servizi online della Pubblica Amministrazione
                                </p>
                            </div>
                        </div>
                        <!-- row 4 -->

                    </div>
                    <!-- part cittadini Euopei -->
                    <div class="col-md-4 col-sm-12  my-2 px-1 ">
                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ml-2">
                                  <span class=" text-left h5">
                                  Cittadini Europei
                                  </span>

                            </div>
                            <div class="col-md-12 col-sm-12 ml-2">
                                <hr class="w-25 float-left ">
                            </div>
                        </div>
                        <!-- row2 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ml-2">
                                <button class="btn-primary logBtn btn-icon btn-lg hoverbtn">
                                    <img src="/images/images/elas.svg" style="width:35px;height:35px;">
                                    <span class="pl-3">Entra Con elDAS</span>
                                </button>
                            </div>
                        </div>
                        <!-- row3 -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <p class="text-justify px-2 py-1 my-4 ">
                                    Accedi con l'identità digitale di un altro paese dell'Unione Europea
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@yield('body')
<!-- script part -->
<script>
    window.__PUBLIC_PATH__ = '{{ asset('/fonts') }}'
</script>

<script src="{{asset('js/app.js')}}"></script>
<!-- add jquery before bootstrap -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>


<script src="{{asset('js/bootstrap-italia.bundle.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


@yield('js')




@include('layouts.mltlog.partials.footer')


</body>


</html>
