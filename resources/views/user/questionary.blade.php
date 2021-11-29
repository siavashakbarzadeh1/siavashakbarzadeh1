@extends('layouts.user')



@section('content')
<div class="container-fluid">
    <form action="" method="get"enctype="multipart/form-data" class="bg-light p-3">
        <!-- row1 -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="text-left">A: di essere cittadina:</p>
                <div>
                    <div class="form-check">
                        <input name="gruppo1" type="radio" id="radio1" checked>
                        <label for="radio1">Italiana</label>
                    </div>
                    <div class="form-check">
                        <input name="gruppo1" type="radio" id="radio2">
                        <label for="radio2">di un paese membero dell' unione Europa.</label>
                    </div>
                    <div class="form-check">
                        <input name="gruppo1" type="radio" id="radio3">
                        <label for="radio3">di un paese esterno all' unione Europa in possesso di regolare documentazione.</label>
                    </div>
                </div>
            </div>
        <div class="col-md-6 col-sm-12">
            <p class="text-left text-primary"> * allerge la scansione del documento di identita':<span class="text-danger">(E consentito solo il caricamento di file in formato PDF della dimensione massimo di 1MB)</span></p>
            <p>Documento Indicato i passaporto</p>
            <div>
            <input type="file" name="upload5" id="upload5" class="upload pictures-wall"  />
            <label for="upload5">
                <svg class="icon icon-sm" aria-hidden="true"><use xlink:href="/svg/sprite.svg#it-plus"></use></svg>
                <span>Add PDF</span>
            </label>
            </div>
        </div>
        </div>
        <hr>
        <!-- row2 -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="text-left">B:di essere residente nel commune di () in via listz 21 00144 Roma;</p>

            </div>
            <div class="col-md-6 col-sm-12">
            <p class="text-left">C: di essere iscritta nella liste ellettorali:*</p>
            <div class="form-check">
                <input name="gruppo2" type="radio" id="si" >
                <label for="si">Si</label>
            </div>
            <div class="form-check">
                <input name="gruppo2" type="radio" id="no" >
                <label for="no">no</label>
            </div>
            </div>
        </div>
        <hr>
        <!-- row3 -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="text-left">D:di essere in possesso della laurea triennale(L) in:</p>
                <div class="bootstrap-select-wrapper bg-white" >
                
                <select title="Scegli una opzione" data-live-search="true" data-live-search-placeholder="Cerca opzioni">
                    <option value="1">Lorem ipsum dolor sit amet</option>
                    <option value="2">Lorem ipsum dolor sit amet</option>
                    <option value="3">Lorem ipsum dolor sit amet</option>
                    <option value="4">Lorem ipsum dolor sit amet</option>
                    <option value="5">Lorem ipsum dolor sit amet</option>
                </select>
                </div>
            </div>
            <div class="col-md-6 ml-6">
                <p>titolo conseguito all'estero:*</p>
                <div class="form-check">
                     <input name="gruppo3" type="radio" id="si1" >
                    <label for="si1">Si</label>
                </div>
                <div class="form-check">
                     <input name="gruppo3" type="radio" id="no2" checked >
                    <label for="no2">No</label>
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-left">presso:*(ha a disposizione ancora 60 caratteri )<span class="text-left">(es:ITIS jannuzzi ,ecc:)</span></p>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputText1">
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-left">Citta:*(ha a disposizione ancora 100 caratteri)</p>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputText2">
                </div>
            </div>
        </div>
        <hr>
        <!-- row4 -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="text-justify">
                    E:di essere ,nei riguardi degli obblighi imposti dalle leggi sul reclutamento militare, nella seguente posizione:*
                </p>
                <div class="bootstrap-select-wrapper ">
                    <p class="text-center">Posizione:*</p>
                    <select class="bg-white" title="--selezione--" data-live-search="true" data-live-search-placeholder="Cerca opzioni">
                        <option value="1">Lorem ipsum dolor sit amet</option>
                        <option value="2">Duis vestibulum eleifend libero</option>
                        <option value="3">Phasellus pretium orci sed odio tempus</option>
                        <option value="4">Vestibulum bibendum ex vel augue porttitor sodales</option>
                        <option value="5">Praesent quis elementum turpis</option>
                    </select>
                    <p class="text-center pt-2">(dettaglio opzioni)</p>
                    </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="text-justify">
                    F:di avere prestato il servizio civile nazionale:*
                </p>
                <div class="form-check">
                     <input name="gruppo4" type="radio" id="si3" >
                    <label for="si3">Si</label>
                </div>
                <div class="form-check">
                     <input name="gruppo4" type="radio" id="no3"  >
                    <label for="no3">No</label>
                </div>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="text-justify">
                    G:
                </p>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="text-left">
                    H:di non essere stata destituita o dispenstata o dichiarata decaduta dall'impiego ovvero licenziata per
                    motivi diciplinari da pubbliche ammistrazioni:*
                    <div class="form-check">
                     <input name="gruppo5" type="radio" id="si4"  >
                    <label for="si4">si</label>
                    </div>
                    <div class="form-check">
                     <input name="gruppo5" type="radio" id="no4"  >
                    <label for="no4">No</label>
                    </div>
                </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="text-left">I: di avere conoscenza dell'informatica.</p>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="text-left">J: di conoscere la lingua inglese.</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="text-left">K: di avere prestata i seguenti servizi presso pubbliche amministrazioni:*</p>
                <div class="form-check">
                    <input name="gruppo6" type="radio" id="si5"  >
                    <label for="si5">Si</label>
                </div>
                <div class="form-check">
                    <input name="gruppo6" type="radio" id="no5"  >
                    <label for="no5">No</label>
                </div>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="text-left">
                    L: di aver usufruito di periodi di aspettativa per motivi di famiglia ,personali o di studio nonche' ogni 
                    altro provvedimento interruttivo del computo dell' effettivo servizio :*
                    <div class="form-check">
                    <input name="gruppo7" type="radio" id="si6"  >
                    <label for="si6">Si</label>
                </div>
                <div class="form-check">
                    <input name="gruppo7" type="radio" id="no6"  >
                    <label for="no6">No</label>
                </div>
                </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="text-left">
                    M: di avere I'indoneita fisica all'impiego;
                </p>
            </div>
        </div>
        <hr>
        <!--row  -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
            <p class="text-left">
                N: di essere portatore di handicap:*
            </p>
            <div class="form-check">
                    <input name="gruppo8" type="radio" id="si7"  >
                    <label for="si7">Si</label>
                </div>
                <div class="form-check">
                    <input name="gruppo8" type="radio" id="no7"  >
                    <label for="no7">No</label>
                </div>

            </div>
            <div class="col-md-6 col-sm-12">
            <p class="text-left">
               O:di avere necessita di tempi aggiuntivi e lo di ausili:*
            </p>
                 <div class="form-check">
                    <input name="gruppo9" type="radio" id="si8"  >
                    <label for="si8">Si</label>
                </div>
                <div class="form-check">
                    <input name="gruppo9" type="radio" id="no8"  >
                    <label for="no8">No</label>
                </div>

           
            </div>
        </div>
        <hr>
        <!--row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="text-justify">
                    P: dichiara lo stato di invalidita (per i candidati affetti da invalidita uguale o superiore all 80 % al fine
                    dell' esonero dalla preselezione):*
                </p>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="text-justify">
                    Q: di essere in possesso del/i titolo/i di preferenza di cui all art'5 del D.P.R.n.487/1999(in caso
                    affermativo specificare quali):*
                </p>
                <div class="form-check">
                    <input name="gruppo10" type="radio" id="si9"  >
                    <label for="si9">Si</label>
                </div>
                <div class="form-check">
                    <input name="gruppo10" type="radio" id="no9"  >
                    <label for="no9">No</label>
                </div>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="text-justify">
                    R:di autorizzare l'agenzia nazionale per i giovani al trattamento e utilizzo dei dati personali di cui
                    alla normativa nazionale e comunitaria in materia , per l'espletamento della procedura concorsuale nonche' per 
                    la gestione del rapporto di lavoro:*
                </p>
                <div class="form-check">
                    <input name="gruppo11" type="radio" id="si10"  >
                    <label for="si10">Si</label>
                </div>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="text-justify">
                    S: di autorizzare del pubblicazione del proprio nominativo sul sito internet dell'agenzia nazionale per i
                    giovani per tutte le comunicazioni interneti al concorso:*
                </p>
                <div class="form-check">
                    <input name="gruppo12" type="radio" id="si11"  >
                    <label for="si11">Si</label>
                </div>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="text-justify">
                    T: di esprimere il consenso , secondo le disposizioni vigenti in materia , al trattamento dei dati 
                    personali finalizzato all'eventuale esercizio del diritto di accesso da parte degli aventi diritto:*
                </p>
                <div class="form-check">
                    <input name="gruppo13" type="radio" id="si12"  >
                    <label for="si12">Si</label>
                </div>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    U: Di aver affettuato il versamento del contributo pari a 10.00 euro (dieci/00 euro) non  rimborsabuto
                    ,a favore dell' "agenzia nazionale per i giovani" con le modalita' indicato nel Bando.
                    <span class="text-danger">
                        (Il candidato dovra' altresi,in sede di prima prova , consegnare copia della ricevuta  di pagamento
                        di 10.00 euro non rimborsabile ,a favore dell' agenzia nazionale per i giovani)*
                    </span>
                </p>
                <div class="form-check">
                    <input name="gruppo14" type="radio" id="si13"  >
                    <label for="si13">Si</label>
                </div>
            </div>
        </div>
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    V: Autorizza Selexi s.r.l al trattamento dei dati personali e ne consente la successiva comunicazione all'
                    agenzia nazionale per i giovani per la finalita' connessa alla partecipazione ed alla gestione della
                    selezione ,ai sensi del regolamento generale per la protezione dei dati personali n.2016/679( general data protection
                    regulation GDPR) e del decreto legislativo 30 giugno 2003,n,196. *
                </p>
                <div class="form-check">
                    <input name="gruppo15" type="radio" id="si14"  >
                    <label for="si14">Si</label>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success btn-block rounded"> Conferma Inserimento</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
</div>
@endsection