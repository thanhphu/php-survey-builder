<!doctype html>
<html>

<head>
  <?php include 'stylesheets-material.php'; ?>
  <?php include 'scripts-material.php'; ?>
  <link href="vendor/jquery/css/smoothness/jquery-ui-1.10.2.custom.min.css" rel="stylesheet" />
  <script type="text/javascript" src="/vendor/jquery/js/jquery-ui-1.10.2.custom.min.js"></script>
</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="main">
    <?php include 'header.php'; ?>
    <main id="site_content" class="mdl-layout__content">
      <?php if (isset($statusMessage)) : ?>
        <p class="error"><?php echo htmlspecialchars($statusMessage); ?></p>
      <?php endif; ?>
      <div id="content" class="mdl-layout__tab-panel is-active">
        <table class="full-width grid mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
          <thead>
            <th>Survey Name</th>
            <th>Edit</th>
            <th>Take Survey</th>
            <th>View Results</th>
            <th>View Charts</th>
          </thead>
          <tbody>
            <?php if (empty($surveys)) : ?>
              <tr>
                <td colspan="5"><em>No surveys</em></td>
              </tr>
            <?php endif; ?>
            <?php foreach ($surveys as $survey) : ?>
              <tr>
                <td><?php echo htmlspecialchars($survey->survey_name); ?></td>
                <td><a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="survey_edit.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>">Edit Survey</a></td>
                <td><a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="survey_form.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>" target="_blank">Take Survey</a></td>
                <td><a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="survey_results.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>">View Results</a></td>
                <td><a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="survey_charts.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>">View Charts</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <br />
        <a id="add_survey_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent full-width" href="survey_edit.php">Add Survey</a>
      </div>
    </main>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>