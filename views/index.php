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
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
          <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
            <i class="material-icons">play_circle_filled</i>
          </header>
          <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card__supporting-text">
              <h4>Welcome <?php echo $user->first_name, ' ', $user->last_name; ?></h4>
              This application lets you build a customized survey which you can use to send to people and record their responses. The responses can be viewed and downloaded into an Excel spreadsheet, and you can also view charts of the results.
            </div>
          </div>
        </section>
      <?php include 'footer.php'; ?>
    </main>
  </div>
</body>

</html>