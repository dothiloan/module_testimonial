<?php
namespace LOANDT\Testimonial\Model\ResourceModel;


class Testimonial extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('testimonial', 'testimonial_id');
	}
	
}