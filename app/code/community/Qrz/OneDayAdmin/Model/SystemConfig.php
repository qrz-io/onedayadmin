<?php

class Qrz_OneDayAdmin_Model_SystemConfig
{
    const ONE_DAY_ADMIN_ROLES_CONFIG_PATH = 'qrz_onedayadmin/general/one_day_admin_roles';

    /**
     * @return array
     * @author Cristian Quiroz <cris@qrz.io>
     */
    public function getOneDayAdminRoles()
    {
        $oneDayAdminRoles = Mage::getStoreConfig(self::ONE_DAY_ADMIN_ROLES_CONFIG_PATH);
        $oneDayAdminRoles = explode(',', $oneDayAdminRoles);

        return $oneDayAdminRoles;
    }
}
