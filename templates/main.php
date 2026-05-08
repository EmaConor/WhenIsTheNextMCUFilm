<main>
    <!--    <pre style="font-size: 10px; overflow: scroll; height: 250px">-->
    <!--        --><?php //var_dump($data); ?>
    <!--    </pre>-->
    <h2>La Próxima Película de Marvel</h2>
    <section>
        <img
            src="<?= $poster_url ?>"
            width="300"
            alt="Poster de <?= $title ?>"
            style="border-radius: 16px"/>
    </section>
    <hgroup>
        <h3><?= $title . " - " . $until_message ?> </h3>
        <p>Fecha de Estreno <?= $release_date ?></p>
        <P>La Siguiente Pelicula es: <?= $following_production ?></P>
    </hgroup>
</main>
