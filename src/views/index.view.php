      <section class="container my-5">
        <div class="row">
          <?php for ($i = 0; $i < 12; $i++) : ?>
            <?php
            $random_number = rand(1, 200);
            $image_url = "https://picsum.photos/200/100?random=" . $random_number;
            ?>

            <div class="d-flex justify-content-center col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="card" style="width: 15rem;">
                <img src="<?= $image_url; ?>" class="card-img-top" alt="Photo de présentation de l'article">
                <div class="card-body">
                  <h5 class="card-title">Ceci est un titre !</h5>
                  <p class="card-text mb-2">Wesh sisi la description ici, tavu, faut une phrase un peu longue. Voilà, merci.</p>
                  <span>Série: <a href="#" class="btn btn-dark rounded-5">yolo</a></span>
                </div>
              </div>
            </div>

          <?php endfor; ?>
        </div>
      </section>