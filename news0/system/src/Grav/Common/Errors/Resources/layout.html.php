<?php
/**
 * Layout template file for Whoops's pretty error output.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Whoops there was an error!</title>
    <style><?php echo $stylesheet ?></style>
</head>
<body>
    <div class="container">
        <div class="details">
            <header>
                Server Error
            </header>



            <p>Sorry, something went terribly wrong!</p>

            <h3><?php echo $code ?> - <?php echo $message ?></h3>

            <h5>For further details please review your <code>logs/</code> folder, or enable displaying of errors in your system configuration.</h5>
        </div>
    </div>
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
