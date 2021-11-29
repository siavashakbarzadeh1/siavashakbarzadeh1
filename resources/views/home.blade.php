@inject('SPIDAuth', 'SPIDAuth')

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Accesso tramite SPID</div>
                    <div class="card-body">


                        @if ($SPIDAuth->isAuthenticated())
                            Hi
                            <p> {{ $SPIDAuth->getSPIDUser()->name }} </p>
                            <p>{{ $SPIDAuth->getSPIDUser()->familyName }} </p>
                            <p>you are log in</p>



                            <form id="formSpidRegistration" name="formSpidRegistration"  action="{{ route('home.store') }}" class="" method="post">
                                <div class="form-group">
                                    @csrf

                                    {{--                                    <input type="hidden" name="spidCode" value="{{ $SPIDAuth->getSPIDUser()->spidCode }}"/>--}}
                                    <input type="hidden" name="name" value="{{ $SPIDAuth->getSPIDUser()->name }}"/>
                                    <input type="hidden" name="email" value="{{ $SPIDAuth->getSPIDUser()->email }}"/>
                                    {{--                                    <input type="hidden" name="family" value="{{ $SPIDAuth->getSPIDUser()->family }}"/>--}}
                                    <input type="hidden" name="codicefiscale" value="{{ $SPIDAuth->getSPIDUser()->fiscalNumber }}"/>
                                    <input type="hidden" name="cellulare" value="{{ $SPIDAuth->getSPIDUser()->cellulare }}"/>
                                </div>

                                <button type="submit" class="btn btn-primary">go to anagrafica</button>
                            </form>
                            {{--                            Hi {{ $SPIDAuth->getSPIDUser()->name }} {{ $SPIDAuth->getSPIDUser()->familyName }}, you are--}}
                            {{--                            logged in!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}
                            {{--                        go to anagrafica--}}


                        @else
                            @include('spid-auth::spid-button', ['size' => 'm'])
                        @endif
                        <div>
                            SPID è il sistema di accesso che consente di utilizzare, con un'identità digitale unica, i
                            servizi online della Pubblica Amministrazione e dei privati accreditati. Se sei già in possesso
                            di un'identità digitale, accedi con le credenziali del tuo gestore. Se non hai ancora
                            un'identità digitale, richiedila ad uno dei gestori.

                            wte4yryuuuuuuuuuuuuuuuuuuuuuuu
                        </div>
                        <div><a class="loginpin_link" href="http://www.spid.gov.it" target="_blank">Maggiori informazioni su
                                SPID</a></div>
                        <div class="text-center">
                            <img src="img/spid-agid-logo-lb.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
