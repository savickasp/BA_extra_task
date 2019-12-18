<form <?php print $this->html_attr(($this->form['attr'] ?? []) + (['method' => 'post'])); ?>>

    <!-- start inputs -->
    <?php foreach ($this->form['fields'] ?? [] as $field_id => $field): ?>

        <div class="input-container">

            <!-- start label -->
            <?php if (isset($field['label'])): ?>
            <label>
                <span class="label"><?php print $field['label'] ?></span>
                <?php endif; ?>

                <!-- include input element -->
                <?php if (in_array($field['type'], INPUT_TYPES)): ?>
                    <?php require ROOT . '/app/views/templates/elements/' . 'input.tpl.php'; ?>
                <?php else: ?>
                    <?php require ROOT . '/app/views/templates/elements/' . $field['type'] . '.tpl.php'; ?>
                <?php endif; ?>

                <?php if (isset($field['label'])): ?>
            </label>
        <?php endif; ?>
            <!-- end of label -->

            <!-- field message -->
            <?php if (isset($field['error'])): ?>
                <span class="error-style"><?php print ($field['error']); ?></span>
            <?php endif; ?>
            <!-- end of field message -->

        </div>

    <?php endforeach; ?>
    <!-- end of inputs -->

    <!-- buttons -->
    <?php foreach ($this->form['buttons'] ?? [] as $button_id => $button): ?>
        <button name="action" <?php print $this->html_attr(($button['extra']['attr'] ?? []) + ['value' => $button_id]); ?>><?php print ($button['title'] ?? 'submit'); ?></button>
    <?php endforeach; ?>
    <!-- end of buttons -->

    <!-- messsage -->
    <?php if (isset($this->form['message'])): ?>
        <div class="form-message"><?php print $this->form['message']; ?></div>
    <?php endif; ?>
</form>

