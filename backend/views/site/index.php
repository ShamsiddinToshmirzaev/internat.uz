<?php

/* @var $this yii\web\View */

$this->title = 'Welcome to internat.uz';
?>
<div class="site-index">

    <?php

    $users = \common\models\User::find()->all();


    foreach ($users as $user){
    }
    echo $user['email'];

    ?>


</div>