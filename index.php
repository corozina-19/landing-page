<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucare</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon.png" size="32x32">
</head>
<body>
    <div class="mainHeader">
        <img src="<?php bloginfo('template_url'); ?>/img/Logo.head.svg" class="mainLogo">
        <div class="mainMenu">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a onclick="openModal('about-us')">Sobre</a></li>
                <li><a onclick="scrollToSmooth('contact-us')">Contacto</a></li>
                <!--<li><a href="/login.html" class="btn-overline">Entrar</a></li>-->
                <li><a href="/diagnosis.html" class="btn-success-header">Diagnóstico</a></li>
            </ul>
        </div>
    </div>
    <div class="mainSection">
        <div class="leftMainSection">
            <h2 class="tagLine">Cuéntanos que sientes y recibe asistencia médica</h2>
            <p>uCare te permite hacer un pre-diagnostico, contactarte con personal medico y brindar toda la información posible sobre la enfermedad sin salir de tu casa.</p>
            <h4>Disponible en:</h4>
            <div class="storesSection">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.google.play.svg" alt="Gooogle play">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.app.store.svg" alt="App store">
            </div>
        </div>
        <div class="rightMainSection">
            <div class="doctor"></div>
            <div class="signal"></div>
            <div class="hand"></div>
        </div>
    </div>
    <div class="mainInfoSection">
        <div class="infoSectionGap"></div>
        <div class="infoSection">
            <img src="<?php echo get_template_directory_uri() ?>/img/btn.diagnostico.png" class="infoSectionIcon" alt="">
            <h5>
                Diagnóstico
            </h5>
            <p>
                Realiza un diagnóstico de la COVID-19 desde tu casa.
            </p>
        </div>
        <div class="infoSection">
            <img src="<?php echo get_template_directory_uri() ?>/img/btn.asis.medica.png" class="infoSectionIcon" alt="">
            <h5>
                Asistencia médica
            </h5>
            <p>
                Recibe apoyo médico en caso de que lo necesites.
            </p>
        </div>
        <div class="infoSection">
            <img src="<?php echo get_template_directory_uri() ?>/img/btn.informacion.svg" class="infoSectionIcon" alt="">
            <h5>
                Información
            </h5>
            <p>
                Conoce las noticias oficiales de la mano de los expertos.
            </p>
        </div>
        <div class="infoSectionGap"></div>
    </div>
    <div class="mainDiagnosis">
        <div class="mainDiagnosisGap"></div>

        <div class="inHomeDiagnosis">
            <div class="diagnosisBodyimage"></div>
            <h4>
                Diagnóstico en casa
            </h4>
            <div class="diagnosisList">
                <div class="diagnosisListItem">
                    <img src="<?php echo get_template_directory_uri() ?>/img/btn.check.bodyicon.png" alt="" />
                    <p>Identifica si tienes una gripa común</p>
                </div>
                <div class="diagnosisListItem">
                    <img src="<?php echo get_template_directory_uri() ?>/img/btn.check.bodyicon.png" alt="" />
                    <p>Recibe la asistencia médica en etapas tempranas</p>
                </div>
                <div class="diagnosisListItem">
                    <img src="<?php echo get_template_directory_uri() ?>/img/btn.check.bodyicon.png" alt="" />
                    <p>Infórmate con artículos verificados sobre el COVID-19</p>
                </div>
                <div class="diagnosisListItem">
                    <img src="<?php echo get_template_directory_uri() ?>/img/btn.check.bodyicon.png" alt="" />
                    <p>Comparte uCare a quienes lo necesitan en sus casas</p>
                </div>
                <div class="diagnosisListItem">
                    <img src="<?php echo get_template_directory_uri() ?>/img/btn.check.bodyicon.png" alt="" />
                    <p>Descongestiona los hospitales evitando una crisis</p>
                </div>
                <div class="diagnosisListItem"> 
                    <img src="<?php echo get_template_directory_uri() ?>/img/btn.check.bodyicon.png" alt="" />
                    <p>Juntos nos cuidamos y le ganamos a la COVID-19</p>
                </div>
            </div>
        </div>
        <div class="socialNetworks">
            <a class="twitter-timeline" href="https://twitter.com/MinSaludCol?ref_src=twsrc%5Etfw">Tweets by MinSaludCol</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div class="mainDiagnosisGap"></div>
    </div>
    <div class="mainMeetUcare">
        <h3>Conoce nuestra más de Ucare</h3>
        <hr>
        <div class="mainMeetUcareFeatures">
            <div class="mainMeetUcareFeaturesGap"></div>
            <div class="mainMeetUcareFeaturesUpLeft">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.diagnostico.svg" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.sintomas.svg" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.contagio.svg" alt="">    
            </div>
            <div class="mainMeetUcareFeaturesImage">
                <div class="centerPhone"></div>
            </div>
            <div class="mainMeetUcareFeaturesDownRight">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.prevencion.svg" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.estadistica.svg" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.noticias.flasas.svg" alt="">
            </div>
            <div class="mainMeetUcareFeaturesGap"></div>
        </div>
    </div>
    <div class="preFooter">
        <div class="preFooterGap"></div>
        <div class="preFooterMainSection">
            <div class="resume">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.ucare.footer.svg" alt="">
                <p>Nuestro fin es hacer seguimiento de riesgos de salud pública, dar alertas a las personas sobre posibles situaciones de atención y proveer contactos de emergencia para su rápida atención.</p>
                <h4>Disponible en:</h4>
                <div class="stores">
                    <img src="<?php echo get_template_directory_uri() ?>/img/img.google.play.svg" alt="Gooogle play">
                <img src="<?php echo get_template_directory_uri() ?>/img/img.app.store.svg" alt="App store">
                </div>
            </div>
            <div class="contact-us" id="contact-us">
                <p>
                    Conoce más de uCare<br>
                    <a>Términos y condiciones</a><br>
                    Contacto: <a>contacto@ucare-app.com</a><br>
                    Tel: <a>+57 301 123 4567</a><br>
                </p>
            </div>
        </div>
        <div class="preFooterGap"></div>
    </div>
    <footer class="footer">
        <p>By <a href="#">@Ucare</a></p>
    </footer>

    <div class="about-us" id='about-us'>
        <div class="close-container" onclick="closeModal('about-us')">
            <i class="fa fa-times"></i>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.ucare.footer.svg" alt="">
        <div class="about-us-body">
            <h2>Sobre uCare:</h2>
            <p>
                Somos desarrolladores, diseñadores, analistas, gestores de proyectos; personas, que al igual que muchas otras en este momento, tuvieron que quedarse en casa, en espera de una solución que aún no es clara. Buscamos una idea para aportar a la sociedad desde nuestras disciplinas, ofreciendo de manera voluntaria y sin ánimo de lucro nuestro apoyo y conocimiento a partir de lo que hacemos y así, de esta manera ayudar a fortalecer la lucha contra la COVID-19.
            </p>
            <p>
                Nuestro fin es crear un seguimiento de posibles riesgos de salud pública más allá del Coronavirus, como Dengue, Sarampión, etc. creemos que de esta manera podemos ayudar a descongestionar los centros de salud a través de un prediagnóstico de enfermedades haciendo especial énfasis en este momento en la COVID-19, identificando noticias falsas y brindando informaciones importantes para prevención de enfermedades infecciosas que nos pueden poner en riesgo.
            </p>
            <p>
                Un prediagnóstico positivo con los síntomas relacionados a la enfermedad permite dar alerta a las personas y que esta, a su vez, pueda tomar medidas más inmediatas para preservar su salud y contactar los profesionales de salud en las clínicas u hospitales más cercanos a sus casas de acuerdo a la información que tenemos en la app. Además de eso, uCare cuenta con un directorio dentro de la app en donde están los números de contacto del gobierno colombiano, de manera que el usuario pueda tener a la mano los números a los cuales puede llamar en caso de emergencia.
            </p>
        </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/js/scroll-smooth.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/modal.js"></script>
</body>
</html>