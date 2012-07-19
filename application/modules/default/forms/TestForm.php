<?php
class Default_Form_TestForm extends Yoc_Form
{
    public function init() 
    {
        $textElement = new Zend_Form_Element_Text('password');
        $textElement->setLabel('Old Password');
        $this->addElement($textElement);
        
        $submitButton = new Zend_Form_Element_Submit('language');        
        $this->addElement($submitButton);
    }
}