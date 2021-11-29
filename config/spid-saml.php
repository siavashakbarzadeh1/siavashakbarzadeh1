<?php

/**
 * This file contains the config settings for your SPID Service Provider.
 *
 * @package Italia\SPIDAuth
 * @license BSD-3-clause
 */

// Service Provider Data that we are deploying
return [
    'sp' => [
        // Identifier of the SP entity  (must be a URI)
        'entityId' => 'https://sso.yuniro.it',
        // Specifies info about where and how the <AuthnResponse> message MUST be
        // returned to the requester, in this case our SP.
        'assertionConsumerService' => [
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://sso.yuniro.it/spid/acs',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-POST binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'index' => '1',
        ],
        // If you need to specify requested attributes, set a
        // attributeConsumingService. nameFormat, attributeValue and
        // friendlyName can be omitted. Otherwise remove this section.
        'attributeConsumingService' => [
            'serviceName' => '',
            'requestedAttributes' => [],
            'index' => '',
        ],
        // Specifies info about where and how the <Logout Response> message MUST be
        // returned to the requester, in this case our SP.
        'singleLogoutService' => [
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://demo.spid.gov.it/samlsso',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        // Specifies constraints on the name identifier to be used to
        // represent the requested subject.
        // Take a look on lib/Saml2/Constants.php to see the NameIdFormat supported
        'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',

        // Usually x509cert and privateKey of the SP are provided by files placed at
        // the certs folder. But we can also provide them with the following parameters
        'x509cert' => 'MIIDrDCCApQCCQC62KQ4rH4TITANBgkqhkiG9w0BAQsFADCBlzELMAkGA1UEBhMCSVQxDzANBgNV
        BAgMBkl0YWxpYTEPMA0GA1UEBwwGTWlsYW5vMQ8wDQYDVQQKDAZTZWxleGkxEzARBgNVBAsMClNl
        bGV4aSBzcmwxHjAcBgNVBAMMFWh0dHBzOi8vd3d3LnNlbGV4aS5pdDEgMB4GCSqGSIb3DQEJARYR
        c3VwcG9ydEBzZWxleGkuaXQwHhcNMjExMDA3MTcwODM3WhcNMjIxMDA3MTcwODM3WjCBlzELMAkG
        A1UEBhMCSVQxDzANBgNVBAgMBkl0YWxpYTEPMA0GA1UEBwwGTWlsYW5vMQ8wDQYDVQQKDAZTZWxl
        eGkxEzARBgNVBAsMClNlbGV4aSBzcmwxHjAcBgNVBAMMFWh0dHBzOi8vd3d3LnNlbGV4aS5pdDEg
        MB4GCSqGSIb3DQEJARYRc3VwcG9ydEBzZWxleGkuaXQwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAw
        ggEKAoIBAQDHCjlWm0CQrhvjIxJjtUOIWP+Waz19neZ+tcvxDVfemMRrvmWdj4yq+o22fHswHeVx
        yy6nH5dco+/lNWB4TJKUZ4BMZqhzKE+gQRXn5HGsVpodveUVpESbYE9tDXL9tWGsqppeSS/6iudF
        M7UQnxO9wTNb2QVaMwPo66ejBMHuMyktMleo7ZY3ohWV/Vq39CpVrsMZtD0c/vARc6q7iewxG75z
        x02at9UqiQDAs886JVaSEkT0iU35UDTN2DVXxxU6k3dbKXP8jo3sPDhtOpkWaPiHTYl+2/EHu1w5
        55NENAI0zdJDNkBSW8KBh4qx6BR7ukOa/cFlJ7rqQgzHtwRjAgMBAAEwDQYJKoZIhvcNAQELBQAD
        ggEBAEMrXz7bwJiW3onjvyqq8yQ0/scuWysuE5Cs/2OhINK5XsgnAnKSDKYma6G8IMVuEuGuik1h
        A4fkgHJQA7L3On+82qT0O/Y/Xw0yN7q0Hb17ZZhUyiRwCMf8W7wKxhxKlil3tjoJDZGHitXUlOW0
        lliNohYEvKBUjcCSogCGnpVcjW5VADwB2RGMeQTygOIjiUdfHy3KgYm7uZc+9tYegfpWJa2Q7HCw
        ufUF+mC9j5LVgDryhgGG1Qh/mkg64c/LHxjKMBj9ub9u9T1SWLkkPZnXjRZxlO3WU/JB8XZnrp81
        eRM7NprfQcR8uE/WCcdiRHS0SFcnSaTXMdKTptTdoCE=',
        'privateKey' => 'MIIEpAIBAAKCAQEAxwo5VptAkK4b4yMSY7VDiFj/lms9fZ3mfrXL8Q1X3pjEa75l
        nY+MqvqNtnx7MB3lccsupx+XXKPv5TVgeEySlGeATGaocyhPoEEV5+RxrFaaHb3l
        FaREm2BPbQ1y/bVhrKqaXkkv+ornRTO1EJ8TvcEzW9kFWjMD6OunowTB7jMpLTJX
        qO2WN6IVlf1at/QqVa7DGbQ9HP7wEXOqu4nsMRu+c8dNmrfVKokAwLPPOiVWkhJE
        9IlN+VA0zdg1V8cVOpN3Wylz/I6N7Dw4bTqZFmj4h02JftvxB7tcOeeTRDQCNM3S
        QzZAUlvCgYeKsegUe7pDmv3BZSe66kIMx7cEYwIDAQABAoIBAQCR0k27w7aDyOsp
        d3JrlktJw1pNS3gbZemOf4ZQriPoMygEf9NWoeq/AR19yqk90UleGyusyRpNhtWk
        qXxp5j+ldkaqsrNK2werMsPnxpf5WOFEVPFW76hL5T2LecT7Vz2eEMdTuG7sMYPK
        UV2gNctyw+7qpY6kTKfap3uDlWK3LXv7LKxMKEXIsybmsZhnuPi/c7OI/of0Qz4G
        3tdz4U6mi/Dc2K7xhvqhfI/tNAvaF2nURDqgxgzSoR6nz5Zj/jSgR0ts5nLEb580
        QiDc3NXeofVEMD9Ia9e+f8VYX7AUa/4oaCFuqCBCvQEGWPFVeBl8LTbcI2ZqykB9
        g5iw9AehAoGBAPiZryHy6v/vg72k165fXTq8vwCKFpuh+sWFyZrsfOBXc7RClGbg
        2xXNi6X82hf5TqDMkzGMer5SiNvj9GiNWeOGdd45p2HZM9fThmDHVdHNH+cDTisJ
        LqdbkP3lAfv/TeDXWB0LpXASd9VtYbVdAUkNOX8gs0u2yjcYhmWQsQm5AoGBAMz2
        5LWjIfAuVD1AffYsae7m6rCGdJTqJT41ZDlyNcHFciDF/WdAtBCxE3wMGKAMc9v7
        DyK8PfZ5/fhJQ23+c2saWPl0KXgZKyddjswP5tUm19Jt4kgYOeWEwW3jlJPTAEjy
        MYwa1yU5DFpXSSReI6LFIUfNh3k94e2aXgwhxFz7AoGAT/GD+yPV5FXOhKbE4QMz
        xNa7iV3epU+yh+BdE5/nDHGy+I3MkUTPzzQZK1ijfcAjQ9xlnTJyqk96SVQF3bVO
        6bbsonjh1bp2THpuJSMU+vG+x5gtg/Ng+FqexrblK3dPQPWfFUAQhHi75ntVR3BQ
        IIDLM5F9duSiJJOTbIfaFqkCgYBGOvLzKgqe+cDzm/2NNHq32XfhNLENtY09W54T
        8QZqdvU8NZs2nf0VGxfKEXr+nEW2wrfU9xtkMTjMso3gSqfRsx15nEv5UuZufqhH
        U8uMjdq1x+EZQvPTqUF+HdTzMgGO/S3tC+VcY8fPzMjLJVagl1tn9wzMhl+7woEn
        NwrJsQKBgQD0cABv9DZJSB26/TS3T7kC4alTskuKT8keCc8Q7yMeQLsjTCohF4nz
        SEWZ1PJKRqpJgSMy6fJkWpcEGdlVOlCoUEtA6/42W43W0awT99aDyXxfc13836pS
        EKu/0zJZKQVr+RtT5hXhOZnX1CCwsPHWN9A3eSXdoaU3/JBHzry2LA==',
    ],
    'security' => [
        'authnRequestsSigned' => true,
        'logoutRequestSigned' => true,
        'signMetadata' => true,
        'wantAssertionsSigned' => true,
        'signatureAlgorithm' => 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256',
        'digestAlgorithm' => 'http://www.w3.org/2001/04/xmlenc#sha256',
        'requestedAuthnContext' => [],
        'requestedAuthnContextComparison' => 'minimum',
        'destinationStrictlyMatches' => true,
        'rejectUnsolicitedResponsesWithInResponseTo' => true,
    ],
    'strict' => true,

    // Organization information template, the info in en_US lang is recomended, add more if required
    'organization' => [
        'en' => [
            'name' => 'Selexi',
            'displayname' => 'Selexi EN',
            'url' => 'https://www.selexi.it',
        ],
        'it' => [
            'name' => 'Selexi',
            'displayname' => 'Selexi IT',
            'url' => 'https://www.selexi.it',
        ],
    ],
];
