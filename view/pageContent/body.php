<body>
<div class="container">
    <?php
    if (isset($errors) || isset($successes))
        require_once "alert.php";?>

    <h3><?= (isset($pName) ? $pName : "") ?></h3>

    <?php
    require_once "taskView.php";
    ?>

</div>
</body>