<?php

namespace Gadgetdrink\ContactForm\Block;

use \Magento\Framework\View\Element\Template;

class Article extends Template
{
    
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ){
        parent::__construct($context, $data);
     }

    
    public function getArticles()
    {
        return 'getArticles function of the Block class called successfully';
    }
}
?>