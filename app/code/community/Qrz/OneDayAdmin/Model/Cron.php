<?php

class Qrz_OneDayAdmin_Model_Cron
{

    /**
     * @return void
     * @author Cristian Quiroz <cris@qrz.io>
     */
    public function deactivateOneDayAdmins()
    {
        $oneDayAdminRoles = $this->getSystemConfig()->getOneDayAdminRoles();

        foreach ($oneDayAdminRoles as $oneDayAdminRole) {
            $adminRole = $this->getAdminRolesModel()
                ->load($oneDayAdminRole, 'role_name');

            if (!$adminRole->getId()) {
                continue;
            }

            $adminUserIdArray = $adminRole->getRoleUsers();

            $adminUserCollection = $this->getAdminUserModel()->getCollection()
                ->addFieldToFilter('user_id', array('in' => $adminUserIdArray))
                ->addFieldToFilter('is_active', 1);

            foreach ($adminUserCollection as $adminUser) {
                $adminUser->setData('is_active', 0)->save();
            }
        }
    }

    /**
     * @return Mage_Admin_Model_Roles
     * @author Cristian Quiroz <cris@qrz.io>
     */
    protected function getAdminRolesModel()
    {
        return Mage::getModel('admin/roles');
    }

    /**
     * @return Mage_Admin_Model_User
     * @author Cristian Quiroz <cris@qrz.io>
     */
    protected function getAdminUserModel()
    {
        return Mage::getModel('admin/user');
    }

    /**
     * @return Qrz_OneDayAdmin_Model_SystemConfig
     * @author Cristian Quiroz <cris@qrz.io>
     */
    protected function getSystemConfig()
    {
        return Mage::getSingleton('qrz_onedayadmin/systemConfig');
    }
}
