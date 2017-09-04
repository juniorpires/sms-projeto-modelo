<?php

use yii\db\Migration;

class m170904_012934_add_user_default extends Migration
{
    public function safeUp()
    {
        $this->insert('user', [
            'id'=>1,
            'username'=>'admin',
            'email'=>'default@email.com',
            'password_hash'=>'$2y$12$keqS763qGtXI2tQT24Td9.eZ.gX7V6ZAHHQtq/vz24sjsAOIDriL.',
            'auth_key'=>'gcSAmnr2ANi-O_vR_EVi5N5pyBSkSRR0',
            'confirmed_at'=>NULL,
            'unconfirmed_email'=>NULL,
            'blocked_at'=>NULL, 
            'registration_ip'=>'::1', 
            'created_at'=>time(),
            'updated_at'=>time(),
            'flags'=>0, 
            'last_login_at'=>NULL
        ]);
    }

    public function safeDown()
    {
        echo "m170904_012934_add_user_default cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170904_012934_add_user_default cannot be reverted.\n";

        return false;
    }
    */
}
