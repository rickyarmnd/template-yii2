<?php
echo "<?php\n";
?>
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$appendBtn =  '<button class="btn btn-primary d-flex" type="button" id="button-addon2"><i class="iconify" data-icon="material-symbols:search"></i></button>';
<?= "?>\n" ?>
<div class="panel {type}">
    {panelHeading}
    {panelBefore}
    <div class="px-4 pt-4">
        <?="<?php";?> $form = ActiveForm::begin(['method'=>'get', 'options'=>['class'=>'d-flex','data-pjax'=>"1"]]); <?="?>"?> 
            <?="<?="?> $form->field($searchModel, 'cari',['template' => ('{input}{error}' . $appendBtn),'options'=>['class'=>'input-group mb-4']])
                 ->textInput(['maxlength' => true,
                              'placeholder' => 'Cari...',
                              'style'=>'border: 1px solid var(--main-color);'])
                 ->label(false) <?="?>"?> 

            <?="<?="?> Html::submitButton('<i class="iconify me-2" data-icon="material-symbols:tune-rounded"></i>Filter', ['class' => 'btn btn-primary ms-3 d-flex align-items-center','style'=>'height:39px']) <?="?>"?> 
        <?="<?php";?> ActiveForm::end(); ?>
        {items}
    </div>
</div>
<div class="d-flex justify-content-between px-4 py-3 align-items-center bg-footer">
    <div class="text-muted">{summary}</div>
    <div class="px-2">{pager}</div>
</div>
</div>