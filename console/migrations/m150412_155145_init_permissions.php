<?php

    use common\models\Permission;
    use common\models\Role;
    use yii\db\Schema;
    use yii\db\Migration;

    class m150412_155145_init_permissions extends Migration
    {
        private $tables
            = [
                'worker',
                'salary',
                'position',
            ];
        private $operations
            = [
                'select',
                'update',
                'insert',
                'delete'
            ];
        private $fields
            = [
                'worker'   => [
                    'id',
                    'first_name',
                    'last_name',
                ],
                'salary'   => [
                    'id',
                    'worker_id',
                    'salary'
                ],
                'position' => [
                    'id',
                    'worker_id',
                    'position',
                ],
            ];

        public function up()
        {
            foreach ($this->operations as $operation) {
                foreach ($this->tables as $table) {
                    foreach ($this->fields[$table] as $field) {
                        $this->insert('permission',
                                      [
                                          'table_name'     => $table,
                                          'field_name'     => $field,
                                          'operation_name' => $operation
                                      ]);
                    }
                }
            }

            $this->upOperator();
            $this->upSecAdmin();
            $this->upManager();
            $this->upDirector();
        }

        public function down()
        {
            $this->delete('role_permission');
            $this->delete('permission');
        }

        private function upOperator()
        {
            $id = Role::findOne(['name' => 'operator'])->id;
            foreach ($this->tables as $table) {
                foreach ($this->fields[$table] as $field) {
                    $this->insert('role_permission', [
                        'role_id'       => $id,
                        'permission_id' => Permission::findOne([
                                                                   'table_name'     => $table,
                                                                   'field_name'     => $field,
                                                                   'operation_name' => 'select'
                                                               ])->id
                    ]);
                }
            }
        }

        private function upSecAdmin()
        {
            $tables = [
                'worker',
                'position',
            ];

            $id = \common\models\Role::findOne(['name' => 'sec_admin'])->id;
            foreach ($tables as $table) {
                foreach ($this->fields[$table] as $field) {
                    foreach ($this->operations as $operation) {
                        $this->insert('role_permission', [
                            'role_id'       => $id,
                            'permission_id' => \common\models\Permission::findOne([
                                                                                      'table_name'     => $table,
                                                                                      'field_name'     => $field,
                                                                                      'operation_name' => $operation,
                                                                                  ])->id
                        ]);
                    }
                }
            }
        }

        private function upManager()
        {
            $tables = [
                'worker',
                'salary',
            ];

            $operations = [
                'select',
                'update',
            ];

            $id = Role::findOne(['name' => 'manager'])->id;

            foreach ($tables as $table) {
                foreach ($this->fields[$table] as $field) {
                    foreach ($operations as $operation) {
                        $this->insert('role_permission', [
                            'role_id'       => $id,
                            'permission_id' => Permission::findOne([
                                                                       'table_name'     => $table,
                                                                       'field_name'     => $field,
                                                                       'operation_name' => $operation,
                                                                   ])->id,
                        ]);
                    }
                }
            }
        }

        private function upDirector()
        {
            $id = \common\models\Role::findOne(['name' => 'director'])->id;
            foreach ($this->tables as $table) {
                foreach ($this->fields[$table] as $field) {
                    foreach ($this->operations as $operation) {
                        $this->insert('role_permission', [
                            'role_id'       => $id,
                            'permission_id' => \common\models\Permission::findOne([
                                                                                      'table_name'     => $table,
                                                                                      'field_name'     => $field,
                                                                                      'operation_name' => $operation,
                                                                                  ])->id
                        ]);
                    }
                }
            }
        }
    }