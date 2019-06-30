<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenyalurPenerimaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formulir Penyalur & Penerima';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyalur-penerima-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Daftar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jumlah',
            'tanggal',
            'foto',
            'id_barang',
            'id_petugas',
            'id_penerima',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
