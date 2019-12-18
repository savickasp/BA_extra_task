<input
    <?php print $this->html_attr(($field['extra']['attr'] ?? []) + [
            'name' => $field_id,
            'type' => $field['type'] ?? 'text',
            'value' => $field['value'] ?? '',
        ]) ?>>