<!doctype html>
<html>

<head>
  <?php include 'stylesheets-material.php'; ?>
  <?php include 'scripts-material.php'; ?>
  <link href="vendor/jquery/css/smoothness/jquery-ui-1.10.2.custom.min.css" rel="stylesheet" />
  <script type="text/javascript" src="/vendor/jquery/js/jquery-ui-1.10.2.custom.min.js"></script>
  <script type="text/javascript">
    var loginFields = <?php echo json_encode($loginFields); ?>;
  </script>
  <script type="text/javascript" src="js/users.js"></script>
</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="main">
    <?php include 'header.php'; ?>
    <main id="site_content" class="mdl-layout__content">
      <div id="content" class="mdl-layout__tab-panel is-active">
        <table class="full-width grid mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
          <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Edit</th>
          </thead>
          <tbody>
            <?php if (empty($users)) : ?>
              <tr>
                <td colspan="4"><em>No users</em></td>
              </tr>
            <?php endif; ?>
            <?php foreach ($users as $user) : ?>
              <tr>
                <td><?php echo htmlspecialchars($user->first_name); ?></td>
                <td><?php echo htmlspecialchars($user->last_name); ?></td>
                <td><?php echo htmlspecialchars($user->email); ?></td>
                <td><button data-login_id="<?php echo htmlspecialchars($user->login_id); ?>" class="edit_user mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Edit User</button></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <br />
        <button id="add_user_button" class="full-width mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Add User</button>
        <div id="user_edit_dialog" title="Add User" style="display: none">
          <form id="user_edit_form" action="user_edit.php" method="post">
            <input type="hidden" id="action" name="action" value="edit_user" />
            <input type="hidden" id="login_id" name="login_id" value="" />
            <div class="input_form">
              <div>
                <label>First name:</label>
                <input type="text" id="first_name" name="first_name" spellcheck="false" value="" />
              </div>
              <div>
                <label>Last name:</label>
                <input type="text" id="last_name" name="last_name" spellcheck="false" value="" />
              </div>
              <div>
                <label>E-mail address:</label>
                <input type="text" id="email" name="email" spellcheck="false" value="" />
              </div>
              <div>
                <label>Password:</label>
                <input type="password" id="password" name="password" value="" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>

    <?php include 'footer.php'; ?>
  </div>
</body>

</html>