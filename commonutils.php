<?php

require_once 'commonutils.civix.php';
use CRM_Commonutils_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function commonutils_civicrm_config(&$config) {
  _commonutils_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function commonutils_civicrm_install() {
  _commonutils_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function commonutils_civicrm_enable() {
  _commonutils_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *

 // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
function commonutils_civicrm_navigationMenu(&$menu) {
  _commonutils_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _commonutils_civix_navigationMenu($menu);
} // */

/**
 * @param $formName
 * @param \CRM_Core_Form $form
*/
function commonutils_civicrm_buildForm($formName, \CRM_Core_Form &$form)
{
   (new CRM_Commonutils_Hook_BuildForm($formName, $form))->run();
}

/**
 * @param $formName
 * @param \CRM_Core_Form $form
*/
function commonutils_civicrm_preProcess($formName, \CRM_Core_Form &$form)
{
   (new CRM_Commonutils_Hook_PreProcess($formName, $form))->run();
}

/**
 * @param $profileName
 */
function commonutils_civicrm_buildProfile($profileName)
{
   (new CRM_Commonutils_Hook_BuildProfile($profileName))->run();
}
