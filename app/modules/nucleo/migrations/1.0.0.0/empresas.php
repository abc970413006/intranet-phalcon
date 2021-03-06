<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class EmpresasMigration_1000
 */
class EmpresasMigration_1000 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('empresas', array(
                'columns' => array(
                    new Column(
                        'id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'codigo',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'id'
                        )
                    ),
                    new Column(
                        'cnpj',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'codigo'
                        )
                    ),
                    new Column(
                        'razaoSocial',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 105,
                            'after' => 'cnpj'
                        )
                    ),
                    new Column(
                        'nomeFantasia',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 105,
                            'after' => 'razaoSocial'
                        )
                    ),
                    new Column(
                        'codProtheus',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'nomeFantasia'
                        )
                    ),
                    new Column(
                        'lojaProtheus',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 5,
                            'after' => 'codProtheus'
                        )
                    ),
                    new Column(
                        'sdel',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'lojaProtheus'
                        )
                    ),
                    new Column(
                        'createBy',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'sdel'
                        )
                    ),
                    new Column(
                        'createIn',
                        array(
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'createBy'
                        )
                    ),
                    new Column(
                        'updateBy',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 45,
                            'after' => 'createIn'
                        )
                    ),
                    new Column(
                        'updateIn',
                        array(
                            'type' => Column::TYPE_DATETIME,
                            'size' => 1,
                            'after' => 'updateBy'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id'), null)
                ),
                'options' => array(
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '6',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'latin1_swedish_ci'
                ),
            )
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
