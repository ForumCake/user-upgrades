<?php
namespace Cake\UserUpgrades;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/UserUpgrades/addon-Cake_UserUpgrades.xml' => 'b52e4c647346a386b2f92f5902a25df2',
        	'library/Cake/UserUpgrades/Install/Controller.php' => '8169a6681f1abde89d74cb0b802661ea',
        	'library/Cake/UserUpgrades/Install/Data.php' => '631c3a78c070f73ab543f727e4469b8b',
        	'library/Cake/UserUpgrades/Proxy.php' => '3c3933c618e161f5e6934557713ed836',
        );
    }
}