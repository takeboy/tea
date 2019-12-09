<?php
/**
 * This file is part of the Tea programming language project
 *
 * @author 		Benny <benny@meetdreams.com>
 * @copyright 	(c)2019 YJ Technology Ltd. [http://tealang.org]
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Tea;

abstract class Node
{
	const KIND = null;

	public $pos; 	// the first token position of current node

	public $leading; // the node leading contents

	public $tailing; // the node tailing contents

	public function render(TeaCoder $coder)
	{
		return $coder->{'render_' . static::KIND}($this);
	}
}