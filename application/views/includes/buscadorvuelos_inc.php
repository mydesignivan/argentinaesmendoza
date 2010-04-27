<!-- =========== BUSCADOR DE VUELOS =========== -->
<div class="span-16 fly">
    <div class="photo-search"><img src="images/photo1.png" alt="mendoza" /></div>
    <div class="search-fly">
        <h2>Buscador de Vuelos:</h2>
        <form action="" method="post">
            <div class="row">
                <div class="input-1-large"><input type="text" value="Ciudad de Origen..." /></div>
                <div class="input-1-large"><input type="text" value="Ciudad de Destino..." /></div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label-small">Salida:</label><br />
                    <div class="input-1-medium"><input type="text" value="dd/mm/aa" /></div>
                </div>
                <div class="col">
                    <label class="label-small">Regreso:</label><br />
                    <div class="input-1-medium"><input type="text" value="dd/mm/aa" /></div>
                </div>
                <div class="col">
                    <label class="label-small">Adultos:</label><br />
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
                <button type="button" class="button-1-medium" onclick="">Buscar</button>
            </div>
        </form>
    </div>
</div>
<!-- =========== END BUSCADOR DE VUELOS =========== -->
