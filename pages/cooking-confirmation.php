<?php
$page_title = 'Yoko\'s Kitchen';

$nav_cooking_class = 'active_page';

$form_japanese_vegetarian = $_POST['japanese-vegetarian']; // untrusted
$form_sauces_masterclass = $_POST['sauces-masterclass']; // untrusted
$form_email = $_POST['email']; // untrusted
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/meta.php' ?>

<body>
  <?php include 'includes/header.php' ?>

  <main class="courses">

    <h2><?php echo htmlspecialchars($page_title); ?></h2>

    <p>We've received your request for more information about our courses. We will contact you shortly.</p>

    <h3>Course Information Request Confirmation</h3>

    <dl>
      <dt>Japanese Vegetarian</dt>
      <dd><?php echo htmlspecialchars($form_japanese_vegetarian); ?></dd>

      <dt>Sauces Masterclass</dt>
      <dd><?php echo htmlspecialchars($form_sauces_masterclass); ?></dd>

      <dt>Your Email</dt>
      <dd><?php echo htmlspecialchars($form_email); ?></dd>
    </dl>

  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
