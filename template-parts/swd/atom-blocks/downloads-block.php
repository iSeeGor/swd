<?php
if ( empty( $block_data['download_block'] ) ) {
	return;
}
?>
<div class="container downloads-section-wrapper">
	<?php
	foreach ( $block_data['download_block'] as $block_download ) {
		echo '<div class="download-block-wrapper">';
		echo '<h2>' . $block_download['title'] . '</h2>';
		echo '<ul class="download-list">';
		foreach ( $block_download['pdf_item'] as $pdf ) {
			echo '<li class="download-item">';

				echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75.32 92.604"> <path fill="#ff2116" d="M-29.633 123.947c-3.552 0-6.443 2.894-6.443 6.446v49.498c0 3.551 2.891 6.445 6.443 6.445h37.85c3.552 0 6.443-2.893 6.443-6.445v-40.702s.102-1.191-.416-2.351a6.516 6.516 0 0 0-1.275-1.844 1.058 1.058 0 0 0-.006-.008l-9.39-9.21a1.058 1.058 0 0 0-.016-.016s-.802-.764-1.99-1.274c-1.4-.6-2.842-.537-2.842-.537l.021-.002z" color="#000" font-family="sans-serif" overflow="visible" paint-order="markers fill stroke" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" transform="translate(53.548 -183.975) scale(1.4843)"/> <path fill="#f5f5f5" d="M-29.633 126.064h28.38a1.058 1.058 0 0 0 .02 0s1.135.011 1.965.368a5.385 5.385 0 0 1 1.373.869l9.368 9.19s.564.595.838 1.208c.22.495.234 1.4.234 1.4a1.058 1.058 0 0 0-.002.046v40.746a4.294 4.294 0 0 1-4.326 4.328h-37.85a4.294 4.294 0 0 1-4.326-4.328v-49.498a4.294 4.294 0 0 1 4.326-4.328z" color="#000" font-family="sans-serif" overflow="visible" paint-order="markers fill stroke" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" transform="translate(53.548 -183.975) scale(1.4843)"/> <path fill="#ff2116" d="M18.804 55.135c-2.162-2.162.177-5.133 6.526-8.288l3.994-1.985 1.557-3.405a134.054 134.054 0 0 0 2.838-6.79l1.283-3.386-.884-2.506c-1.087-3.08-1.474-7.71-.785-9.374.934-2.255 3.994-2.024 5.205.393.946 1.888.849 5.307-.272 9.618l-.92 3.534.81 1.375c.445.756 1.746 2.55 2.89 3.989l2.152 2.676 2.677-.35c8.503-1.11 11.416.777 11.416 3.48 0 3.413-6.677 3.695-12.284-.243-1.262-.886-2.128-1.767-2.128-1.767s-3.513.716-5.243 1.182c-1.785.48-2.675.782-5.29 1.665 0 0-.918 1.332-1.516 2.301-2.224 3.604-4.821 6.59-6.676 7.677-2.077 1.217-4.254 1.3-5.35.204zm3.393-1.212c1.216-.751 3.676-3.66 5.378-6.361l.69-1.093-3.14 1.578c-4.848 2.438-7.066 4.735-5.913 6.125.648.78 1.423.716 2.985-.25zm31.494-8.84c1.189-.833 1.016-2.51-.328-3.187-1.045-.527-1.888-.635-4.606-.595-1.67.114-4.354.45-4.81.553 0 0 1.476 1.02 2.13 1.394.872.498 2.99 1.422 4.537 1.895 1.526.467 2.409.418 3.077-.06zm-12.663-5.264c-.72-.756-1.943-2.334-2.719-3.507-1.014-1.33-1.523-2.27-1.523-2.27s-.741 2.386-1.35 3.82l-1.898 4.692-.55 1.065s2.925-.96 4.414-1.348c1.576-.412 4.776-1.041 4.776-1.041zm-4.081-16.365c.184-1.54.261-3.078-.233-3.853-1.373-1.5-3.03-.25-2.749 3.318.095 1.2.393 3.25.791 4.515l.725 2.299.51-1.732c.28-.952.71-2.998.956-4.547z"/> <path fill="#2c2c2c" d="M-20.93 167.839h2.365q1.133 0 1.84.217.706.21 1.19.944.482.728.482 1.756 0 .945-.392 1.624-.392.678-1.056.98-.658.3-2.03.3h-.818v3.73h-1.581zm1.58 1.224v3.33h.785q1.05 0 1.448-.391.406-.392.406-1.274 0-.657-.266-1.063-.266-.413-.588-.504-.315-.098-1-.098zm5.508-1.224h2.148q1.56 0 2.49.552.938.553 1.414 1.645.483 1.091.483 2.42 0 1.4-.434 2.499-.427 1.091-1.316 1.763-.881.672-2.518.672h-2.267zm1.58 1.266v7.018h.659q1.378 0 2-.952.623-.958.623-2.553 0-3.513-2.623-3.513zm6.473-1.266h5.304v1.266h-3.723v2.855h2.981v1.266h-2.98v4.164H-5.79z" font-family="Franklin Gothic Medium Cond" letter-spacing="0" style="line-height:125%;-inkscape-font-specification:&quot;Franklin Gothic Medium Cond&quot;" transform="translate(53.548 -183.975) scale(1.4843)" word-spacing="4.26"/></svg>';

				echo '<div class="download-item__inner">';
					echo '<div class="top-pdf">';
						echo '<span class="title">' . $pdf['file']['title'] . '</span>';
						echo '<span class="type-size">' . strtoupper( $pdf['file']['subtype'] ) . ' ' . round( $pdf['file']['filesize'] / 1000 / 1000, 2 ) . 'mb' . '</span>';
					echo '</div>';
					echo '<div class="bottom-pdf">';
						echo '<span class="download"><a href="#" data-download-btn data-file="' . $pdf['file']['url'] . '">' . __( 'Herunterladen', 'swd' ) . '</a></span>';
						echo '<span class="preview"><span>' . __( 'Vorschau', 'swd' ) . '</span>';
			if ( isset( $pdf['preview']['url'] ) ) {
				echo '<span class="thumb">' . wp_get_attachment_image( $pdf['preview']['ID'], 'full' ) . '</span>';
			}
						echo '</span>';
					echo '</div>';
				echo '</div>';

			echo '</li>';
		}
		echo '</ul>';
		echo '</div>';
	}
	?>
</div>
