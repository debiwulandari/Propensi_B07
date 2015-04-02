<?php
/* @var $this InfoBeritaController */
/* @var $model InfoBerita */

$this->breadcrumbs=array(
	'Info Beritas'=>array('index'),
	$model->id_info,
);

$this->menu=array(
	array('label'=>'List InfoBerita', 'url'=>array('index')),
	array('label'=>'Create InfoBerita', 'url'=>array('create')),
	array('label'=>'Update InfoBerita', 'url'=>array('update', 'id'=>$model->id_info)),
	array('label'=>'Delete InfoBerita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_info),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InfoBerita', 'url'=>array('admin')),
);
?>

<h1>View InfoBerita #<?php echo $model->id_info; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_admin',
		'id_info',
		'tgl_pos',
		'judul',
		'isi_konten',
	),
)); ?>
