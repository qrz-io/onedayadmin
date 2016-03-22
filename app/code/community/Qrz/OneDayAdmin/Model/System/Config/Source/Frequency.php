<?php

class Qrz_OneDayAdmin_Model_System_Config_Source_Frequency
{

    /**
     * @return array
     * @author Vlad Costin <vc@amp.co>
     */
    public function toOptionArray()
    {

        $rolesArray = array(
            array(
                'value' => '0 0 * * *',
                'label' => 'Daily',
            ),
            array(
                'value' => '0 0 * * 6',
                'label' => 'Weekly',
            )
        );

        return $rolesArray;
    }

    /**
     * Get options in "key => value" format
     * @return array
     * @author Vlad Costin <vc@amp.co>
     */
    public function toArray()
    {
        $rolesArray = array(
            'Daily' => '0 0 * * *',
            'Weekly' => '0 0 * * 6',
        );

        return $rolesArray;
    }
}
