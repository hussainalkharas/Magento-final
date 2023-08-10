<?php
namespace Magento\Framework\View\Element\Html\CustomLink;

class CustomLink extends \Magento\Framework\View\Element\Html\Link
{
	public function getHref()
	{
    	return 'https://www.linkedin.com/in/husain-
        alkharas-7312a2279';
	}

	public function getTarget()
	{
    	return '_blank';
	}
}
