<?php

use yii\db\Migration;

/**
 * Handles the creation of table `proveedor`.
 */
class m171110_165853_create_proveedor_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('proveedor', [
            'idProveedor' => $this->primaryKey(),
            'nombreProveedor' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('proveedor');
    }
}
