<?php
/**
* Layout template file for Whoops's pretty error output.
*/
?>
<!DOCTYPE html><?php echo $preface; ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php echo $tpl->escape($page_title) ?></title>

    <style><?php echo $stylesheet ?></style>
    <style><?php echo $prismCss ?></style>
  </head>
  <body>

    <div class="Whoops container">
      <div class="stack-container">

        <?php $tpl->render($panel_left_outer) ?>

        <?php $tpl->render($panel_details_outer) ?>

      </div>
    </div>

    <script data-manual><?php echo $prismJs ?></script>
    <script><?php echo $zepto ?></script>
    <script><?php echo $clipboard ?></script>
    <script><?php echo $javascript ?></script>
  <script>
document.addEventListener('DOMContentLoaded', function() {
    const accTitles = document.querySelectorAll('.gdlr-core-accordion-item-title');
    accTitles.forEach(title => {
        title.addEventListener('click', () => {
            const tab = title.closest('.gdlr-core-accordion-item-tab');
            const isActive = tab.classList.contains('gdlr-core-active');
            document.querySelectorAll('.gdlr-core-accordion-item-tab').forEach(t => t.classList.remove('gdlr-core-active'));
            if (!isActive) tab.classList.add('gdlr-core-active');
        });
    });
});
</script>
</body>
</html>
