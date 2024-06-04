<!DOCTYPE html>
<html lang="en">
<style>
    img.teamimg {
        max-height: 548px;
        width: 100%;
        object-fit: cover;
        object-position: 0px -164px;
    }

    .backgroun1 {
        background: #ebebeb;
        padding-bottom: 10px;
    }

    .txt1 p {
        font-size: 18px;
    }

    .txt1 {
        text-align: center;
        width: 1000px;
        margin: auto;
        max-width: 100%;
        margin-bottom: 100px;
        padding-top: 50px;
    }

    .txt1 h1 {
        font-weight: bold;
        font-size: 53px;
        margin: auto;
        width: 723px;
        padding-bottom: 20px;
        max-width: 100%;
    }

    /* .background2 {
            background: url(images/about-us/about-me.jpg);
            padding: 75px 0px;
            color: white;
            background-size: cover;
        } */

    .background2 {
        background: url(https://escuelademanejofyk.com/images/home/backgroun3.png);
        background-size: cover;
        background-position: center;
        padding: 70px 0px;
        color: white;
    }

    .bgbox2 img {
        width: 555px;
        max-width: 100%;
    }

    .txt2 {
        width: 600px;
        max-width: 100%;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .bgbox2 {
        display: flex;
        justify-content: space-around;
        gap: 10px;
        flex-wrap: wrap;
    }

    .txt2 span {
        font-style: italic;
        font-size: 20px;
        color: grey;
    }

    .txt2 p {
        font-size: 18px;
    }

    /* responsive */
    @media only screen and (max-width: 700px) {
        img.teamimg {
            object-position: center
        }
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
    <title>¿Quienes Somos?</title>

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
    <!-- <div class='announcment1'>
        <div class='container'>
            <div class='bgboxano1'>
                <h1>¡Septiembre, el mes de la patria! Disfruta de matrícula completamente gratuita en nuestros cursos desde cero tanto en carro como en moto.</h1>
                <div class='btnox'>
                    <a target="_blank" href="http://wa.me/50689507788?text=¡Quiero%20la%20promoción%20de%20mes%20de%20la%20patria!%20Código%3A%20patCR09">¡Adquiéralo YA!</a>
                </div>
            </div>
        </div>
    </div> -->
</head>

<body>
    <div class='backgroun1'>
        <img class="teamimg" src="images/about-us/teawork.jpg" alt="">
        <div class='container'>
            <div class='txt1'>
                <h1>Nuestra Historia</h1>
                <p>La escuela de manejo FyK fue fundada el 15 de marzo de 2015 en el barrio de Pérez Zeledón, San José, Costa Rica. Desde entonces, nos hemos dedicado a satisfacer la necesidad de contar con conductores capacitados en nuestra comunidad. Reconociendo nuestras habilidades como instructores, decidimos establecer la escuela de manejo FyK. A lo largo de estos 8 años, hemos ayudado a más de 500 personas a obtener su licencia de conducir, incluso aquellos que comenzaron sin ningún conocimiento previo. Nuestra experiencia y compromiso nos convierten en una empresa confiable que está lista para ayudarte a hacer realidad tu sueño de obtener la licencia.</p>
            </div>
        </div>
    </div>
    <?php /* ?>
    <div class='background2'>
        <div class='container'>
            <div class='bgbox2'>
                <img src="images/about-us/man-image.jpg" alt="">
                <div class='txt2'>
                    <h2>Mauricio Alexander</h2>
                    <span>Dueño, Fundador</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut voluptatum iusto asperiores omnis
                        neque, voluptas qui.
                        Dolorem nemo illo vitae atque sed beatae eos nobis ex saepe tenetur, alias doloremque? Lorem
                        ipsum dolor sit, amet
                        consectetur adipisicing elit. Reiciendis quibusdam consequuntur vitae eos voluptates aperiam
                        molestias sunt dignissimos
                        earum deleniti. Architecto dolores ipsum debitis, amet sunt quod sint animi maiores. Lorem ipsum
                        dolor sit amet
                        consectetur adipisicing elit. Laborum maiores unde voluptatibus itaque perspiciatis recusandae,
                        voluptatem quisquam
                        quaerat nostrum. Nam illum ab optio ipsa ullam doloremque tempore beatae numquam laudantium!</p>
                </div>
            </div>
        </div>
    </div>
    <?php> */ ?>
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