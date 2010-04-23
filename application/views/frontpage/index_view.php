<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- =========== BUSCADOR DE VUELOS =========== -->
<div class="span-16 fly">
    <div class="photo-search"><img src="images/photo1.png" alt="mendoza" /></div>
    <div class="span-5 search-fly">
        <h2>Buscador de Vuelos:</h2>
        <form action="" method="post">
            <div class="row">
                <div class="input-fly-large"><input type="text" value="Ciudad de Origen..." /></div>
                <div class="input-fly-large"><input type="text" value="Ciudad de Destino..." /></div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label-1">Salida:</label><br />
                    <div class="input-fly-medium"><input type="text" value="dd/mm/aa" /></div>
                </div>
                <div class="col">
                    <label class="label-1">Regreso:</label><br />
                    <div class="input-fly-medium"><input type="text" value="dd/mm/aa" /></div>
                </div>
                <div class="col">
                    <label class="label-1">Adultos:</label><br />
                    <select id="cboAdultos">
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="row text-center">
                <input type="checkbox" /><span class="text-small">&nbsp;Ida y vuelta&nbsp;&nbsp;</span>
                <input type="checkbox"/><span clasS="text-small">Comparar precios</span>
                <button type="button" class="button-medium" onclick="">Buscar</button>
            </div>
        </form>
    </div>
</div>
<!-- =========== END BUSCADOR DE VUELOS =========== -->


<!-- =========== DESTACADOS =========== -->
<!--<div class="title span-2"><h1>Destacados</h1></div>
<div class="destacados span-16 push-0">
    <div class="column-left span-8">
        <div class="picture span-2-1"><img src="images/picture1.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span> &nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
    <div class="column-right span-8">
        <div class="picture span-2-1"><img src="images/picture2.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span> &nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
</div>

<div class="destacados span-16 push-0">
    <div class="column-left span-8">
        <div class="picture span-2-1"><img src="images/picture3.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span> &nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
    <div class="column-right span-8">
        <div class="picture span-2-1"><img src="images/picture1.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span>&nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
</div>

<div class="destacados span-16 push-0">
    <div class="column-left span-8">
        <div class="picture span-2-1"><img src="images/picture3.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span> &nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
    <div class="column-right span-8">
        <div class="picture span-2-1"><img src="images/picture1.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span>&nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
</div>

<div class="destacados span-16 push-0">
    <div class="column-left span-8">
        <div class="picture span-2-1"><img src="images/picture3.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span> &nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
    <div class="column-right span-8">
        <div class="picture span-2-1"><img src="images/picture1.jpg" alt="hoteles"/></div>
        <div class="description span-5">
            <h3>Hotel sol Andino</h3>
            <span>Renovado hotel en pleno centro de la ciudad de Mendoza, de categoría 3 estrellas...</span>&nbsp; <a href="#">leer mas...</a>
        </div>
    </div>
</div>-->
<!-- =========== END DESTACADOS =========== -->

<!-- =========== ESPACIO PUBLICITARIO =========== -->
<!--<div class="container-google span-16 push-0">
    <div class="map-google span-11"></div>
    <div class="publicity-vertical span-4">ESPACIO PUBLICITARIO</div>
</div>-->
<!-- =========== END ESPACIO PUBLICITARIO =========== -->


<!-- =========== NOTICIAS =========== -->
<!--<div class="title span-2"><h1>Noticias</h1></div>
<div class="news span-16 push-0">
    <div class="column-news span-5">
        <h4>Diario UNO</h4>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
    </div>
    <div class="column-news span-5">
        <h4>Los ANDES</h4>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
    </div>
    <div class="column-news span-5">
        <h4>MDZ</h4>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
        <p>La oposición ratificó que no está de acuerdo con el endeudamiento de Jaque.</p>
    </div>
</div>-->
<!-- =========== END NOTICIAS =========== -->
