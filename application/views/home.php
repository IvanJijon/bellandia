<?php
include("inc/header.php");
?>

</head>

<body>

<div id="home-header">
    <div class="layer"></div>
    <video autoplay loop muted poster="<?php echo asset_url(); ?>img/home/background.png" id="video-bg">
        <source src="<?php echo asset_url(); ?>videos/bellandia.mp4" type="video/mp4">
    </video>

    <div id="top-menu" class="clear-fix">
        <div class="social left">
            <div class="socialicons"><a href="https://www.tripadvisor.com/Hotel_Review-g789221-d7590615-Reviews-Bellandia_Lodge-Puyo_Pastaza_Province.html" target="_blank">
                <object data="<?php echo asset_url(); ?>img/icons/tripadvisor_icon.svg" type="image/svg+xml"></object></a>
            </div>
            <a href="https://www.facebook.com/bellandialodge/" target="_blank" class="socialicons">
                <object data="<?php echo asset_url(); ?>img/icons/facebook_icon.svg" type="image/svg+xml" class="socialicons"></object>
            </a>
            <a href="https://twitter.com/bellandialodge" target="_blank" class="socialicons">
                <object data="<?php echo asset_url(); ?>img/icons/Twiitter_icon.svg" type="image/svg+xml" class="socialicons"></object>
            </a>
        </div>

        <div class="phone right">+593996009781 - +593980690699</div>

        <div class="language right">
            <ul>
                <li><a href="<?php echo base_url(); ?>home/change_lang/es">ES</a></li>
                <li><a href="<?php echo base_url(); ?>home/change_lang/en">EN</a></li>
                <li><a href="<?php echo base_url(); ?>home/change_lang/fr">FR</a></li>               
            </ul>
        </div>
    </div>

    <div id="logo"></div>

    <a href="https://www.youtube.com/watch?v=JSLiitAFTLM" target="_blank" class="button"><?php echo $this->lang->line('home-video');?></a>
</div>

<div id="home-menu">
    <a href="<?php echo base_url(); ?>rooms"><?php echo $this->lang->line('menu-rooms');?></a>
    <a href="<?php echo base_url(); ?>activities"><?php echo $this->lang->line('menu-activities');?></a>
    <a href="<?php echo base_url(); ?>gallery"><?php echo $this->lang->line('menu-gallery');?></a>
    <a href="<?php echo base_url(); ?>contact"><?php echo $this->lang->line('menu-contact');?></a>
    <a href="<?php echo base_url(); ?>coordinates"><?php echo $this->lang->line('menu-coordinates');?></a>
    <a href="<?php echo base_url(); ?>reserve" class="button"><?php echo $this->lang->line('menu-reserve');?></a>
</div>

<div id="home-content">
    <div class="row-welcome clear-fix">
        <div class="description-panel left">
            <h3><?php echo $this->lang->line('home-welcome');?></h3>

            <h1><?php echo $this->lang->line('home-bellandia-caps');?></h1>

            <p><?php echo $this->lang->line('home-bellandia-desc');?></p>
            <a href="<?php echo base_url(); ?>gallery"><?php echo $this->lang->line('home-gal-img');?></a>
        </div>
        <div class="img-panel right">
            <img src="<?php echo asset_url(); ?>img/home/bienvenido_a_bellandia.png" alt="Bienvenido a Bellandia"/>
        </div>
    </div>

    <div class="row-header">
        <h3><?php echo $this->lang->line('home-enjoy-rooms');?></h3>

        <h1><?php echo $this->lang->line('home-rooms-caps');?></h1>
    </div>

    <div class="row clear-fix">
        <div class="img-panel left">
            <img src="<?php echo asset_url(); ?>img/home/dobleotwin.png" alt="Doble o twin"/>
        </div>

        <div class="description-panel right">
            <h3><?php echo $this->lang->line('home-doble-twin');?></h3>

            <p><?php echo $this->lang->line('home-doble-twin-desc');?></p>
            <a href="<?php echo base_url(); ?>rooms"><?php echo $this->lang->line('home-mas-info');?></a>
            <a href="<?php echo base_url(); ?>reserve" class="button"><?php echo $this->lang->line('home-ver-disponibilidad');?></a>
        </div>
    </div>

    <div class="row clear-fix">
        <div class="description-panel left">
            <h3><?php echo $this->lang->line('home-dos-habs');?></h3>

            <p><?php echo $this->lang->line('home-dos-habs-desc');?></p>
            <a href="<?php echo base_url(); ?>rooms/index/4"><?php echo $this->lang->line('home-mas-info');?></a>
            <a href="<?php echo base_url(); ?>reserve" class="button"><?php echo $this->lang->line('home-ver-disponibilidad');?></a>
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
            <h3><?php echo $this->lang->line('home-verde-amp');?></h3>

            <p><?php echo $this->lang->line('home-verde-amp-desc');?></p>
            <a href="<?php echo base_url(); ?>rooms/index/3"><?php echo $this->lang->line('home-mas-info');?></a>
            <a href="<?php echo base_url(); ?>reserve" class="button"><?php echo $this->lang->line('home-ver-disponibilidad');?></a>
        </div>
    </div>

    <div class="row clear-fix">
        <div class="description-panel left">
            <h3><?php echo $this->lang->line('home-verde');?></h3>

            <p><?php echo $this->lang->line('home-verde-desc');?></p>
            <a href="<?php echo base_url(); ?>rooms/index/2"><?php echo $this->lang->line('home-mas-info');?></a>
            <a href="<?php echo base_url(); ?>reserve" class="button"><?php echo $this->lang->line('home-ver-disponibilidad');?></a>
        </div>

        <div class="img-panel right">
            <img src="<?php echo asset_url(); ?>img/home/cabanaverde.png" alt="Doble o twin"/>
        </div>
    </div>
</div>

<?php include("inc/home-footer.php")?>
