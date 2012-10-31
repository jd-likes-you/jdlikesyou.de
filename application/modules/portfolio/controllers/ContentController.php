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

        $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_Array($content[self::PROJECTS]));
        $paginator->setCurrentPageNumber($this->_getParam('page'));
        $paginator->setItemCountPerPage(1);
        $this->view->paginator = $paginator;
        
        $page = $this->view->navigation()->findOneByRoute($categoryName); 
        /* @var $page Zend_Navigation_Page */
        $page->setActive();
    }
}