<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php /*foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; */?>

<?php
/**
 * new fields:
 * $picture
 * $name
 * $field_photo $body $created $filed_tags $edit_node $delete_node
 */
	foreach ($fields as $id => $field) {
		$$id = $field->wrapper_prefix.$field->label_html.$field->content.$field->wrapper_suffix;
		if (!empty($field->separator)){
			$$id .= $field->separator;
		}
	}
?>
<div class="t-pic float-l"> <?php print $picture; ?> </div>
<div class="t-Con float-l">
	<div class="t-author clearfix">
		<div class="t-name  float-l"> <?php print $name; ?> 上传了照片</div>
		
	</div>
	<!--div class="t-body"> <?php print $body; ?> </div-->
	<div class="t-field_photo"> <?php print $field_photo; ?> </div>
	<div class="t-footer clearfix">
		<!--div class="filed_tags float-l"> <?php print $field_tags; ?> </div-->
		<div class="t-created  float-l"> <?php print $created; ?> </div>
		<div class="t-links  float-r">
			<?php global $user; if ($user->uid<>0): //TODO ?>
			<span class="edit"> <?php print $edit_node; ?> </span>
			<span class="del"> <?php print $delete_node; ?> </span>
		 	<?php endif; ?>
		 	<div class="vote"> <?php print $value; ?> </div>
		</div>
	</div>
</div>