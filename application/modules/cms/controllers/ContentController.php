<?php
class Cms_ContentController extends JdLikesYou_Controller_Action
{
    public function readAction()
    {
        $templateName = $this->_request->getParam('template-name','error');
        $this->_helper->viewRenderer($templateName);
    }
}