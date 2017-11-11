<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Producto`.
 */
class m171110_192608_create_Producto_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Producto', [
            'id' => $this->primaryKey(),
            'codigo' => $this->integer();
            'nombreProducto' => $this->string()->notNull(),
            'presentacion' => $this->text()->notNull(),
            'cantidad' => $this->integer(),
            'precioVenta' => $this->double(),
            'precioCompra' => $this->double(),
            'idProveedor' => $this->integer(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Producto');
    }
}
