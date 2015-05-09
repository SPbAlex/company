<?php
    /**
     * Created by PhpStorm.
     * User: Alex
     * Date: 26.04.2015
     * Time: 20:22
     */

    namespace console\perm;

    use Yii;
    use common\models\Audit;
    use common\models\ForbiddenAudit;

    class AuditTable
    {
        public static function listen($userId, $tableName, $operation)
        {
            if (is_null(ForbiddenAudit::findOne(['table_name'     => $tableName, 'operation_name' => $operation]))) {
                $record = new Audit();
                $data = [
                    'user_id'        => $userId,
                    'table_name'     => $tableName,
                    'operation_name' => $operation,
                    'date'           => (String)time()
                ];
                $record->setAttributes($data);
                $record->save();
            }
        }
    }