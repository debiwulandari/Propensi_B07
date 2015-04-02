<?php
/* @var $this InfoBeritaController */
/* @var $model InfoBerita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_admin'); ?>
		<?php echo $form->textField($model,'id_admin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_info'); ?>
		<?php echo $form->textField($model,'id_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_pos'); ?>
		<?php echo $form->textField($model,'tgl_pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isi_konten'); ?>
		<?php echo $form->textArea($model,'isi_konten',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->