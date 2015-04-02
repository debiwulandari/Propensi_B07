<?php
/* @var $this InfoBeritaController */
/* @var $model InfoBerita */

$this->breadcrumbs=array(
	'Info Beritas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InfoBerita', 'url'=>array('index')),
	array('label'=>'Manage InfoBerita', 'url'=>array('admin')),
);
?>

<h1>Create InfoBerita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>