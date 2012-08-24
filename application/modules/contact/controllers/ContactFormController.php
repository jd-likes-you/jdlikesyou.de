<?php
class Contact_ContactFormController extends JdLikesYou_Controller_Action
{
    public function readAction()
    {
    	$contactForm = new Contact_Form_Contact();
    	
    	if ($this->getRequest()->isPost())
		{
        	if ($contactForm->isValid($_POST))
        	{
            	$mail = new Athari_Mail();
        		$mail->addTo('hello@jdlikesyou.de');
        		$mail->setSubject('jdlikesyou.de Contact Form');
        		$mail->setReplyTo($contactForm->getValue('email'), $contactForm->getValue('name'));
        		
        		$body = 'Name: ' . PHP_EOL . $contactForm->getValue('name') . PHP_EOL . PHP_EOL  ;
        		$body .= 'E-Mail: ' . PHP_EOL . $contactForm->getValue('email') . PHP_EOL . PHP_EOL ;
        		$body .= 'Nachricht: ' . PHP_EOL . $contactForm->getValue('body') . PHP_EOL . PHP_EOL ;

        		$mail->setBodyText($body);
        		
        		try {
        		    $mail->send();    
                	$this->_helper->flashMessenger->addSuccessMessage('Nachricht erfolgreich verschickt.');
            		$this->_helper->redirector->gotoRoute(array(), 'contact');
        		} catch (Zend_Mail_Exception $e) {
                	$this->view->assign('flashMessages', array(
            			array(
    					    'type' => Athari_Controller_Action_Helper_FlashMessenger::TYPE_ERROR,
            				'text'	 => 'Leider ist ein Fehler aufgetreten. Bitte später erneut versuchen.')
            			)
        			);
        		}
        	}else{
        	}
		}
    	$this->view->assign('contactForm', $contactForm);   	
    }
}