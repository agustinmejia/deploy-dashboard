<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class TagsFormField extends AbstractHandler
{
    protected $codename = 'tags';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('vendor.voyager.formfields.tags', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}