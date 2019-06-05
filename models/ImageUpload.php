<?php

namespace app\models;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model {

    public $image;

    public function uploadfile(UploadedFile $file) {

        $file->saveAs(yii::getAlias('@web').'uploads/'.$file->name);
    }

}
