<?php require_once __DIR__ . "/templates/head.php"; ?>
<?php require __DIR__ . "/templates/navbar.php"; ?>
<main>

  <section class="container my-5">
    <div class="row">
      <?php foreach ($articles as $article) { ?>
        <?php
        $random_number = rand(1, 200);
        $image_url = "https://picsum.photos/200/100?random=" . $random_number;

        $random_articles = range(1, 150);
        shuffle($random_articles);
        ?>




        <div class="d-flex justify-content-center col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card" style="width: 15rem;">
            <img src="<?= $image_url; ?>" class="card-img-top" alt="Photo de présentation de l'article">
            <div class="card-body">
              <h6 class="card-title"><?= $article['Titre'] ?></h6>
              <p class="card-text mb-2"><?= $article['Description'] ?></p>
              <span>Série: <a href="#" class="btn btn-dark rounded-5"><?= $article['Nom_Marque'] ?></a></span>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </section>

</main>
<?php require __DIR__ . "/templates/footer.php"; ?>
<?php require __DIR__ . "/templates/foot.php"; ?>