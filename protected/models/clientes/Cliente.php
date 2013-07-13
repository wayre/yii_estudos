<?php

/**
 * This is the model class for table "yii_clientes".
 *
 * The followings are the available columns in table 'yii_clientes':
 * @property integer $id
 * @property integer $id_tipo
 * @property integer $id_usuario
 * @property string $nome
 * @property string $email
 * @property string $endereco
 * @property string $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $cep
 * @property string $cnpj
 * @property string $cpf
 * @property string $dt_criacao
 * @property string $dt_alteracao
 *
 * The followings are the available model relations:
 * @property Usuarios $idUsuario
 * @property ClienteTipos $idTipo
 * @property Pedidos[] $pedidoses
 */
class Cliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
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
		return 'yii_clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo, id_usuario, nome, email, endereco, numero, bairro, cidade, uf, cep', 'required'),
			array('id_tipo, id_usuario', 'numerical', 'integerOnly'=>true),
			array('nome, email, endereco, bairro, cidade', 'length', 'max'=>60),
			array('numero', 'length', 'max'=>6),
			array('uf', 'length', 'max'=>2),
			array('cep', 'length', 'max'=>10),
			array('cnpj', 'length', 'max'=>18),
			array('cpf', 'length', 'max'=>14),
			array('dt_criacao, dt_alteracao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_tipo, id_usuario, nome, email, endereco, numero, bairro, cidade, uf, cep, cnpj, cpf, dt_criacao, dt_alteracao', 'safe', 'on'=>'search'),
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
			'idUsuario' => array(self::BELONGS_TO, 'Usuarios', 'id_usuario'),
			'idTipo' => array(self::BELONGS_TO, 'ClienteTipos', 'id_tipo'),
			'pedidoses' => array(self::HAS_MANY, 'Pedidos', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_tipo' => 'Id Tipo',
			'id_usuario' => 'Id Usuario',
			'nome' => 'Nome',
			'email' => 'Email',
			'endereco' => 'Endereco',
			'numero' => 'Numero',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'uf' => 'Uf',
			'cep' => 'Cep',
			'cnpj' => 'Cnpj',
			'cpf' => 'Cpf',
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
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('uf',$this->uf,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('dt_criacao',$this->dt_criacao,true);
		$criteria->compare('dt_alteracao',$this->dt_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}