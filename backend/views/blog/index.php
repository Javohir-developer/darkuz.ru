<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php $form = ActiveForm::begin(['action' => '../blog/create', 'options' => ['method' => 'post', 'enctype' => 'multipart/form-data']]); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Title_uz</label>
                            <input name="title_uz" type="text" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>About_uz</label>
                            <textarea name="about_uz" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Title_ru</label>
                            <input name="title_ru" type="text" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>About_ru</label>
                            <textarea name="about_ru" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Title_en</label>
                            <input name="title_en" type="text" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>About_uz</label>
                            <textarea name="about_en" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <label>Images</label>
                        <div class="custom-file">
                            <input required="" name="Blog[file]" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="exampleInputFile3">Faylni tanlang</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Select</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Passive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-danger"> Yuborish</button>
            <?php ActiveForm::end(); ?>
        </div>
        <!-- /.card-body -->
    </div>
</div>