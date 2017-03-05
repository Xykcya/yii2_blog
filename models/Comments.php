<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $post_id
 * @property string $name
 * @property string $content
 * @property integer $parent_id
 * @property string $date_created
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_created'],
                ],
                'value' => new Expression('NOW()'),
            ]
        ];
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'content', 'name'], 'required'],
            [['post_id', 'parent_id'], 'integer'],
            [['content', 'name'], 'string'],
            [['date_created'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'name' => 'Name',
            'content' => 'Content',
            'parent_id' => 'Parent ID',
            'date_created' => 'Date Created',
        ];
    }

    /**
     * @inheritdoc
     * @return CommentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommentsQuery(get_called_class());
    }

    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id']);
    }
}
