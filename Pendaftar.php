<?php

/**
 * This is the model class for table "pendaftar".
 *
 * The followings are the available columns in table 'pendaftar':
 * @property integer $id_pendaftar
 * @property string $nama
 * @property string $no_induk
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $foto
 *
 * The followings are the available model relations:
 * @property Berkas[] $berkases
 * @property InformasiPendaftar[] $informasiPendaftars
 * @property User $idPendaftar
 * @property Pendaftaran $pendaftaran
 * @property Admin[] $admins
 */
class Pendaftar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pendaftar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pendaftar, nama, no_induk, jenis_kelamin, tempat_lahir, tanggal_lahir, foto', 'required'),
			array('id_pendaftar', 'numerical', 'integerOnly'=>true),
			array('nama, tempat_lahir', 'length', 'max'=>40),
			array('no_induk', 'length', 'max'=>20),
			array('jenis_kelamin', 'length', 'max'=>1),
			array('foto', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pendaftar, nama, no_induk, jenis_kelamin, tempat_lahir, tanggal_lahir, foto', 'safe', 'on'=>'search'),
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
			'berkases' => array(self::HAS_MANY, 'Berkas', 'id_pendaftar'),
			'informasiPendaftars' => array(self::HAS_MANY, 'InformasiPendaftar', 'id_pendaftar'),
			'idPendaftar' => array(self::BELONGS_TO, 'User', 'id_pendaftar'),
			'pendaftaran' => array(self::HAS_ONE, 'Pendaftaran', 'id_pendaftar'),
			'admins' => array(self::MANY_MANY, 'Admin', 'pengelolaan_pendaftar(id_pendaftar, id_admin)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pendaftar' => 'Id Pendaftar',
			'nama' => 'Nama',
			'no_induk' => 'No Induk',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'foto' => 'Foto',
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

		$criteria->compare('id_pendaftar',$this->id_pendaftar);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('no_induk',$this->no_induk,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pendaftar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
