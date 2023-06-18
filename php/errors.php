<?php if (count($errors) > 0): ?>
    <div class="error">
        <?php foreach ($errors as $error): ?>
            <p>
                <?php echo $error; ?>
            </p>
        <?php endforeach ?>
    </div>
<?php endif ?>

<style>
    .error {
        margin: 0px auto;
        padding: 10px;
        text-align: center;
        color: #FBEEE5;
    }
</style>