<?php

    namespace common\models;

    use Yii;

    /**
     * This is the model class for table "forbidden_audit".
     *
     * @property integer $id
     * @property string  $table_name
     * @property string  $operation_name
     */
    class ForbiddenAudit extends \yii\db\ActiveRecord
    {
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'forbidden_audit';
        }

        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [
                    [
                        'table_name',
                        'operation_name'
                    ],
                    'required'
                ],
                [
                    [
                        'table_name',
                        'operation_name'
                    ],
                    'string',
                    'max' => 50
                ],
                [
                    [
                        'table_name',
                        'operation_name'
                    ],
                    'unique',
                    'targetAttribute' => [
                        'table_name',
                        'operation_name'
                    ],
                    'message'         => 'The combination of Table Name and Operation Name has already been taken.'
                ]
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'id'             => 'ID',
                'table_name'     => 'Table Name',
                'operation_name' => 'Operation Name',
            ];
        }
    }
