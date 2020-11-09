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
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function commonutils_civicrm_xmlMenu(&$files) {
  _commonutils_civix_civicrm_xmlMenu($files);
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
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function commonutils_civicrm_postInstall() {
  _commonutils_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function commonutils_civicrm_uninstall() {
  _commonutils_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function commonutils_civicrm_enable() {
  _commonutils_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function commonutils_civicrm_disable() {
  _commonutils_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function commonutils_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _commonutils_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function commonutils_civicrm_managed(&$entities) {
  _commonutils_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function commonutils_civicrm_caseTypes(&$caseTypes) {
  _commonutils_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function commonutils_civicrm_angularModules(&$angularModules) {
  _commonutils_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function commonutils_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _commonutils_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function commonutils_civicrm_entityTypes(&$entityTypes) {
  _commonutils_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function commonutils_civicrm_themes(&$themes) {
  _commonutils_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
function commonutils_civicrm_preProcess($formName, &$form) {

} // */

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