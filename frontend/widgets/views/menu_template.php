<!--Navigation-->
<div id="mainMenu" class="light">
    <div class="container">
        <nav>
            <ul>
                <?php

                use frontend\widgets\Menu;

                foreach ($menu as $key => $value) {
                    if ($value['type'] != Menu::TYPE_EMPTY) {
                        echo '<li><a href="' . $value['link'] . '">' . $value['title_' . Yii::$app->language] . '</a></li>';
                    } else {
                        echo '<li class="dropdown">'
                            . '<a href="#' . $value['link'] . '" >' . $value['title_' . Yii::$app->language] . '</a>';
                        if (isset($value['childs']) && $value['childs']) {
                            echo '<ul class="dropdown-menu">';
                            foreach ($value['childs'] as $key => $v) {
                                echo '<li><a href="' . $v['link'] . '">' . $v['title_' . Yii::$app->language] . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </nav>
    </div>
</div>
<!--end: Navigation-->