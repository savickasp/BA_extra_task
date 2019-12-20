<table <?php print $this->html_attr($this->table['attr']); ?>>

    <thead <?php print $this->html_attr($this->table['thead']['attr']); ?>>

    <tr>
        <?php foreach ($this->table['thead']['row'] as $title): ?>
            <td><?php print $title; ?></td>
        <?php endforeach; ?>
    </tr>

    </thead>

    <tbody>
    <?php foreach ($this->table['tbody'] as $row): ?>
        <tr>
            <?php foreach ($row as $title): ?>
                <?php if (is_array($title)): ?>
            <td>
                    <form action="<?php print ROOT_URL . '/companies/detailes'?>" method="post">
                    <input <?php print $this->html_attr($title['field']); ?>>
                    <button <?php print $this->html_attr($title['button']); ?>>More Info</button>
                    </form>
            </td>
            <?php else:?>
                <td><?php print $title; ?></td>
            <?php endif;?>

            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>

    </tbody>

</table>