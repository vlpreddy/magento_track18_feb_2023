<?php

namespace Leelas\Blog\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 *
 * @package Leelas\Blog\Setup
 */
class UpgradeData implements UpgradeDataInterface
{

    /**
     * Creates sample blog posts
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($context->getVersion()
            && version_compare($context->getVersion(), '0.1.2') < 0
        ) {
            $tableName = $setup->getTable('leelas_blog_post');

            $data = [
                [
                    'title' => 'Magento Module Development',
                    'content' => 'Related to module development',
                ],
                [
                    'title' => 'Magento Theme Development',
                    'content' => 'Related to Theme development',
                ],
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}
