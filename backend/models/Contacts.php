<?php

namespace backend\models;


//use common\models\Telegram;
use Yii;
use yii\db\ActiveRecord;
use yii\helpers\Html;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $phone
 * @property string $message
 * @property int $created_at
 */
class Contacts extends \yii\db\ActiveRecord
{
    public $verifyCode;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email','phone', 'message'], 'required'],
            [['message'], 'string'],
            [['email'] , 'email'],
            [['name', 'email', 'phone'], 'string', 'max' => 50],
//            ['verifyCode', 'captcha', 'captchaAction' => 'site/captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'message' => Yii::t('app', 'Message'),
            'created_at' => Yii::t('app', 'Created At'),
//            'verifyCode' => Yii::t('app', 'Verify Code'),
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
            ],
        ];
    }

//    public function afterSave($insert, $changedAttributes)
//    {
//        if ($insert) {
//            $text = "Murojaat qoldirildi! \n" .
//                "FIO: " . $this->full_name . "\n" .
//                "Email/Telefon: " . $this->email_phone . "\n" .
//                "Matn:" . $this->message;
//
//            (new Telegram($text))->sendMessage();
//        }
//        parent::afterSave($insert, $changedAttributes);
//    }
}