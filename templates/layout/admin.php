<!DOCTYPE html>
<html lang="fr">
<head>
    <?= $this->Html->charset() ?>
    <title>Admin - <?= $this->fetch('title') ?></title>
    <?= $this->Html->css('admin.css') ?>
</head>
<body>

    <?= $this->element('admin_header') ?>

    <main class="container">
        <?= $this->fetch('content') ?>
    </main>

    <?= $this->element('admin_footer') ?>

</body>
</html>