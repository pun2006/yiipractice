<?php

namespace app\components; 
use yii\i18n\Formatter;

class gridNullFormat extends Formatter {
    public function init() {
        if ($this->nullDisplay === null) {
            $this->nullDisplay = '<span class="not-set">' . \Yii::t('app', '(no data)', [], $this->locale) . '</span>';
        parent::init();
        }
    }
}

?>