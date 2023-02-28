<?php

namespace Gadgetdrink\ContactForm\Controller\Index;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\View\Result\PageFactory;

Class Index implements HttpGetActionInterface{
    protected $resultPageFactory;


    public function __construct(PageFactory $resultPageFactory){
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute(){
        return $this->resultPageFactory->create();
    }

}

