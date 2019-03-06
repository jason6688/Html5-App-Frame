<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work_book".
 *
 * @property int $id
 * @property string $title
 * @property string $row_record
 * @property string $author
 * @property string $Ymd
 * @property int $is_use 逻辑删除，默认1启用，0禁用
 * @property string $add_time
 * @property string $update_time
 */
class WorkBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['row_record', 'author', 'Ymd'], 'required'],
            [['Ymd', 'add_time', 'update_time'], 'safe'],
            [['is_use'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['row_record'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 30],
            [['row_record', 'author', 'Ymd'], 'unique', 'targetAttribute' => ['row_record', 'author', 'Ymd']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'row_record' => 'Row Record',
            'author' => 'Author',
            'Ymd' => 'Ymd',
            'is_use' => 'Is Use',
            'add_time' => 'Add Time',
            'update_time' => 'Update Time',
        ];
    }
}
