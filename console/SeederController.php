<?php

namespace artistereo\seeder;

use Yii;
use yii\helpers\Console;
use yii\console\Controller;
use yii\console\ExitCode;

class SeederController extends \yii\console\Controller
{

    public function actionHello()
    {
        echo  'Hello, world!';

        return 0;
    }

    public function actionInput($message)
    {
        echo  'Hello, '.$message.'!';

        return 0;
    }
}
