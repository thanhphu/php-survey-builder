<!doctype html>
<html>

<head>
  <title>Survey Builder Login</title>
  <?php include 'stylesheets-material.php'; ?>
  <?php include 'scripts-material.php'; ?>
  <script type="text/javascript">
    $(function() {
      $('#submitButton').button();

      <?php if (!empty($_POST['email'])) : ?>
        $('#password').focus();
      <?php else : ?>
        $('#email').focus();
      <?php endif; ?>
    });
  </script>
</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="main">
    <?php include 'header.php'; ?>
    <main id="main" class="mdl-layout__content">
      <div class="mdl-layout__tab-panel is-active" id="overview">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Login</h2>
          </div>
          <div class="mdl-card__supporting-text">
            <?php if (isset($statusMessage)) : ?>
              <p class="error"><?php echo htmlspecialchars($statusMessage); ?></p>
            <?php endif; ?>
            <form method="post" action="login.php">
              <div class="input_form">
                <div>
                  <div class="full-width mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="full-width mdl-textfield__input" type="text" name="email" id="email"
                      value="<?php
                      if (isset($_POST['email'])) {
                        echo htmlspecialchars($_POST['email']);
                      }?>" />
                    <label class="mdl-textfield__label" for="email">E-mail address</label>
                  </div>
                </div>
                <div>
                  <div class="full-width mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="full-width mdl-textfield__input" type="password" name="password" id="password" value="" />
                    <label class="mdl-textfield__label" for="email">Password</label>
                  </div>
                </div>
                <input class="submit_button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="submitButton" name="submitButton" value="Login" />
              </div>
            </form>
          </div>
        </div>

      </div>
      <?php include 'footer.php'; ?>
    </main>
  </div>
</body>

</html>