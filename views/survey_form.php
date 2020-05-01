<!doctype html>
<html>

<head>
  <?php include 'stylesheets-material.php'; ?>
  <?php include 'scripts-material.php'; ?>
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

            <?php if (!isset($_REQUEST['user_id'])) : ?>
              <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text"><?php echo htmlspecialchars($survey->survey_id_prompt); ?></h2>
                </div>
                <div class="mdl-card__supporting-text">
                  <div class="full-width mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="full-width mdl-textfield__input" type="text" name="user_id" id="user_id" value="" />
                    <label class="mdl-textfield__label" for="question_id[<?php echo htmlspecialchars($question->question_id); ?>]"><?php echo htmlspecialchars($survey->survey_id_prompt); ?></label>
                  </div>
                </div>
              </div>
            <?php else : ?>
              <input type="hidden" id="user_id" name="user_id" value="<?php echo htmlspecialchars($_REQUEST['user_id']); ?>" />
            <?php endif; ?>

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
                    <?php $question_type = $question->question_type ?>
                    <?php foreach ($question->choices as $j => $choice) : ?>
                      <?php $question_html_id = 'choice_' . htmlspecialchars($question->question_id) . '_' . htmlspecialchars($choice->choice_id); ?>
                      <label class="mdl-<?php echo $question_type; ?> mdl-js-ripple-effect" for="<?php echo $question_html_id; ?>">
                        <input class="mdl-<?php echo $question_type; ?>__button" id="<?php echo $question_html_id; ?>" type="<?php echo htmlspecialchars($question->question_type); ?>" name="question_id[<?php echo htmlspecialchars($question->question_id); ?>][]" value="<?php echo htmlspecialchars($choice->choice_text); ?>" />
                        <span class="mdl-<?php echo $question_type; ?>__label"><?php echo htmlspecialchars($choice->choice_text); ?></span>
                      </label>
                      <br />
                    <?php endforeach; ?>
                  <?php elseif ($question->question_type == 'input') : ?>
                    <div class="full-width mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="full-width mdl-textfield__input" type="text" name="question_id[<?php echo htmlspecialchars($question->question_id); ?>]" id="question_id[<?php echo htmlspecialchars($question->question_id); ?>]" value="" />
                      <label class="mdl-textfield__label" for="question_id[<?php echo htmlspecialchars($question->question_id); ?>]">Text...</label>
                    </div>
                  <?php elseif ($question->question_type == 'textarea') : ?>
                    <div class="full-width mdl-textfield mdl-js-textfield">
                      <textarea class="full-width mdl-textfield__input" type="text" rows="3" name="question_id[<?php echo htmlspecialchars($question->question_id); ?>]"></textarea>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>

            <button id="submitButton" name="submitButton" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              <?php echo htmlspecialchars($survey->survey_button_prompt); ?>
            </button>
          </form>
        </div>
        <?php include 'footer.php'; ?>
      </main>
    <?php endif; ?>
  </div>
</body>

</html>