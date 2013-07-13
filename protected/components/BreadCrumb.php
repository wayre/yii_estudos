<?php
class BreadCrumb extends CWidget {
 
	public $tagName=array('div', 'ul');
	public $htmlOptions=array();
	public $htmlOptions2=array('class'=>'breadcrumb');
	public $encodeLabel=true;
	public $homeLink;
	public $links=array();
	public $separator='';
	public $zindex=9;	
	
	public function run()
	{
		if(empty($this->links))
			return;
	
		echo CHtml::openTag($this->tagName[0],$this->htmlOptions)."\n";
		echo CHtml::openTag($this->tagName[1],$this->htmlOptions2)."\n";
		$links=array();
	
		if($this->homeLink===null)
			$links[]='<li>'.CHtml::link(Yii::t('zii','Home'),Yii::app()->homeUrl, array('style'=>'z-index:'.$this->zindex,'class'=>'icon-home')).'</li>';
		else if($this->homeLink!==false)
			$links[]='<li><a>'.$this->homeLink.'</a></li>';
		foreach($this->links as $label=>$url)
		{
			$this->zindex--;
			if(is_string($label) || is_array($url))
				$links[]='<li>'.CHtml::link($this->encodeLabel ? CHtml::encode($label) : $label, $url, array('style'=>'z-index:'.$this->zindex)).'</li>';
			else
				$links[]='<li><a>'.($this->encodeLabel ? CHtml::encode($url) : $url).'</a></li>';
		}
		echo implode($this->separator,$links);
		echo CHtml::closeTag($this->tagName[1]);
		echo CHtml::closeTag($this->tagName[0]);
	}
}
?>