<?php
/* @var $this InfoBeritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Info Beritas',
);

$this->menu=array(
	array('label'=>'Create InfoBerita', 'url'=>array('create')),
	array('label'=>'Manage InfoBerita', 'url'=>array('admin')),
);
?>

<h1>Info Beritas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
