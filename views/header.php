<?php if (!empty($user) && $user instanceof Login) : ?>
  <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
    <div class="mdl-layout--large-screen-only mdl-layout__header-row">
    </div>
    <div class="mdl-layout__header-row">
      <h3>NetViet internal survey application</h3>
    </div>
    <div class="mdl-layout--large-screen-only mdl-layout__header-row">
    </div>
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
      <a class="mdl-layout__tab <?php if (in_array(basename($_SERVER['SCRIPT_NAME']), ['index.php'])) {
                                                    echo 'is-active';
                                                  } ?>" href="home.php">Home</a>
      <a class="mdl-layout__tab <?php if (in_array(basename($_SERVER['SCRIPT_NAME']), ['user_edit.php', 'users.php'])) {
                                                    echo 'is-active';
                                                  } ?>" href="users.php">Users</a>
      <a class="mdl-layout__tab <?php if (in_array(basename($_SERVER['SCRIPT_NAME']), ['survey_edit.php', 'surveys.php'])) {
                                                    echo 'is-active';
                                                  } ?>" href="surveys.php">Surveys</a>
      <a href="logout.php" class="mdl-layout__tab">Logout</a>
      <a href="login.php" class="mdl-layout__tab">Login</a>
    </div>
  </header>
<?php endif; ?>