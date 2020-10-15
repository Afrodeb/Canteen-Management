<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "credit".
 *
 * @property int $id
 * @property int $student_id
 * @property int $count
 * @property string $created
 */
class Credit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'credit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'count'], 'required'],
            [['student_id', 'count'], 'integer'],
            [['created'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => '',
            'count' => 'Number of plates',
            'created' => 'Created',
        ];
    }
}
