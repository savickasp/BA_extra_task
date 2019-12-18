<select
    <?php print $this->html_attr(($field['extra']['attr'] ?? []) + [
            'name' => $field_id,
        ]) ?>>
    <?php foreach ($field['option'] as $value => $title): ?>
        <?php if (isset($field['value']) && $field['value'] == $value): ?>
            <?php $selected = 'selected'; ?>
        <?php endif; ?>
        <option value="<?php print $value; ?>" <?php print $selected ?? ''; ?>><?php print $title; ?></option>
    <?php endforeach; ?>
</select>