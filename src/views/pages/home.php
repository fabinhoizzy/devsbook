<?= $render('header', ['loggedUser' => $loggedUser]); ?>

    <section class="container main">
        <?= $render('sidebar'); ?>

        <section class="feed mt-10">

            <div class="row">
                <div class="column pr-5">

                <?=$render('feed-editor', ['user'=>$loggedUser]); ?>

                <?=$render('feed-item');?>

                </div>
                <div class="column side pl-5">
                    <div class="box banners">
                        <div class="box-header">
                            <div class="box-header-text">Patrocinios</div>
                            <div class="box-header-buttons">

                            </div>
                        </div>
                        <div class="box-body">
                            <a href=""><img src="<?=$base;?>/assets/images/php.png"/></a>
                            <a href=""><img src="<?=$base;?>/assets/images/laravel.png"/></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body m-10">
                            Criado por Fábio Silva
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
<?= $render('footer'); ?>