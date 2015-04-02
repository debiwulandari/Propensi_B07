<?php
/* @var $this InfoBeritaController */
/* @var $model InfoBerita */

$this->breadcrumbs=array(
	'Info Beritas'=>array('index'),
	$model->id_info=>array('view','id'=>$model->id_info),
	'Update',
);

$this->menu=array(
	array('label'=>'List InfoBerita', 'url'=>array('index')),
	array('label'=>'Create InfoBerita', 'url'=>array('create')),
	array('label'=>'View InfoBerita', 'url'=>array('view', 'id'=>$model->id_info)),
	array('label'=>'Manage InfoBerita', 'url'=>array('admin')),
);
?>

<h1>Update InfoBerita <?php echo $model->id_info; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>