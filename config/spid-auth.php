<?php

/**
 * This file contains the configuration options needed for SPIDAuth Package.
 *
 * @package Italia\SPIDAuth
 * @license BSD-3-clause
 */

return [
    // 'sp_entity_id' => 'https://sso.yuniro.it/sp/',
    'sp_entity_id' => 'https://sso.yuniro.it',
    'sp_base_url' => 'https://sso.yuniro.it',
    'sp_service_name' => 'SPID',
    'sp_organization_name' => 'Selexi srl',
    'sp_organization_display_name' => 'Selexi',
    'sp_organization_url' => 'https://www.selexi.it',
    'sp_acs_index' => 0,
    'sp_attributes_index' => 0,
    'sp_requested_attributes' => [
        'spidCode',
        'name',
        'familyName',
        'placeOfBirth',
        'countyOfBirth',
        'dateOfBirth',
        'gender',
        'fiscalNumber',
        // 'companyName',
        // 'registeredOffice',
        // 'ivaCode',
        'idCard',
        // 'mobilePhone',
        'email',
        'address',
        'digitalAddress',
        'expirationDate',
    ],
    // 'sp_certificate_file' => null,
    // 'sp_private_key_file' => null,
    'sp_certificate' => 'MIIDrDCCApQCCQC62KQ4rH4TITANBgkqhkiG9w0BAQsFADCBlzELMAkGA1UEBhMCSVQxDzANBgNV
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
    'sp_private_key' => 'MIIEpAIBAAKCAQEAxwo5VptAkK4b4yMSY7VDiFj/lms9fZ3mfrXL8Q1X3pjEa75l
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
    'sp_spid_level' => 'https://www.spid.gov.it/SpidL1',

    'hide_real_idps' => true,
    'expose_sp_metadata' => true,
    'expose_idps_json' => true,
    'only_sp_logout' => false,
    // 'test_idp' => false,Set 'test_idp' => false to disable
    'test_idp' => [
        // DA USARE IN LOCALE CON DOCKER - FUNZIONANTE
        'entityId' => 'https://localhost:8080',
        'sso_endpoint' => 'https://localhost:8443/samlsso',
        'slo_endpoint' => 'https://localhost:8443/samlsso',

        // TEST
        // 'entityId' => 'https://demo.spid.gov.it',
        // 'sso_endpoint' => 'https://demo.spid.gov.it/samlsso',
        // 'slo_endpoint' => 'https://demo.spid.gov.it/samlsso',
        'x509cert' => 'MIIEGDCCAwCgAwIBAgIJAOrYj9oLEJCwMA0GCSqGSIb3DQEBCwUAMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDAeFw0xOTA0MTExMDAyMDhaFw0yNTAzMDgxMDAyMDhaMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAK8kJVo+ugRrbbv9xhXCuVrqi4B7/MQzQc62ocwlFFujJNd4m1mXkUHFbgvwhRkQqo2DAmFeHiwCkJT3K1eeXIFhNFFroEzGPzONyekLpjNvmYIs1CFvirGOj0bkEiGaKEs+/umzGjxIhy5JQlqXE96y1+Izp2QhJimDK0/KNij8I1bzxseP0Ygc4SFveKS+7QO+PrLzWklEWGMs4DM5Zc3VRK7g4LWPWZhKdImC1rnS+/lEmHSvHisdVp/DJtbSrZwSYTRvTTz5IZDSq4kAzrDfpj16h7b3t3nFGc8UoY2Ro4tRZ3ahJ2r3b79yK6C5phY7CAANuW3gDdhVjiBNYs0CAwEAAaOByjCBxzAdBgNVHQ4EFgQU3/7kV2tbdFtphbSA4LH7+w8SkcwwgZcGA1UdIwSBjzCBjIAU3/7kV2tbdFtphbSA4LH7+w8SkcyhaaRnMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdIIJAOrYj9oLEJCwMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAJNFqXg/V3aimJKUmUaqmQEEoSc3qvXFITvT5f5bKw9yk/NVhR6wndL+z/24h1OdRqs76blgH8k116qWNkkDtt0AlSjQOx5qvFYh1UviOjNdRI4WkYONSw+vuavcx+fB6O5JDHNmMhMySKTnmRqTkyhjrch7zaFIWUSV7hsBuxpqmrWDoLWdXbV3eFH3mINA5AoIY/m0bZtzZ7YNgiFWzxQgekpxd0vcTseMnCcXnsAlctdir0FoCZztxMuZjlBjwLTtM6Ry3/48LMM8Z+lw7NMciKLLTGQyU8XmKKSSOh0dGh5Lrlt5GxIIJkH81C0YimWebz8464QPL3RbLnTKg+c=',
    ],
    // 'validator_idp' => false,
    'validator_idp' => [
        // DA USARE IN LOCALE CON DOCKER - FUNZIONANTE
        'entityId' => 'https://localhost:8080',
        'sso_endpoint' => 'https://localhost:8443',
        'slo_endpoint' => 'https://localhost:8443',

        // TEST
        // 'entityId' => 'https://demo.spid.gov.it',
        // 'sso_endpoint' => 'https://demo.spid.gov.it/demo/login',
        // 'slo_endpoint' => 'https://demo.spid.gov.it/validator',
        'x509cert' => 'MIIEGDCCAwCgAwIBAgIJAOrYj9oLEJCwMA0GCSqGSIb3DQEBCwUAMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDAeFw0xOTA0MTExMDAyMDhaFw0yNTAzMDgxMDAyMDhaMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAK8kJVo+ugRrbbv9xhXCuVrqi4B7/MQzQc62ocwlFFujJNd4m1mXkUHFbgvwhRkQqo2DAmFeHiwCkJT3K1eeXIFhNFFroEzGPzONyekLpjNvmYIs1CFvirGOj0bkEiGaKEs+/umzGjxIhy5JQlqXE96y1+Izp2QhJimDK0/KNij8I1bzxseP0Ygc4SFveKS+7QO+PrLzWklEWGMs4DM5Zc3VRK7g4LWPWZhKdImC1rnS+/lEmHSvHisdVp/DJtbSrZwSYTRvTTz5IZDSq4kAzrDfpj16h7b3t3nFGc8UoY2Ro4tRZ3ahJ2r3b79yK6C5phY7CAANuW3gDdhVjiBNYs0CAwEAAaOByjCBxzAdBgNVHQ4EFgQU3/7kV2tbdFtphbSA4LH7+w8SkcwwgZcGA1UdIwSBjzCBjIAU3/7kV2tbdFtphbSA4LH7+w8SkcyhaaRnMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdIIJAOrYj9oLEJCwMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAJNFqXg/V3aimJKUmUaqmQEEoSc3qvXFITvT5f5bKw9yk/NVhR6wndL+z/24h1OdRqs76blgH8k116qWNkkDtt0AlSjQOx5qvFYh1UviOjNdRI4WkYONSw+vuavcx+fB6O5JDHNmMhMySKTnmRqTkyhjrch7zaFIWUSV7hsBuxpqmrWDoLWdXbV3eFH3mINA5AoIY/m0bZtzZ7YNgiFWzxQgekpxd0vcTseMnCcXnsAlctdir0FoCZztxMuZjlBjwLTtM6Ry3/48LMM8Z+lw7NMciKLLTGQyU8XmKKSSOh0dGh5Lrlt5GxIIJkH81C0YimWebz8464QPL3RbLnTKg+c=',
    ],

    'middleware_group' => 'web',
    'routes_prefix' => 'spid',
    // 'login_view' => 'spid-auth::login-spid',
    'login_view' => 'home',
    'after_login_url' => '/',
    'after_logout_url' => '/',
];
