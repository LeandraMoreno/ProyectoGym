<?php 
include 'Nombre.php';
/**
 * This is the model class for table "solicitud".
 *
 * The followings are the available columns in table 'solicitud':
 * @property integer $id_solicitud
 * @property string $fecha_solicitud
 * @property string $rut_estudiante
 * @property string $nombre_estudiante
 * @property string $carrera
 * @property string $nombre_deporte
 * @property integer $id_listado
 * @property string $nombre_material
 * @property integer $cantidad_solicitud
 * @property integer $num_participantes
 * @property string $nombre_recinto
 *
 * The followings are the available model relations:
 * @property Carrera $carrera0
 * @property ListadoMaterial $idListado
 */
class Solicitud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud';
	}


	/**
    *@return funcion validarNombre. Para que el archivo acepte 'letras' y 'no numeros'.
    */
    public function valNom($attribute, $params)
    {
        if(nombreValido($this->nombre_estudiante)==false)
            $this->addError('nombre_estudiante','Nombre invalido');
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_solicitud, rut_estudiante, nombre_estudiante, carrera, nombre_deporte, nombre_material, cantidad_solicitud, num_participantes, nombre_recinto', 'required'),
			array('id_listado, cantidad_solicitud, num_participantes', 'numerical', 'integerOnly'=>true),
			array('rut_estudiante', 'length', 'max'=>10),
			array('nombre_estudiante', 'length', 'max'=>90),
			array('carrera, nombre_material', 'length', 'max'=>150),
			array('nombre_deporte', 'length', 'max'=>60),
			array('nombre_recinto', 'length', 'max'=>145),

			array('nombre_estudiante','valNom'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_solicitud, fecha_solicitud, rut_estudiante, nombre_estudiante, carrera, nombre_deporte, id_listado, nombre_material, cantidad_solicitud, num_participantes, nombre_recinto', 'safe', 'on'=>'search'),

			array('rut_estudiante','validateRut'),
		);
	}



		/**
	 *	Funcion para Validar Rut.
	*/
    public function validateRut($attribute, $params) {
        $data = explode('-', $this->rut_estudiante);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('rut_estudiante', 'Rut inválido (Ejemplo: "12345678-5").');
    }


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'carrera0' => array(self::BELONGS_TO, 'Carrera', 'carrera'),
			'idListado' => array(self::BELONGS_TO, 'ListadoMaterial', 'id_listado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_solicitud' => 'Id Solicitud',
			'fecha_solicitud' => 'Fecha Solicitud',
			'rut_estudiante' => 'Rut Estudiante',
			'nombre_estudiante' => 'Nombre Estudiante',
			'carrera' => 'Carrera',
			'nombre_deporte' => 'Nombre Deporte',
			'id_listado' => 'Id Listado',
			'nombre_material' => 'Nombre Material',
			'cantidad_solicitud' => 'Cantidad Solicitud',
			'num_participantes' => 'Num Participantes',
			'nombre_recinto' => 'Nombre Recinto',
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
		$sort = new CSort; 

		$criteria->compare('id_solicitud',$this->id_solicitud);
		$criteria->compare('fecha_solicitud',$this->fecha_solicitud,true);
		$criteria->compare('rut_estudiante',$this->rut_estudiante,true);
		$criteria->compare('nombre_estudiante',$this->nombre_estudiante,true);
		$criteria->compare('carrera',$this->carrera,true);
		$criteria->compare('nombre_deporte',$this->nombre_deporte,true);
		$criteria->compare('id_listado',$this->id_listado);
		$criteria->compare('nombre_material',$this->nombre_material,true);
		$criteria->compare('cantidad_solicitud',$this->cantidad_solicitud);
		$criteria->compare('num_participantes',$this->num_participantes);
		$criteria->compare('nombre_recinto',$this->nombre_recinto,true);

		//busqueda total de "solicitud" y asigna una variable de sesion
		$_SESSION['datos_filtrados']=new CActiveDataProvider ($this,array(
        'criteria'=>$criteria,
        'sort'=>$sort,
        'pagination'=>false,
        ));
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solicitud the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
