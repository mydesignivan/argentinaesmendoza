<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- =========== BUSCADOR =========== -->
<div class="search">
    <form action="" method="post">
        <div class="span-7 row">
            <label class="label-medium float-left">Buscador:&nbsp;</label>
            <div class="input-2-large float-left"><input type="text" value="..." onblur="set_input(event, '...')" onfocus="clear_input(event)" /></div>
        </div>
        <div class="span-7 row">
            <select class="float-left" id="cboCategory">
                <option>Hoteles</option>
                <option>Departamentos</option>
                <option>Casas</option>
                <option>Hostels</option>
            </select>
            <button type="button" class="button-2-medium float-right" onclick="">Buscar</button>
        </div>
    </form>
</div>
<!-- =========== END BUSCADOR =========== -->

<!-- =========== NEWSLETTERS =========== -->
<div class="newsletter">
    <label class="label-title1">Subscr&iacute;base al Newsletter</label>

    <form action="" method="post">
        <div class="row">
            <label class="label-medium float-left">Email:&nbsp;</label>
            <div class="input-1-large float-left"><input type="text" value="..." onblur="set_input(event, '...')" onfocus="clear_input(event)" /></div>
            <button type="button" class="button-1-medium" onclick="">Suscribirse</button>
        </div>
        
    </form>
</div>
<!-- =========== END NEWSLETTERS =========== -->

<!-- =========== BANNER VERTICAL =========== -->
    <?php require('banner_vertical_inc.php');?>
<!-- =========== END BANNER VERTICAL =========== -->

<!-- =========== COTIZACIONES =========== -->
<div class="cotizaciones">
    <label class="label-title2">COTIZACIONES</label><br />
    <div class="col col-1">
        <ul class="list">
            <li><span class="float-left">Dolar&ensp;</span><img src="images/icon_dolar.png" alt="cotizacion del dolar" class="float-right" /></li>
            <li><span class="float-left">Euro&ensp;</span><img src="images/icon_euro.png" alt="cotizacion del euro" class="float-right" /></li>
            <li><span class="float-left">Real&ensp;</span><img src="images/icon_real.png" alt="cotizacion del real" class="float-right" /></li>
        </ul>
    </div>
    <div class="col col-2">
        <label class="label-title3">COMPRA</label><br />
        <ul class="list">
            <li><span><?=$divisas['dolar_compra'];?></span></li>
            <li><span><?=$divisas['euro_compra'];?></span></li>
            <li><span>2,11</span></li>
        </ul>
    </div>
    <div class="col col-2">
        <label class="label-title3">VENTA</label><br />
        <ul class="list">
            <li><span><?=$divisas['dolar_venta'];?></span></li>
            <li><span><?=$divisas['euro_venta'];?></span></li>
            <li><span>2,11</span></li>
        </ul>
    </div>
</div>
<!-- =========== END COTIZACIONES =========== -->

<div class="banner-vertical">ESPACIO PUBLICITARIO</div>

<div class="clear span-9 prepend-top">
    <div class="otrosdestinos">
        <label class="label-title4">Otros destinos</label>
        <ul class="list-item-1">
            <li><a href="#" class="link-1">Mendoza</a></li>
            <li><a href="#" class="link-1">Neuquen</a></li>
            <li><a href="#" class="link-1">Rio Negro</a></li>
            <li><a href="#" class="link-1">Chubut</a></li>
            <li><a href="#" class="link-1">San Juan</a></li>
            <li><a href="#" class="link-1">Entre Rios</a></li>
            <li><a href="#" class="link-1">Córdoba</a></li>
        </ul>
    </div>
    
    <div class="twitter">
        asdasd as d asd a sdd as d as d as d asd as d asd
    </div>
</div>
