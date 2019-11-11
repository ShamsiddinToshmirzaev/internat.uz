<?php

namespace frontend\controllers;

use abdualiym\cms\entities\Articles;
//use backend\models\Contacts;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class BlogController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider' => new ActiveDataProvider([
                'query' => Articles::find()->orderBy('id DESC'),
                'pagination' => [
                    'pageSize' => 1
                ]
            ])
        ]);
    }


    public function actionView($alias)
    {
        $article = Articles::findOne(['alias' => $alias]);
        if (!$article) {
            throw new NotFoundHttpException( Yii::t('app','The requested page does not exist.'), 404);
        }

        return $this->render('view', [
            'article' => $article
        ]);
    }


    public function actionSearch($query)
    {
        return $this->render('index', [
            'dataProvider' => new ActiveDataProvider([
                'query' => Articles::find(),
                'pagination' => [
                    'pageSize' => 1
                ]
            ])
        ]);
    }
}