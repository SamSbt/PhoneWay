<?php
require_once __DIR__ . "/templates/head.php";
require __DIR__ . "/templates/navbar.php"; ?>

<main>
  <section class="container my-5 d-flex justify-content-center align-items-center">
    <div class="row text-center loginFormStyle d-flex justify-content-center align-items-center">
      <h2 class="mb-4">Bon retour parmi nous !</h2>
      <form class="border border-2 rounded-3 p-3">
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Adresse Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Entrez votre email" required>
        </div>
        <div class="mb-4">
          <label for="inputPassword" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="inputPassword" placeholder="Entrez votre mot de passe" required>
        </div>
        <button type="submit" class="btn btn-outline-dark btn-dark text-light">Se connecter</button>
        <div class="my-3">
          <a href="#" class="">Pas encore de compte ? S'inscrire ici</a>
        </div>

      </form>
    </div>
  </section>
</main>

<?php
require __DIR__ . "/templates/footer.php";
require __DIR__ . "/templates/foot.php"; ?>