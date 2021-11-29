@inject('SPIDAuth', 'SPIDAuth')
@extends('layouts.user')

@section('title', 'Area Utente - La tua documenti')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a><span class="separator">/</span></li>
        <li class="breadcrumb-item"><a href="#">Area Personale</a><span class="separator">/</span></li>
        <li class="breadcrumb-item active" aria-current="page">Documenti</li>
    </ol>
@stop

@section('content')
    <!-- <section class="container px-4 my-4">
    <div class="row">
        <div class="col-lg-12 px-lg-12 py-lg-12" style="min-height:80px;">

        </div>
    </div>
    </section> -->




    <section id="in-evidenza mt-1">
        <div class="bg-100 py-5">
            <div class="container px-4">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-4 text-primary">Documenti</h3>
                    </div>
                </div>
                    @if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                    @endif
                </div>

                <div class="row">

                    <div class="col">
                        <form id="formDocumentRegister" name="formDocumentRegister" method="post" action="{{route('documenti.store')}}" class="bg-white p-5" enctype="multipart/form-data">
                            <!--row1  -->
                            @csrf
                            <div class="row mb-4 mt-2">
                                @if ($SPIDAuth->isAuthenticated())
                                    <input type="hidden" name="user_id" value="{{ $SPIDAuth->getSPIDUser()->spidCode }}"/>
                                @else
                                    login it
                                @endif
                                <div class="col"></div>
                                <div class="col-md-6 text-center">
                                    <input type="file"  onchange="getupload();"  name="path" id="upload1" class="upload block" multiple="multiple" />
                                    <label for="upload1" class="col-md-6" >
                                        <svg class="icon icon-sm" aria-hidden="true"><use xlink:href="/svg/sprite.svg#it-upload"></use></svg>
                                        <span >Carica</span>
                                    </label>
                                    <ul class="upload-file-list ml-5">
                                        <li class="upload-file success">
                                            <svg class="icon icon-sm" aria-hidden="true"><use xlink:href="/svg/sprite.svg#it-file"></use></svg>
                                            <p >
                                                <span id="show" >per favore carica il tuo file</span>
                                                <span class="upload-file-weight" id="size"></span>
                                            </p>
                                            <button class="mr-1">
                                                <!-- <span class="sr-only">Caricamento ultimato</span> -->
                                                <svg  onclick="clearinput();"class="icon" aria-hidden="true"><use id="close" xlink:href="/svg/sprite.svg#it-close"></use></svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col"></div>

                            </div>
                            <!-- row2 -->
                            <div class="row my-1">
                                <!-- select part type of document -->
                                <div class="col-md-4 my-3">
                                    <div class="bootstrap-select-wrapper">
                                        <label>seleziona documento</label>
                                        <select title="Scegli your document" data-live-search="true" name="type">
                                            <option value="Value 1">PASSPORTO</option>
                                            <option value="Value 2">CARTA DI IDENTITA </option>
                                            <option value="Value 3">DRIVING LICENCE</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- document id number -->
                                <div class="col-md-4 my-3">
                                    <div class="form-group">
                                        <label for="docnum" class="control-label active" style="transition: none 0s ease 0s;">
                                            Document Number
                                            <abbr class="icon icon-asterisk" title="*">
                                                <span class="noscreen">*</span>
                                            </abbr>
                                        </label>
                                        <input required type="text"  name="number" value="" id="docnum" class="form-control"
                                               placeholder="Inserire Document number">
                                    </div>
                                </div>
                                <!-- release from part -->
                                <div class="col-md-4 my-3">
                                    <div class="form-group">
                                        <label for="relfrom" class="control-label active" style="transition: none 0s ease 0s;">
                                            Released from
                                            <abbr class="icon icon-asterisk" title="*">
                                                <span class="noscreen">*</span>
                                            </abbr>
                                        </label>
                                        <input  required type="text"  name="releasefrom" value="" id="relfrom" class="form-control"
                                                placeholder="Inserire Released From">
                                    </div>
                                </div>
                            </div>
                            <!-- row3 -->
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <div class="form-group">
                                        <div class="it-datepicker-wrapper">
                                            <div class="form-group">
                                                <input class="form-control it-date-datepicker" id="released" type="text" placeholder="released time in formato gg/mm/aaaa" name="releasetime">
                                                <label required for="released" class="control-label active" style="transition: none 0s ease 0s;">
                                                    Released Time
                                                    <abbr class="icon icon-asterisk" title="*">
                                                        <span class="noscreen">*</span>
                                                    </abbr>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="form-group">
                                        <div class="it-datepicker-wrapper">
                                            <div class="form-group">
                                                <input required class="form-control it-date-datepicker" id="expiredtime" type="text" placeholder="Expired time in formato gg/mm/aaaa"  name="expiredtime">

                                                <label for="expiredtime" class="control-label active" style="transition: none 0s ease 0s;">
                                                    Expired Time
                                                    <abbr class="icon icon-asterisk" title="*">
                                                        <span class="noscreen">*</span>
                                                    </abbr>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-12 p-4 ">


                                </div>
                            </div>

                            <div class="row pt-5">

                                <div class="col-md-2 mt-1">
                                    <button type="submit" class="btn btn-primary btn-block rounded">Confermare</button>
                                </div>
                                <div class="col-md-2 mt-1">
                                    <button type="reset" class="btn btn-danger btn-block rounded">rimuovere</button>
                                </div>


                            </div>

                        </form>
                    </div>

                </div>


    </section>
    </section>

@stop

@section("js")

    <script>
        $(document).ready(function() {
            $('.it-date-datepicker').datepicker({
                inputFormat: ["dd/MM/yyyy"],
                outputFormat: 'dd/MM/yyyy',
            });
        });
    </script>

@stop
