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
    use common\models\Worker;
    use Yii;

    class UserRole
    {
        /**
         * @param      $model \yii\db\ActiveRecord
         * @param      $operation
         * @param bool $hardAccess
         * @internal param bool $hard
         * @return bool
         */
        public static function getAccess($model, $operation, $hardAccess)
        {
            $fieldAccess = false;

            foreach ($model->attributeLabels() as $field => $v) {
                var_dump($field);
                if (!UserRole::can($model::tableName(), $field, $operation)) {
                    if ($hardAccess) {
                        return false;
                    }
                } else {
                    $fieldAccess = true;
                }
            }

            if ($hardAccess) {
                return true;
            }

            return $fieldAccess;
        }

        public static function can($tableName, $fieldName, $operation)
        {
            $id = Yii::$app->user->id;
            $role = User::findOne(['id' => $id])->role;
            $role_id = Role::findOne(['name' => $role])->id;

            if ($role == 'admin') {
                return true;
            }

            foreach (RolePermission::findAll(['role_id' => $role_id]) as $permission) {

                /* @var $perm Permission */
                $perm = Permission::findOne(['id' => $permission->permission_id]);
                if (!is_null($perm)) {
                    if ($perm->table_name == $tableName && $perm->field_name == $fieldName &&
                        $perm->operation_name == $operation
                    ) {
                        return true;
                    }
                }
            }

            return false;
        }

        /**
         * @param $render string
         * @param $model  \yii\db\ActiveRecord
         * @param $action string
         * @return string
         */
        public static function getRender($render, $model, $action)
        {
            if (User::findOne(['id' => Yii::$app->user->id])->role == 'admin') {
                return $render;
            }

            foreach ($model->fields() as $field) {
                if (($action != 'update' && $field != 'id')) {
                    if (!UserRole::can($model::tableName(), $field, $action)) {
                        $str = '<div class="form-group field-' . $model::tableName() . '-' . $field;
                        $marker = strpos($render, $str);
                        $unAccessible = substr($render, $marker,
                                               strpos($render, '<div', $marker + strlen($str)) - $marker);
                        $render = str_replace($unAccessible, '', $render);
                    }
                }
            }

            return $render;
        }

        /**
         * @param $attributes
         * @param $model      \yii\db\ActiveRecord
         * @return array $result
         */
        public static function getAttributes($attributes, $model)
        {
            $result = [];
            $action = 'select';
            if (User::findOne(['id' => Yii::$app->user->id])->role == 'admin') {
                return $attributes;
            }

            foreach ($attributes as $attribute) {
                if (is_string($attribute)) {
                    if (UserRole::can($model::tableName(), $attribute, $action)) {
                        $result [] = $attribute;
                    }
                } else {
                    $result [] = $attribute;
                }
            }
            return $result;
        }
    }