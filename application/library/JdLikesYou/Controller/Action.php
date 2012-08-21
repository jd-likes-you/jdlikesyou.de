<?php
class JdLikesYou_Controller_Action extends Athari_Controller_Action
{
	public function init()
	{
		parent::init();
        $this->_helper->NavigationPageTitle();
	}
}