<?php

class CRM_commonutils_Hook_PreProcess
{

    private $form;
    private $formName;


    /**
     * CRM_commonutils_Hook_BuildForm constructor.
     *
     * @param $formName
     * @param \CRM_Core_Form $form
     */
    public function __construct($formName, \CRM_Core_Form &$form)
    {
        $this->form = &$form;
        $this->formName = $formName;
    }

    public function run()
    {
        if (method_exists($this, $this->formName)) {
            $this->{$this->formName}();
        }
    }

    /**
     *
     */
    private function CRM_Contribute_Form_Contribution()
    {
        $this->form->_softCreditItemCount = 251;
    }
}
