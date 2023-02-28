<?php
namespace Leelas\Blog\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface {

    public function upgrade(
        SchemaSetupInterface $setup, 
        ModuleContextInterface $context) {
        $setup->startSetup();
        if($context->getVersion()  
        && version_compare($context->getVersion(), '0.1.1') < 0){
            $setup->getConnection()->renameTable(
            $setup->getTable('toptal_blog_post'), 
            $setup->getTable('leelas_blog_post'));
            $setup->endSetup();
        }
    }

}
