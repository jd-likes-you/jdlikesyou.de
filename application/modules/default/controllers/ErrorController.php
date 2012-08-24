<?php
class Default_ErrorController extends Athari_Controller_ErrorController
{
	public function errorAction()
	{
		$this->_helper->flashMessenger->addErrorMessage('Leider ist ein Fehler aufgetreten. Bitte erneut versuchen.');
		$this->_helper->redirector->gotoRoute(array(), 'home');
	}
	
}