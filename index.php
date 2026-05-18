<?php
$curso = "Microsoft Azure";
        $tema = "Configurando nuestro primer App Service";
        $plataforma = "Azure Portal";
        $servicio = "App Service";
        $lenguaje = "PHP";

echo "Hello World!";

 <h1><?php echo $curso; ?></h1>

    <h2><?php echo $tema; ?></h2>

    <p>
        En esta práctica aprenderemos a crear y configurar nuestro primer
        <strong><?php echo $servicio; ?></strong> en la nube de Microsoft Azure.
    </p>

    <div class="dato">
        <strong>Plataforma:</strong> <?php echo $plataforma; ?>
    </div>

    <div class="dato">
        <strong>Servicio utilizado:</strong> <?php echo $servicio; ?>
    </div>

    <div class="dato">
        <strong>Lenguaje de ejemplo:</strong> <?php echo $lenguaje; ?>
    </div>
