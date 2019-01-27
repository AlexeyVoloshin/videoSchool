<?php
    use \yii\bootstrap\NavBar;
?>
<?php $this->beginPage(); ?>
<html>
    <head>
        <title>VideoSchool</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody() ?> //подключили возможность размещения скриптов jquery
        <?php
        //передаем параметры в готовую верстку bootstrap-a. получился навбар
            NavBar::begin([
                    'brandLabel' => 'VideoSchool',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                        'class' => 'navbar-default navbar-fixed-top'
                ]
            ]);
            NavBar::end();
        ?>
    <div class="container" style="margin-top: 50px">
        <?= $content ?>
    </div>
    <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>