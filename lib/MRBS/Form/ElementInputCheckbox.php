<?php

namespace MRBS\Form;

class ElementInputCheckbox extends ElementInput
{

  public function __construct()
  {
    parent::__construct('div');

    $this->setAttribute('type', 'checkbox');
  }

}
