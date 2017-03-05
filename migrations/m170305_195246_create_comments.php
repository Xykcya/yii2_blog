<?php

use yii\db\Migration;

class m170305_195246_create_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer()->notNull(),
            'name' => $this->string(128)->notNull(),
            'email' => $this->text(),
            'content' => $this->text()->notNull(),
            'parent_id' => $this->integer(),
            'date_creating' => $this->dateTime()->notNull()
        ]);
//        $this->createIndex('comment_id_index', 'id', ['post_id', 'tag_id']);

        $this->addForeignKey('fk_post_comment', 'comments', 'post_id', 'post', 'id', 'CASCADE', 'CASCADE');


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_post_comment');
        $this->dropTable('comments');

    }
}
