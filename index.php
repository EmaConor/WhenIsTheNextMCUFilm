<!--php index.php-->
<!--php -S localhost:8000-->
<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";
    # Inicializar una nueva sesión de cURL; ch = cURL handle
    $ch = curl_init(API_URL);
    // Indicar que queremos recibir el resultado de la peticion y no mostrar en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    /* Ejecutar la peticion
        y guardamos el resultado */
    $response = curl_exec($ch);

    // una alternativa seria utilizar file_get_contents
    // $response = file_get_contents(API_URL); // Si solo quieres hacer un GET de una API

    $data = json_decode($response, true);

    curl_close($ch);

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title>La Próxima Película de Marvel</title>
    <meta name="description" content="La Próxima Película de Marvel"/>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
</head>
<main>
<!--    <pre style="font-size: 10px; overflow: scroll; height: 250px">-->
<!--        --><?php //var_dump($data); ?>
<!--    </pre>-->
    <h2>La Próxima Película de Marvel</h2>
    <section>
        <img
            src="<?= $data["poster_url"] ?>" }
            width="300"
            alt="Poster de <?= $data["title"] ?>"
            style="border-radius: 16px"/>
    </section>
    <hgroup>
        <h3><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> Dia(s)</h3>
        <p>Fecha de Estreno <?= $data["release_date"]?></p>
        <P>La Siguiente Pelicula es: <?= $data["following_production"]["title"] ?></P>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    h2 {
        text-align: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>