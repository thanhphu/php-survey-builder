<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Korea job portal</title>
  <?php include 'stylesheets.php'; ?>
  <?php include 'scripts.php'; ?>
  <script type="text/javascript" src="js/survey_form.js"></script>
</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php if (!empty($survey) && $survey instanceof Survey) : ?>
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__header-row">
          <h3><?php echo htmlspecialchars($survey->survey_name); ?></h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
      </header>
      <main id="main" class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <form id="survey_form" action="survey_form.php" method="post">
            <input type="hidden" id="action" name="action" value="add_survey_response" />
            <input type="hidden" id="survey_id" name="survey_id" value="<?php echo htmlspecialchars($survey->survey_id); ?>" />

            <?php if (isset($statusMessage)) : ?>
              <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Error</h2>
                </div>
                <div class="mdl-card__supporting-text">
                  <?php echo htmlspecialchars($statusMessage); ?>
                </div>
              </div>
            <?php endif; ?>

            <?php foreach ($survey->questions as $i => $question) : ?>
              <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                <div class="mdl-card__title">
                  <h4 data-question_id="<?php echo htmlspecialchars($question->question_id); ?>" data-question_type="<?php echo htmlspecialchars($question->question_type); ?>" data-is_required="<?php echo htmlspecialchars($question->is_required); ?>"><?php echo htmlspecialchars($question->question_text); ?></h4>
                </div>
                <div class="mdl-card__actions">
                  <?php if (in_array($question->question_type, ['radio', 'checkbox'])) : ?>
                    <?php foreach ($question->choices as $j => $choice) : ?>
                      <?php $question_html_id = 'choice_' . htmlspecialchars($question->question_id) . '_' . htmlspecialchars($choice->choice_id); ?>
                      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="<?php echo $question_html_id; ?>">
                        <input class="mdl-radio__button" id="<?php echo $question_html_id; ?>" type="<?php echo htmlspecialchars($question->question_type); ?>" name="question_id[<?php echo htmlspecialchars($question->question_id); ?>][]" value="<?php echo htmlspecialchars($choice->choice_text); ?>" />
                        <span class="mdl-radio__label"><?php echo htmlspecialchars($choice->choice_text); ?></span>
                      </label>
                      <br />
                    <?php endforeach; ?>
                  <?php elseif ($question->question_type == 'input') : ?>
                    <div class="mdl-textfield mdl-js-textfield">
                      <input class="mdl-textfield__input" type="text" name="question_id[<?php echo htmlspecialchars($question->question_id); ?>]" value="" />
                    </div>
                  <?php elseif ($question->question_type == 'textarea') : ?>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows="3" name="question_id[<?php echo htmlspecialchars($question->question_id); ?>]"></textarea>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>

            <button id="submitButton" name="submitButton" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Submit
            </button>
          </form>
        </div>
        <?php include 'footer.php'; ?>
      </main>
    <?php endif; ?>
  </div>
</body>

</html>