<?php

namespace app\components; 
use yii\i18n\Formatter;

class myformatter extends Formatter {
    public function init() {
        if ($this->nullDisplay === null) {
            $this->nullDisplay = '<span class="not-set">' . \Yii::t('app', '(not set)', [], $this->locale) . '</span>';
        parent::init();
        }
    }
}

?>