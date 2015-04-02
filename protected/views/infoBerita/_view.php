<?php
/* @var $this InfoBeritaController */
/* @var $data InfoBerita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_info')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_info), array('view', 'id'=>$data->id_info)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_admin')); ?>:</b>
	<?php echo CHtml::encode($data->id_admin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_pos')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_pos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_konten')); ?>:</b>
	<?php echo CHtml::encode($data->isi_konten); ?>
	<br />


</div>