<?php
class Default_IndexController extends Athari_Controller_Action
{
    protected $_formHelper;
    
//     public function init()
//     {
//         $this->_formHelper = $this->_helper->getHelper('FormHelper');
//         $this->_formHelper->setOptions(array (
//             'scriptPath' => APPLICATION_PATH . 'library/views/templates',
//             'scriptName' => 'form' . '.' . $this->_helper->viewRenderer->getViewSuffix(),
//             'templateFormVariable' => 'form'
//         ));
//     }
    
	public function indexAction()
	{

// 		dd($this->_options);
// 	    /* @var $multiChannelHelper Yoc_Controller_Action_Helper_MultiChannel */
// 	    $multiChannelHelper = $this->_helper->getExistingHelper('MultiChannel');

// 	    $this->view->assign('Channel', $multiChannelHelper->getChannelName());

// 	    $testLink = $this->_getAllParams();
// 	    $testLink['action'] = 'test';
// 	    $this->view->assign('testLink', $testLink);
	}

	public function testAction()
	{
	    $this->view->assign('startDiv', 'pageContent');
	}

	public function test2Action()
	{
	    $testForm = new Default_Form_TestForm();
	    
	    $this->_formHelper->initForm($testForm);
	    $this->_formHelper->renderForm($this->view);
	    
// 	    $this->view->assign('testForm', $testForm);
	}
}