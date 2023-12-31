<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>
        <?php echo ucwords(str_replace("_", " ", $_GET['sec'])); ?> - El Trebol de 4 Hojas
    </title>
</head>

<body>

    <!-- ------------------------ Nav-Bar ------------------------ -->
    <div id="navbar" class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row justify-content-between align-items-center">
                <div class="d-none d-md-block col-md-4 justify-content-center">
                    <div class="row">
                        <div class="input-group mb-3">
                            <span
                                class="input-group-text material-symbols-outlined bg-success border-success text-white"
                                id="inputGroup-sizing-sm">
                                search
                            </span>
                            <input type="text" placeholder="Search" class="form-control border-success">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center justify-content-center">
                    <a href="?sec=home">
                        <svg class="w-50 bg-success rounded-circle" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="60 40 355 355" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0,440) scale(0.1,-0.1)" fill="#000000" stroke="none">
                                <path d="M2165 3969 c-104 -14 -288 -57 -384 -91 -119 -41 -319 -146 -426
                                -223 -370 -265 -616 -646 -707 -1097 -20 -97 -23 -143 -23 -333 0 -193 3 -234
                                24 -335 168 -811 836 -1384 1651 -1417 308 -12 572 44 855 183 473 232 829
                                694 935 1215 101 493 -19 1023 -319 1414 -339 442 -865 700 -1416 694 -66 -1
                                -151 -6 -190 -10z m485 -83 c205 -34 404 -108 595 -221 262 -155 522 -442 645
                                -712 73 -158 128 -341 150 -493 16 -109 16 -360 0 -470 -51 -362 -227 -709
                                -486 -960 -120 -116 -203 -182 -309 -245 -370 -219 -798 -293 -1215 -209 -163
                                33 -376 117 -535 212 -252 150 -497 416 -632 687 -176 352 -220 775 -122 1170
                                144 582 624 1062 1209 1210 83 21 159 34 290 49 64 8 324 -4 410 -18z" />
                                <path d="M2347 3704 c-4 -42 -7 -103 -7 -134 l0 -58 53 -6 c106 -14 167 31
                                174 126 7 93 -33 131 -148 143 l-66 6 -6 -77z m133 -4 c22 -22 26 -70 9 -103
                                -15 -28 -28 -37 -56 -37 -22 0 -23 4 -23 64 0 35 3 71 6 80 8 22 40 20 64 -4z" />
                                <path d="M2625 3633 c-16 -65 -28 -124 -29 -132 -1 -10 23 -20 73 -33 40 -10
                                75 -18 76 -16 2 2 5 14 7 28 3 22 -2 26 -40 34 -31 6 -41 13 -37 23 3 8 5 21
                                5 29 0 14 13 14 73 -3 13 -3 17 2 17 25 0 26 -4 31 -36 36 -29 6 -35 11 -32
                                29 3 23 12 25 64 13 28 -6 32 -4 36 18 5 27 7 26 -72 46 -25 6 -52 13 -61 16
                                -14 4 -22 -16 -44 -113z" />
                                <path d="M2023 3733 c-28 -5 -28 -6 2 -147 14 -64 25 -117 25 -119 0 -2 37 3
                                83 12 76 16 82 19 82 41 0 26 -3 27 -75 19 l-34 -4 -20 103 c-11 56 -25 101
                                -30 101 -6 -1 -21 -4 -33 -6z" />
                                <path d="M1818 3670 c-83 -25 -118 -85 -94 -164 28 -94 95 -133 172 -101 83
                                35 110 91 80 169 -29 77 -93 116 -158 96z m55 -72 c28 -26 48 -78 40 -106 -7
                                -27 -49 -45 -73 -32 -49 26 -66 118 -28 144 29 21 32 20 61 -6z" />
                                <path d="M2973 3562 c-46 -26 -90 -57 -98 -69 -15 -21 -13 -23 34 -49 44 -25
                                48 -31 39 -48 -9 -16 -6 -23 12 -38 28 -23 37 -23 45 2 3 11 15 20 25 20 25 0
                                41 29 28 50 -8 13 -2 32 26 83 l37 66 -30 15 c-16 9 -31 16 -33 15 -2 0 -40
                                -21 -85 -47z m26 -66 c-13 -27 -25 -32 -47 -17 -10 6 -5 13 20 28 18 11 34 19
                                36 18 1 -1 -3 -14 -9 -29z" />
                                <path d="M1535 3510 c-97 -57 -94 -51 -45 -122 24 -35 59 -84 78 -110 l34 -48
                                56 41 c57 40 81 70 82 100 0 26 -39 69 -64 69 -19 0 -22 4 -18 29 4 32 -26 71
                                -55 71 -10 0 -40 -14 -68 -30z m62 -56 c3 -8 -1 -23 -10 -31 -13 -13 -19 -14
                                -31 -3 -28 22 -17 47 22 49 7 1 15 -6 19 -15z m61 -76 c18 -18 14 -36 -10 -49
                                -18 -10 -24 -8 -40 11 -17 22 -17 23 -1 36 22 17 36 17 51 2z" />
                                <path d="M3196 3366 c-47 -52 -86 -97 -86 -100 0 -3 11 -13 26 -22 25 -17 26
                                -16 65 22 l39 38 31 -31 31 -31 -37 -41 -37 -41 23 -20 c13 -10 27 -19 30 -20
                                3 0 45 44 93 97 l86 97 -25 26 -26 25 -34 -40 -34 -40 -32 32 -33 33 34 36 35
                                35 -24 20 c-13 10 -27 19 -31 19 -4 0 -46 -42 -94 -94z" />
                                <path d="M1330 3345 l-54 -55 94 -95 95 -95 -71 0 c-70 0 -70 0 -79 32 -14 45
                                -57 75 -92 62 -28 -9 -116 -109 -111 -125 2 -4 50 -41 108 -82 l104 -75 18 23
                                c24 31 23 37 -17 63 -51 32 -44 44 23 41 l58 -2 87 90 c86 89 87 90 67 108
                                -20 18 -21 18 -53 -13 l-33 -32 -19 20 c-18 20 -18 21 10 50 23 24 26 32 15
                                45 -17 21 -30 19 -60 -10 -24 -23 -28 -24 -40 -10 -11 13 -8 21 19 49 30 31
                                31 33 13 49 -10 9 -21 17 -23 17 -3 0 -29 -25 -59 -55z m-82 -227 c14 -14 16
                                -45 2 -53 -5 -3 -21 2 -35 11 -20 13 -23 20 -14 35 11 22 30 24 47 7z" />
                                <path d="M3466 3203 c-37 -10 -93 -54 -111 -87 -26 -48 -14 -100 36 -149 37
                                -37 42 -39 89 -35 58 6 113 43 137 94 14 27 14 40 5 71 -21 71 -97 122 -156
                                106z m76 -80 c21 -19 23 -52 6 -75 -36 -43 -100 -62 -126 -36 -19 19 -14 63
                                11 85 49 45 80 52 109 26z" />
                                <path d="M1030 2924 c-22 -47 -40 -90 -40 -94 0 -12 37 -23 50 -15 5 3 10 12
                                10 20 0 28 20 24 113 -19 l95 -44 11 25 c6 13 11 28 11 32 0 5 -41 28 -91 52
                                -91 43 -93 46 -75 90 5 11 -1 19 -19 27 -26 12 -26 11 -65 -74z" />
                                <path d="M3576 2909 c-65 -32 -127 -59 -137 -59 -10 0 -23 9 -29 20 -9 16 -15
                                18 -30 10 -11 -6 -20 -18 -20 -26 0 -23 55 -74 81 -74 18 0 274 111 287 125 3
                                3 -27 66 -31 64 -1 0 -56 -27 -121 -60z" />
                                <path d="M1965 2879 c-69 -26 -132 -99 -149 -171 -5 -21 -20 -35 -66 -58 -262
                                -132 -194 -352 145 -468 52 -18 107 -30 245 -56 14 -3 -20 -2 -76 0 -57 3
                                -129 0 -165 -6 -152 -28 -269 -133 -269 -242 0 -81 34 -126 149 -195 56 -34
                                66 -45 79 -86 17 -54 70 -120 116 -144 18 -10 56 -17 91 -17 50 0 71 5 123 33
                                35 19 81 54 101 78 21 24 41 43 45 43 3 0 6 -21 6 -47 1 -101 43 -354 76 -456
                                14 -42 19 -47 37 -41 32 9 97 53 103 69 3 7 -7 32 -21 55 -58 92 -106 273
                                -105 399 l1 56 15 -44 c59 -167 198 -265 302 -212 48 24 104 86 136 148 21 42
                                31 50 76 66 64 23 125 77 141 124 28 85 -12 201 -102 292 -91 93 -197 132
                                -399 149 l-105 9 150 2 c83 0 179 6 215 11 164 26 300 148 300 269 0 78 -49
                                135 -161 189 -59 28 -65 33 -81 80 -21 58 -84 127 -135 149 -57 23 -136 19
                                -198 -12 -64 -31 -109 -79 -144 -155 -25 -54 -26 -60 -23 -235 3 -174 -3 -255
                                -16 -255 -4 0 -8 64 -9 143 -2 231 -44 362 -141 448 -88 77 -212 115 -287 88z
                                m378 -756 c-7 -2 -21 -2 -30 0 -10 3 -4 5 12 5 17 0 24 -2 18 -5z" />
                                <path d="M3510 2750 c12 -43 17 -48 43 -43 21 4 25 -1 37 -41 12 -43 11 -47
                                -10 -64 -20 -16 -21 -20 -8 -50 l13 -33 107 76 c59 42 110 80 113 85 3 5 1 27
                                -5 48 -9 37 -13 40 -56 46 -26 3 -91 6 -145 6 l-98 0 9 -30z m245 -39 c-21
                                -18 -105 -62 -105 -54 0 4 -3 18 -6 30 -6 20 -2 22 42 26 27 2 56 4 64 5 8 1
                                10 -1 5 -7z" />
                                <path d="M1136 2585 c-4 -24 -11 -47 -16 -50 -4 -3 -52 4 -106 15 -53 11 -98
                                19 -99 18 -2 -2 -6 -17 -9 -34 l-7 -31 132 -26 c73 -15 133 -26 134 -24 1 1 9
                                38 18 82 16 83 13 94 -24 95 -12 0 -19 -13 -23 -45z" />
                                <path d="M3733 2525 c-12 -8 -29 -38 -38 -66 -12 -36 -21 -49 -33 -47 -14 3
                                -17 15 -17 60 0 56 0 57 -25 51 -35 -9 -42 -22 -36 -75 6 -56 22 -84 57 -98
                                49 -21 79 -3 107 62 32 73 57 77 57 8 0 -42 2 -45 28 -48 26 -3 27 -2 27 48 0
                                55 -19 104 -45 114 -28 10 -59 7 -82 -9z" />
                                <path d="M890 2350 l0 -80 38 0 c20 0 81 -3 135 -7 l97 -6 0 81 0 82 -30 0
                                c-29 0 -30 -2 -30 -45 0 -41 -2 -45 -25 -45 -23 0 -25 4 -25 45 0 43 -1 45
                                -30 45 -28 0 -30 -2 -30 -40 0 -37 -2 -40 -26 -40 -26 0 -26 2 -22 45 5 44 5
                                45 -23 45 l-29 0 0 -80z" />
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <a class="btn btn btn-outline-secondary mx-2" href="?sec=sing-up">Sign up</a>
                    <a class="btn btn btn-outline-success mx-2" href="?sec=login">Log in</a>
                </div>

                <div class="d-md-none col-md-4 justify-content-center mt-2">
                    <div class="row">
                        <div class="input-group mb-3">
                            <span
                                class="input-group-text material-symbols-outlined bg-success border-success text-white"
                                id="inputGroup-sizing-sm">
                                search
                            </span>
                            <input type="text" placeholder="Search" class="form-control border-success">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav flex-column flex-sm-row align-items-center nav-underline justify-content-center">
                <a class="nav-item nav-link link-body-emphasis mx-5 active <?php if($_GET["sec"] == "home"){ echo "text-success";} ?>" href="?sec=home">INICIO</a>
                <div class="dropdown">
                    <a class="nav-item nav-link link-body-emphasis mx-5" href="?sec=productos">PRODUCTOS</a>
                    <div class="dropdown-content">
                        <a href="#">Opción 1</a>
                        <div class="sub-dropdown-active">
                            <a href="#">Opción 2</a>
                            <div class="sub-dropdown">
                                <a href="#">Sub-Opción 1</a>
                                <a href="#">Sub-Opción 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="nav-item nav-link link-body-emphasis mx-5" href="?sec=local">LOCAL</a>
            </nav>
        </div>
    </div>

    
    <!-- ------------------------ Main-Content ------------------------ -->
    <?php
        require_once 'views/' . $_GET['sec'] . '.php';
    ?>


    <!-- ------------------------ Footer ------------------------ -->
    <div class="text-white bg-success" style="background-color: #303436;">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Navegacion</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="?sec=home" class="nav-link p-0 text-body-secondary">Inicio</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Productos</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Local</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Formas de Envio</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Contactenos</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">11 4078-1359</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">matiasmonzonetn26@gmail.com</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Av. Rivadavia</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <form>
                            <h5>Redes Sociales</h5>
                            <div class="my-3 ">
                                <i class="bi bi-instagram icono-personalizado"></i>
                                <i class="bi bi-facebook icono-personalizado"></i>
                                <i class="bi bi-twitch icono-personalizado"></i>
                            </div>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Contactenos</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">11 4078-1359</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">matiasmonzonetn26@gmail.com</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Av. Rivadavia</a></li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top">
                    <p>© 2023 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>