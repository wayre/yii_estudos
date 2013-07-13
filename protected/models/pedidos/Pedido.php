<?php

/**
 * This is the model class for table "yii_pedidos".
 *
 * The followings are the available columns in table 'yii_pedidos':
 * @property integer $id
 * @property integer $id_cliente
 * @property integer $id_usuario
 * @property string $endereco
 * @property string $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $cep
 * @property string $dt_criacao
 * @property string $dt_alteracao
 *
 * The followings are the available model relations:
 * @property Clientes $idCliente
 * @property Usuarios $idUsuario
 */
class Pedido extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'yii_pedidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, id_usuario, endereco, numero, bairro, cidade, uf, cep', 'required'),
			array('id_cliente, id_usuario', 'numerical', 'integerOnly'=>true),
			array('endereco, bairro, cidade', 'length', 'max'=>60),
			array('numero', 'length', 'max'=>6),
			array('uf', 'length', 'max'=>2),
			array('cep', 'length', 'max'=>10),
			array('dt_criacao, dt_alteracao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_cliente, id_usuario, endereco, numero, bairro, cidade, uf, cep, dt_criacao, dt_alteracao', 'safe', 'on'=>'search'),
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
			'idCliente' => array(self::BELONGS_TO, 'Clientes', 'id_cliente'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuarios', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_cliente' => 'Id Cliente',
			'id_usuario' => 'Id Usuario',
			'endereco' => 'Endereco',
			'numero' => 'Numero',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'uf' => 'Uf',
			'cep' => 'Cep',
			'dt_criacao' => 'Dt Criacao',
			'dt_alteracao' => 'Dt Alteracao',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('uf',$this->uf,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('dt_criacao',$this->dt_criacao,true);
		$criteria->compare('dt_alteracao',$this->dt_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}