<style>
    /* section-1 */
    .background-1 {
        padding: 45px 0px;
    }

    .title-1 h1 {
        text-align: center;
        font-weight: bold;
        font-size: 53px;
        margin: auto;
        max-width: 100%;
    }

    .box-1 {
        width: 307px;
        background-color: #00a9561a;
        padding: 34px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        gap: 25px;
        border-radius: 20px;
    }

    .box-1.pro1 {
        background-color: #00bf62;
    }

    .box-1.pro1 i {
        color: white;
    }

    .box-1.pro1 span {
        color: white;
    }

    .subtitle-1 h4 {
        font-style: italic;
        font-size: 23px;
        color: #00b75d;
    }

    .box-1.lite {
        background-color: #00a95652;
    }

    .box-1.premium1 {
        background-color: #000000;
    }

    .box-1.premium1 .btn-1 {
        background: #00bf62;
    }

    .box-1.pro1 p {
        color: white;
    }

    .bgbox1 {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
        padding-top: 40px;
    }

    .box-1.premium1 span {
        color: white;
    }

    .box-1.premium1 i {
        color: white;
    }

    .box-1.premium1 p {
        color: white;
    }

    .box-1.lite1 {
        background-color: #00a95640;
    }

    .box-1.premium1 h3 {
        color: white;
    }

    .box-1.pro1 h4 {
        color: white;
    }

    .check-1 div {
        padding-bottom: 5px;
    }

    .check-1 div i {
        padding-right: 5px;
        color: #000000;
    }

    .subtitle-1 h3 {
        width: 230px;
        font-size: 28px;
        color: #000000;
        font-weight: bold;
        max-width: 100%;
    }

    .check-1 div {
        padding-bottom: 10px;
    }

    .check-1 span {
        font-weight: bold;
        color: #000000;
        font-size: 14px;
    }

    .btn-1 {
        background-color: #000000;
        padding: 6px 24px 7px 27px;
        border-radius: 23px;
    }

    .txt-1 p {
        color: #000000;
        font-size: 17px;
    }

    .btn-1 a {
        color: white;
    }

    .btn-1 a:hover {
        color: white;
    }

    .btnbox-1 {
        display: flex;
        gap: 5px;
        align-items: center;
    }

    /* section-2 */
    .background-2 {
        background-color: #000000;
        margin-top: 75px;
        position: relative;
    }

    img.img22 {
        position: absolute;
        right: 300px;
        bottom: -40px;
    }

    .sec2 {
        padding: 75px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 73px;
        max-width: 100%;
    }

    .sec2 img {
        width: 500px;
        max-width: 100%;
    }

    .sec2 h2 {
        color: #fff;
        font-size: 45px;
        width: 575px;
        font-weight: bold;
        max-width: 100%;
    }

    .sec2 p {
        width: 631px;
        color: #ffffff;
        max-width: 100%;
        font-size: 16px;
    }

    .bgx2 {
        color: white;
        max-width: 100%;

    }

    .bgx2 ul {
        font-size: 18px;
    }

    .btn2 {
        padding: 8px 44px 8px 44px;
        border-radius: 25px;
        background-color: #00bf62;
        width: 363px;
        text-align: center;
        max-width: 100%;
    }

    .btn2 a {
        color: white;
        font-size: 19px;
        text-decoration: unset;
    }

    .btn2 a:hover {
        font-weight: bold;
        color: white;
    }

    /* section-3 */
    .background-3 {
        background-color: #80808014;
    }

    .bgbox3 {
        padding: 110px 0px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .box3-1 {
        width: 360px;
        max-width: 100%;
    }

    .box3-1 h2 {
        padding-right: 45px;
        border-right: 2px solid #342a4c;
        font-size: 38px;
        font-weight: bold;
        color: #000000;
    }

    .box3-2 {
        width: 360px;
        padding-left: 45px;
        max-width: 100%;
    }

    .btn-3 {
        border-radius: 25px;
        background-color: #00bf62;
        margin-top: 21px;
        width: 305px;
        max-width: 100%;
        text-align: center;
        padding: 5px;
    }

    .box3-2 p {
        font-size: 18px;
    }

    .btn-3 a {
        color: white;
        font-size: 19px;
        text-decoration: unset;
    }

    .btn-3 a:hover {
        font-weight: bold;
        color: white;
    }

    .background-footer {
        background-color: #342a4c;
        text-align: center;
        height: 230px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }



    /* FAQ SECTION */
    .faqtitle h2 {
        color: #fff;
        font-size: 45px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 35px;
    }

    .backfaq {
        padding: 70px 0px;
        background: black;
    }

    .faq-section {
        max-width: 900px;
        margin: 0 auto;
    }

    .faq {
        margin-bottom: 60px;
    }

    .faq h3 {
        color: white;
    }

    .question {
        cursor: pointer;
        padding: 10px;
        border-bottom: 2px solid white;
        position: relative;
    }

    .question i {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        transition: transform 0.3s;
    }

    .question.active i {
        transform: translateY(-50%) rotate(180deg);
    }

    .answer {
        display: none;
        padding: 10px;
    }

    .answer p {
        color: white;
        font-size: 21px;
    }
</style>

<style media="screen">
    /* Responsive-2 */

    @media only screen and (max-width: 1642px) {
        img.img22 {
            right: 0;
        }
    }

    @media only screen and (max-width: 1096px) {
        img.img22 {
            display: none;
        }
    }

    @media only screen and (max-width: 460px) {
        .box3-1 h2 {
            padding-right: 0px;
            border-right: none;
            text-align: center;
        }

        .box3-2 {
            padding-left: 0px;
            text-align: center;
        }

        .btn-3 {
            margin: auto;
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css header y footer-->
    <link rel="stylesheet" type="text/css" href="headeryfooter.css">

    <!-- favicon -->
    <link rel="icon" href="images/header/black-icon.png" type="image/x-icon">

    <!-- meta -->
    <meta name="description" content="¿Buscas una escuela de manejo confiable en Costa Rica? En la Escuela de Manejo FyK, ofrecemos una educación integral y personalizada para convertirte en un conductor seguro y experimentado. Nuestro equipo de instructores altamente capacitados te guiará a través de lecciones teóricas y prácticas, brindándote las habilidades necesarias para enfrentar cualquier desafío en las carreteras costarricenses. Ya sea que estés aprendiendo a conducir desde cero o deseas mejorar tus habilidades existentes, en Escuela de Manejo FyK encontrarás un ambiente acogedor y propicio para tu éxito. ¡Asegura tu futuro en las vías con la Escuela de Manejo FyK en Costa Rica!">
    <meta property="og:image" content="https://escuelademanejofyk.com/images/header/black-icon.png">
    <meta name="twitter:card" content="https://escuelademanejofyk.com/images/header/black-icon.png">
    <meta name="twitter:image" content="https://escuelademanejofyk.com/images/header/black-icon.png">
    <meta property="og:title" content="Escuela de Manejo FyK Costa Rica">
    <meta property="og:description" content="¿Buscas una escuela de manejo confiable en Costa Rica? En la Escuela de Manejo FyK, ofrecemos una educación integral y personalizada para convertirte en un conductor seguro y experimentado. Nuestro equipo de instructores altamente capacitados te guiará a través de lecciones teóricas y prácticas, brindándote las habilidades necesarias para enfrentar cualquier desafío en las carreteras costarricenses. Ya sea que estés aprendiendo a conducir desde cero o deseas mejorar tus habilidades existentes, en Escuela de Manejo FyK encontrarás un ambiente acogedor y propicio para tu éxito. ¡Asegura tu futuro en las vías con la Escuela de Manejo FyK en Costa Rica!">
    <meta property="og:url" content="https://escuelademanejofyk.com/">

    <!-- slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- javascript -->
    <script src="javascriptcode.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/388554b322.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- HTML -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>

    <!-- Header -->
    <nav class="headermd">
        <div class="iconmage1">
            <a href="https://escuelademanejofyk.com/">
                <img src="images/header/black-icon.png" alt="">
            </a>
        </div>
        <div class='header-links'>
            <ul class="alinks">
                <li>
                    <a href="https://escuelademanejofyk.com/">Inicio</a>
                </li>
                <li>
                    <a href="quienes-somos">¿Quienes Somos?</a>
                </li>
                <li>
                    <a href="servicios">Servicios</a>
                </li>
                <li>
                    <a href="contactenos">Contactenos</a>
                </li>
                <li>
                    <a href="galeria">Galeria</a>
                </li>
            </ul>
            <div class='line1'></div>
            <div class='socialmedia1'>
                <li><a target=”_blank” href="http://wa.me/50689507788"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li><a target=”_blank” href="https://instagram.com/escuelademanejofyk2?igshid=NGExMmI2YTkyZg== "><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a target=”_blank” href="https://www.facebook.com/Puravidaescuelademanejo?mibextid=ZbWKwL"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            </div>
        </div>
        <div class='burger'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </nav>
    <script>
        const navSlide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.header-links');
            const navLinks = document.querySelectorAll('.header-links li');

            burger.addEventListener('click', () => {
                // toggle-header
                nav.classList.toggle('header-active');

                // link-animation
                navLinks.forEach((link, index) => {
                    if (link.style.animation) {
                        link.style.animation = ''
                    } else {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
                    }
                });
                // burger-animation
                burger.classList.toggle('toggle');

            });
        }
        navSlide();
    </script>
    <div class='announcment1'>
        <div class='container'>
            <div class='bgboxano1'>
                <h1>Curso De Vacaciones de 15 dias 2x1</h1>
                <div class='btnox'>
                    <a target="_blank" href="http://wa.me/50689507788?text=Quiero%20adquirir%20la%20promoción%202x1%20por%20el%20curso%20de%20verano%20de%2015%20días.%20El%20código%20promocional%20es%3A%20FYKPROMOS15">Adquieralo YA</a>

                </div>
            </div>
        </div>
    </div>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9LL4ZX8V85"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-9LL4ZX8V85');
</script>

<body>

    <div class="background-1">
        <div class="section-1 container">
            <div class="title-1">
                <h1>Paquetes de Conducción</h1>
            </div>
            <div class="bgbox1">
                <div class="box-1 premium1">
                    <div class="img-1">
                        <img src="/images/Group-54.png" alt="">
                    </div>
                    <div class="subtitle-1">
                        <h3>Paquete Premium</h3>
                        <h4>18 horas</h4>
                    </div>
                    <div class="txt-1">
                        <p>Curso de 18 horas dividido en lecciones de dos o tres horas, las primeras en carro manual y las últimas para la preparación de la prueba en transmisión automática. También puedes optar por realizar todo el curso en vehículo automático.</p>
                    </div>
                    <div class="check-1">
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Servicio de recogida a la puerta de tu casa para mayor comodidad.</span></div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Alquiler de vehículo para tu cita práctica, sin necesidad de preocuparte por conseguir uno.</span></div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Prácticas de conos para dominar las maniobras de frente y reversa.</span>
                        </div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Recorrido práctico por las zonas del COSEVI, avenidas, pistas y rotondas, entre otros, para familiarizarte con diferentes escenarios de conducción.</span>
                        </div>
                    </div>
                    <div class="btnbox-1">
                        <div class="btn-1">
                            <a href="http://wa.me/50689507788?text=%F0%9F%91%8B%20¡Hola!%20Estoy%20interesado%20en%20el%20paquete%20premium%20de%2018%20horas.%20¿Podrían%20brindarme%20más%20detalles%20y%20los%20requisitos%20para%20comenzar?%20¡Gracias%21">Solicitar Paquete</a>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="box-1 pro1">
                    <div class="img-1">
                        <img src="/images/Group-19.png" alt="">
                    </div>
                    <div class="subtitle-1">
                        <h3>Paquete Pro </h3>
                        <h4>15 horas</h4>
                    </div>
                    <div class="txt-1">
                        <p>
                            15 horas de clases de manejo en sesiones de 2 horas. Instructores altamente capacitados para una conducción segura y confiada.
                        </p>
                    </div>
                    <div class="check-1">
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Servicio de recogida a la puerta de tu casa para mayor comodidad.</span></div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Alquiler de vehículo para tu cita práctica, sin necesidad de preocuparte por conseguir uno.</span></div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Prácticas de conos para dominar las maniobras de frente y reversa.</span>
                        </div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Recorrido práctico por las zonas del COSEVI, avenidas, pistas y rotondas, entre otros, para familiarizarte con diferentes escenarios de conducción.</span>
                        </div>
                    </div>
                    <div class="btnbox-1">
                        <div class="btn-1">
                            <a href="http://wa.me/50689507788?text=%F0%9F%91%8B%20¡Hola!%20Estoy%20interesado%20en%20el%20paquete%20Pro%20de%2015%20horas.%20¿Podrían%20brindarme%20más%20detalles%20y%20los%20requisitos%20para%20comenzar?%20¡Gracias%21">Solicitar Paquete</a>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="box-1 lite1">
                    <div class="img-1">
                        <img src="/images/Group-80.png" alt="">
                    </div>
                    <div class="subtitle-1">
                        <h3>Paquete lite</h3>
                        <h4>10 horas</h4>
                    </div>
                    <div class="txt-1">
                        <p>Curso de manejo de 10 horas para aprender las bases esenciales de la conducción de manera segura y confiada.
                        </p>
                    </div>
                    <div class="check-1">
                        <div class=""><i class="fa fa-times-circle" aria-hidden="true"></i><span style="text-decoration:line-through;">Servicio de recogida a la puerta de tu casa para mayor comodidad.</span></div>
                        <div class=""><i class="fa fa-times-circle" aria-hidden="true"></i><span style="text-decoration:line-through;">Alquiler de vehículo para tu cita práctica, sin necesidad de preocuparte por conseguir uno.</span></div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Prácticas de conos para dominar las maniobras de frente y reversa.</span>
                        </div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Recorrido práctico por las zonas del COSEVI, avenidas, pistas y rotondas, entre otros, para familiarizarte con diferentes escenarios de conducción.</span>
                        </div>
                    </div>
                    <div class="btnbox-1">
                        <div class="btn-1">
                            <a href="http://wa.me/50689507788?text=%F0%9F%91%8B%20¡Hola!%20Estoy%20interesado%20en%20el%20paquete%20lite%20de%2010%20horas.%20¿Podrían%20brindarme%20más%20detalles%20y%20los%20requisitos%20para%20comenzar?%20¡Gracias%21">Solicitar Paquete</a>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="box-1">
                    <div class="img-1">
                        <img src="/images/Group-80.png" alt="">
                    </div>
                    <div class="subtitle-1">
                        <h3>Paquete Basico</h3>
                        <h4> 8 horas</h4>
                    </div>
                    <div class="txt-1">
                        <p>Curso de manejo de 8 horas para adquirir las habilidades esenciales y fundamentos de la conducción de manera efectiva.</p>
                    </div>
                    <div class="check-1">
                        <div class=""><i class="fa fa-times-circle" aria-hidden="true"></i><span style="text-decoration:line-through;">Servicio de recogida a la puerta de tu casa para mayor comodidad.</span></div>
                        <div class=""><i class="fa fa-times-circle" aria-hidden="true"></i></i><span style="text-decoration:line-through;">Alquiler de vehículo para tu cita práctica, sin necesidad de preocuparte por conseguir uno.</span></div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Prácticas de conos para dominar las maniobras de frente y reversa.</span>
                        </div>
                        <div class=""><i class="fa-solid fa-circle-check"></i><span>Recorrido práctico por las zonas del COSEVI, avenidas, pistas y rotondas, entre otros, para familiarizarte con diferentes escenarios de conducción.</span>
                        </div>
                    </div>
                    <div class="btnbox-1">
                        <div class="btn-1">
                            <a href="http://wa.me/50689507788?text=%F0%9F%91%8B%20¡Hola!%20Estoy%20interesado%20en%20el%20paquete%20Basico%20de%208%20horas.%20¿Podrían%20brindarme%20más%20detalles%20y%20los%20requisitos%20para%20comenzar?%20¡Gracias%21">Solicitar Paquete</a>
                        </div>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-2">
        <img class="img22" src="/images/Screen-Shot-2022-04-24-at-21.11.52_ccexpress.png" alt="">
        <div class="section-2 container">
            <div class="sec2">
                <div class='bgx2'>
                    <h2>Otros Servicios que Ofrecemos:</h2>
                    <ul>
                        <li>Alquiler de vehículos automáticos y manuales para la prueba de manejo.</li>
                        <li>Clases de preparación para las pruebas teóricas.</li>
                        <li>Alquiler de buses para la prueba C2.</li>
                        <li>Alquiler de camiones automáticos y manuales para las pruebas B2, B3 y B4.</li>
                        <li>Alquiler de motocicletas y cuatriciclos para las pruebas A1, A2 y A3.</li>
                        <li> Pólizas de permiso de conducción.</li>
                        <li>Dictámenes médicos.</li>
                        <li>Cartas para licencia D1, D2, D3.</li>
                    </ul>
                    <div class="btn2">
                        <a href="/contactenos">Contactenos</a>
                    </div>
                </div>
                <img src="images/servicios/girl-with-license.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="background-3">
        <div class="section-3 container">
            <div class="bgbox3">
                <div class="box3-1">
                    <h2>Horarios de <br> Atención</h2>
                </div>
                <div class="box3-2">
                    <p>Lunes - Viernes: 6:00am - 6:00pm <br>
                        Domingo - Sábado: 6:00am - 4:00pm
                    </p>
                    <div class="btn-3">
                        <a href="/contactenos">Contactenos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='backfaq'>
        <div class='container'>
            <div class='faqtitle'>
                <h2>Preguntas Frecuentes</h2>
            </div>
            <div class="faq-section">
                <div class="faq">
                    <h3 class="question">Question 1 <i class="fas fa-chevron-down"></i></h3>
                    <div class="answer">
                        <p>Answer 1</p>
                    </div>
                </div>
                <div class="faq">
                    <h3 class="question">Question 2 <i class="fas fa-chevron-down"></i></h3>
                    <div class="answer">
                        <p>Answer 2</p>
                    </div>
                </div>
                <div class="faq">
                    <h3 class="question">Question 3 <i class="fas fa-chevron-down"></i></h3>
                    <div class="answer">
                        <p>Answer 3</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const questions = document.querySelectorAll('.question');

            questions.forEach(function(question) {
                question.addEventListener('click', function() {
                    this.classList.toggle('active');
                    const answer = this.nextElementSibling;
                    if (answer.style.display === 'block') {
                        answer.style.display = 'none';
                    } else {
                        answer.style.display = 'block';
                    }
                });
            });
        });
    </script>

    <div class='whatsbuttom'>
        <a target=”_blank” href="http://wa.me/50689507788">
            <img src="images/whatsapp.png" alt="">
        </a>
    </div>
</body>
<footer>
    <div class='backgroundfooter'>
        <div class='container'>
            <div class='bgfooter'>
                <div class='iconfooter'>
                    <img src="images/header/white-icon.png" alt="">
                </div>
                <div class='directionfooter'>
                    <p>Daniel Flores, Perez Zeledon San José Costa Rica</p>
                </div>
                <div class='socialmediafooter'>
                    <a target=”_blank” href="http://wa.me/50689507788"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a target=”_blank” href="https://instagram.com/escuelademanejofyk2?igshid=NGExMmI2YTkyZg== "><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a target=”_blank” href="https://www.facebook.com/Puravidaescuelademanejo?mibextid=ZbWKwL"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a target=”_blank” href="https://www.tiktok.com/@escuelademanejofy1"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>