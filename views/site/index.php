<?php

/**
 * @var yii\web\View $this
 *
 * @var array $statistics
 */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Документов загружено</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>За день: <?= $statistics['lastDayAll'] ?></h2>

                <p>
                    Публичных: <?= $statistics['lastDayPublic'] ?> <br />
                    Полу-приватных: <?= $statistics['lastDaySemiPrivate'] ?> <br />
                    Приватных: <?= $statistics['lastDayPrivate'] ?> <br />
                </p>
            </div>
            <div class="col-lg-4">
                <h2>За месяц: <?= $statistics['lastMonthAll'] ?></h2>

                <p>
                    Публичных: <?= $statistics['lastMonthPublic'] ?> <br />
                    Полу-приватных: <?= $statistics['lastMonthSemiPrivate'] ?> <br />
                    Приватных: <?= $statistics['lastMonthPrivate'] ?> <br />
                </p>
            </div>
            <div class="col-lg-4">
                <h2>За год: <?= $statistics['lastYearAll'] ?> </h2>
                <p>
                    Публичных: <?= $statistics['lastYearPublic'] ?> <br />
                    Полу-приватных: <?= $statistics['lastYearSemiPrivate'] ?> <br />
                    Приватных: <?= $statistics['lastYearPrivate'] ?> <br />
                </p>
            </div>
        </div>

    </div>
</div>
