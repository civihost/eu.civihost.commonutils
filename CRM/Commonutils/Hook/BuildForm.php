<?php

class CRM_commonutils_Hook_BuildForm
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
        //echo $this->formName;
        if (method_exists($this, $this->formName)) {
            $this->{$this->formName}();
        }
    }

    /**
     *
     */
    private function CRM_Event_Form_Registration_Register()
    {
        CRM_Core_Resources::singleton()->addScript("CRM.$('.crm-not-you-message').hide();");
    }
}
