<?php

class SemanticProperties {

	public static function onBeforePageDisplay( $out ) {

		$out->addModules( 'ext.SemanticProperties' );

		return true;

	}
    
	public static function onPageImporterRegisterPageLists( array &$pageLists ) {

		$pageLists['SemanticProperties'] = [
			// list of pages to create and the corresponding files to use as content
			"pages" => [
			],
            
			// base dir for imported pages
			"root" => dirname(__DIR__) . '/importPages',

			// edit summary used when PageImporter edits pages
			"comment" => "Updated with content from Extension:SemanticProperties version 0.0.1"
		];

	}

}
