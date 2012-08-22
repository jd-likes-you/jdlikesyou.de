<?php
class Contact_Form_Contact extends Zend_Form
{
	public function init()
	{
		$nameText = new Zend_Form_Element_Text('name');
		$nameText->setLabel('Name');
		$nameText->setRequired();
		$nameText->addValidator(new Zend_Validate_StringLength(array('max' => 150)));
		$this->addElement($nameText);

		
		$emailText = new Zend_Form_Element_Text('email');
		$emailText->setLabel('E-Mail');
		$emailText->setRequired();
		$emailText->addValidator('EmailAddress', true);
		$this->addElement($emailText);

		
		$bodyTextArea = new Zend_Form_Element_Textarea('body');
		$bodyTextArea->setLabel('Nachricht');
		$bodyTextArea->setRequired();
		$bodyTextArea->setAttrib('cols', '40');
		$bodyTextArea->setAttrib('rows', '8');
		$bodyTextArea->addValidator(new Zend_Validate_StringLength(array('max' => 5000)));
		$this->addElement($bodyTextArea);
		
		$submitButton = new Zend_Form_Element_Submit('submit');
		$submitButton->setLabel('Abschicken');
		$this->addElement($submitButton);
		
		
		foreach($this->getElements() as $element) {
			$label = $element->getDecorator('label');
			if($label) {
				$label->setOption('requiredSuffix', '*');
			}
		}
		

	}
}