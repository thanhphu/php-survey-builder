<!doctype html>
<html>

<head>
  <title>Thank You</title>
  <?php include 'stylesheets-material.php'; ?>
  <?php include 'scripts-material.php'; ?>
</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="main">
    <?php include 'header.php'; ?>
    <main id="main" class="mdl-layout__content">
      <div class="mdl-layout__tab-panel is-active" id="overview">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Thank you for completing the survey!</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Thank you for taking the time to complete the survey. Your feedback is very valuable to us.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" ahref="/surveys.php">
              Close this tab
            </a>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </main>
  </div>
</body>
</html>