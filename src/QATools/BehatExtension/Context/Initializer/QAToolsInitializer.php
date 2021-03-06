<?php
/*
 * This file is part of BehatExtension for Behat.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Michael Geppert <evangelion1204@aol.com>
 */

namespace QATools\BehatExtension\Context\Initializer;


use Behat\Behat\Context\Context;
use Behat\Behat\Context\Initializer\ContextInitializer;
use QATools\BehatExtension\Context\IQAToolsAwareContext;
use QATools\BehatExtension\QATools;

class QAToolsInitializer implements ContextInitializer
{

	/**
	 * QA-Tools instance.
	 *
	 * @var QATools
	 */
	protected $qaTools;

	/**
	 * Constructor for the initializer.
	 *
	 * @param QATools $qa_tools QA-Tools instance.
	 */
	public function __construct(QATools $qa_tools)
	{
		$this->qaTools = $qa_tools;
	}

	/**
	 * Initialize given context.
	 *
	 * @param Context $context Context.
	 *
	 * @return void
	 */
	public function initializeContext(Context $context)
	{
		if ( !$context instanceof IQAToolsAwareContext ) {
			return;
		}

		$context->setQATools($this->qaTools);
	}

}
