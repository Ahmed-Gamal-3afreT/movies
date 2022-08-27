<?php
$baseUrl = "https://www.themoviedb.org";
$apiUrl = "https://api.themoviedb.org";
$linkUrl = "https://themoviedb.org";
$kye = "3c3abe58bfa34157eecce87e3032e7f0";
$lang = "en-US"
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>Popular Movies &#8212; The Movie Database (TMDB)</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="cleartype" content="on">
    <meta charset="utf-8">
    <meta name="keywords" content="Movies, TV Shows, Streaming, Reviews, API, Actors, Actresses, Photos, User Ratings, Synopsis, Trailers, Teasers, Credits, Cast">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="description" content="The Movie Database (TMDB) is a popular, user editable database for movies and TV shows.">
    <meta name="msapplication-TileImage" content="/assets/2/v4/icons/mstile-144x144-30e7905a8315a080978ad6aeb71c69222b72c2f75d26dab1224173a96fecc962.png">
<meta name="msapplication-TileColor" content="#032541">
<meta name="theme-color" content="#032541">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/2/apple-touch-icon-57ed4b3b0450fd5e9a0c20f34e814b82adaa1085c79bdde2f00ca8787b63d2c4.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/2/favicon-32x32-543a21832c8931d3494a68881f6afcafc58e96c5d324345377f3197a37b367b5.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/2/favicon-16x16-b362d267873ce9c5a39f686a11fe67fec2a72ed25fa8396c11b71aa43c938b11.png">
<link rel="manifest" href="/manifest.json?version=3">
    <link rel="canonical" href="https://www.themoviedb.org/movie">
    <link rel="search" type="application/opensearchdescription+xml" title="TMDB Search" href="/opensearch.xml">
    <link rel="preload" href="https://www.themoviedb.org/assets/2/Consensus-3cba2c4d050ea63dbf7783173d288faf9ecb2942515a5e7f6e1beecabb2eaf72.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v14-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-regular-f38472b9e378b8c936f55a92677f575ab69e414d7cc3706ecfefeacd994b7975.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v14-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-italic-48273a74acbc1611b6ef1d0a771bb8ef042b9922b51d5bff560571dddcb5542a.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v14-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-300-db9f15a13a9f8b8bc46db7756ab863e8834bd20a7a1124c4c0a5a8f7892f3e99.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v14-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-600-6a087a74d78fc7d7b97fa1b0911c4ff3be4ff0bd5144618fd7ddc63ef1777f3a.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v14-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700-d67f7dff97d105f4ac5616b00fc7822ce2c33f653ece2f547995e6a71bb7b993.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/fonts-36ddd04013299b102c5aa8b9f8098a1cb925ca0e8e037e557f7e65870703a6bb.css" media="screen">
    <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/application-6696909829667fe40b2943e8e285756c7bf19e33f2643b2b9614a84d9c8756a0.css" media="screen">

      <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/media-7f0cee666f406bed48c1772da9d2a784374dd9974e39bc208fcc9e3aa0bc6310.css" media="screen">

      <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/discover-421028eba2c3eaf5699e02314870662bfc46a923ce94d25af7cfb312dd37ad93.css" media="screen">

      <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/account-3a7e7607340c2ba9de9204b09ee40d73a687e5df2b2f7f6194e034fa8fd869c7.css" media="screen">

    <link rel="alternate" hreflang="x-default" href="https://www.themoviedb.org/movie">
    <link rel="alternate" hreflang="af-ZA" href="https://www.themoviedb.org/movie?language=af-ZA">
    <link rel="alternate" hreflang="ar-SA" href="https://www.themoviedb.org/movie?language=ar-SA">
    <link rel="alternate" hreflang="be-BY" href="https://www.themoviedb.org/movie?language=be-BY">
    <link rel="alternate" hreflang="bg-BG" href="https://www.themoviedb.org/movie?language=bg-BG">
    <link rel="alternate" hreflang="bn-BD" href="https://www.themoviedb.org/movie?language=bn-BD">
    <link rel="alternate" hreflang="ca-ES" href="https://www.themoviedb.org/movie?language=ca-ES">
    <link rel="alternate" hreflang="ch-GU" href="https://www.themoviedb.org/movie?language=ch-GU">
    <link rel="alternate" hreflang="cn-CN" href="https://www.themoviedb.org/movie?language=cn-CN">
    <link rel="alternate" hreflang="cs-CZ" href="https://www.themoviedb.org/movie?language=cs-CZ">
    <link rel="alternate" hreflang="cy-GB" href="https://www.themoviedb.org/movie?language=cy-GB">
    <link rel="alternate" hreflang="da-DK" href="https://www.themoviedb.org/movie?language=da-DK">
    <link rel="alternate" hreflang="de-DE" href="https://www.themoviedb.org/movie?language=de-DE">
    <link rel="alternate" hreflang="el-GR" href="https://www.themoviedb.org/movie?language=el-GR">
    <link rel="alternate" hreflang="en-US" href="https://www.themoviedb.org/movie?language=en-US">
    <link rel="alternate" hreflang="eo-EO" href="https://www.themoviedb.org/movie?language=eo-EO">
    <link rel="alternate" hreflang="es-ES" href="https://www.themoviedb.org/movie?language=es-ES">
    <link rel="alternate" hreflang="et-EE" href="https://www.themoviedb.org/movie?language=et-EE">
    <link rel="alternate" hreflang="eu-ES" href="https://www.themoviedb.org/movie?language=eu-ES">
    <link rel="alternate" hreflang="fa-IR" href="https://www.themoviedb.org/movie?language=fa-IR">
    <link rel="alternate" hreflang="fi-FI" href="https://www.themoviedb.org/movie?language=fi-FI">
    <link rel="alternate" hreflang="fr-FR" href="https://www.themoviedb.org/movie?language=fr-FR">
    <link rel="alternate" hreflang="ga-IE" href="https://www.themoviedb.org/movie?language=ga-IE">
    <link rel="alternate" hreflang="gd-GB" href="https://www.themoviedb.org/movie?language=gd-GB">
    <link rel="alternate" hreflang="gl-ES" href="https://www.themoviedb.org/movie?language=gl-ES">
    <link rel="alternate" hreflang="he-IL" href="https://www.themoviedb.org/movie?language=he-IL">
    <link rel="alternate" hreflang="hi-IN" href="https://www.themoviedb.org/movie?language=hi-IN">
    <link rel="alternate" hreflang="hr-HR" href="https://www.themoviedb.org/movie?language=hr-HR">
    <link rel="alternate" hreflang="hu-HU" href="https://www.themoviedb.org/movie?language=hu-HU">
    <link rel="alternate" hreflang="id-ID" href="https://www.themoviedb.org/movie?language=id-ID">
    <link rel="alternate" hreflang="it-IT" href="https://www.themoviedb.org/movie?language=it-IT">
    <link rel="alternate" hreflang="ja-JP" href="https://www.themoviedb.org/movie?language=ja-JP">
    <link rel="alternate" hreflang="ka-GE" href="https://www.themoviedb.org/movie?language=ka-GE">
    <link rel="alternate" hreflang="kk-KZ" href="https://www.themoviedb.org/movie?language=kk-KZ">
    <link rel="alternate" hreflang="kn-IN" href="https://www.themoviedb.org/movie?language=kn-IN">
    <link rel="alternate" hreflang="ko-KR" href="https://www.themoviedb.org/movie?language=ko-KR">
    <link rel="alternate" hreflang="ky-KG" href="https://www.themoviedb.org/movie?language=ky-KG">
    <link rel="alternate" hreflang="lt-LT" href="https://www.themoviedb.org/movie?language=lt-LT">
    <link rel="alternate" hreflang="lv-LV" href="https://www.themoviedb.org/movie?language=lv-LV">
    <link rel="alternate" hreflang="ml-IN" href="https://www.themoviedb.org/movie?language=ml-IN">
    <link rel="alternate" hreflang="mr-IN" href="https://www.themoviedb.org/movie?language=mr-IN">
    <link rel="alternate" hreflang="ms-MY" href="https://www.themoviedb.org/movie?language=ms-MY">
    <link rel="alternate" hreflang="nb-NO" href="https://www.themoviedb.org/movie?language=nb-NO">
    <link rel="alternate" hreflang="nl-NL" href="https://www.themoviedb.org/movie?language=nl-NL">
    <link rel="alternate" hreflang="no-NO" href="https://www.themoviedb.org/movie?language=no-NO">
    <link rel="alternate" hreflang="pa-IN" href="https://www.themoviedb.org/movie?language=pa-IN">
    <link rel="alternate" hreflang="pl-PL" href="https://www.themoviedb.org/movie?language=pl-PL">
    <link rel="alternate" hreflang="pt-PT" href="https://www.themoviedb.org/movie?language=pt-PT">
    <link rel="alternate" hreflang="ro-RO" href="https://www.themoviedb.org/movie?language=ro-RO">
    <link rel="alternate" hreflang="ru-RU" href="https://www.themoviedb.org/movie?language=ru-RU">
    <link rel="alternate" hreflang="si-LK" href="https://www.themoviedb.org/movie?language=si-LK">
    <link rel="alternate" hreflang="sk-SK" href="https://www.themoviedb.org/movie?language=sk-SK">
    <link rel="alternate" hreflang="sl-SI" href="https://www.themoviedb.org/movie?language=sl-SI">
    <link rel="alternate" hreflang="sq-AL" href="https://www.themoviedb.org/movie?language=sq-AL">
    <link rel="alternate" hreflang="sr-RS" href="https://www.themoviedb.org/movie?language=sr-RS">
    <link rel="alternate" hreflang="sv-SE" href="https://www.themoviedb.org/movie?language=sv-SE">
    <link rel="alternate" hreflang="ta-IN" href="https://www.themoviedb.org/movie?language=ta-IN">
    <link rel="alternate" hreflang="te-IN" href="https://www.themoviedb.org/movie?language=te-IN">
    <link rel="alternate" hreflang="tl-PH" href="https://www.themoviedb.org/movie?language=tl-PH">
    <link rel="alternate" hreflang="th-TH" href="https://www.themoviedb.org/movie?language=th-TH">
    <link rel="alternate" hreflang="tr-TR" href="https://www.themoviedb.org/movie?language=tr-TR">
    <link rel="alternate" hreflang="uk-UA" href="https://www.themoviedb.org/movie?language=uk-UA">
    <link rel="alternate" hreflang="vi-VN" href="https://www.themoviedb.org/movie?language=vi-VN">
    <link rel="alternate" hreflang="zh-CN" href="https://www.themoviedb.org/movie?language=zh-CN">
    <link rel="alternate" hreflang="zu-ZA" href="https://www.themoviedb.org/movie?language=zu-ZA">
    <link rel="alternate" hreflang="ar-AE" href="https://www.themoviedb.org/movie?language=ar-AE">
    <link rel="alternate" hreflang="de-AT" href="https://www.themoviedb.org/movie?language=de-AT">
    <link rel="alternate" hreflang="de-CH" href="https://www.themoviedb.org/movie?language=de-CH">
    <link rel="alternate" hreflang="en-AU" href="https://www.themoviedb.org/movie?language=en-AU">
    <link rel="alternate" hreflang="en-CA" href="https://www.themoviedb.org/movie?language=en-CA">
    <link rel="alternate" hreflang="en-GB" href="https://www.themoviedb.org/movie?language=en-GB">
    <link rel="alternate" hreflang="en-IE" href="https://www.themoviedb.org/movie?language=en-IE">
    <link rel="alternate" hreflang="en-NZ" href="https://www.themoviedb.org/movie?language=en-NZ">
    <link rel="alternate" hreflang="es-MX" href="https://www.themoviedb.org/movie?language=es-MX">
    <link rel="alternate" hreflang="fr-CA" href="https://www.themoviedb.org/movie?language=fr-CA">
    <link rel="alternate" hreflang="ms-SG" href="https://www.themoviedb.org/movie?language=ms-SG">
    <link rel="alternate" hreflang="nl-BE" href="https://www.themoviedb.org/movie?language=nl-BE">
    <link rel="alternate" hreflang="pt-BR" href="https://www.themoviedb.org/movie?language=pt-BR">
    <link rel="alternate" hreflang="zh-HK" href="https://www.themoviedb.org/movie?language=zh-HK">
    <link rel="alternate" hreflang="zh-SG" href="https://www.themoviedb.org/movie?language=zh-SG">
    <link rel="alternate" hreflang="zh-TW" href="https://www.themoviedb.org/movie?language=zh-TW">

    <script src="https://www.themoviedb.org/assets/2/lozad.min-7f803337d01a657607bca6b20e06f371c3895b36a5f2be03a8fa9b5e16c9a83e.js"></script>
    <script src="https://www.themoviedb.org/assets/2/jquery-3.6.0.min-ff1523fb7389539c84c65aba19260648793bb4f5e29329d2ee8804bc37a3fe6e.js"></script>
    <script>
      $(function() {
        jQuery.event.special.touchstart = {
          setup: function( _, ns, handle ) {
            this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
          }
        };
        jQuery.event.special.touchmove = {
          setup: function( _, ns, handle ) {
            this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
          }
        };
      });
      detected_timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        timezone = detected_timezone;
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5QWVXV');
    </script>
    <script src="https://www.themoviedb.org/assets/2/kendo-59bc8069669538cda019bccf140d9a7598fd5e3392322771187961e4fef87b99.js"></script>
    <script src="https://www.themoviedb.org/assets/2/application-3ace36e1c6b5c61359d7e5a7706dc69b2221b9af397c30e18aee72d055290973.js"></script>
      <script src="https://www.themoviedb.org/assets/2/application.desktop-ea69249141a43ef7c6a59a19ee40eface5e171cf03eefffddb488574a66dea02.js"></script>
      <script src="https://www.themoviedb.org/assets/2/kendo-2021.1.204/kendo.calendar.min-ff597f14a778b702ec1cf9967dec754e429caf1558c8b89f0de036e8efe39761.js"></script>
      <script src="https://www.themoviedb.org/assets/2/kendo-2021.1.204/kendo.datepicker.min-9efa21cba900555da428262129f44042706c5abac5644c872d9cac78f010493a.js"></script>
      <script src="https://www.themoviedb.org/assets/2/kendo-2021.1.204/kendo.slider.min-1e770b8fc7facf8ee48d3b0ad7abdfb598ab17cb69add240accc8df5fa2bc919.js"></script>
  </head>
<body class="en v4">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QWVXV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <script src="https://www.themoviedb.org/assets/2/kendo-2021.1.204/messages/kendo.messages.en-US.min-79da68ae0221b4fd7978805d0c79cc7f682fddace5f2137aa0dae8fe1c5ddacd.js"></script>
    <script src="https://www.themoviedb.org/assets/2/kendo-2021.1.204/cultures/kendo.culture.en-US.min-61ce5636474a35333ecff74fe30c528d459bcee29b3b32fc0c58ac77de788b34.js"></script>
    <script>kendo.culture("en-US");</script>

  <div class="page_wrap movie_wrap">


<header class="normal smaller no_animation smaller  subtle">
  <div class="content">
    <div class="sub_media">
      <div class="nav_wrapper">
          <a class="logo" href="/movies">
            <img src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_short-8e7b30f73a4020692ccca9c88bafe5dcb6f8a62a4c6bc55cd9ba82bb2cd95f6c.svg" alt="The Movie Database (TMDB)" width="154" height="20">
          </a>

        <ul class="dropdown_menu navigation">
            <li>
              <a class="no_click" href="#">Movies</a>

              <ul>
                <li><a href="/movies">Popular</a></li>
                <li><a href="/movies/upcoming.php">Upcoming</a></li>
                <li><a href="/movies/top_rated.php">Top Rated</a></li>
              </ul>
            </li>
           
      </div>

        <div class="flex">
          <ul class="primary">
            <li class="glyph new_buttons">
              <a class="new_icon no_click" href="#">
                <span class="glyphicons_v2 plus white"></span>
              </a>
            </li>
            <li class="translate">
              <div>en</div>
            </li>
              <li><a href="#">Dev_Ahmed Gamal</a></li>
              <li><a href="#">Join TMDB</a></li>

            <li class="glyph search_buttons">
              <a class="search" href="#"><span class="glyphicons_v2 search blue"></span></a>
              <a class="close hide" href="#"><span class="glyphicons_v2 menu-close invert svg"></span></a>
            </li>
          </ul>
        </div>
    </div>
  </div>
  <div class="search_bar hide">
    <section class="search show_search_false">
      <div class="sub_media">
        <form id="search_form" action="/search" method="get" accept-charset="utf-8">
          <label>
            <input dir="auto" id="search_v4" name="query" type="text" tabindex="1" autocorrect="off" autofill="off" autocomplete="off" spellcheck="false" placeholder="Search for a movie, tv show, person..." value="">
          </label>
          <input type="submit" disabled>
        </form>
      </div>
    </section>
  </div>
</header>