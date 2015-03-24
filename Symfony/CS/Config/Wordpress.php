<?php

/*
 * This file is part of the PHP CS utility.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Config;

use Symfony\CS\Finder\WordpressFinder;

/**
 * @author Matt Clegg <cleggmatt@gmail.com>
 */
class WordpressConfig extends Config
{
	public function __construct()
	{
		parent::__construct();

		$this->finder = new WordpressFinder();
		$this->fixers = array(
			'encoding',
			'linefeed',
			'short_tag',
			'php_closing_tag',
			'extra_empty_lines',
			'standardize_not_equal'
		);
	}

	public function getName()
	{
		return 'wordpress';
	}

	public function getDescription()
	{
		return 'The configuration for a Wordpress application';
	}
}
