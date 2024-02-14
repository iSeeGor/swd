<?php

namespace Swd\Atoms;

use Swd\Util;

class MetricsAtom {
	function init( $block_data ): void {
		$this->render( $block_data );
	}
	public function __construct(
		public Util $util,
	) {}

	public function render( $block_data ) {
		require SWD_ATOM_BLOCKS_TEMPLATE . 'metrics-block.php';
	}
}
