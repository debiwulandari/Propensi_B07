<?php
/* @var $this InfoBeritaController */
/* @var $model InfoBerita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'info-berita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_admin'); ?>
		<?php echo $form->textField($model,'id_admin'); ?>
		<?php echo $form->error($model,'id_admin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_pos'); ?>
		<?php echo $form->textField($model,'tgl_pos'); ?>
		<?php echo $form->error($model,'tgl_pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>
	
	<div class="tinymce">
		<?php echo $form->labelEx($model,'isi_konten'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model'=>$model,
            'attribute'=>'isi_konten',
            'editorTemplate'=>'full',
			'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),
        ));
		?>
		<?php echo $form->error($model,'isi_konten'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->