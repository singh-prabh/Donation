<?php

/**
 * Render Module information
 *
 * @category  ProxiBlue
 * @package   Donation
 * @author    Lucas van Staden <sales@proxiblue.com.au>
 * @copyright 2016 Lucas van Staden (ProxiBlue)
 * @license   http://www.proxiblue.com.au/eula EULA
 * @link      http://www.proxiblue.com.au
 */
class ProxiBlue_Donation_Block_Adminhtml_System_Config_Fieldset_Hint extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    protected $_template = 'proxiblue/system/config/fieldset/hint.phtml';

    /**
     * Render fieldset html
     *
     * @param  Varien_Data_Form_Element_Abstract $element
     *
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->toHtml();
    }

}
