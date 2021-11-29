<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Italia\SPIDAuth\Middleware;

class MetadataModifier
{
    public function handle($request, Closure $next, $guard = null)
    {
        $response = $next($request);

        if ($request->path() == 'spid/metadata') {
            $content = $response->getOriginalContent();

            $content = Str::replaceFirst(
                'xmlns:md="urn:oasis:names:tc:SAML:2.0:metadata"',
                'xmlns:md="urn:oasis:names:tc:SAML:2.0:metadata" xmlns:spid="https://spid.gov.it/saml-extensions"',
                $content
            );

            $content = Str::replaceLast(
                '</md:EntityDescriptor>',
                '<md:ContactPerson contactType="other">
    		<md:Extensions>
    			<spid:VATNumber></spid:VATNumber>
    			<spid:FiscalCode></spid:FiscalCode>
    			<spid:Private/>
    		</md:Extensions>
    		<md:EmailAddress></md:EmailAddress>
    		<md:TelephoneNumber></md:TelephoneNumber>
    	</md:ContactPerson>
    	<md:ContactPerson contactType="billing">
    		<md:Extensions xmlns:fpa="https://spid.gov.it/invoicing-extensions">
    			<fpa:CessionarioCommittente>
    				<fpa:DatiAnagrafici>
    					<fpa:IdFiscaleIVA>
    						<fpa:IdPaese>IT</fpa:IdPaese>
    						<fpa:IdCodice></fpa:IdCodice>
    					</fpa:IdFiscaleIVA>
    					<fpa:Anagrafica>
    						<fpa:Denominazione></fpa:Denominazione>
    					</fpa:Anagrafica>
    				</fpa:DatiAnagrafici>
    				<fpa:Sede>
    					<fpa:Indirizzo></fpa:Indirizzo>
    					<fpa:NumeroCivico></fpa:NumeroCivico>
    					<fpa:CAP></fpa:CAP>
    					<fpa:Comune></fpa:Comune>
    					<fpa:Provincia></fpa:Provincia>
    					<fpa:Nazione>IT</fpa:Nazione>
    				</fpa:Sede>
    			</fpa:CessionarioCommittente>
    		</md:Extensions>
    		<md:Company></md:Company>
    		<md:EmailAddress></md:EmailAddress>
    		<md:TelephoneNumber></md:TelephoneNumber>
    	</md:ContactPerson>
    </md:EntityDescriptor>',
                $content
            );

            $response->setContent($content);
        }

        return $response;
    }
}
