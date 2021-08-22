<!DOCTYPE html>

<html lang="en">
<?php
  $title = "Спасибо, что обратились к нам!";
  $description = "Ваша заявка успешко отправлена.";
?>

<?php include "../blocks/head.php"; ?>
<?php include "../blocks/send_done_footer.php"; ?>

<body>
<main>
  <section id="calculator" class="success_send">
    <?php include "../blocks/navigation.php"; ?>

    <div class="head success_head">
      <?php include "../blocks/breadcrumbs.php"; ?>
      <?php include "../blocks/top.php"; ?>
    </div>

    <?php echo $doc_body; ?>
  </section>
</main>

<?php include "../blocks/footer.php"; ?>
</body>
</html>