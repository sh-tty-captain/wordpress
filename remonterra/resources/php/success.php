<!DOCTYPE html>
<html lang="en">
<?php
$title = "Спасибо, что обратились к нам!";
$description = "Ваша заявка успешко отправлена.";
?>

<?php include "../blocks/head.php"; ?>
<?php include "../blocks/send_done.php"; ?>

<body>
<main>
  <section id="calculator" class="success_send">
    <?php include "../blocks/navigation.php"; ?>

    <div class="head success_head">
      <?php include "../blocks/breadcrumbs.php"; ?>
      <?php include "../blocks/top.php"; ?>

      <div class="waves">
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave" d=""/></svg>
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave-two" d=""/></svg>
      </div>
    </div>

    <?php echo $doc_body; ?>
  </section>
</main>

<?php include "../blocks/footer.php"; ?>
</body>
</html>