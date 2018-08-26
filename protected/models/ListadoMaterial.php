<?php

/**
 * This is the model class for table "listado_material".
 *
 * The followings are the available columns in table 'listado_material':
 * @property integer $id_listado
 * @property string $nombre_material
 * @property integer $cantidad_material
 * @property string $nombre_deporte
 *
 * The followings are the available model relations:
 * @property Deporte $nombreDeporte
 * @property Solicitud[] $solicituds
 */
class ListadoMaterial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'listado_material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_material, nombre_deporte', 'required'),
			array('cantidad_material', 'numerical', 'integerOnly'=>true),
			array('nombre_material', 'length', 'max'=>150),
			array('nombre_deporte', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_listado, nombre_material, cantidad_material, nombre_deporte', 'safe', 'on'=>'search'),
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
			'nombreDeporte' => array(self::BELONGS_TO, 'Deporte', 'nombre_deporte'),
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'id_listado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_listado' => 'Id Listado',
			'nombre_material' => 'Material',
			'cantidad_material' => 'Cantidad',
			'nombre_deporte' => 'Deporte',
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

		$criteria->compare('id_listado',$this->id_listado);
		$criteria->compare('nombre_material',$this->nombre_material,true);
		$criteria->compare('cantidad_material',$this->cantidad_material);
		$criteria->compare('nombre_deporte',$this->nombre_deporte,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListadoMaterial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
