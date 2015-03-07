<?php
/**
 * Create Admin Role for One Day Admins.
 * @author Cristian Quiroz <cris@qrz.io>
 */

/** @var Mage_Admin_Model_Role $role */
$role = Mage::getModel('admin/role');
$role->setRoleName(Qrz_OneDayAdmin_Helper_Data::ONE_DAY_ADMIN_ROLE_NAME)
    ->setRoleType('G')
    ->save();

$resources = array('all');
/** @var Mage_Admin_Model_Rules $rules */
$rules = Mage::getModel("admin/rules");
$rules->setRoleId($role->getId())
    ->setResources($resources)
    ->saveRel();