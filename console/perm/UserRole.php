<?php
    /**
     * Created by PhpStorm.
     * User: Alex
     * Date: 12.04.2015
     * Time: 19:19
     */

    namespace console\perm;


    use common\models\Permission;
    use common\models\Role;
    use common\models\RolePermission;
    use common\models\User;
    use Yii;

    class UserRole
    {
        private $id;
        private $role_id;
        private $role;

        public function __construct()
        {
            $this->id = Yii::$app->user->id;
            $this->role = User::findOne(['id' => $this->id])->role;
            $this->role_id = Role::findOne(['name' => $this->role])->id;
        }

        public function can($tableName, $fieldName, $operation)
        {
            if ($this->role == 'admin') {
                return true;
            }

            foreach (RolePermission::findAll(['role_id' => $this->role_id]) as $permission) {
                /* @var $perm Permission */
                $perm = Permission::findOne(['id' => $permission->id]);
                if ($perm->table_name == $tableName && $perm->field_name == $fieldName &&
                    $perm->operation_name == $operation
                ) {
                    return true;
                }
            }

            return false;
        }


        public function __toString()
        {
            return (String)$this->id;
        }
    }