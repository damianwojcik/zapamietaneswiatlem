<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<?php get_header(); ?>

    <!-- Title Header -->
    <section class="nbr-page-section">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="nbr-page-content text-center">
                    <h2>Strony nie znaleziono</h2>
                    <p>Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź, czy adres URL nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>">stronę główną</a>.</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>