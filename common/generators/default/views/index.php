<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\bootstrap5\Modal;
use yii\helpers\Url;
use yii\bootstrap5\Html;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
echo "<?php\n";
?>
use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset; 
use cangak\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "List <?= StringHelper::basename($generator->modelClass) ?>";
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this); 

?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col">
                    <h3><?="<?= "?>$this->title<?=" ?>"?></h3>
                </div>
                <!-- <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"> Form Controls</li>
                        <li class="breadcrumb-item active"> Validation Forms</li>
                    </ol>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
            <div id="ajaxCrudDatatable">
                <?="<?="?>GridView::widget([
                    'id'=>'crud-datatable',
                    'dataProvider' => $dataProvider,
                    'filterModel' => null,
                    'pjax'=>true,
                    // 'pjaxSettings' => [
                    // 'options' => [
                    // 'enablePushState' => false,
                    // ]
                    //],
                    'columns' => require(__DIR__.'/_columns.php'),
                    'toolbar' => [],
                    'striped' => false,
                    'condensed' => true,
                    'responsive' => true,
                    'export' => false,
                    'panelHeadingTemplate' => '{title}',   
                    'panel' => [
                        'type' => 'light',
                        'heading' => '<div class="d-flex justify-content-between align-items-center">List Pelanggan' . 
                                     Html::a('<div class="d-flex align-items-center"><i class="iconify" data-icon="material-symbols:add"></i> Tambah Pelanggan</div>', ['create'], ['class'=>'btn btn-primary', 'role'=>'modal-remote']) . '</div>',
                        'before' => false,
                        'after' => false
                    ],
                    'panelTemplate' => $this->render('panelTemplate',['searchModel'=>$searchModel]),
                    'pager' => [
                        'prevPageLabel' => '<div class="d-flex align-items-center">
                                            <i class="iconify" data-icon="material-symbols:chevron-left-rounded" style="font-size: 24px;"></i> 
                                            </div>',
                                                    'maxButtonCount' => 5,
                                                    'nextPageLabel' => '
                                            <div class="d-flex align-items-center pl-2">
                                            <i class="iconify" data-icon="material-symbols:chevron-right-rounded" style="font-size: 24px;"></i> 
                                            </div>
                                            ',
                    ],
                    'summary' => 'Menampilkan {end} dari {totalCount} Hasil', 
                ])<?="?>\n"?>
            </div>
        </div>
    </div>
</div>
<?='<?php Modal::begin([
   "options" => [
    "id"=>"ajaxCrudModal",
    "tabindex" => false // important for Select2 to work properly
],
   "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>'."\n"?>
<?='<?php Modal::end(); ?>'?>

