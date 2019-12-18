<footer <?php print $this->html_attr($this->footer['attr']); ?>>

    <?php foreach ($this->footer['containers'] as $container): ?>

        <div <?php print $this->html_attr($container['attr']); ?>>

            <?php foreach ($container['elements'] as $element): ?>
                <span <?php print $this->html_attr($element['attr']); ?>><?php print $element['text'] ?></span>
            <?php endforeach; ?>

        </div>

    <?php endforeach; ?>

</footer>