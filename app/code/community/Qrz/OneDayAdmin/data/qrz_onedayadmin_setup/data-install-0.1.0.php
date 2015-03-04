<?php
/**
 * Create Admin Role for One Day Admins.
 * @author Cristian Quiroz <cris@qrz.io>
 */
Mage::getModel('admin/role')
    ->setRoleName('One Day Admin')
    ->setRoleType('G')
    ->setTreeLevel(1)
    ->save();

