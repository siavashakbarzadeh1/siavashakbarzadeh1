<div class="nav-tabs-hidescroll mt-4 mt-md-5 mb-2 menu-utente">
    <ul class="nav nav-tabs auto no-border no-background nav-tabs-icon-text" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('login-login') ? 'active' : '' }}" id="login"
                href="{{ route('login-login') }}" role="tab" aria-controls="login" aria-selected="true">
                <i class="fas fa-home fa-2x mr-2"></i>
                PIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('login-Spid') ? 'active' : '' }}" id="Spid"
                href="{{ route('login-Spid') }}" role="tab" aria-controls="Spid" aria-selected="true">
                <i class="far fa-id-card fa-2x mr-2"></i>
                SPID</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ Route::is('login-CIE') ? 'active' : '' }}" id="CIE"
                href="{{ route('login-CIE')}}" role="tab" aria-controls="CIE" aria-selected="true">
                <i class="fas fa-file-signature fa-2x mr-2"></i>
                CIE</a>
        </li>


    </ul>
</div>
