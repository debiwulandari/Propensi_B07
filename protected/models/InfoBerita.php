<?php

/**
 * This is the model class for table "info_berita".
 *
 * The followings are the available columns in table 'info_berita':
 * @property integer $id_admin
 * @property integer $id_info
 * @property string $tgl_pos
 * @property string $judul
 * @property string $isi_konten
 *
 * The followings are the available model relations:
 * @property Admin $idAdmin
 */
class InfoBerita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'info_berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_admin, tgl_pos, judul, isi_konten', 'required'),
			array('id_admin', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_admin, id_info, tgl_pos, judul, isi_konten', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idAdmin' => array(self::BELONGS_TO, 'Admin', 'id_admin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_admin' => 'Id Admin',
			'id_info' => 'Id Info',
			'tgl_pos' => 'Tgl Pos',
			'judul' => 'Judul',
			'isi_konten' => 'Isi Konten',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_admin',$this->id_admin);
		$criteria->compare('id_info',$this->id_info);
		$criteria->compare('tgl_pos',$this->tgl_pos,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('isi_konten',$this->isi_konten,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InfoBerita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
