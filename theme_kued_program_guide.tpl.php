<?php
/**
 * @file
 * Template file for theming_example_text_form
 *
 * The array $text_form_content contains the individual form components
 * To view them in the source html use this
 *
 * <?php print '<!--' . print_r($text_form_content, TRUE) . '-->'; ?>
 *
 */
?>
<!-- theming_example_text_form template -->
<div class="container-inline">
<pre>
output:<br />
<?php print_r($items) ?>
</pre>

version id: <?php  print $version_id; ?><br />
station: <?php  print $station; ?><br />
<?php  print $title; ?><br />
<?php  print $items; ?><br />
<?php  print $output; ?><br />

</div>
<!-- /theming_example_text_form template -->
