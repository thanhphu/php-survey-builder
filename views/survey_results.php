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
      <div id="content" class="mdl-layout__tab-panel is-active">
        <div class="demo-card-wide full-width mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text"><?php echo htmlspecialchars($survey->survey_name); ?></h2>
          </div>
          <div class="mdl-card__supporting-text">
            <table class="full-width grid mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
              <thead>
                <th>User</th>
                <?php foreach ($survey->questions as $question) : ?>
                  <th><?php echo htmlspecialchars($question->question_text); ?></th>
                <?php endforeach; ?>
              </thead>
              <?php if (empty($survey->responses)) : ?>
                <tr>
                  <td colspan="<?php echo (count($survey->questions) + 1); ?>"><em>No surveys</em></td>
                </tr>
              <?php else : ?>
                <?php foreach ($survey->responses as $response) : ?>
                  <tr>
                    <td><?php echo $response->user_id ?></td>
                    <?php foreach ($survey->questions as $question) : ?>
                      <td><?php $field = 'question_' . htmlspecialchars($question->question_id);
                          echo htmlspecialchars($response->$field); ?></td>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
          </div>
          <div class="mdl-card__menu">
            <a class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="survey_charts.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>">
              <i class="material-icons">bar_chart</i>
            </a>
            <a class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="survey_results.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>&amp;action=download_csv">
              <i class="material-icons">border_all</i>
            </a>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>