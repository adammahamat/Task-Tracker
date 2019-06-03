<?php

namespace app\models;
use Yii;
use yii\base\Model;

class ImageUpload extends Model {

    public $image;

    public function uploadfile(ImageUpload $file) {
        $file->saveAs(yii::getAlias('@web').'uploads/'.$file->name);
    }

}
