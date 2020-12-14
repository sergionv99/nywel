<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/funciones.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.js') }}"></script>
</head>
<body>


<div class="top-header">
    <div class="rss">
        <a href="https://www.instagram.com/laurabeautysalon2/">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30 3H10C6.13401 3 3 6.13401 3 10V30C3 33.866 6.13401 37 10 37H30C33.866 37 37 33.866 37 30V10C37 6.13401 33.866 3 30 3ZM10 0C4.47715 0 0 4.47715 0 10V30C0 35.5228 4.47715 40 10 40H30C35.5228 40 40 35.5228 40 30V10C40 4.47715 35.5228 0 30 0H10ZM20 28C24.4183 28 28 24.4183 28 20C28 15.5817 24.4183 12 20 12C15.5817 12 12 15.5817 12 20C12 24.4183 15.5817 28 20 28ZM20 30C25.5228 30 30 25.5228 30 20C30 14.4772 25.5228 10 20 10C14.4772 10 10 14.4772 10 20C10 25.5228 14.4772 30 20 30ZM30.5 12C31.8807 12 33 10.8807 33 9.5C33 8.11929 31.8807 7 30.5 7C29.1193 7 28 8.11929 28 9.5C28 10.8807 29.1193 12 30.5 12Z" fill="white"/>
        </svg>
        </a>
        <a href="https://es-la.facebook.com/laurabeautysalon2/">
        <svg width="20" height="38" viewBox="0 0 20 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.5 23V37.5H12.5V23H19.5V15.5H12.5C12 5 12.5 6.28235 19.5 5.78145V0C12.5 0.00078243 7.5 0.218431 6 6V10.5V15.5H0V23H6.5Z" fill="white"/>
        </svg>
        </a>
    </div>
    <div><p>Envios GRATUITOS a partir de compras superiores a 45,99€</p></div>
</div>




    <section id="header-general">
        <section class="header-top">
        <article class="logo">
            <a href="{{route('home.index')}}">
            <svg width="461" height="50" viewBox="0 0 461 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="path-1-inside-1" fill="white">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M461 0H0V87H461V0ZM201.062 50.7656V78H213.812V50.5312L237.484 9.32812H223.891L207.438 39.0469L191.078 9.32812H177.297L201.062 50.7656ZM107.406 78V9.32812H120.906C123.344 13.1406 128.297 20.8281 135.766 32.3906C143.234 43.9531 147.781 50.9844 149.406 53.4844C149.875 54.2031 150.672 55.4219 151.797 57.1406C152.953 58.8281 153.766 60.0312 154.234 60.75C154.016 50.0312 153.906 44.4688 153.906 44.0625V9.32812H165.484V78H151.797L120.812 29.7188L118.562 26.0156C118.812 34.2656 118.938 40.0625 118.938 43.4062V78H107.406ZM410.406 9.32812V78H451.469L451.844 67.875H423.109V9.32812H410.406ZM356.406 78V9.32812H398.031L397.516 19.4062H369.109V37.125H396.109V47.2031H369.109V67.875H398.547L398.125 78H356.406ZM249.469 9.32812L268.125 78H281.203L297.281 27.7031L311.953 78H325.125L344.344 9.32812H331.688L318.094 62.9531L303.234 9.65625H291.094L275.438 62.7656L262.125 9.32812H249.469ZM10 7.98459L11.6049 9.20369L62 47.4846V10H64V49.5V51.5154L62.3951 50.2963L12 12.0154V17L63.6 55.7L64 56V56.5V63V64.9693L62.41 63.8074L12 26.9693V30.5L63.6 69.2L64 69.5V70V76.5V78.4846L62.405 77.3037L12 39.9846V76.5H10V38V36.0154L11.595 37.1963L62 74.5154V70.5L10.4 31.8L10 31.5V31V25V23.0307L11.59 24.1926L62 61.0307V57L10.4 18.3L10 18V17.5V10V7.98459ZM84 10V79H86V10H84Z"/>
                </mask>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M461 0H0V87H461V0ZM201.062 50.7656V78H213.812V50.5312L237.484 9.32812H223.891L207.438 39.0469L191.078 9.32812H177.297L201.062 50.7656ZM107.406 78V9.32812H120.906C123.344 13.1406 128.297 20.8281 135.766 32.3906C143.234 43.9531 147.781 50.9844 149.406 53.4844C149.875 54.2031 150.672 55.4219 151.797 57.1406C152.953 58.8281 153.766 60.0312 154.234 60.75C154.016 50.0312 153.906 44.4688 153.906 44.0625V9.32812H165.484V78H151.797L120.812 29.7188L118.562 26.0156C118.812 34.2656 118.938 40.0625 118.938 43.4062V78H107.406ZM410.406 9.32812V78H451.469L451.844 67.875H423.109V9.32812H410.406ZM356.406 78V9.32812H398.031L397.516 19.4062H369.109V37.125H396.109V47.2031H369.109V67.875H398.547L398.125 78H356.406ZM249.469 9.32812L268.125 78H281.203L297.281 27.7031L311.953 78H325.125L344.344 9.32812H331.688L318.094 62.9531L303.234 9.65625H291.094L275.438 62.7656L262.125 9.32812H249.469ZM10 7.98459L11.6049 9.20369L62 47.4846V10H64V49.5V51.5154L62.3951 50.2963L12 12.0154V17L63.6 55.7L64 56V56.5V63V64.9693L62.41 63.8074L12 26.9693V30.5L63.6 69.2L64 69.5V70V76.5V78.4846L62.405 77.3037L12 39.9846V76.5H10V38V36.0154L11.595 37.1963L62 74.5154V70.5L10.4 31.8L10 31.5V31V25V23.0307L11.59 24.1926L62 61.0307V57L10.4 18.3L10 18V17.5V10V7.98459ZM84 10V79H86V10H84Z" fill="black"/>
                <path d="M0 0V-8H-8V0H0ZM461 0H469V-8H461V0ZM0 87H-8V95H0V87ZM461 87V95H469V87H461ZM201.062 78H193.062V86H201.062V78ZM201.062 50.7656H209.062V48.6343L208.002 46.7855L201.062 50.7656ZM213.812 78V86H221.812V78H213.812ZM213.812 50.5312L206.876 46.546L205.812 48.3968V50.5312H213.812ZM237.484 9.32812L244.421 13.3134L251.307 1.32812H237.484V9.32812ZM223.891 9.32812V1.32812H219.175L216.892 5.4533L223.891 9.32812ZM207.438 39.0469L200.429 42.9048L207.417 55.5999L214.436 42.9217L207.438 39.0469ZM191.078 9.32812L198.086 5.47023L195.806 1.32812H191.078V9.32812ZM177.297 9.32812V1.32812H163.486L170.357 13.3082L177.297 9.32812ZM107.406 9.32812V1.32812H99.4062V9.32812H107.406ZM107.406 78H99.4062V86H107.406V78ZM120.906 9.32812L127.646 5.01883L125.287 1.32812H120.906V9.32812ZM149.406 53.4844L142.699 57.8443L142.705 57.8545L149.406 53.4844ZM151.797 57.1406L145.103 61.5219L145.15 61.5927L145.197 61.6625L151.797 57.1406ZM154.234 60.75L147.533 65.1201L162.803 88.5335L162.233 60.5868L154.234 60.75ZM153.906 9.32812V1.32812H145.906V9.32812H153.906ZM165.484 9.32812H173.484V1.32812H165.484V9.32812ZM165.484 78V86H173.484V78H165.484ZM151.797 78L145.064 82.3208L147.425 86H151.797V78ZM120.812 29.7188L113.976 33.8728L114.027 33.9568L114.08 34.0395L120.812 29.7188ZM118.562 26.0156L125.399 21.8615L109.647 -4.06379L110.566 26.2579L118.562 26.0156ZM118.938 78V86H126.938V78H118.938ZM410.406 78H402.406V86H410.406V78ZM410.406 9.32812V1.32812H402.406V9.32812H410.406ZM451.469 78V86H459.178L459.463 78.2961L451.469 78ZM451.844 67.875L459.838 68.1711L460.146 59.875H451.844V67.875ZM423.109 67.875H415.109V75.875H423.109V67.875ZM423.109 9.32812H431.109V1.32812H423.109V9.32812ZM356.406 9.32812V1.32812H348.406V9.32812H356.406ZM356.406 78H348.406V86H356.406V78ZM398.031 9.32812L406.021 9.73689L406.451 1.32812H398.031V9.32812ZM397.516 19.4062V27.4062H405.117L405.505 19.815L397.516 19.4062ZM369.109 19.4062V11.4062H361.109V19.4062H369.109ZM369.109 37.125H361.109V45.125H369.109V37.125ZM396.109 37.125H404.109V29.125H396.109V37.125ZM396.109 47.2031V55.2031H404.109V47.2031H396.109ZM369.109 47.2031V39.2031H361.109V47.2031H369.109ZM369.109 67.875H361.109V75.875H369.109V67.875ZM398.547 67.875L406.54 68.208L406.887 59.875H398.547V67.875ZM398.125 78V86H405.799L406.118 78.333L398.125 78ZM268.125 78L260.405 80.0974L262.008 86H268.125V78ZM249.469 9.32812V1.32812H239.005L241.749 11.4255L249.469 9.32812ZM281.203 78V86H287.045L288.823 80.4359L281.203 78ZM297.281 27.7031L304.961 25.4629L297.631 0.33472L289.661 25.2672L297.281 27.7031ZM311.953 78L304.273 80.2403L305.953 86H311.953V78ZM325.125 78V86H331.193L332.829 80.1561L325.125 78ZM344.344 9.32812L352.048 11.4842L354.89 1.32812H344.344V9.32812ZM331.688 9.32812V1.32812H325.462L323.933 7.36233L331.688 9.32812ZM318.094 62.9531L310.388 65.1016L318.461 94.0599L325.848 64.9189L318.094 62.9531ZM303.234 9.65625L310.94 7.50776L309.309 1.65625H303.234V9.65625ZM291.094 9.65625V1.65625H285.112L283.42 7.39415L291.094 9.65625ZM275.438 62.7656L267.675 64.6995L274.789 93.2573L283.111 65.0277L275.438 62.7656ZM262.125 9.32812L269.888 7.39425L268.377 1.32812H262.125V9.32812ZM11.6049 9.20369L6.76577 15.5742L6.76578 15.5742L11.6049 9.20369ZM10 7.98459L14.8391 1.61412L2 -8.13868V7.98459H10ZM62 47.4846L57.1609 53.8551L70 63.6079V47.4846H62ZM62 10V2H54V10H62ZM64 10H72V2H64V10ZM64 51.5154L59.1609 57.8859L72 67.6387V51.5154H64ZM62.3951 50.2963L57.556 56.6668L62.3951 50.2963ZM12 12.0154L16.8391 5.64493L4 -4.10786V12.0154H12ZM12 17H4V21L7.2 23.4L12 17ZM63.6 55.7L58.8 62.1L58.8 62.1L63.6 55.7ZM64 56H72V52L68.8 49.6L64 56ZM64 64.9693L59.2799 71.4285L72 80.724V64.9693H64ZM62.41 63.8074L67.1301 57.3483L67.1301 57.3483L62.41 63.8074ZM12 26.9693L16.7201 20.5102L4 11.2147V26.9693H12ZM12 30.5H4V34.5L7.2 36.9L12 30.5ZM63.6 69.2L68.4 62.8L68.4 62.8L63.6 69.2ZM64 69.5H72V65.5L68.8 63.1L64 69.5ZM64 78.4846L59.2397 84.9142L72 94.3618V78.4846H64ZM62.405 77.3037L67.1653 70.8741L62.405 77.3037ZM12 39.9846L16.7603 33.5551L4 24.1075V39.9846H12ZM12 76.5V84.5H20V76.5H12ZM10 76.5H2V84.5H10V76.5ZM10 36.0154L14.7603 29.5858L2 20.1383V36.0154H10ZM11.595 37.1963L16.3554 30.7668L16.3554 30.7667L11.595 37.1963ZM62 74.5154L57.2397 80.9449L70 90.3925V74.5154H62ZM62 70.5H70V66.5L66.8 64.1L62 70.5ZM10.4 31.8L15.2 25.4L15.2 25.4L10.4 31.8ZM10 31.5H2V35.5L5.20001 37.9L10 31.5ZM10 23.0307L14.7201 16.5715L2 7.27607V23.0307H10ZM11.59 24.1926L16.3101 17.7335L16.3101 17.7335L11.59 24.1926ZM62 61.0307L57.2799 67.4898L70 76.7853V61.0307H62ZM62 57H70V53L66.8 50.6L62 57ZM10.4 18.3L15.2 11.9L15.2 11.9L10.4 18.3ZM10 18H2V22L5.20001 24.4L10 18ZM84 79H76V87H84V79ZM84 10V2H76V10H84ZM86 79V87H94V79H86ZM86 10H94V2H86V10ZM0 8H461V-8H0V8ZM8 87V0H-8V87H8ZM461 79H0V95H461V79ZM453 0V87H469V0H453ZM209.062 78V50.7656H193.062V78H209.062ZM213.812 70H201.062V86H213.812V70ZM205.812 50.5312V78H221.812V50.5312H205.812ZM230.548 5.34288L206.876 46.546L220.749 54.5165L244.421 13.3134L230.548 5.34288ZM223.891 17.3281H237.484V1.32812H223.891V17.3281ZM214.436 42.9217L230.89 13.203L216.892 5.4533L200.439 35.172L214.436 42.9217ZM184.07 13.186L200.429 42.9048L214.446 35.189L198.086 5.47023L184.07 13.186ZM177.297 17.3281H191.078V1.32812H177.297V17.3281ZM208.002 46.7855L184.237 5.34803L170.357 13.3082L194.123 54.7457L208.002 46.7855ZM99.4062 9.32812V78H115.406V9.32812H99.4062ZM120.906 1.32812H107.406V17.3281H120.906V1.32812ZM142.486 28.0499C135.015 16.4846 130.072 8.81291 127.646 5.01883L114.166 13.6374C116.615 17.4683 121.579 25.1716 129.046 36.7314L142.486 28.0499ZM156.114 49.1245C154.497 46.6364 149.957 39.6169 142.486 28.0499L129.046 36.7314C136.512 48.2894 141.066 55.3323 142.699 57.8443L156.114 49.1245ZM158.49 52.7593C157.366 51.0406 156.572 49.8268 156.107 49.1142L142.705 57.8545C143.178 58.5794 143.978 59.8031 145.103 61.5219L158.49 52.7593ZM160.935 56.3799C160.412 55.577 159.553 54.307 158.396 52.6188L145.197 61.6625C146.353 63.3492 147.12 64.4855 147.533 65.1201L160.935 56.3799ZM145.906 44.0625C145.906 44.5773 146.019 50.2877 146.236 60.9132L162.233 60.5868C162.123 55.2279 162.041 51.16 161.987 48.3818C161.959 46.9923 161.939 45.9281 161.925 45.1874C161.919 44.8165 161.914 44.5308 161.91 44.3275C161.906 44.0897 161.906 44.0337 161.906 44.0625H145.906ZM145.906 9.32812V44.0625H161.906V9.32812H145.906ZM165.484 1.32812H153.906V17.3281H165.484V1.32812ZM173.484 78V9.32812H157.484V78H173.484ZM151.797 86H165.484V70H151.797V86ZM114.08 34.0395L145.064 82.3208L158.53 73.6792L127.545 25.398L114.08 34.0395ZM111.726 30.1697L113.976 33.8728L127.649 25.5647L125.399 21.8615L111.726 30.1697ZM126.938 43.4062C126.938 39.9278 126.809 34.0212 126.559 25.7733L110.566 26.2579C110.816 34.51 110.938 40.1972 110.938 43.4062H126.938ZM126.938 78V43.4062H110.938V78H126.938ZM107.406 86H118.938V70H107.406V86ZM418.406 78V9.32812H402.406V78H418.406ZM451.469 70H410.406V86H451.469V70ZM443.849 67.5789L443.474 77.7039L459.463 78.2961L459.838 68.1711L443.849 67.5789ZM423.109 75.875H451.844V59.875H423.109V75.875ZM415.109 9.32812V67.875H431.109V9.32812H415.109ZM410.406 17.3281H423.109V1.32812H410.406V17.3281ZM348.406 9.32812V78H364.406V9.32812H348.406ZM398.031 1.32812H356.406V17.3281H398.031V1.32812ZM405.505 19.815L406.021 9.73689L390.042 8.91936L389.526 18.9975L405.505 19.815ZM369.109 27.4062H397.516V11.4062H369.109V27.4062ZM377.109 37.125V19.4062H361.109V37.125H377.109ZM396.109 29.125H369.109V45.125H396.109V29.125ZM404.109 47.2031V37.125H388.109V47.2031H404.109ZM369.109 55.2031H396.109V39.2031H369.109V55.2031ZM377.109 67.875V47.2031H361.109V67.875H377.109ZM398.547 59.875H369.109V75.875H398.547V59.875ZM406.118 78.333L406.54 68.208L390.554 67.542L390.132 77.667L406.118 78.333ZM356.406 86H398.125V70H356.406V86ZM275.845 75.9026L257.189 7.23077L241.749 11.4255L260.405 80.0974L275.845 75.9026ZM281.203 70H268.125V86H281.203V70ZM289.661 25.2672L273.583 75.5641L288.823 80.4359L304.901 30.139L289.661 25.2672ZM319.633 75.7597L304.961 25.4629L289.601 29.9434L304.273 80.2403L319.633 75.7597ZM325.125 70H311.953V86H325.125V70ZM336.64 7.17206L317.421 75.8439L332.829 80.1561L352.048 11.4842L336.64 7.17206ZM331.688 17.3281H344.344V1.32812H331.688V17.3281ZM325.848 64.9189L339.442 11.2939L323.933 7.36233L310.339 60.9873L325.848 64.9189ZM295.528 11.8047L310.388 65.1016L325.8 60.8046L310.94 7.50776L295.528 11.8047ZM291.094 17.6562H303.234V1.65625H291.094V17.6562ZM283.111 65.0277L298.767 11.9183L283.42 7.39415L267.764 60.5035L283.111 65.0277ZM254.362 11.262L267.675 64.6995L283.2 60.8317L269.888 7.39425L254.362 11.262ZM249.469 17.3281H262.125V1.32812H249.469V17.3281ZM16.444 2.83321L14.8391 1.61412L5.16089 14.3551L6.76577 15.5742L16.444 2.83321ZM66.8391 41.1141L16.444 2.83321L6.76578 15.5742L57.1609 53.8551L66.8391 41.1141ZM54 10V47.4846H70V10H54ZM64 2H62V18H64V2ZM72 49.5V10H56V49.5H72ZM72 51.5154V49.5H56V51.5154H72ZM57.556 56.6668L59.1609 57.8859L68.8391 45.1449L67.2342 43.9258L57.556 56.6668ZM7.16089 18.3859L57.556 56.6668L67.2342 43.9258L16.8391 5.64493L7.16089 18.3859ZM20 17V12.0154H4V17H20ZM68.4 49.3L16.8 10.6L7.2 23.4L58.8 62.1L68.4 49.3ZM68.8 49.6L68.4 49.3L58.8 62.1L59.2 62.4L68.8 49.6ZM72 56.5V56H56V56.5H72ZM72 63V56.5H56V63H72ZM72 64.9693V63H56V64.9693H72ZM57.6898 70.2665L59.2799 71.4285L68.7201 58.5102L67.1301 57.3483L57.6898 70.2665ZM7.27987 33.4285L57.6899 70.2665L67.1301 57.3483L16.7201 20.5102L7.27987 33.4285ZM20 30.5V26.9693H4V30.5H20ZM68.4 62.8L16.8 24.1L7.2 36.9L58.8 75.6L68.4 62.8ZM68.8 63.1L68.4 62.8L58.8 75.6L59.2 75.9L68.8 63.1ZM72 70V69.5H56V70H72ZM72 76.5V70H56V76.5H72ZM72 78.4846V76.5H56V78.4846H72ZM57.6446 83.7332L59.2397 84.9142L68.7603 72.0551L67.1653 70.8741L57.6446 83.7332ZM7.23966 46.4142L57.6446 83.7332L67.1653 70.8741L16.7603 33.5551L7.23966 46.4142ZM20 76.5V39.9846H4V76.5H20ZM10 84.5H12V68.5H10V84.5ZM2 38V76.5H18V38H2ZM2 36.0154V38H18V36.0154H2ZM16.3554 30.7667L14.7603 29.5858L5.23967 42.4449L6.83471 43.6259L16.3554 30.7667ZM66.7603 68.0858L16.3554 30.7668L6.8347 43.6259L57.2397 80.9449L66.7603 68.0858ZM54 70.5V74.5154H70V70.5H54ZM5.6 38.2L57.2 76.9L66.8 64.1L15.2 25.4L5.6 38.2ZM5.20001 37.9L5.6 38.2L15.2 25.4L14.8 25.1L5.20001 37.9ZM2 31V31.5H18V31H2ZM2 25V31H18V25H2ZM2 23.0307V25H18V23.0307H2ZM16.3101 17.7335L14.7201 16.5715L5.27987 29.4898L6.86989 30.6517L16.3101 17.7335ZM66.7201 54.5715L16.3101 17.7335L6.86988 30.6517L57.2799 67.4898L66.7201 54.5715ZM54 57V61.0307H70V57H54ZM5.6 24.7L57.2 63.4L66.8 50.6L15.2 11.9L5.6 24.7ZM5.20001 24.4L5.6 24.7L15.2 11.9L14.8 11.6L5.20001 24.4ZM2 17.5V18H18V17.5H2ZM2 10V17.5H18V10H2ZM2 7.98459V10H18V7.98459H2ZM92 79V10H76V79H92ZM86 71H84V87H86V71ZM78 10V79H94V10H78ZM84 18H86V2H84V18Z" fill="black" mask="url(#path-1-inside-1)"/>
            </svg>
            </a>

        </article>
        <article class="header-top-elementos">
            <div>
                <svg width="85" height="94" viewBox="0 0 85 94" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M35 64C51.0163 64 64 51.0163 64 35C64 18.9837 51.0163 6 35 6C18.9837 6 6 18.9837 6 35C6 51.0163 18.9837 64 35 64ZM59.9268 59.5694C66.1558 53.2503 70 44.5741 70 35C70 15.67 54.33 0 35 0C15.67 0 0 15.67 0 35C0 54.33 15.67 70 35 70C41.8746 70 48.2862 68.018 53.6947 64.5943L77.9262 92.4536L77.9265 92.4533C78.6077 93.2363 79.5912 93.7553 80.7091 93.8212C82.9144 93.9513 84.8076 92.269 84.9376 90.0637C85.003 88.9549 84.6103 87.925 83.9233 87.1585L59.9268 59.5694Z" fill="black"/>
</svg>
                <article class="buscador">
{{--                    <form action="{{route('buscar')}}">--}}
                        <input class="buscar" type="text" name="search">
{{--                        <input class="buscar" type="submit" value="Buscar">--}}
{{--                    </form>--}}

                </article>

            </div>
            <div>
@guest

    <a href="{{route('login')}}">
                <svg width="101" height="94" viewBox="0 0 101 94" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="path-1-inside-1" fill="white">
<path fill-rule="evenodd" clip-rule="evenodd" d="M69.9998 25C69.9998 35.4934 61.4932 44 50.9998 44C40.5064 44 31.9998 35.4934 31.9998 25C31.9998 14.5066 40.5064 6 50.9998 6C61.4932 6 69.9998 14.5066 69.9998 25ZM75.9998 25C75.9998 38.8071 64.8069 50 50.9998 50C37.1927 50 25.9998 38.8071 25.9998 25C25.9998 11.1929 37.1927 0 50.9998 0C64.8069 0 75.9998 11.1929 75.9998 25ZM50.4998 59C69.702 59 86.9749 73.1595 93.8488 94H100.113C92.9874 70.1338 73.4657 53 50.4998 53C27.5339 53 8.01223 70.1338 0.886719 94H7.15085C14.0247 73.1595 31.2976 59 50.4998 59Z"/>
</mask>
<path fill-rule="evenodd" clip-rule="evenodd" d="M69.9998 25C69.9998 35.4934 61.4932 44 50.9998 44C40.5064 44 31.9998 35.4934 31.9998 25C31.9998 14.5066 40.5064 6 50.9998 6C61.4932 6 69.9998 14.5066 69.9998 25ZM75.9998 25C75.9998 38.8071 64.8069 50 50.9998 50C37.1927 50 25.9998 38.8071 25.9998 25C25.9998 11.1929 37.1927 0 50.9998 0C64.8069 0 75.9998 11.1929 75.9998 25ZM50.4998 59C69.702 59 86.9749 73.1595 93.8488 94H100.113C92.9874 70.1338 73.4657 53 50.4998 53C27.5339 53 8.01223 70.1338 0.886719 94H7.15085C14.0247 73.1595 31.2976 59 50.4998 59Z" fill="black"/>
<path d="M93.8488 94L92.8991 94.3132L93.1256 95H93.8488V94ZM100.113 94V95H101.455L101.071 93.7139L100.113 94ZM0.886719 94L-0.0714863 93.7139L-0.45546 95H0.886719V94ZM7.15085 94V95H7.87401L8.10053 94.3132L7.15085 94ZM50.9998 45C62.0455 45 70.9998 36.0457 70.9998 25H68.9998C68.9998 34.9411 60.941 43 50.9998 43V45ZM30.9998 25C30.9998 36.0457 39.9541 45 50.9998 45V43C41.0587 43 32.9998 34.9411 32.9998 25H30.9998ZM50.9998 5C39.9541 5 30.9998 13.9543 30.9998 25H32.9998C32.9998 15.0589 41.0587 7 50.9998 7V5ZM70.9998 25C70.9998 13.9543 62.0455 5 50.9998 5V7C60.941 7 68.9998 15.0589 68.9998 25H70.9998ZM50.9998 51C65.3592 51 76.9998 39.3594 76.9998 25H74.9998C74.9998 38.2548 64.2547 49 50.9998 49V51ZM24.9998 25C24.9998 39.3594 36.6404 51 50.9998 51V49C37.745 49 26.9998 38.2548 26.9998 25H24.9998ZM50.9998 -1C36.6404 -1 24.9998 10.6406 24.9998 25H26.9998C26.9998 11.7452 37.745 1 50.9998 1V-1ZM76.9998 25C76.9998 10.6406 65.3592 -1 50.9998 -1V1C64.2547 1 74.9998 11.7452 74.9998 25H76.9998ZM94.7985 93.6868C87.819 72.526 70.2211 58 50.4998 58V60C69.183 60 86.1309 73.793 92.8991 94.3132L94.7985 93.6868ZM100.113 93H93.8488V95H100.113V93ZM50.4998 54C72.9297 54 92.1266 70.7461 99.1547 94.2861L101.071 93.7139C93.8482 69.5215 74.0017 52 50.4998 52V54ZM1.84492 94.2861C8.87304 70.7461 28.07 54 50.4998 54V52C26.9979 52 7.15142 69.5215 -0.0714863 93.7139L1.84492 94.2861ZM7.15085 93H0.886719V95H7.15085V93ZM50.4998 58C30.7786 58 13.1807 72.526 6.20118 93.6868L8.10053 94.3132C14.8688 73.793 31.8166 60 50.4998 60V58Z" fill="black" mask="url(#path-1-inside-1)"/>
</svg>
    </a>
    @else

                    <svg width="101" height="94" viewBox="0 0 101 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M69.9998 25C69.9998 35.4934 61.4932 44 50.9998 44C40.5064 44 31.9998 35.4934 31.9998 25C31.9998 14.5066 40.5064 6 50.9998 6C61.4932 6 69.9998 14.5066 69.9998 25ZM75.9998 25C75.9998 38.8071 64.8069 50 50.9998 50C37.1927 50 25.9998 38.8071 25.9998 25C25.9998 11.1929 37.1927 0 50.9998 0C64.8069 0 75.9998 11.1929 75.9998 25ZM50.4998 59C69.702 59 86.9749 73.1595 93.8488 94H100.113C92.9874 70.1338 73.4657 53 50.4998 53C27.5339 53 8.01223 70.1338 0.886719 94H7.15085C14.0247 73.1595 31.2976 59 50.4998 59Z"/>
                        </mask>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M69.9998 25C69.9998 35.4934 61.4932 44 50.9998 44C40.5064 44 31.9998 35.4934 31.9998 25C31.9998 14.5066 40.5064 6 50.9998 6C61.4932 6 69.9998 14.5066 69.9998 25ZM75.9998 25C75.9998 38.8071 64.8069 50 50.9998 50C37.1927 50 25.9998 38.8071 25.9998 25C25.9998 11.1929 37.1927 0 50.9998 0C64.8069 0 75.9998 11.1929 75.9998 25ZM50.4998 59C69.702 59 86.9749 73.1595 93.8488 94H100.113C92.9874 70.1338 73.4657 53 50.4998 53C27.5339 53 8.01223 70.1338 0.886719 94H7.15085C14.0247 73.1595 31.2976 59 50.4998 59Z" fill="black"/>
                        <path d="M93.8488 94L92.8991 94.3132L93.1256 95H93.8488V94ZM100.113 94V95H101.455L101.071 93.7139L100.113 94ZM0.886719 94L-0.0714863 93.7139L-0.45546 95H0.886719V94ZM7.15085 94V95H7.87401L8.10053 94.3132L7.15085 94ZM50.9998 45C62.0455 45 70.9998 36.0457 70.9998 25H68.9998C68.9998 34.9411 60.941 43 50.9998 43V45ZM30.9998 25C30.9998 36.0457 39.9541 45 50.9998 45V43C41.0587 43 32.9998 34.9411 32.9998 25H30.9998ZM50.9998 5C39.9541 5 30.9998 13.9543 30.9998 25H32.9998C32.9998 15.0589 41.0587 7 50.9998 7V5ZM70.9998 25C70.9998 13.9543 62.0455 5 50.9998 5V7C60.941 7 68.9998 15.0589 68.9998 25H70.9998ZM50.9998 51C65.3592 51 76.9998 39.3594 76.9998 25H74.9998C74.9998 38.2548 64.2547 49 50.9998 49V51ZM24.9998 25C24.9998 39.3594 36.6404 51 50.9998 51V49C37.745 49 26.9998 38.2548 26.9998 25H24.9998ZM50.9998 -1C36.6404 -1 24.9998 10.6406 24.9998 25H26.9998C26.9998 11.7452 37.745 1 50.9998 1V-1ZM76.9998 25C76.9998 10.6406 65.3592 -1 50.9998 -1V1C64.2547 1 74.9998 11.7452 74.9998 25H76.9998ZM94.7985 93.6868C87.819 72.526 70.2211 58 50.4998 58V60C69.183 60 86.1309 73.793 92.8991 94.3132L94.7985 93.6868ZM100.113 93H93.8488V95H100.113V93ZM50.4998 54C72.9297 54 92.1266 70.7461 99.1547 94.2861L101.071 93.7139C93.8482 69.5215 74.0017 52 50.4998 52V54ZM1.84492 94.2861C8.87304 70.7461 28.07 54 50.4998 54V52C26.9979 52 7.15142 69.5215 -0.0714863 93.7139L1.84492 94.2861ZM7.15085 93H0.886719V95H7.15085V93ZM50.4998 58C30.7786 58 13.1807 72.526 6.20118 93.6868L8.10053 94.3132C14.8688 73.793 31.8166 60 50.4998 60V58Z" fill="black" mask="url(#path-1-inside-1)"/>
                    </svg>
                    <p>{{Auth::user()->name}}</p>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        <input type="submit" value="salir">
                        @csrf
                    </form>

    @endguest
            </div>
            <div>
                <svg class="carrito-boton" width="81" height="94" viewBox="0 0 81 94" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M40.9944 6C48.9895 6 55.7303 12.5462 55.9869 21H26.002C26.2586 12.5462 32.9994 6 40.9944 6ZM20 21C20.2595 9.35683 29.5597 0 40.9944 0C52.4292 0 61.7293 9.35683 61.9889 21H75H81V27V88V94H75H6H0V88V27V21H6H20ZM6 27H20V35H26V27H56V35H62V27H75V88H6V27Z" fill="black"/>
                </svg>
                <div class="carrito-modal">
                    <div class="">
                        <div class="titulo-cesta-modal"><h1>MI CESTA</h1></div>

                        @php
                            $precioF = 0;
                        @endphp
                        @if(@isset($carrito))
                            <div class="carrito-modal-estructura">

                    @foreach ($carrito as $producto)

                                    @php
                                        $precioF = $precioF + $producto['cantidad'] * $producto['producto']->precio;
                                    @endphp


                        <article class="carrito-modal-producto">
                            <img src="{{asset('storage/'.$producto['producto']->portada)}}">
                            <div>

                                    <p class="precio-total-producto">{{(number_format($producto['producto']->precio, '2', ',', '.'))}}</p>
                                <p class="titulo-producto">{{$producto['producto']->nombre}}</p>
                                <div>
                                    <button class="btn-cantidad btn-cantidad-menos">-</button>
                                    <input class="input-value-modal" type="text" value="{{$producto['cantidad']}}">
                                    <button class="btn-cantidad btn-cantidad-mas" >+</button>
                                </div>
                                    <span class="text-tam">PRECIO </span><span class="total-modal text-tam" style="font-weight: bold">{{(number_format($producto['total'], '2', ',', '.'))}}</span><svg class="btn-remove-cart papelera" width="279" height="333" viewBox="0 0 279 333" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M109.816 36.0537C107.413 37.1776 105.906 38.1863 105 38.9025V58.4053H75V34.1385V31.6273L75.8178 29.2531C78.7438 20.759 86.8366 13.6824 97.1061 8.87919C107.499 4.01813 121.84 0.586976 141.078 0.0526328L141.079 2.47955e-05C141.497 0.00608683 141.912 0.0134926 142.325 0.0222282C142.741 0.013474 143.159 0.00606012 143.579 0L143.58 0.053062C162.832 0.591848 177.188 4.05279 187.592 8.95723C197.884 13.8091 205.946 20.9382 208.851 29.438L209.657 31.7966V34.2892V58.747H179.657V38.9985C178.753 38.2724 177.237 37.242 174.8 36.0933C168.965 33.3428 158.768 30.445 142.323 30.0302C125.869 30.4429 115.66 33.3203 109.816 36.0537ZM212 295.631V120H242V296H241.984C242.143 302.549 240.937 311.308 235.927 318.94C232.709 323.842 227.932 328.204 221.365 330.74C217.463 332.246 213.312 332.961 209 332.998V333H70V332.998C65.688 332.961 61.5374 332.246 57.6347 330.74C51.068 328.204 46.2909 323.842 43.0728 318.94C38.0624 311.308 36.8565 302.549 37.016 296H36.9999V120H66.9999V295.631L67.0765 295.64C66.9577 296.72 66.9594 298.199 67.2085 299.659C67.4615 301.142 67.8716 302.05 68.151 302.475C68.3034 302.707 68.345 302.721 68.4087 302.742C68.4183 302.745 68.4285 302.749 68.4396 302.753C68.5601 302.799 69.1049 302.988 70.2547 303H70.481C71.2121 302.993 72.1619 302.916 73.3688 302.701L73.4222 303H205.578L205.631 302.701C206.838 302.916 207.788 302.993 208.519 303H208.745C209.895 302.988 210.44 302.799 210.56 302.753C210.571 302.749 210.582 302.745 210.591 302.742C210.655 302.721 210.696 302.707 210.849 302.475C211.128 302.05 211.538 301.142 211.791 299.659C212.041 298.199 212.042 296.72 211.923 295.64L212 295.631ZM105 282L106 142L120.999 142.107L119.999 282.107L105 282ZM159 142L158 282L173 282.107L174 142.107L159 142ZM278 71.0001L0 72.0001L0.107913 102L278.108 101L278 71.0001Z" fill="#E1E1E1"/>
                                        </svg>

                            <input class="data-product-carrito-modal" value="{{$producto['producto']->id}}">
                           </div>
                            <span class="separador"> </span>
                        </article>


                     @endforeach
                            </div>
                        <div class="carrito-modal-footer">
                            <p>SUBTOTAL</p>
                                <p class="total-modal-carrito">{{(number_format($precioF, '2', ',', '.'))}}</p>
                            <a class="carrito-modal-links link-cesta" href="{{route('carrito.index')}}"> VER CESTA</a>
                            <br>
                            <a class="carrito-modal-links link-pagar" href="#"> PAGAR AHORA </a>

                            <p class="cerrar-modal">CONTINUAR COMPRANDO </p>
                        </div>


                </div>
               @else
                        <p>Vacio</p>
                @endif
                </div>

                </div>
                <a href="{{route('carrito.index')}}">
                </a>

</div>
        </article>
        </section>
        <nav class="navegador">
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('productos.index')}}">Productos</a>
            <a>Blog</a>
            <a>Cursos</a>
        </nav>
    </section>

    @yield('content')
<footer>
    <div class="footer-principal">
    <div>
        <h1>INFORMACIÓN Y AYUDA</h1>
        <ul>
            <li>Ayuda</li>
            <li>Terminos y condiciones</li>
            <li>Politica de privacidad</li>
            <li>Politica de cookies</li>
            <li>Envíos</li>
            <li>FAQS</li>
        </ul>
    </div>
    <div>
        <svg width="375" height="35" viewBox="0 0 475 102" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M191.062 98V70.7656L167.297 29.3281H181.078L197.438 59.0469L213.891 29.3281H227.484L203.812 70.5312V98H191.062Z" fill="black"/>
            <path d="M97.4062 98V29.3281H110.906C113.344 33.1406 118.297 40.8281 125.766 52.3906C133.234 63.9531 137.781 70.9844 139.406 73.4844C139.875 74.2031 140.672 75.4219 141.797 77.1406C142.953 78.8281 143.766 80.0312 144.234 80.75C144.016 70.0312 143.906 64.4688 143.906 64.0625V29.3281H155.484V98H141.797L110.812 49.7188L108.562 46.0156C108.812 54.2656 108.938 60.0625 108.938 63.4062V98H97.4062Z" fill="black"/>
            <path d="M400.406 98V29.3281H413.109V87.875H441.844L441.469 98H400.406Z" fill="black"/>
            <path d="M346.406 98V29.3281H388.031L387.516 39.4062H359.109V57.125H386.109V67.2031H359.109V87.875H388.547L388.125 98H346.406Z" fill="black"/>
            <path d="M258.125 98L239.469 29.3281H252.125L265.438 82.7656L281.094 29.6562H293.234L308.094 82.9531L321.688 29.3281H334.344L315.125 98H301.953L287.281 47.7031L271.203 98H258.125Z" fill="black"/>
            <path d="M53 30V69.5L1 30V37.5L53 76.5V83L1 45V51L53 90V96.5L1 58V96.5" stroke="black" stroke-width="2"/>
            <line x1="75" y1="30" x2="75" y2="99" stroke="black" stroke-width="2"/>
        </svg>
<p>C/ Sant Josep Oriol, 2
    08850, Gavá, Barcelona
    Tel.644067673
    info@nywel.com</p>

    </div>
    </div>
    <div class="footer-2">
        <p>© 2020 NYWEL.</p>

    </div>
</footer>

</body>

<script>
    $('.cerrar-modal').click(function () {
        // $(".carrito-modal").load(location.href+" .carrito-modal>*","");
        $('.carrito-modal').hide(500 );

    })
    $(document).on('click', '.btn-remove-cart', function(){
        alert("funciona");
        // Cojo el valor del select

        var producto =  $(this).parent().find('.data-product-carrito-modal').val();
        // var producto = $('.data-product-carrito').val();
        var token = '{{csrf_token()}}';

        alert(producto);

        // Se inicia la petición al archivo
        $.ajax({
            type: 'POST',
            method: 'POST',
            url: "{{route('ajax.remove')}}",
            data:{_token:token, producto:producto},
            // async: false,
            // cache: false,
            success: function () {
                $(".carrito-modal").load(location.href+" .carrito-modal>*","");
            },
            error: function () {
                alert("NO FUNCIONa carrito")
            }
        });

    });

    $(document).on('click', '.btn-cantidad-menos', function(){
        var total = 0;
        var cantidad = $(this).parent().find('.input-value-modal').val();
        var producto = $(this).parent().parent().find('.data-product-carrito-modal').val();
        var precio = ($(this).parent().parent().find('.precio-total-producto').text());
        var token = '{{csrf_token()}}';
        var total_carrito = $(this).parents().find('.total-modal-carrito').text();
        cantidad --;
        $(this).parent().find('.input-value-modal').val(cantidad);
        // var total = precio_original * cantidad;
        if(cantidad < 1 ) {
            $(this).parent().find('.input-value-modal').val(1);

        }

        else {

                precio = precio.replace(",", ".");
                precio = parseFloat(precio);
                total = cantidad * precio;
                total = total.toFixed(2);
                total = total.replace(".", ",");


            total_carrito = total_carrito.replace(".", "");
            total_carrito = total_carrito.replace(",", ".");
            total_carrito = parseFloat(total_carrito);
            var integro = total_carrito % 1;
            // var integro = total_carrito % 1;
            precio = parseFloat(precio);

            total_carrito = total_carrito - precio;

            total_carrito = total_carrito.toFixed(2);
            total_carrito = total_carrito.replace(".", ",");



            $(this).parent().parent().find('.total-modal').text(total);
            $(this).parent().find('.input-value-modal').val(cantidad);
            $(this).parents().find('.total-modal-carrito').text(total_carrito);

            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.adjust')}}",
                data: {_token: token, cantidad: cantidad, producto: producto},
                success: function () {

                },
                error: function () {
                    alert("NO FUNCION")
                }
            });

        }

        // $(this).parent().parent().find('.data-product-carrito-modal').val(cantidad);

    });
    $(document).on('click', '.btn-cantidad-mas', function(){
        var total =0;
        var cantidad = $(this).parent().find('.input-value-modal').val();
        var producto = $(this).parent().parent().find('.data-product-carrito-modal').val();
        var token = '{{csrf_token()}}';
        var precio = $(this).parent().parent().find('.precio-total-producto').text();
        var miltm = 0;

        var total_carrito = $(this).parents().find('.total-modal-carrito').text();

        cantidad++;

            precio =  precio.replace(",", ".");
            precio = parseFloat(precio);
            total = cantidad * precio;
            total =  total.toFixed(2);
            total = total.replace(".", ",");


            /*Comprobar si el numero tiene o no comas ',' */
                total_carrito =  total_carrito.replace(".", "");
                total_carrito =  total_carrito.replace(",", ".");
                total_carrito =  parseFloat(total_carrito);
            precio = parseFloat(precio);
            total_carrito = total_carrito + precio;
        total_carrito =  total_carrito.toFixed(2);
        total_carrito = total_carrito.toString().replace(".", ",");






            $(this).parent().parent().find('.total-modal').text(total);
            $(this).parent().find('.input-value-modal').val(cantidad);
            $(this).parents().find('.total-modal-carrito').text(total_carrito);

            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.adjust')}}",
                data: {_token: token, cantidad: cantidad, producto: producto},
                success: function () {
                    // $(".total-modal").load(location.href + " .carrito-modal>*", "");
                    $(this).parent().find('.input-value-modal').load();
                    // $(".carrito-modal").load(location.href + " .carrito-modal>*", "");
                },
                error: function () {
                    alert("NO FUNCION")
                }
            });
            // alert(cantidad)

            // var total = precio_original * cantidad;
            // $('.precio-cantidad').text(total + '€');
            // $(this).parent().find('.input-value-modal').val(cantidad);


    });

    $(document).on('keyup', '.input-value-modal', function(){
        // Cojo el valor del select

        var total = 0.00;
        var cantidad = $(this).parent().find('.input-value-modal').val();
        var producto = $(this).parent().parent().find('.data-product-carrito-modal').val();
        var precio = $(this).parent().parent().find('.precio-total-producto').text();
        var total_carrito = $(this).parents().find('.total-modal-carrito').text();
        var total_original = $(this).parent().parent().find('.total-modal').text();
        var token = '{{csrf_token()}}';

        if (cantidad < 1 || cantidad == null){
            cantidad = 1;
            $(this).parents().find('.input-value').val(1);
        }
        if (event.which != 8 && event.which != 0  && (event.which < 48 || event.which > 57)) {
            $(".carrito-modal").load(location.href + " .carrito-modal>*", "");
        }
        else {


                precio =  precio.replace(",", ".");
            precio = parseFloat(precio);
                total = cantidad * precio;
                // total = total.replace(".", ",");
                // //
                // total = cantidad * precio;

            // alert(total);
            // alert(total_original);
            // alert(total_carrito);

            total_carrito =  total_carrito.replace(".", "");
            total_carrito =  total_carrito.replace(",", ".");

            total_original =  total_original.replace(",", ".");

            total_carrito =  parseFloat(total_carrito);

            total_original = parseFloat(total_original);



            total_carrito = total_carrito - total_original;
            total_carrito = total_carrito + total;
            total_carrito =  total_carrito.toFixed(2);

            total =  total.toFixed(2);
            total_carrito = total_carrito.replace(".", ",");
            total = total.replace(".", ",");

            $(this).parent().parent().find('.total-modal').text(total);
            $(this).parent().find('.input-value-modal').val(cantidad);
            $(this).parents().find('.total-modal-carrito').text(total_carrito);


            // Se inicia la petición al archivo
            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.adjust')}}",
                data: {_token: token, cantidad: cantidad, producto: producto},
                success: function () {
                    // $(".carrito-modal").load(location.href + " .carrito-modal>*", "");

                },
                error: function () {
                    alert("NO FUNCION")
                }
            });
        }

        $(this).parent().find('.input-value-modal').focus();
    });

    $(document).click(function(e) {
        if(e.target.id!="header-general"){  // if click is not in 'mydiv'
            // $('.carrito-modal').hide(3000);

        }
    });

    // $(document).ready(function(){
    $(".buscar").keyup(function() {

        console.log($(this).val());


                {{--var token = '{{csrf_token()}}';--}}
        var idpr = $(this).val();
        var token = '{{csrf_token()}}';
        var content = "<div class='busquedas'> ";
        $.ajax({  //create an ajax request to display.php
            type: "GET",
            method: "GET",
            url: "{{route('ajax.search')}}",
            data: ({idpr: idpr}),
            async: false,
            dataType: 'json',
            success: function (data) {

                console.log(data.data);
                if (data.data.length > 0 ) {

                    jQuery.each(data.data, function (index, value) {
                        //     // jQuery.each(data, function(as, value2){
                        var imgurl = "/" + value.portada;
                        var img_final = '{{asset("storage")}}' + imgurl;

                        var tokensito = '{{csrf_token()}}';
                        var productos = "{{route('productos.show', ':id')}}";
                        var editar = "{{route('productos.edit', ':id')}}";
                        
                        var destroy = "{{route('productos.destroy', ':id')}}";

                        productos = productos.replace(':id', value.id);
                        editar = editar.replace(':id', value.id);
                        destroy = destroy.replace(':id', value.id);

                        content += "<article class='miniatura-home'> <a href='" + productos + "'>" +
                            "                <img src='" + img_final + "'>" +
                            "                <p>" + value.nombre + "</p>" +
                            "                <p>" + value.precio + "€</p>" +
                            "                    </a>" +
                            "<input class='data-product' value='" + value.id + "'>" +
                            "<button class='add-producto-miniatura'>AÑADIR A MI CESTA</button>" +

                            "</article >";
                        // console.log(token);
                        //     // });
                    });

                    content += "</div>";
                    $(".padre").html(content);

                } else {
                    content = "<p>Los resultados no coinciden </p>";
                    $(".padre").html(content);
                }
            }
        });
        });


    // });

</script>
</html>
