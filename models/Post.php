<?php

namespace app\models;


use yii\db\ActiveRecord;

class Post extends ActiveRecord
{

//    private $id;
//    public $content;
//    public $dateCreated;
//    public $dateModified;


    public function rules()
    {
        return [
            // the name, email, subject and body attributes are required
            [[ 'title' ,'content', 'date_created', 'date_modified'], 'required']

        ];
    }

    /**
    * @return string the name of the table associated with this ActiveRecord class.
    */
    public static function tableName()
    {
        return '{{post}}';
    }



}