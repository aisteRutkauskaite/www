<form <?php print form_attr($form); ?>>
    <?php foreach ($form['fields'] as $field_id => $field): ?>
        <label>
            <span><?php print $field['label']; ?></span>
        </label>
        <?php if ($field['type'] == 'select'): ?>
            <select <?php print select_attr($field_id, $field); ?>>
                <?php foreach ($field['options'] as $option_id => $option): ?>
                    <option <?php print option_attr($option_id, $field); ?>>
                        <?php print $option; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        <?php elseif ($field['type'] === 'textarea'): ?>
            <textarea <?php print textarea_attr($field_id, $field); ?>><?php print $field['value'] ?? ''; ?></textarea>
        <?php else: ?>
            <input <?php print input_attr($field_id, $field); ?>>
        <?php endif; ?>
        <?php if (isset($field['error'])): ?>
            <p class="error"><?php print $field['error']; ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php foreach ($form['buttons'] as $button_id => $button): ?>
        <button <?php print button_attr($button_id, $button); ?>>
            <?php print $button['title']; ?>
        </button>
    <?php endforeach; ?>
    <?php if (isset($form['error'])): ?>
        <p class="error"><?php print $form['error']; ?></p>
    <?php endif; ?>
</form>


