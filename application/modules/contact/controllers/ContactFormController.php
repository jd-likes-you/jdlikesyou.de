<?php
class Contact_ContactFormController extends JdLikesYou_Controller_Action
{
    public function readAction()
    {
    	$contactForm = new Contact_Form_Contact();

    	if (!$this->getRequest()->isPost())
    	{
            $this->view->assign('contactForm', $contactForm);
            return; 
    	}
    	
    	if ($contactForm->isValid($_POST)) {
    		// success!
    	} else {
    		// failure!
    	}
    	
    }
    
    protected function processContactForm()
    {
    	
    }
    
}