<?php

namespace frontend\widgets;

use abdualiym\cms\entities\Pages;
use frontend\models\Catalogs;
use Yii;
use yii\jui\Widget;
use yii\web\HttpException;

/**
 *
 * @property mixed $_menu_array
 */
class Menu extends Widget {

    /**
     * @var string the body content in the alert component. Note that anything between
     * the [[begin()]] and [[end()]] calls of the Alert widget will also be treated
     * as the body content, and will be rendered before this.
     */
    public $body;

    /**
     * Initializes the widget.
     */
    public function init() {
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run() {
        $menu = $this->get_menu_array();
        $menu_tree = $this->map_tree($menu);

//        $menu_li_style = $this->menu_style($menu_tree);
        return $this->render('menu_template', [
            'menu' => $menu_tree,
//                    'menu_style' => $menu_li_style
        ]);
    }

    /**
     * Получение массива для создания дерева для меню
     * */
    private function get_menu_array() {
        $current_lang = Catalogs::getCurrent();
        $res = Yii::$app->db->createCommand('SELECT id, parent, is_in_top_menu, alias, type, action, link, title FROM pages WHERE `lang_id` = \'' . $current_lang->id . '\' ORDER BY position')->queryAll();
        foreach ($res as $r) {
            $arr[$r['id']] = $r;
        }
        return $arr;
    }

    /**
     * Построение дерева
     * */
    private function map_tree($dataset) {

        $tree = array();

        foreach ($dataset as $id => &$node) {
//            $breadcrumbs = "";
//            $breadcrumbs_array = $this->breadcrumbs($dataset, $id);
//            foreach ($breadcrumbs_array as $alias) {
//                $breadcrumbs .= "/" . $alias;
//            }
            $l = Catalogs::getCurrent();
// $node['link'] = trim($breadcrumbs, '/');
            if ($node['type'] == Pages::TYPE_ACTION) {
                $node['link'] = '/' . $l->url . '/' . ($node['action'] == '/' ? '' : $node['action']);
            } elseif ($node['type'] == Pages::TYPE_CROSSING) {
                $node['link'] = '/' . $l->url . '/' . mb_strtolower($node['alias']);####NOT READY
            } elseif ($node['type'] == Pages::TYPE_LINK) {
                $node['link'] = mb_strtolower($node['link']);
            } elseif (in_Array($node['type'], [2, 5, 6, 7, 8, 9])) {
                $node['link'] = '/' . $l->url . '/' . mb_strtolower($node['alias']) . ($node['type'] == 8 ? '/gallery' : ($node['type'] == 7 ? '/article' : ''));
            } else {
                $node['link'] = '/' . $l->url . '/#'; //throw new HttpException('Internal error occured.');
            }

            if ($node['is_in_top_menu'] == 1) {
                if (!$node['parent'] or ( /* $node['top'] and */!$dataset[$node['parent']]['is_in_top_menu'])) {
                    $tree[$id] = &$node;
                } else {
                    $dataset[$node['parent']]['childs'][$id] = &$node;
                }
            }
        }
//        echo '<pre>'.print_r($tree,true);e    xit;
        return $tree;
    }

    /**
     * Шаблон вывода категорий
     * */
//    private function menu_style($data) {
//    		$l = Lang::getCurrent();
//    		//$l->id ==1 uz            ==2 ru        ==3 en
//        foreach ($data as $key => $item) {
//            if ($item['parent'] == 0) {
//                $len = function_exists('mb_strlen') ? mb_strlen($item['title']) : strlen($item['title']);
//                if($l->id == 1){
//	                if ($len > 15) {
//	                    $str[$key] = $len;
//	                } elseif ($len > 12) {
//	                    $str[$key] = $len + 1;
//	                } elseif ($len > 8) {
//	                    $str[$key] = $len + 2;
//	                } elseif ($len > 4) {
//	                    $str[$key] = $len + 3;
//	                } else {
//	                    $str[$key] = $len + 4;
//	                }
//                } else{
//	                if ($len > 32) {
//	                    $str[$key] = $len;
//	                } elseif ($len > 28) {
//	                    $str[$key] = $len + 1;
//	                } elseif ($len > 24) {
//	                    $str[$key] = $len + 2;
//	                } elseif ($len > 20) {
//	                    $str[$key] = $len + 3;
//	                } elseif ($len > 16) {
//	                    $str[$key] = $len + 4;
//	                } elseif ($len > 12) {
//	                    $str[$key] = $len + 5;
//	                } else {
//	                    $str[$key] = $len + 8;
//	                }
//               // echo '-'.$str[$key];
//                }
//            }
//        }
//        $sum = array_sum($str);
//        $percent = (floor(9900 / $sum)) / 100;
//        $result = "<style type='text/css'>";
//        foreach ($data as $key => $item) {
//            $result .= "#li" . $key . "{width:" . ($str[$key] * $percent) . "%;}";
//        }
//        return $result . '</style>';
//    }

    /**
     * Хлебные крошки
     * */
//    private function breadcrumbs($array, $id = 1) {
//        if (!$id) {
//            return false;
//        }
//
//        $count = count($array);
//        $breadcrumbs_array = array();
//        for ($i = 0; $i < $count; $i++) {
//            if (isset($array[$id])) {
//                $breadcrumbs_array[$array[$id]['alias']] = $array[$id]['title'];
//                $id = $array[$id]['parent'];
//            } else {
//                break;
//            }
//        }
//        return array_reverse($breadcrumbs_array, true);
//    }

}