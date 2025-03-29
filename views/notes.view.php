<?php require("partials/header.php") ?>
  <?php require("partials/nav.php") ?>
  <?php require("partials/banner.php") ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php foreach($notes as $note) : ?>
      
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">
        <a href="/note/id=<?= $note['id'] ?>"><?= $note['title']?></a>
      </h1>
      <p><?= $note['body'] ?></p>
      
    <?php endforeach;?>
    </div>
  </main>
<?php require("partials/footer.php") ?>