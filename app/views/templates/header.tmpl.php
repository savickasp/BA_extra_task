<nav <?php print $this->html_attr($this->header['attr']); ?>>

    <?php foreach ($this->header['containers'] as $container): ?>

        <div <?php print $this->html_attr($container['attr']); ?>>

            <?php foreach ($container['elements'] as $title => $value): ?>
                <a <?php print $this->html_attr($value['attr']); ?>><?php print $title; ?></a>
            <?php endforeach; ?>

        </div>

    <?php endforeach; ?>

</nav>