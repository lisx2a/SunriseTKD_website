<div class="dragable" id="input_header">Header Text</div>
<div class="element_code" id="input_header_element">
	<label id="input_header_{n}_label" class="header_label">Header</label>
	<p><?php echo $element_params['code']; ?></p>
	<textarea name="chronofield[{n}][input_header_{n}_code]" id="input_header_{n}_code" style="display:none"><?php echo htmlspecialchars($element_params['code']); ?></textarea>
    <input type="hidden" id="chronofield_id_{n}" name="chronofield_id" value="{n}" />
    <input type="hidden" name="chronofield[{n}][tag]" value="input" />
    <input type="hidden" name="chronofield[{n}][type]" value="header" />
</div>
<div class="element_config" id="input_header_element_config">
	<?php echo $PluginTabsHelper->Header(array('general' => 'General'), 'input_header_element_config_{n}'); ?>
	<?php echo $PluginTabsHelper->tabStart('general'); ?>
		<a class="editor_toggler_link" onclick="toggleEditor('input_header_{n}_code_config');return false;">Add/Remove editor</a>
		<?php echo $HtmlHelper->input('input_header_{n}_code_config', array('type' => 'textarea', 'label' => 'Code', 'class' => 'text_editor', 'label_over' => true, 'rows' => 20, 'cols' => 70, 'style' => 'width:450px !important;')); ?>
	<?php echo $PluginTabsHelper->tabEnd(); ?>
</div>