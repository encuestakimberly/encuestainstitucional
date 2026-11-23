<!DOCTYPE html>
<html lang="es">

<head>
    <!-- CONFIGURACION BASICA DE LA PAGINA  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <!-- ENLACE DE BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        >

    <style>
        body {
            background-color: #f4f7fb;
        }

        /*Fondo personalizado de la seccion principal*/
        .hero {
            background: linear-gradient(135deg, #0b1f3a, #123f6d);
        }

        /*Color personalizado del boton*/
        .btn-encuesta.hover {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
        }

        .btn-encuesta:hover {
            background-color: #0956c7;
            border-color: #0956c7;
            color: white
        }

        /*Color del numero de cada pregunta*/
        .numero-pregunta {
            background-color: #eaf2ff;
            color: #0d6efd;
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>

    {{-- Barra de navegacion --}}

    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">

            <a href="{{ url('/') }}" class="navbar_brand fw-bold text-primary">
                CECYTE
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class= "navbar-toggler-icon"></span>
            </button>

            {{-- Opciones del menu --}}
            <div class="collapse navbar-collapse id=menu">

                <ul class="navbar-nav ms-auto">
                   


                    @guest

                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                Iniciar sesion
                            </a>
                        </li>

                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    <!-- SECCION PRINCIPAL -->

    <section class="hero text-white py-5">
        <div class="container py-5">
            <div class="row justify-content-center text-center">
                <div class="col-ig-8">

                    {{-- Etiqueta --}}

                    <span class="badge bg-light text-primary rounded-pill px-3 py-2 mb-3">
                        Participación Estudiantil
                    </span>

                    {{-- Titulo --}}
                    <h1 class="display-4 fw-bold">

                        Tu opinión transforma

                    </h1>

                    {{-- Descripcion --}}

                    <p class="lead text-white-50 mt-3">

                        Ayudanos a conocer tu experiencia dentro de nuestra
                        institucion. Tus respuestas nos permitiran identificar
                        areas de oportunidad y continuar mejorando la calidad
                        educativa y los servicios del CECYTE.

                    </P>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENEDOR PRINCIPAL DE LA ENCUESTA -->

    <main class="container">
        <div class="row justify-content-center ">
            <div class="col-12 col-lg-9">
                <div class="card border-0 rounded-4 shadow-lg mt-n5 mb-5">

                    <!-- ENCABEZADO DE LA ENCUESTA -->

                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold mb-2">
                            Encuesta de satisfacción
                        </h2>

                        <p class="text-secondary mb-4">
                            Selecciona la respuesta que mejor represente tu opinión
                        </p>

                        <!-- FORMULARIO -->
                        <form action="{{ route('encuesta.store') }}" method="POST">

                            {{-- Proteccion CSRF de Laravel --}}
                            @csrf

                            <!-- PREGUNTA 1 -->
                            <div class="py-4 border-bottom">
                                <div class="d-flex gap-3 align-items-start mb-3">
                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        01
                                    </div>

                                    {{-- Pregunta --}}
                                    <label class="fw-semibold pt-2">
                                        ¿Que tan satisfecho estas con la calidad educativa?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p1" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Excelente">
                                        Excelente
                                    </option>

                                    <option value="Buena">
                                        Buena
                                    </option>

                                    <option value="Mala">
                                        Mala
                                    </option>
                                </select>
                            </div>

                            <!-- PREGUNTA 2 -->
                            <div class="py-4 border-botttom">
                                <div class="d-flex gap-3 align-items-start mb-3">

                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        02
                                    </div>

                                    <label class="fw-semibold pt-2">
                                        ¿Cómo calificas el desempeño de los docentes?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p2" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Excelente">
                                        Excelente
                                    </option>

                                    <option value="Bueno">
                                        Bueno
                                    </option>

                                    <option value="Regular">
                                        Regular
                                    </option>

                                    <option value="Deficiente">
                                        Deficiente
                                    </option>
                                </select>
                            </div>

                            <!-- PREGUNTA 3 -->
                            <div class="py-4 border-botttom">
                                <div class="d-flex gap-3 align-items-start mb-3">

                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        03
                                    </div>

                                    <label class="fw-semibold pt-2">
                                        ¿Cómo calificas las instalaciones?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p3" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Excelente">
                                        Excelente
                                    </option>

                                    <option value="Buena">
                                        Buena
                                    </option>

                                    <option value="Regular">
                                        Regular
                                    </option>

                                    <option value="Mala">
                                        Mala
                                    </option>
                                </select>
                            </div>

                            <!-- PREGUNTA 4 -->
                            <div class="py-4 border-botttom">
                                <div class="d-flex gap-3 align-items-start mb-3">

                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        04
                                    </div>

                                    <label class="fw-semibold pt-2">
                                        ¿Qué tan satisfecho estas con los laboratorios?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p4" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Muy satisfecho">
                                        Muy satisfecho
                                    </option>

                                    <option value="Satisfecho">
                                        Satisfecho
                                    </option>

                                    <option value="Poco satisfechos">
                                        Poco satisfecho
                                    </option>

                                    <option value="Insatisfecho">
                                        Insatisfecho
                                    </option>
                                </select>
                            </div>

                            <!-- PREGUNTA 5 -->
                            <div class="py-4 border-botttom">
                                <div class="d-flex gap-3 align-items-start mb-3">

                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        05
                                    </div>

                                    <label class="fw-semibold pt-2">
                                        ¿La atención administrativa es adecuada?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p5" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Si">
                                        Si
                                    </option>

                                    <option value="Parcialmente">
                                        Parcialmente
                                    </option>

                                    <option value="No">
                                        No
                                    </option>

                                </select>
                            </div>

                            <!-- PREGUNTA 6 -->
                            <div class="py-4 border-botttom">
                                <div class="d-flex gap-3 align-items-start mb-3">

                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        06
                                    </div>

                                    <label class="fw-semibold pt-2">
                                        ¿Te sientes seguro dentro de la institución?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p6" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Si">
                                        Si
                                    </option>

                                    <option value="No">
                                        No
                                    </option>
                                </select>
                            </div>

                            <!-- PREGUNTA 7 -->
                            <div class="py-4 border-botttom">
                                <div class="d-flex gap-3 align-items-start mb-3">

                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        07
                                    </div>

                                    <label class="fw-semibold pt-2">
                                        ¿Recomendarías estudiar en el CECyTE?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p7" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Definitivamente si">
                                        Definitivamente si
                                    </option>

                                    <option value="Probablemente si">
                                        Probablemente si
                                    </option>

                                    <option value="Probablemente no">
                                        Probablemente no
                                    </option>

                                    <option value="Definitivamente no">
                                        Definitivamente no
                                    </option>
                                </select>
                            </div>

                            <!-- PREGUNTA 8 -->
                            <div class="py-4 border-botttom">
                                <div class="d-flex gap-3 align-items-start mb-3">

                                    {{-- Numero de la pregunta --}}
                                    <div
                                        class="numero-prtegunta rounded-3
                                d-flex align-items-center
                                justify-content-center
                                flex-shrink-0 fw-bold">
                                        08
                                    </div>

                                    <label class="fw-semibold pt-2">
                                        ¿Las actividades extracurriculares son suficientes?
                                    </label>
                                </div>

                                <select class="form-select form-select-lg" name="p8" required>
                                    <option value="">
                                        Selecciona una respuesta
                                    </option>

                                    <option value="Si">
                                        Si
                                    </option>

                                    <option value="No">
                                        No
                                    </option>

                                    <option value="No estoy seguro">
                                        No estoy seguro
                                    </option>
                                </select>
                            </div>

                            <!-- BOTÓN DE ENVIO -->

                            <div class="text-center pt-3">
                                <button type="submit"
                                    class="btn btn-encuesta btn-lg
                        rounded-3 px-5 fw-bold">

                                    Enviar mis respuestas

                                    <span class="ms-2">
                                        →
                                    </span>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- PIE DE PÁGINA -->
        <footer class="text-center text-secondary py-4 small">
            CECyTE • Encuesta de satisfacción Institucional
        </footer>

        <!-- JAVASCRIPT DE BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </main>
</body>

</html>
