@inject('SPIDAuth', 'SPIDAuth')
@extends('layouts.user')

@section('title', 'Area Utente - La tua Anagrafica')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a><span class="separator">/</span></li>
        <li class="breadcrumb-item"><a href="#">Area Personale</a><span class="separator">/</span></li>
        <li class="breadcrumb-item active" aria-current="page">La tua Anagrafica</li>
    </ol>
@stop


@section('content')


    <section id="in-evidenza mt-1">
        <div class="bg-100 py-5">
            <div class="container px-4">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-4 text-primary">Domande d'iscrizione in corso</h3>
                    </div>
                    @if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                    @endif
                </div>
                <div class="row">
                    <div class="col">
                        <form id="formSpidRegistration" name="formSpidRegistration"  action="{{route('anagrafica.store')}}" class="" method="post">
                            @csrf
                            @if ($SPIDAuth->isAuthenticated())
                                <p class="noscreen">
                                    <input type="hidden" name="profileTypeCode" value="CIT" autocomplete="off">

                                    <input type="hidden" name="user_id" value="{{ $SPIDAuth->getSPIDUser()->spidCode }}"/>


                                </p>
                            @else
                                <input type="hidden" name="user_id" value="2"/>
                            @endif
                                <div class="row">
                                    <div class="col mb-5">
                                        <div class="text-right">
                                            <input type="submit" value="Salva il profilo" id="SubmitProfile" class="btn btn-default btn-primary active" title="Salva il profilo" aria-hidden="true">
                                        </div>
                                    </div>
                                </div>
                                <!-- row 1 -->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group  attribute-type-Monotext ">
                                            <label for="userprofile_Nome" class="active" style="transition: none 0s ease 0s;">
                                                Nome
                                                <abbr class="icon icon-asterisk" title="Obbligatorio">
                                                <span class="noscreen">
                                                    *
                                                </span>
                                                </abbr>
                                            </label>
                                            <input type="text" name="name" maxlength="254"
                                                   id="userprofile_Nome"   class="form-control" placeholder="Inserire Nome">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group  attribute-type-Monotext ">
                                            <label for="userprofile_Cognome" class="active" style="transition: none 0s ease 0s;">
                                                Cognome
                                                <abbr class="icon icon-asterisk" title="Obbligatorio">
                                                    <span class="noscreen">*</span>
                                                </abbr>
                                            </label>
                                            <input type="text"   name="familyname" maxlength="254"  id="userprofile_Cognome" class="form-control" placeholder="Inserire Cognome" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="bootstrap-select-wrapper ">
                                            <label >Sesso</label>
                                            <select  class="bg-white" name="gender" title="Scegli una opzione">
                                                <option value="Value 1" >M</option>
                                                <option value="Value 2">F</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <!-- row2 -->
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <div class="form-group  attribute-type-Monotext ">
                                            <label for="userprofile_CodiceFiscale" class="active" style="transition: none 0s ease 0s;">
                                                Codice fiscale
                                                <abbr class="icon icon-asterisk" title="Obbligatorio">
                                                    <span class="noscreen">*</span>
                                                </abbr>
                                            </label>
                                            <input type="text"   name="codicefiscale" maxlength="254"
                                                   id="userprofile_CodiceFiscale" class="form-control" placeholder="Inserire Codice fiscale"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group  attribute-type-EnumeratorMap ">
                                            <label for="userprofile_StatoEsteroNascita" class="active" style="transition: none 0s ease 0s;">
                                                Stato di nascita
                                            </label>
                                            <input type="text" name="StatoEsteroNascita" value="Italia"
                                                   id="userprofile_StatoEsteroNascita" class="form-control"
                                                   placeholder="Inserire lo stato di nascita">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="it-datepicker-wrapper bg-white">
                                                <div class="form-group">
                                                    <input class="form-control it-date-datepicker"name="dataDiNascita" id="date1" type="text" placeholder="inserisci la data in formato gg/mm/aaaa" >
                                                    <label for="date1">Data di nascita</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- row3 -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group  attribute-type-EnumeratorMap ">
                                            <label for="userprofile_ComuneNascita" class="active" style="transition: none 0s ease 0s;">
                                                Comune di nascita
                                            </label>
                                            <input type="text" name="ComuneNascita" value="ROMA"
                                                   id="userprofile_ComuneNascita" class="form-control"
                                                   placeholder="Inserire Comune di nascita">
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="form-group  attribute-type-Monotext ">
                                            <label for="userprofile_Cellulare" class="active" style="transition: none 0s ease 0s;">
                                                Cellulare
                                                <small class="help-block">
                                                    ( con prefisso internazionale (es: +39) )
                                                </small>
                                            </label>
                                            <input type="text" name="Cellulare" maxlength="254"  id="userprofile_Cellulare"
                                                   class="form-control" placeholder="Inserire numero di cellulare">
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="form-group  attribute-type-Monotext ">
                                            <label for="userprofile_email" class="active" style="transition: none 0s ease 0s;">
                                                eMail
                                                <abbr class="icon icon-asterisk" title="Obbligatorio">
                                                <span class="noscreen">
                                                    *
                                                </span>
                                                </abbr>
                                            </label>
                                            <input type="email"  name="email" maxlength="254" id="userprofile_email"
                                                   class="form-control" placeholder="Inserire Email">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group  attribute-type-Monotext ">
                                            <label for="userprofile_PEC" class="active" style="transition: none 0s ease 0s;">
                                                Pec
                                            </label>
                                            <input type="text" name="PEC" maxlength="254"   id="userprofile_PEC"
                                                   class="form-control" placeholder="Inserire PEC">
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">

                                    </div>

                                </div>





                                <!-- residenz part -->
                                <!-- row1 -->
                                <div class="row">
                                    <div class="col-md-6 text-primary mb-4">
                                        RESIDENZA *
                                    </div>
                                </div>
                                <div class="row ">


                                    <div class="bootstrap-select-wrapper col-md-4 mb-4 ">
                                        <label>Stato</label>
                                        <select  id="select"  class="bg-white" data-live-search="true" data-live-search-placeholder="Cerca satao" name="stato">

                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="open_provincia">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="">Angola</option>
                                            <option value="">Anguilla</option>
                                            <option value="">Antarctica</option>
                                            <option value="">Antigua and Barbuda</option>
                                            <option value="">Argentina</option>
                                            <option value="">Armenia</option>
                                            <option value="">Aruba</option>
                                            <option value="">Australia</option>
                                            <option value="">Austria</option>
                                            <option value="">Azerbaijan</option>
                                            <option value="">Bahamas (the)</option>
                                            <option value="">Bangladesh</option>
                                            <option value="">Barbados</option>
                                            <option value="">Belarus</option>
                                            <option value="">Belgium</option>
                                            <option value="">Belize</option>
                                            <option value="">Benin</option>
                                            <option value="">Bermuda</option>
                                            <option value="">Bhutan</option>
                                            <option value="">Bolivia (Plurinational State of)</option>
                                            <option value="">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="">Bosnia and Herzegovina</option>
                                            <option value="">Botswana</option>
                                            <option value="">Bouvet Island</option>
                                            <option value="">Brazil</option>
                                            <option value="">British Indian Ocean Territory </option>
                                            <option value="">Brunei Darussalam</option>
                                            <option value="">Bulgaria</option>
                                            <option value="">Burkina Faso</option>
                                            <option value="">Burundi</option>
                                            <option value="">Cabo Verde</option>
                                            <option value="">Cambodia</option>
                                            <option value="">Cameroon</option>
                                            <option value="">Canada</option>
                                            <option value="">Cayman Islands </option>
                                            <option value="">Central African Republic </option>
                                            <option value="">Chad</option>
                                            <option value="">Chile</option>
                                            <option value="">China</option>
                                            <option value="">Christmas Island</option>
                                            <option value="">Cocos (Keeling) Islands</option>
                                            <option value="">Colombia</option>
                                            <option value="">Comoros</option>
                                            <option value="">Congo (the Democratic Republic of the)</option>
                                            <option value="">Congo </option>
                                            <option value="">Cook Islands</option>
                                            <option value="">Costa Rica</option>
                                            <option value="">Croatia</option>
                                            <option value="">Cuba</option>
                                            <option value="">Curaçao</option>
                                            <option value="">Cyprus</option>
                                            <option value="">Czechia</option>
                                            <option value="">Côte d'Ivoire</option>
                                            <option value="">Denmark</option>
                                            <option value="">Djibouti</option>
                                            <option value="">Dominica</option>
                                            <option value="">Dominican Republic </option>
                                            <option value="">Ecuador</option>
                                            <option value="">Egypt</option>
                                            <option value="">El Salvador</option>
                                            <option value="">Equatorial Guinea</option>
                                            <option value="">Eritrea</option>
                                            <option value="">Estonia</option>
                                            <option value="">Eswatini</option>
                                            <option value="">Ethiopia</option>
                                            <option value="">Falkland Islands (the) [Malvinas]</option>
                                            <option value="">Faroe Islands</option>
                                            <option value="">Fiji</option>
                                            <option value="">Finland</option>
                                            <option value="">France</option>
                                            <option value="">French Guiana</option>
                                            <option value="">French Polynesia</option>
                                            <option value="">French Southern Territories</option>
                                            <option value="">Gabon</option>
                                            <option value="">Gambia</option>
                                            <option value="">Georgia</option>
                                            <option value="">Germany</option>
                                            <option value="">Ghana</option>
                                            <option value="">Gibraltar</option>
                                            <option value="">Greece</option>
                                            <option value="">Greenland</option>
                                            <option value="">Grenada</option>
                                            <option value="">Guadeloupe</option>
                                            <option value="">Guam</option>
                                            <option value="">Guatemala</option>
                                            <option value="">Guernsey</option>
                                            <option value="">Guinea</option>
                                            <option value="">Guinea-Bissau</option>
                                            <option value="">Guyana</option>
                                            <option value="">Haiti</option>
                                            <option value="">Heard Island and McDonald Islands</option>
                                            <option value="">Holy See </option>
                                            <option value="">Honduras</option>
                                            <option value="">Hong Kong</option>
                                            <option value="">Hungary</option>
                                            <option value="">Iceland</option>
                                            <option value="">India</option>
                                            <option value="">Indonesia</option>
                                            <option value="">Iran</option>
                                            <option value="">Iraq</option>
                                            <option value="">Ireland</option>
                                            <option value="">Isle of Man</option>
                                            <option value="">Israel</option>
                                            <option value="Italy" >Italy</option>
                                            <option value="">Jamaica</option>
                                            <option value="">Japan</option>
                                            <option value="">Jersey</option>
                                            <option value="">Jordan</option>
                                            <option value="">Kazakhstan</option>
                                            <option value="">Kenya</option>
                                            <option value="">Kiribati</option>
                                            <option value="">Korea (the Democratic People's Republic of)</option>
                                            <option value="">Korea (the Republic of)</option>
                                            <option value="">Kuwait</option>
                                            <option value="">Kyrgyzstan</option>
                                            <option value="">Lao People's Democratic Republic</option>
                                            <option value="">Latvia</option>
                                            <option value="">Lebanon</option>
                                            <option value="">Lesotho</option>
                                            <option value="">Liberia</option>
                                            <option value="">Libya</option>
                                            <option value="">Liechtenstein</option>
                                            <option value="">Lithuania</option>
                                            <option value="">Luxembourg</option>
                                            <option value="">Macao</option>
                                            <option value="">Madagascar</option>
                                            <option value="">Malawi</option>
                                            <option value="">Malaysia</option>
                                            <option value="">Maldives</option>
                                            <option value="">Mali</option>
                                            <option value="">Malta</option>
                                            <option value="">Marshall Islands</option>
                                            <option value="">Martinique</option>
                                            <option value="">Mauritania</option>
                                            <option value="">Mauritius</option>
                                            <option value="">Mayotte</option>
                                            <option value="">Mexico</option>
                                            <option value="">Micronesia </option>
                                            <option value="">Moldova</option>
                                            <option value="">Monaco</option>
                                            <option value="">Mongolia</option>
                                            <option value="">Montenegro</option>
                                            <option value="">Montserrat</option>
                                            <option value="">Morocco</option>
                                            <option value="">Mozambique</option>
                                            <option value="">Myanmar</option>
                                            <option value="">Namibia</option>
                                            <option value="">Nauru</option>
                                            <option value="">Nepal</option>
                                            <option value="">Netherlands </option>
                                            <option value="">New Caledonia</option>
                                            <option value="">New Zealand</option>
                                            <option value="">Nicaragua</option>
                                            <option value="">Niger</option>
                                            <option value="">Nigeria</option>
                                            <option value="">Niue</option>
                                            <option value="">Norfolk Island</option>
                                            <option value="">Northern Mariana Islands</option>
                                            <option value="">Norway</option>
                                            <option value="">Oman</option>
                                            <option value="">Pakistan</option>
                                            <option value="">Palau</option>
                                            <option value="">Palestine</option>
                                            <option value="">Panama</option>
                                            <option value="">Papua New Guinea</option>
                                            <option value="">Paraguay</option>
                                            <option value="">Peru</option>
                                            <option value="">Philippines</option>
                                            <option value="">Pitcairn</option>
                                            <option value="">Poland</option>
                                            <option value="">Portugal</option>
                                            <option value="">Puerto Rico</option>
                                            <option value="">Qatar</option>
                                            <option value="">Republic of North Macedonia</option>
                                            <option value=""> Romania</option>
                                            <option value="">Russian Federation</option>
                                            <option value="">Rwanda</option>
                                            <option value="">Réunion</option>
                                            <option value="">Saint Barthélemy</option>
                                            <option value="">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="">Saint Kitts and Nevis</option>
                                            <option value="">Saint Lucia</option>
                                            <option value="">Saint Martin (French part)</option>
                                            <option value="">Saint Pierre and Miquelon</option>
                                            <option value="">Saint Vincent and the Grenadines</option>
                                            <option value="">Samoa</option>
                                            <option value="">San Marino</option>
                                            <option value="">Sao Tome and Principe</option>
                                            <option value="">Saudi Arabia</option>
                                            <option value="">Senegal</option>
                                            <option value="">Serbia</option>
                                            <option value="">Seychelles</option>
                                            <option value="">Sierra Leone</option>
                                            <option value="">Singapore</option>
                                            <option value="">Sint Maarten (Dutch part)</option>
                                            <option value="">Slovakia</option>
                                            <option value="">Slovenia</option>
                                            <option value="">Solomon Islands</option>
                                            <option value="">Somalia</option>
                                            <option value="">South Africa</option>
                                            <option value="">South Georgia and the South Sandwich Islands</option>
                                            <option value="">South Sudan</option>
                                            <option value="">Spain</option>
                                            <option value="">Sri Lanka</option>
                                            <option value="">Sudan</option>
                                            <option value="">Suriname</option>
                                            <option value="">Svalbard and Jan Mayen</option>
                                            <option value="">Sweden</option>
                                            <option value="">Switzerland</option>
                                            <option value="">Syrian Arab Republi</option>
                                            <option value="">Taiwan</option>
                                            <option value="">Tajikistan</option>
                                            <option value="">Tanzania</option>
                                            <option value="">Thailand</option>
                                            <option value="">Timor-Leste</option>
                                            <option value="">Togo</option>
                                            <option value="">Tokelau</option>
                                            <option value="">Tonga</option>
                                            <option value="">Trinidad and Tobago</option>
                                            <option value="">Tunisia</option>
                                            <option value="">Turkmenistan</option>
                                            <option value="">Turks and Caicos Islands</option>
                                            <option value="">Tuvalu</option>
                                            <option value="">Uganda</option>
                                            <option value="">Ukraine</option>
                                            <option value="">United Arab Emirates </option>
                                            <option value="">United Kingdom of Great Britain and Northern Ireland </option>
                                            <option value="">United States of America</option>
                                            <option value="">Uruguay</option>
                                            <option value="">Uzbekistan</option>
                                            <option value="">Vanuatu</option>
                                            <option value="">Venezuela</option>
                                            <option value="">Viet Nam</option>
                                            <option value="">Virgin Islands (British)</option>
                                            <option value="">Virgin Islands (U.S.)</option>
                                            <option value="">Wallis and Futuna</option>
                                            <option value="">Western Sahara</option>
                                            <option value="">Yemen</option>
                                            <option value="">Zambia</option>
                                            <option value="">Zimbabwe</option>
                                            <option value="">Åland Islands</option>
                                        </select>
                                    </div>




                                    <div class="bootstrap-select-wrapper col-md-4 mb-4 "  id="res_provincia" >
                                        <label>Provincia</label>
                                        <select id="provincia" class="bg-white"  data-live-search="true" data-live-search-placeholder="Cerca provincia">

                                            <option value="Value 1">Agrigento</option>
                                            <option value="Value 2">Alessandria</option>
                                            <option value="Value 3">Ancona</option>
                                            <option value="Value 4">Aosta</option>
                                            <option value="Value 5">Arezzo</option>
                                            <option value="">Ascoli Piceno</option>
                                            <option value="">Asti</option>
                                            <option value="">Avellino</option>
                                            <option value="">Bari</option>
                                            <option value="">Barletta-Andria-Trani</option>
                                            <option value="">Belluno</option>
                                            <option value="">Benevento</option>
                                            <option value="">Bergamo</option>
                                            <option value="">Biella</option>
                                            <option value="">Bologna</option>
                                            <option value="">Bolzano</option>
                                            <option value="">Brescia</option>
                                            <option value="">Brindisi</option>
                                            <option value="">Cagliari</option>
                                            <option value="">Caltanissetta</option>
                                            <option value="">Campobasso</option>
                                            <option value="">Caserta</option>
                                            <option value="">Catania</option>
                                            <option value="">Catanzaro</option>
                                            <option value="">Chieti</option>
                                            <option value="">Como</option>
                                            <option value="">Cosenza</option>
                                            <option value="">Cremona</option>
                                            <option value="">Crotone</option>
                                            <option value="">Cuneo</option>
                                            <option value="">Enna</option>
                                            <option value="">Fermo</option>
                                            <option value="">Ferrara</option>
                                            <option value="">Firenze</option>
                                            <option value="">Foggia</option>
                                            <option value="">Forlì-Cesena</option>
                                            <option value="">Frosinone</option>
                                            <option value="">Genova</option>
                                            <option value="">Gorizia</option>
                                            <option value="">Grosseto</option>
                                            <option value="">Imperia</option>
                                            <option value="">Isernia</option>
                                            <option value="">La Spezia</option>
                                            <option value="">L'Aquila</option>
                                            <option value="">Latina</option>
                                            <option value="">Lecce</option>
                                            <option value="">Lecco</option>
                                            <option value="">Livorno</option>
                                            <option value="">Lodi</option>
                                            <option value="">Lucca</option>
                                            <option value="">Macerata</option>
                                            <option value="">Mantova</option>
                                            <option value="">Massa-Carrara</option>
                                            <option value="">Matera</option>
                                            <option value="">Messina</option>
                                            <option value="">Milano</option>
                                            <option value="">Modena</option>
                                            <option value="">Monza e della Brianza</option>
                                            <option value="">Napoli</option>
                                            <option value="">Novara</option>
                                            <option value="">Nuoro</option>
                                            <option value="">Oristano</option>
                                            <option value="">Padova</option>
                                            <option value="">Palermo</option>
                                            <option value="">Parma</option>
                                            <option value="">Pavia</option>
                                            <option value="">Perugia</option>
                                            <option value="">Pesaro e Urbino</option>
                                            <option value="">Pescara</option>
                                            <option value="">Piacenza</option>
                                            <option value="">Pisa</option>
                                            <option value="">Pistoia</option>
                                            <option value="">Pordenone</option>
                                            <option value="">Potenza</option>
                                            <option value="">Prato</option>
                                            <option value="">Ragusa</option>
                                            <option value="">Ravenna</option>
                                            <option value="">Reggio Calabria</option>
                                            <option value="">Reggio Emilia</option>
                                            <option value="">Rieti</option>
                                            <option value="">Rimini</option>
                                            <option value="">Roma</option>
                                            <option value="">Rovigo</option>
                                            <option value="">Salerno</option>
                                            <option value="">Sassari</option>
                                            <option value="">Savona</option>
                                            <option value="">Siena</option>
                                            <option value="">Siracusa</option>
                                            <option value="">Sondrio</option>
                                            <option value="">Sud Sardegna</option>
                                            <option value="">Taranto</option>
                                            <option value="">Teramo</option>
                                            <option value="">Terni</option>
                                            <option value="">Torino</option>
                                            <option value="">Trapani</option>
                                            <option value="">Trento</option>
                                            <option value="">Treviso</option>
                                            <option value="">Trieste</option>
                                            <option value="">Udine</option>
                                            <option value="">Varese</option>
                                            <option value="">Venezia</option>
                                            <option value="">Verbano-Cusio-Ossola</option>
                                            <option value="">Vercelli</option>
                                            <option value="">Verona</option>
                                            <option value="">Vibo Valentia</option>
                                            <option value="">Vicenza</option>
                                            <option value="">Viterbo</option>


                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-4"  id="residenza_citta"  >
                                        <div class="form-group  attribute-type-Monotext " >
                                            <label for="residenze_Citta" class="active  " style="transition: none 0s ease 0s;">
                                                Citta
                                            </label>
                                            <input type="text" name="residenze_Citta" maxlength="254" value=""   id="residenze_Citta"
                                                   class="form-control" placeholder="Inserire Citta">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-4"  id="res_indrizzo">
                                        <div class="form-group  attribute-type-Monotext border-right">
                                            <label for="residenze_Indrizzo" class="active  " style="transition: none 0s ease 0s;">
                                                Indrizzo
                                            </label>
                                            <input type="text" name="residenze_Indrizzo" maxlength="254"  id="residenze_Indrizzo"
                                                   class="form-control"   placeholder="Inserire Indirizzo">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4"  id="res_civico">
                                        <div class="form-group  attribute-type-Monotext border-right">
                                            <label for="residenze_Civico" class="active  " style="transition: none 0s ease 0s;">
                                                Civico
                                            </label>
                                            <input type="text" name="residenze_Civico" maxlength="254"  value="" id="residenze_Civicoo"
                                                   class="form-control"  placeholder="Inserire Civico">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4"  id="res_cap">
                                        <div class="form-group  attribute-type-Monotext border-right">
                                            <label for="residenze_Cap"  class="active  " style="transition: none 0s ease 0s;">
                                                Cap
                                            </label>
                                            <input type="number" name="residenze_Cap" maxlength="7" value="" id="residenze_Cap"
                                                   class="form-control"  placeholder="Inserire Cap" >
                                        </div>
                                    </div>
                                </div>


                                <!-- domicilio -->
                                <div class="row">
                                    <div class="col-md-4 mb-4 text-primary">
                                        DOMICILIO *
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-4" title="clicca qui se lo stesso">
                                        <div class="form-check">
                                            <input id="domicilio" type="checkbox" checked  onchange="close_dom()" >
                                            <label for="domicilio" >Domicilio identico alla residenza</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="close" style="display:none;visibility:hidden;">
                                    <div class="row">
                                        <!-- domicilio stato -->
                                        <div class="bootstrap-select-wrapper col-md-4 mb-4 ">
                                            <label>Stato</label>
                                            <select id="selectdom" class="bg-white"  data-live-search="true" data-live-search-placeholder="Cerca stato" >

                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia (Plurinational State of)</option>
                                                <option value="Bonaire">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="Bosnia_Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British_Indian_Ocean_Territory">British Indian Ocean Territory </option>
                                                <option value="Brunei_Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina_Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo_Verde">Cabo Verde</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cayman_Islands">Cayman Islands </option>
                                                <option value="Central_African_Republic">Central African Republic </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas_Island">Christmas Island</option>
                                                <option value="Cocos">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo1">Congo (the Democratic Republic of the)</option>
                                                <option value="Congo2">Congo </option>
                                                <option value="Cook">Cook Islands</option>
                                                <option value="Costa_Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaçao">Curaçao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czechia">Czechia</option>
                                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic </option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini">Eswatini</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland">Falkland Islands (the) [Malvinas]</option>
                                                <option value="Faroe_Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="">French Polynesia</option>
                                                <option value="">French Southern Territories</option>
                                                <option value="">Gabon</option>
                                                <option value="">Gambia</option>
                                                <option value="">Georgia</option>
                                                <option value="">Germany</option>
                                                <option value="">Ghana</option>
                                                <option value="">Gibraltar</option>
                                                <option value="">Greece</option>
                                                <option value="">Greenland</option>
                                                <option value="">Grenada</option>
                                                <option value="">Guadeloupe</option>
                                                <option value="">Guam</option>
                                                <option value="">Guatemala</option>
                                                <option value="">Guernsey</option>
                                                <option value="">Guinea</option>
                                                <option value="">Guinea-Bissau</option>
                                                <option value="">Guyana</option>
                                                <option value="">Haiti</option>
                                                <option value="">Heard Island and McDonald Islands</option>
                                                <option value="">Holy See </option>
                                                <option value="">Honduras</option>
                                                <option value="">Hong Kong</option>
                                                <option value="">Hungary</option>
                                                <option value="">Iceland</option>
                                                <option value="">India</option>
                                                <option value="">Indonesia</option>
                                                <option value="">Iran</option>
                                                <option value="">Iraq</option>
                                                <option value="">Ireland</option>
                                                <option value="">Isle of Man</option>
                                                <option value="">Israel</option>
                                                <option value="Italy" >Italy</option>
                                                <option value="">Jamaica</option>
                                                <option value="">Japan</option>
                                                <option value="">Jersey</option>
                                                <option value="">Jordan</option>
                                                <option value="">Kazakhstan</option>
                                                <option value="">Kenya</option>
                                                <option value="">Kiribati</option>
                                                <option value="">Korea (the Democratic People's Republic of)</option>
                                                <option value="">Korea (the Republic of)</option>
                                                <option value="">Kuwait</option>
                                                <option value="">Kyrgyzstan</option>
                                                <option value="">Lao People's Democratic Republic</option>
                                                <option value="">Latvia</option>
                                                <option value="">Lebanon</option>
                                                <option value="">Lesotho</option>
                                                <option value="">Liberia</option>
                                                <option value="">Libya</option>
                                                <option value="">Liechtenstein</option>
                                                <option value="">Lithuania</option>
                                                <option value="">Luxembourg</option>
                                                <option value="">Macao</option>
                                                <option value="">Madagascar</option>
                                                <option value="">Malawi</option>
                                                <option value="">Malaysia</option>
                                                <option value="">Maldives</option>
                                                <option value="">Mali</option>
                                                <option value="">Malta</option>
                                                <option value="">Marshall Islands</option>
                                                <option value="">Martinique</option>
                                                <option value="">Mauritania</option>
                                                <option value="">Mauritius</option>
                                                <option value="">Mayotte</option>
                                                <option value="">Mexico</option>
                                                <option value="">Micronesia </option>
                                                <option value="">Moldova</option>
                                                <option value="">Monaco</option>
                                                <option value="">Mongolia</option>
                                                <option value="">Montenegro</option>
                                                <option value="">Montserrat</option>
                                                <option value="">Morocco</option>
                                                <option value="">Mozambique</option>
                                                <option value="">Myanmar</option>
                                                <option value="">Namibia</option>
                                                <option value="">Nauru</option>
                                                <option value="">Nepal</option>
                                                <option value="">Netherlands </option>
                                                <option value="">New Caledonia</option>
                                                <option value="">New Zealand</option>
                                                <option value="">Nicaragua</option>
                                                <option value="">Niger</option>
                                                <option value="">Nigeria</option>
                                                <option value="">Niue</option>
                                                <option value="">Norfolk Island</option>
                                                <option value="">Northern Mariana Islands</option>
                                                <option value="">Norway</option>
                                                <option value="">Oman</option>
                                                <option value="">Pakistan</option>
                                                <option value="">Palau</option>
                                                <option value="">Palestine</option>
                                                <option value="">Panama</option>
                                                <option value="">Papua New Guinea</option>
                                                <option value="">Paraguay</option>
                                                <option value="">Peru</option>
                                                <option value="">Philippines</option>
                                                <option value="">Pitcairn</option>
                                                <option value="">Poland</option>
                                                <option value="">Portugal</option>
                                                <option value="">Puerto Rico</option>
                                                <option value="">Qatar</option>
                                                <option value="">Republic of North Macedonia</option>
                                                <option value=""> Romania</option>
                                                <option value="">Russian Federation</option>
                                                <option value="">Rwanda</option>
                                                <option value="">Réunion</option>
                                                <option value="">Saint Barthélemy</option>
                                                <option value="">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="">Saint Kitts and Nevis</option>
                                                <option value="">Saint Lucia</option>
                                                <option value="">Saint Martin (French part)</option>
                                                <option value="">Saint Pierre and Miquelon</option>
                                                <option value="">Saint Vincent and the Grenadines</option>
                                                <option value="">Samoa</option>
                                                <option value="">San Marino</option>
                                                <option value="">Sao Tome and Principe</option>
                                                <option value="">Saudi Arabia</option>
                                                <option value="">Senegal</option>
                                                <option value="">Serbia</option>
                                                <option value="">Seychelles</option>
                                                <option value="">Sierra Leone</option>
                                                <option value="">Singapore</option>
                                                <option value="">Sint Maarten (Dutch part)</option>
                                                <option value="">Slovakia</option>
                                                <option value="">Slovenia</option>
                                                <option value="">Solomon Islands</option>
                                                <option value="">Somalia</option>
                                                <option value="">South Africa</option>
                                                <option value="">South Georgia and the South Sandwich Islands</option>
                                                <option value="">South Sudan</option>
                                                <option value="">Spain</option>
                                                <option value="">Sri Lanka</option>
                                                <option value="">Sudan</option>
                                                <option value="">Suriname</option>
                                                <option value="">Svalbard and Jan Mayen</option>
                                                <option value="">Sweden</option>
                                                <option value="">Switzerland</option>
                                                <option value="">Syrian Arab Republi</option>
                                                <option value="">Taiwan</option>
                                                <option value="">Tajikistan</option>
                                                <option value="">Tanzania</option>
                                                <option value="">Thailand</option>
                                                <option value="">Timor-Leste</option>
                                                <option value="">Togo</option>
                                                <option value="">Tokelau</option>
                                                <option value="">Tonga</option>
                                                <option value="">Trinidad and Tobago</option>
                                                <option value="">Tunisia</option>
                                                <option value="">Turkmenistan</option>
                                                <option value="">Turks and Caicos Islands</option>
                                                <option value="">Tuvalu</option>
                                                <option value="">Uganda</option>
                                                <option value="">Ukraine</option>
                                                <option value="">United Arab Emirates </option>
                                                <option value="">United Kingdom of Great Britain and Northern Ireland </option>
                                                <option value="">United States of America</option>
                                                <option value="">Uruguay</option>
                                                <option value="">Uzbekistan</option>
                                                <option value="">Vanuatu</option>
                                                <option value="">Venezuela</option>
                                                <option value="">Viet Nam</option>
                                                <option value="">Virgin Islands (British)</option>
                                                <option value="">Virgin Islands (U.S.)</option>
                                                <option value="">Wallis and Futuna</option>
                                                <option value="">Western Sahara</option>
                                                <option value="">Yemen</option>
                                                <option value="">Zambia</option>
                                                <option value="">Zimbabwe</option>
                                                <option value="">Åland Islands</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mb-4" id="dom_provincia" >
                                            <!--  domicilio provincia    -->
                                            <div class="bootstrap-select-wrapper ">
                                                <label>Provincia</label>
                                                <select id="provinciadom" class="bg-white"  id="domicilio_Provincia" data-live-search="true" data-live-search-placeholder="Cerca provincia">
                                                    <option value="Value 1">Agrigento</option>
                                                    <option value="Value 2">Alessandria</option>
                                                    <option value="Value 3">Ancona</option>
                                                    <option value="Value 4">Aosta</option>
                                                    <option value="Value 5">Arezzo</option>
                                                    <option value="">Ascoli Piceno</option>
                                                    <option value="">Asti</option>
                                                    <option value="">Avellino</option>
                                                    <option value="">Bari</option>
                                                    <option value="">Barletta-Andria-Trani</option>
                                                    <option value="">Belluno</option>
                                                    <option value="">Benevento</option>
                                                    <option value="">Bergamo</option>
                                                    <option value="">Biella</option>
                                                    <option value="">Bologna</option>
                                                    <option value="">Bolzano</option>
                                                    <option value="">Brescia</option>
                                                    <option value="">Brindisi</option>
                                                    <option value="">Cagliari</option>
                                                    <option value="">Caltanissetta</option>
                                                    <option value="">Campobasso</option>
                                                    <option value="">Caserta</option>
                                                    <option value="">Catania</option>
                                                    <option value="">Catanzaro</option>
                                                    <option value="">Chieti</option>
                                                    <option value="">Como</option>
                                                    <option value="">Cosenza</option>
                                                    <option value="">Cremona</option>
                                                    <option value="">Crotone</option>
                                                    <option value="">Cuneo</option>
                                                    <option value="">Enna</option>
                                                    <option value="">Fermo</option>
                                                    <option value="">Ferrara</option>
                                                    <option value="">Firenze</option>
                                                    <option value="">Foggia</option>
                                                    <option value="">Forlì-Cesena</option>
                                                    <option value="">Frosinone</option>
                                                    <option value="">Genova</option>
                                                    <option value="">Gorizia</option>
                                                    <option value="">Grosseto</option>
                                                    <option value="">Imperia</option>
                                                    <option value="">Isernia</option>
                                                    <option value="">La Spezia</option>
                                                    <option value="">L'Aquila</option>
                                                    <option value="">Latina</option>
                                                    <option value="">Lecce</option>
                                                    <option value="">Lecco</option>
                                                    <option value="">Livorno</option>
                                                    <option value="">Lodi</option>
                                                    <option value="">Lucca</option>
                                                    <option value="">Macerata</option>
                                                    <option value="">Mantova</option>
                                                    <option value="">Massa-Carrara</option>
                                                    <option value="">Matera</option>
                                                    <option value="">Messina</option>
                                                    <option value="">Milano</option>
                                                    <option value="">Modena</option>
                                                    <option value="">Monza e della Brianza</option>
                                                    <option value="">Napoli</option>
                                                    <option value="">Novara</option>
                                                    <option value="">Nuoro</option>
                                                    <option value="">Oristano</option>
                                                    <option value="">Padova</option>
                                                    <option value="">Palermo</option>
                                                    <option value="">Parma</option>
                                                    <option value="">Pavia</option>
                                                    <option value="">Perugia</option>
                                                    <option value="">Pesaro e Urbino</option>
                                                    <option value="">Pescara</option>
                                                    <option value="">Piacenza</option>
                                                    <option value="">Pisa</option>
                                                    <option value="">Pistoia</option>
                                                    <option value="">Pordenone</option>
                                                    <option value="">Potenza</option>
                                                    <option value="">Prato</option>
                                                    <option value="">Ragusa</option>
                                                    <option value="">Ravenna</option>
                                                    <option value="">Reggio Calabria</option>
                                                    <option value="">Reggio Emilia</option>
                                                    <option value="">Rieti</option>
                                                    <option value="">Rimini</option>
                                                    <option value="">Roma</option>
                                                    <option value="">Rovigo</option>
                                                    <option value="">Salerno</option>
                                                    <option value="">Sassari</option>
                                                    <option value="">Savona</option>
                                                    <option value="">Siena</option>
                                                    <option value="">Siracusa</option>
                                                    <option value="">Sondrio</option>
                                                    <option value="">Sud Sardegna</option>
                                                    <option value="">Taranto</option>
                                                    <option value="">Teramo</option>
                                                    <option value="">Terni</option>
                                                    <option value="">Torino</option>
                                                    <option value="">Trapani</option>
                                                    <option value="">Trento</option>
                                                    <option value="">Treviso</option>
                                                    <option value="">Trieste</option>
                                                    <option value="">Udine</option>
                                                    <option value="">Varese</option>
                                                    <option value="">Venezia</option>
                                                    <option value="">Verbano-Cusio-Ossola</option>
                                                    <option value="">Vercelli</option>
                                                    <option value="">Verona</option>
                                                    <option value="">Vibo Valentia</option>
                                                    <option value="">Vicenza/option>
                                                    <option value="">Viterbo</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4" id="dom_citta" >
                                            <div class="form-group  attribute-type-Monotext ">
                                                <label for="domicilio_citta" class="active" style="transition: none 0s ease 0s;">
                                                    Citta
                                                </label>
                                                <input type="text" name="domicilio_citta" maxlength="254" value="" id="domicilio_citta"
                                                       class="form-control"  placeholder="Inserire citta">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-4" id="dom_indrizzo" >
                                            <div class="form-group  attribute-type-Monotext border-right">
                                                <label for="domicilio_Indrizzo" class="active  " style="transition: none 0s ease 0s;">
                                                    Indrizzo
                                                </label>
                                                <input type="text" name="domicilio_Indrizzo" maxlength="254" value="" id="domicilio_Indrizzo"
                                                       class="form-control" placeholder="Inserire Indirizzo" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4" id="dom_civico" >
                                            <div class="form-group  attribute-type-Monotext border-right">
                                                <label for="domicilio_Civico" class="active  " style="transition: none 0s ease 0s;">
                                                    Civico
                                                </label>
                                                <input type="text" name="domicilio_Civico" maxlength="254" value="" id="domicilio_Civicoo"
                                                       class="form-control" placeholder="Inserire Civico" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4" id="dom_cap">
                                            <div class="form-group  attribute-type-Monotext ">
                                                <label for="domicilio_cap" class="active" style="transition: none 0s ease 0s;">
                                                    Cap
                                                </label>
                                                <input type="number" name="domicilio_cap" maxlength="7" value="" id="domicilio_cap"
                                                       class="form-control" placeholder="Inserire cap" >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end residenza -->



                                <!-- <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eMailConfirm" class="control-label active" style="transition: none 0s ease 0s;">
                                                Reinserisci Email
                                                <abbr class="icon icon-asterisk" title="*">
                                                    <span class="noscreen">*</span>
                                                </abbr>
                                            </label>
                                            <input type="text" name="emailConfirm" value="" id="eMailConfirm" class="form-control"
                                                placeholder="Inserire conferma eMail">
                                        </div>
                                    </div>

                                </div> -->
                                <div class="row mt16">
                                    <div class="col-lg-11 col-md-7 col-sm-12 note">
                                        <p>
                                            E' richiesta la presa visione dell'Informativa sul trattamento dei dati ai sensi dell'articolo
                                            13 del regolamento europeo n.679/2016 (Gdpr) - Leggi
                                            <a href="https://www.comune.cagliari.it/portale/it/privacy.page" target="_blank">
                                                Informativa sulla Privacy
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-12">
                                        <div class="form-check">
                                            <input type="checkbox" name="privacyPolicyAgreement" value="true" id="privacyPolicyAgreement"
                                                   class="form-control" data-isrequired="true">
                                            <label for="privacyPolicyAgreement">
                                                Ho letto l'informativa sul trattamento dei dati personali
                                                <abbr class="icon icon-asterisk" title="*">
                                                    <span class="noscreen">*</span>
                                                </abbr>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 clearfix">
                                        <div class="float-right">
                                            <input type="submit" value="Salva il profilo" id="formSpidRegistrationSubmit_bottom"
                                                   class="btn btn-default btn-trasparente active" title="Salva il profilo" aria-hidden="true">
                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>

                </div>
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
