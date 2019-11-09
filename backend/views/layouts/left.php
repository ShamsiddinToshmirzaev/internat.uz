<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => Yii::t('app','Students'), 'icon' => 'th-list', 'url' => ['/sites/index']],
                    ['label' =>  Yii::t('app','Teachers'), 'icon' => 'bookmark', 'url' => ['/tags/index'], 'template' => '<a href="{url}">{icon} 
{label}<span class="pull-right-container"><small class="label pull-right">' . '</small></span></a>'],
                    ['label' =>  Yii::t('app','Subjects'), 'icon' => 'th-list', 'url' => ['/contacts/index'], 'template' => '<a href="{url}">{icon} {label}
<span class="pull-right-container"><small class="label pull-right bg-blue">' . '</small></span></a>'],
                    ['label' => 'Articles', 'icon' => 'th-list', 'url' => ['/tags-and-sites/index'], 'template' => '<a href="{url}">{icon} {label}
<span class="pull-right-container"><small class="label pull-right bg-blue">'
                        .  '</small></span></a>'],

                ],
            ]
        ) ?>

    </section>

</aside>