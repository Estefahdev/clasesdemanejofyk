<style>
    /* section-1 */
    .title1 {
        padding-top: 50px;
        text-align: center;
        padding-bottom: 30px;
    }

    .title12 {
        text-align: center;
        padding-top: 150px;
        padding-bottom: 30px;
    }
</style>

<head>
    <!-- css header y footer-->
    <link rel="stylesheet" type="text/css" href="headeryfooter.css">

    <!-- favicon -->
    <link rel="icon" href="images/header/black-icon.png" type="image/x-icon">

    <!-- meta -->
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
    <title>Galeria</title>

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
                    <a href="alquileres">Alquileres</a>
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
</head>

<body>

    <div class='background1'>
        <div class='container'>
            <div class='bgboximg1'>
                <div class='title1'>
                    <h1>Galeria de Imagenes</h1>
                </div>
                <div class='embedimages'>
                    <iframe src="https://drive.google.com/embeddedfolderview?id=1J1UMjeBosA17oGhHP7V0jhgP-pBdk2Zo#grid" width="100%" height="100%" frameborder="0"></iframe>
                </div>
            </div>
            <div class='title12'>
                <h1>Galeria de Videos</h1>
            </div>
            <div class='embedimages'>
                <iframe src="https://drive.google.com/embeddedfolderview?id=1iqk3TXIXWB06ulCw2a10sHLxlGGU90YJ#grid" width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
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