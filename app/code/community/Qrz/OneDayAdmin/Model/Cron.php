<?php

class Qrz_OneDayAdmin_Model_Cron
{

    /**
     * @return void
     * @author Cristian Quiroz <cris@qrz.io>
     */
    public function deactivateOneDayAdmins()
    {
        $oneDayAdminUserIdArray = $this->getAdminRolesModel()
            ->load(Qrz_OneDayAdmin_Helper_Data::ONE_DAY_ADMIN_ROLE_NAME, 'role_name')
            ->getRoleUsers();

        $oneDayAdminUsers = $this->getAdminUserModel()->getCollection()
            ->addFieldToFilter('user_id', array('in' => $oneDayAdminUserIdArray));

        foreach($oneDayAdminUsers as $oneDayAdminUser) {
            $oneDayAdminUser->setData('is_active', 0)->save();
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
}