<?php
class Portfolio_ContentController extends JdLikesYou_Controller_Action
{
	const PAGE_TITLE = 'pageTitle';
	const PROJECTS = 'projects';
	const CATEGORY = 'category';
	
    public function readAction()
    {
        $categoryName = $this->_request->getParam('category','error');
        
        $content = new Zend_Config_Json(APPLICATION_PATH . 'modules/portfolio/configs/' . $categoryName . '.json');
        $content = $content->toArray();
        
        $this->view->assign(self::CATEGORY, $categoryName);
        $this->view->assign(self::PROJECTS, $content[self::PROJECTS]);
    }
}