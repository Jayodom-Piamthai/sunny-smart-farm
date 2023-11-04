<?php $errors = array(); ?>

<?php if(count($errors) > 0) : ?>
    <div class = "error">
        <?php foreach ($errors as $eror) : ?>
            <p><?php echo $eror ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>