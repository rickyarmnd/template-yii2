<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap\Modal;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$modelClass = StringHelper::basename($generator->modelClass);
$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
$actionParams = $generator->generateActionParams();

echo "<?php\n";

?>
use yii\bootstrap5\Html;
use yii\helpers\Url;

return [
    // [
    //    'class' => 'kartik\grid\CheckboxColumn',
    //    'width' => '20px',
    // ], 
    [
        'class' => 'kartik\grid\SerialColumn',
        'header' => 'No',
        'width' => '30px',
    ],
    <?php
    $count = 0;
    foreach ($generator->getColumnNames() as $name) {   
        if ($name=='id'||$name=='created_at'||$name=='updated_at'){
            echo "    // [\n";
            echo "        // 'class'=>'\kartik\grid\DataColumn',\n";
            echo "        // 'attribute'=>'" . $name . "',\n";
            echo "    // ],\n";
        } else if (++$count < 6) {
            echo "    [\n";
            echo "        'class'=>'\kartik\grid\DataColumn',\n";
            echo "        'attribute'=>'" . $name . "',\n";
            echo "    ],\n";
        } else {
            echo "    // [\n";
            echo "        // 'class'=>'\kartik\grid\DataColumn',\n";
            echo "        // 'attribute'=>'" . $name . "',\n";
            echo "    // ],\n";
        }
    }
    ?>
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'template'=> '<div class="d-flex justify-content-center">{btn_update}{btn_delete}</div>',
        'buttons' => [
            "btn_update" => function ($url, $model, $key) {
                return Html::a('<i class="iconify" data-icon="material-symbols:edit"></i>', ['update', 'id' => $model->id], [
                    'class' => 'btn-action d-flex justify-content-center edit-color me-2',
                    'role' => 'modal-remote',
                    'title' => 'Pilih Produk',
                    'data-toggle' => 'tooltip'
                ]);
            },
            "btn_delete" => function ($url, $model, $key) {
                return Html::a('<i class="iconify" data-icon="material-symbols:delete-outline-rounded"></i>', ['delete', 'id' => $model->id], 
                [
                    'class' => 'btn-action d-flex justify-content-center delete-color',
                    'role' => 'modal-remote', 'title' => 'Hapus',
                    'data-confirm' => false, 'data-method' => false, // for overide yii data api
                    'data-request-method' => 'post',
                    'data-toggle' => 'tooltip',
                    'data-confirm-title' => 'Apakah anda yakin?',
                    'data-confirm-message' => 'Apakah kamu yakin ingin menghapus data ini?'
                ]
            );
            },
        ]
    ],
];   