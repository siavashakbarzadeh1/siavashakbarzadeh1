<div class="nav-tabs-hidescroll mt-4 mt-md-5 mb-2 menu-utente">
    <ul class="nav nav-tabs auto no-border no-background nav-tabs-icon-text" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('user-dashboard') ? 'active' : '' }}" id="anagrafica"
                href="{{ route('user-dashboard') }}" role="tab" aria-controls="anagrafica" aria-selected="true">
                <i class="fas fa-home fa-2x mr-2"></i>
                Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('user-anagrafica') ? 'active' : '' }}" id="anagrafica"
                href="{{ route('user-anagrafica') }}" role="tab" aria-controls="anagrafica" aria-selected="true">
                <i class="far fa-id-card fa-2x mr-2"></i>
                Anagrafica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('user-iscrizioni') ? 'active' : '' }}" id="pratiche"
                href="{{ route('user-iscrizioni')}}" role="tab" aria-controls="pratiche" aria-selected="true">
                <i class="fas fa-file-signature fa-2x mr-2"></i>
                Le tue Iscrizioni</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('user-payment') ? 'active' : '' }}" id="pagamenti" data-toggle="tab" href="#tab2"
                role="tab" aria-controls="pagamenti" aria-selected="false">
                <i class="fas fa-credit-card fa-2x mr-2"></i>
                Pagamenti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('user-documents') ? 'active' : '' }}" id="documenti" data-toggle="tab" href="#tab3"
                role="tab" aria-controls="documenti" aria-selected="false">
                <i class="fas fa-folder-open fa-2x mr-2"></i>
                Documenti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('user-inbox') ? 'active' : '' }}" id="tab4-tab" data-toggle="tab" href="#tab4"
                role="tab" aria-controls="tab4" aria-selected="false">
                <i class="fas fa-envelope-open-text fa-2x mr-2"></i>Messaggi</a>
        </li>
    </ul>
</div>
