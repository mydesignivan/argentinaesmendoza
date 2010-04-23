<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="span-24 last">
    <!-- =========== TOP HEADER =========== -->
    <div class="span-9 prepend-top header-topmenu">
        <div class="col col-1"><a href="<?=$this->config->item('base_url');?>">Home</a></div>
        <div class="col col-2"><a href="<?=site_url('/contacto/');?>">Contacto</a></div>
        <div class="col col-3">
            <span>Idiomas</span>
            <a href="#"><img src="images/image_spanish.png" width="35" height="24" alt="Español" /></a>
            <a href="#"><img src="images/image_english.png" width="35" height="24" alt="Ingles" /></a>
        </div>

    </div>
    <!-- =========== END TOP HEADER =========== -->

    <!-- =========== LOGIN =========== -->
    <div class="span-13 last prepend-top">
        <div class="float-right prepend-1"><a href="#"><img src="images/button_login.png" width="65" height="18" alt="Login"/></a></div>
        <div class="float-right"><a href="#">¿Tienes una cuenta?</a></div>
    </div>
    <!-- =========== END LOGIN =========== -->
</div>

<div class="clear span-24 last prepend-top">
    <div class="span-5 push-1"><img src="images/logo_argentinaesmendoza.png" alt="www.argentinaesmendoza.com.ar" /></div>

    <!-- =========== PLUGINS CLIMA =========== -->
    <div class="container-weather">
        <div class="weather-left">
            <h5>Jueves 29</h5>
            <ul>
                <li><img src="images/icon_weather_down.png" width="10" height="12" alt="Temperatura minima"/><span>15º</span></li>
                <li><img src="images/icon_weather_up.png" width="10" height="12" alt="Temperatura maxima"/><span>25º</span></li>
                <li><img src="images/icon_weather_water.png" width="10" height="12" alt="Humedad"/><span>5%</span></li>
            </ul>
        </div>
        <div class="weather-icon"><img src="images/icon_weather_sun.png" width="75" height="75" alt="Soleado"/></div>
    </div>
    <!-- =========== END PLUGINS CLIMA =========== -->

    <!-- =========== BANNER HORIZONTAL =========== -->
    <?php require('banner_horizontal_inc.php');?>
    <!-- =========== END BANNER HORIZONTAL =========== -->
</div>

<!-- =========== MENU =========== -->
<div class="span-24 prepend-1 last menu">
    <ul>
        <li>
            <a href="#" class="link-menu">
                <span class="float-left">Donde<br/>Dormir</span>
                <div class="float-right"><img src="images/icon_hospedajes.png" alt="Hospedajes"/></div>
            </a>
        </li>
        <li>
            <a href="#" class="link-menu">
                <span class="float-left">Donde<br/>Comer</span>
                <div class="float-right"><img src="images/icon_restaurantes.png" alt="Restaurants"/></div>
            </a>
        </li>
        <li>
            <a href="#" class="link-menu">
                <span class="float-left">Donde<br/>Comprar</span>
                <div class="float-right"><img src="images/icon_compras.png" alt="Shopping" /></div>
            </a>
        </li>
        <li>
            <a href="#" class="link-menu">
                <span class="float-left">Viajar y<br/>Conocer</span>
                <div class="float-right"><img src="images/icon_visitar.png" alt="Turismo" /></div>
            </a>
        </li>
        <li>
            <a href="#" class="link-menu">
                <span class="float-left">Vendimia<br/>&nbsp;</span>
                <div class="float-right"><img src="images/icon_vendimia.png" alt="Vendimia" /></div>
            </a>
        </li>
        <li>
            <a href="#" class="link-menu">
                <span class="float-left">Mendoza<br/>de Noche</span>
                <div class="float-right"><img src="images/icon_ticket.png" alt="Mendoza de noche" /></div>
            </a>
        </li>
        <li class="outline">
            <a href="#" class="link-menu">
                <span class="float-left">Datos<br/>Utiles</span>
                <div class="float-right"><img src="images/icon_datos.png" alt="Datos Utiles"/></div>
            </a>
        </li>
    </ul>
</div>
<!-- =========== END MENU =========== -->
