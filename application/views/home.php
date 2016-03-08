<?php include("inc/header.php")?>

<div id="home-header">
    <div class="layer"></div>
    <video autoplay loop muted poster="<?php echo asset_url(); ?>img/home/background.png" id="video-bg">
        <source src="<?php echo asset_url(); ?>/videos/bellandia.mp4" type="video/mp4">
    </video>

    <div id="top-menu" class="clear-fix">
        <div class="social left">
            <object data="<?php echo asset_url(); ?>img/icons/tripadvisor_icon.svg" type="image/svg+xml"></object>
            <object data="<?php echo asset_url(); ?>img/icons/facebook_icon.svg" type="image/svg+xml"></object>
            <object data="<?php echo asset_url(); ?>img/icons/Twiitter_icon.svg" type="image/svg+xml"></object>
        </div>

        <div class="phone right">+593 (0)99 6 00 97 81</div>

        <div class="language right">
            <ul>
                <li>ES</li>
                <li>EN</li>
                <li>FR</li>
            </ul>
        </div>
    </div>

    <div id="logo"></div>

    <a href="#" class="button">DESCUBRE EL VIDEO</a>
</div>

<div id="home-menu">
    <a href="/habitaciones">HABITACIONES</a>
    <a href="/actividades">ACTIVIDADES</a>
    <a href="#">IMÁGENES</a>
    <a href="#">CONTÁCTENOS</a>
    <a href="#">COMO LLEGAR</a>
    <a href="#" class="button">RESERVAR</a>
</div>

<div id="home-content">
    <div class="row-welcome clear-fix">
        <div class="description-panel left">
            <h2>BIENVENIDO A</h2>

            <h1>BELLANDIA</h1>

            <p>Bellandia es un lugar encantador en la Amazonía ecuatoriana. Es un sitio exclusivo con 4 modernas
                habitaciones y 2 cabañas únicas en el país, cubiertas de tierra y vegetación, bioclimatizadas, que dan
                la sensación de vivir inmerso en la naturaleza. Su gran cascada, la pureza de su piscina natural y los
                hermosos senderos hacen de este lugar el sitio perfecto para descansar, disfrutar, conocer y
                divertirse.</p>
            <a href="#">GALERÍA DE IMÁGENES</a>
        </div>
        <div class="img-panel right">
            <img src="<?php echo asset_url(); ?>img/home/bienvenido_a_bellandia.png" alt="Bienvenido a Bellandia"/>
        </div>
    </div>

    <div class="row-header">
        <h2>DISFRUTE DE NUESTRAS</h2>

        <h1>HABITACIONES</h1>
    </div>

    <div class="row clear-fix">
        <div class="img-panel left">
            <img src="<?php echo asset_url(); ?>img/home/dobleotwin.png" alt="Doble o twin"/>
        </div>

        <div class="description-panel right">
            <h2>DOBLE O TWIN</h2>

            <p>Acceso Minusválidos Tienen 1 cuartos y un baño. Cama Full o twin. Terraza con hermosa vista a la
                selva. Capacidad máxima 2 personas.</p>
            <a href="#">Más información</a>
            <a href="#" class="button">VER DISPONIBILIDAD</a>
        </div>
    </div>

    <div class="row clear-fix">
        <div class="description-panel left">
            <h2>CABAÑA 2 HABITACIONES</h2>

            <p>Tienen 2 cuartos y un baño. En un cuarto hay una cama full y en el otro 2 camas twin. Terraza con hermosa
                vista a la selva.  Capacidad máxima 4 personas.</p>
            <a href="#">Más información</a>
            <a href="#" class="button">VER DISPONIBILIDAD</a>
        </div>

        <div class="img-panel right">
            <img src="<?php echo asset_url(); ?>img/home/cabanadoshabitaciones.png" alt="Doble o twin"/>
        </div>
    </div>

    <div class="row clear-fix">
        <div class="img-panel left">
            <img src="<?php echo asset_url(); ?>img/home/cabanaverdeamplia.png" alt="Doble o twin"/>
        </div>

        <div class="description-panel right">
            <h2>CABAÑA VERDE AMPLIA</h2>

            <p>Tecnología avanzada, ecológica, la cobertura de tierra y vegetación le proporcionan el efecto de
                bioclimatización. Únicas en el país. 2 camas full 1 amplio sofá TV satelital Terraza con hermosa vista a
                la selva Capacidad máxima 4 personas</p>
            <a href="#">Más información</a>
            <a href="#" class="button">VER DISPONIBILIDAD</a>
        </div>
    </div>

    <div class="row clear-fix">
        <div class="description-panel left">
            <h2>CABAÑA VERDE</h2>

            <p>Tecnología avanzada, ecológica, la cobertura de tierra y vegetación le proporcionan el efecto de
                bioclimatización. Únicas en el país. Agua caliente con calefacción solar. 1 cama full y una cama twin
                Terraza con hermosa vista a la selva TV satelital. Capacidad máxima 3 personas.</p>
            <a href="#">Más información</a>
            <a href="#" class="button">VER DISPONIBILIDAD</a>
        </div>

        <div class="img-panel right">
            <img src="<?php echo asset_url(); ?>img/home/cabanaverde.png" alt="Doble o twin"/>
        </div>
    </div>
</div>

<?php include("inc/home-footer.php")?>
