<!doctype html>
<html>

<head>
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
            <h2 class="mdl-card__title-text">Welcome <?php echo $user->first_name, ' ', $user->last_name; ?></h2>
          </div>
          <div class="mdl-card__supporting-text">
            This application lets you build a customized survey which you can use to send to people and record their responses. The responses can be viewed and downloaded into an Excel spreadsheet, and you can also view charts of the results.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/surveys.php">
              Get Started
            </a>
          </div>
        </div>

      </div>
      <?php include 'footer.php'; ?>
    </main>
  </div>
</body>
</html>