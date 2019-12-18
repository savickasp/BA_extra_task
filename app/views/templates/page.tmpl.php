<html>
<head>
    <title><?php print $this->pageTitle; ?></title>
    <?php foreach ($this->page_css as $attrArray): ?>
        <link <?php print $this->html_attr($attrArray); ?>>
    <?php endforeach; ?>
    <!-- script -->
    <?php foreach ($this->page_js['top'] as $attrArray): ?>
        <script <?php print $this->html_attr($attrArray); ?>></script>
    <?php endforeach; ?>
</head>
<!-- header -->
<?php print $this->render('header'); ?>
<!-- main -->
<main>
    <?php $this->includePage(); ?>
</main>
<!-- footer -->
<?php print $this->render('footer'); ?>
<!-- script -->
<?php foreach ($this->page_js['bottom'] as $attrArray): ?>
    <script <?php print $this->html_attr($attrArray); ?>></script>
<?php endforeach; ?>
</body>
</html>