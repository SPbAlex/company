<?php

    namespace common\models;

    use Yii;

    /**
     * This is the model class for table "audit".
     *
     * @property integer $id
     * @property integer $user_id
     * @property string  $table_name
     * @property string  $operation_name
     * @property string  $date
     */
    class Audit extends \yii\db\ActiveRecord
    {
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'audit';
        }

        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [
                    [
                        'user_id',
                        'table_name',
                        'operation_name',
                        'date'
                    ],
                    'required'
                ],
                [
                    ['user_id'],
                    'integer'
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
                    ['date'],
                    'string',
                    'max' => 12
                ],
                [
                    [
                        'user_id',
                        'table_name',
                        'operation_name',
                        'date'
                    ],
                    'unique',
                    'targetAttribute' => [
                        'user_id',
                        'table_name',
                        'operation_name',
                        'date'
                    ],
                    'message'         => 'The combination of User ID, Table Name, Operation Name and Date has already been taken.'
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
                'user_id'        => 'User ID',
                'table_name'     => 'Table Name',
                'operation_name' => 'Operation Name',
                'date'           => 'Date',
            ];
        }
    }
