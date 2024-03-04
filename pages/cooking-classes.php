<?php
$page_title = 'Yoko\'s Kitchen';

$nav_cooking_class = 'active_page';

// TODO: 3. CSS classes for form feedback messages

// Get form data from HTTP request
// TODO: 6. Store data in a PHP usable format (i.e. boolean, string, etc.)
$form_values = array(
  'course-vegetarian' => $_POST['japanese-vegetarian'], // untrusted
  'course-sauces' => $_POST['sauces-masterclass'], // untrusted
  'email' => $_POST['email'] // untrusted
);

// TODO: 7. Store sticky values for form inputs
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/meta.php' ?>

<body>
  <?php include 'includes/header.php' ?>

  <main class="courses">

    <h2><?php echo htmlspecialchars($page_title); ?></h2>

    <p>Welcome to Yoko's Kitchen!</p>

    <h2>Cooking Classes</h2>

    <section>
      <div class="course-tile">
        <figure>
          <img src="/images/bok-choi.jpg" alt="Bok Choi" />
          <figcaption>Bok Choi</figcaption>
        </figure>
        <div>
          <div>
            <h3>Japanese Vegetarian</h3>
            <h4>Five week course in London</h4>
          </div>
          <p>A five week introduction to traditional Japanese vegetarian meals, teaching you a selection of rice and noodle dishes.</p>
        </div>
      </div>

      <div class="course-tile">
        <figure>
          <img src="/images/teriyaki.jpg" alt="Teriyaki sauce" />
          <figcaption>Teriyaki Sauce</figcaption>
        </figure>
        <div>
          <div>
            <h3>Sauces Masterclass</h3>
            <h4>One day workshop</h4>
          </div>
          <p>An intensive one-day course looking at how to create the most delicious sauces for use in a range of Japanese cookery.</p>
        </div>
      </div>
    </section>

    <section>
      <h2>Request Course Information</h2>

      <p>Interesting in taking one of our cooking classes? Let us know which classes and we'll send you some information!</p>

      <!-- TODO: 5. self-processing form -->
      <form id="request-form" action="/cooking-classes/confirmation" method="post" novalidate>

        <!-- TODO: 4. hide form feedback messages using variables. -->

        <!-- <div id="feedback-classes" class="feedback">TODO: 1. Pick at least one course feedback</div> -->

        <!-- TODO: 8. Add sticky values to form inputs -->

        <div class="form-label">
          <input type="checkbox" name="japanese-vegetarian" id="request-vegetarian" />
          <label for="request-vegetarian">Japanese Vegetarian</label>
        </div>
        <div class="form-label">
          <input type="checkbox" name="sauces-masterclass" id="request-sauces" />
          <label for="request-sauces">Sauces Masterclass</label>
        </div>

        <!-- <div id="feedback-email" class="feedback">TODO: 2. missing email feedback</div> -->

        <div class="form-label">
          <label for="request-email">Email:</label>
          <input type="email" name="email" id="request-email" />
        </div>

        <div class="align-right">
          <input id="request-submit" type="submit" value="Request Information" />
        </div>
      </form>
    </section>

    <cite>&copy; 2011 Yoko's Kitchen (<a href="http://www.htmlandcssbook.com/code-samples/chapter-17/example-with-links.html">Source</a>)</cite>
  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
