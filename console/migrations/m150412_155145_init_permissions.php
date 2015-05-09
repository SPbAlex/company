<?php

    use yii\db\Schema;
    use yii\db\Migration;

    class m150412_155145_init_permissions extends Migration
    {
        public function up()
        {
            $operations = [
                'select',
                'update',
                'insert',
                'delete'
            ];
            $fields = [
                'first_name',
                'last_name',
                'salary'
            ];

            foreach ($operations as $operation) {
                foreach ($fields as $field) {
                    $this->insert('permission',
                                  [
                                      'table_name'     => 'worker',
                                      'field_name'     => $field,
                                      'operation_name' => $operation
                                  ]);

                }
            }

            $operatorId = \common\models\Role::findOne(['name' => 'operator'])->id;
            foreach ($fields as $field) {
                $this->insert('role_permission', [
                    'role_id'       => $operatorId,
                    'permission_id' => \common\models\Permission::findOne([
                                                                              'table_name'     => 'worker',
                                                                              'field_name'     => $field,
                                                                              'operation_name' => 'select'
                                                                          ])->id

                ]);

            }
        }

        public function down()
        {
            echo "m150412_155145_init_permissions cannot be reverted.\n";
        }

        /*
        // Use safeUp/safeDown to run migration code within a transaction
        public function safeUp()
        {
        }

        public function safeDown()
        {
        }
        */
    }
