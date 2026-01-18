<header>
    <p>LOGIN LOGOFF</p>
    <h2>ERROR</h2>
    <form>
        <input type="submit" name="cerrarSesion" value="Cerrar Sesion" />
    </form>
</header>
<main>
    <section id="apis">
        <div class="Rest" id="nasa">
            <h2>NASA</h2>
            <form method="post">
                <input type="date" name="fechaNasa" value="<?php echo $_SESSION['nasaFechaActual'] ?? date('Y-m-d'); ?>">
                <input type="submit" value="Buscar">
            </form>
            <p><b>Título de la Imagen:</b> <?php echo isset($aVistaRest['nasa']['titulo']) ? $aVistaRest['nasa']['titulo'] : 'Título no disponible'; ?></p>
            <img id="imagenNasaVista" src="<?php echo $aVistaRest['nasa']['foto']; ?>" alt="Imagen del dia de la nasa">

            <p><b>Instrucciones de uso:</b> <a target="blank" href=" https://api.nasa.gov"> https://api.nasa.gov</a></p>
            <p><b>URL:</b> https://api.nasa.gov/planetary/apod?api_key=API_KEY&date=<?php echo $_SESSION['nasaFechaEnCurso']; ?></p>
            <p><b>Parámetros:</b> Fecha</p>
            <p><b>Método:</b> GET</p>
        </div>
        <div class="Rest" id="aemet">
            <h2>AEMET</h2>
            <form method="post">
                <label>
                    Provincia:
                    <input type="text" name="provincia" required>
                </label>
                <label>
                    Localidad:
                    <input type="text" name="localidad" required>
                </label>
                <input type="submit" name="buscarAemet" value="Consultar tiempo">
            </form>
            <?php if (isset($aVistaRest['aemet'])): ?>
                <p><b>Estado del cielo:</b> <?= $aVistaRest['aemet']['estado'] ?></p>
                <p><b>Temperatura máxima:</b> <?= $aVistaRest['aemet']['max'] ?> ºC</p>
                <p><b>Temperatura mínima:</b> <?= $aVistaRest['aemet']['min'] ?> ºC</p>
            <?php endif; ?>
        </div>
        <div class="Rest" id="propia">
            <h2>API PROPIA</h2>
        </div>
    </section>
    <form>
        <input type="submit" name="volver" value="Volver" />
    </form>
</main>