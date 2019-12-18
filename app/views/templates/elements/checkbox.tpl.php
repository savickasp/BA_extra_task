<?php foreach ($field['option'] as $value => $title): ?>
    <label>
        <input
            <?php print $this->html_attr(($field['extra']['attr'] ?? []) + [
                    'name' => $field_id . '[]',
                    'type' => $field['type'],
                    'value' => $value,
                ]) ?>>
        <?php print $title; ?>
    </label>
<?php endforeach; ?>