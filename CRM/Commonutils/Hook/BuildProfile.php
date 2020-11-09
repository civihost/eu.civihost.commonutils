<?php

class CRM_Commonutils_Hook_BuildProfile
{

    private $profileName;


    /**
     * CRM_commonutils_Hook_BuildForm constructor.
     *
     * @param $profileName
     */
    public function __construct($profileName)
    {
        $this->profileName = $profileName;
    }

    public function run()
    {
        if (method_exists($this, $this->profileName)) {
            $this->{$this->profileName}();
        }
    }

}
