<?php

class Qrz_OneDayAdmin_Model_System_Config_Source_OneDayAdminRoles
{

    /**
     * @return array
     * @author Cristian Quiroz <cris@qrz.io>
     */
    public function toOptionArray()
    {
        $rolesCollection = $this->getAdminRolesCollection();
        $rolesArray = array();

        foreach ($rolesCollection as $role) {
            /** @var Mage_Admin_Model_Role $role */
            $rolesArray[] = array(
                'value' => $role->getRoleName(),
                'label' => $role->getRoleName(),
            );
        }

        return $rolesArray;
    }

    /**
     * Get options in "key => value" format
     * @return array
     * @author Cristian Quiroz <cris@qrz.io>
     */
    public function toArray()
    {
        $rolesCollection = $this->getAdminRolesCollection();
        $rolesArray = array();

        foreach ($rolesCollection as $role) {
            /** @var Mage_Admin_Model_Role $role */
            $rolesArray[] = array(
                $role->getRoleName() => $role->getRoleName(),
            );
        }

        return $rolesArray;
    }

    /**
     * @return Mage_Admin_Model_Resource_Roles_Collection
     * @author Cristian Quiroz <cris@qrz.io>
     */
    protected function getAdminRolesCollection()
    {
        return Mage::getModel('admin/roles')->getCollection();
    }
}
