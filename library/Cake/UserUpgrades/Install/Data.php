<?php
namespace Cake\UserUpgrades;

use Cake\Install_DataAbstract;

class Install_Data extends Install_DataAbstract
{

    public function getModules()
    {
        return array(
            'PayPalIpnRules' => true,
            'SalesTax' => true
        );
    }
}