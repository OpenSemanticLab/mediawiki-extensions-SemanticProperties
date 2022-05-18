<?php

class SemanticProperties {

	public static function onBeforePageDisplay( $out ) {

		$out->addModules( 'ext.SemanticProperties' );

		return true;

	}

}
