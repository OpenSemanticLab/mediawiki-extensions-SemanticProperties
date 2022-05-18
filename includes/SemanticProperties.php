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
				"Property:HasAbbreviation" => "Property/HasAbbreviation.mediawiki",
				"Property:HasAbstract" => "Property/HasAbstract.mediawiki",
				"Property:HasAccessory" => "Property/HasAccessory.mediawiki",
				"Property:HasAdditionalDocument" => "Property/HasAdditionalDocument.mediawiki",
				"Property:HasAlternativeNames" => "Property/HasAlternativeNames.mediawiki",
				"Property:HasBusinessUnit" => "Property/HasBusinessUnit.mediawiki",
				"Property:HasCAS" => "Property/HasCAS.mediawiki",
				"Property:HasChEBIID" => "Property/HasChEBIID.mediawiki",
				"Property:HasChemicalStructureSDS" => "Property/HasChemicalStructureSDS.mediawiki",
				"Property:HasCompetence" => "Property/HasCompetence.mediawiki",
				"Property:HasConstructionYear" => "Property/HasConstructionYear.mediawiki",
				"Property:HasCoordinates" => "Property/HasCoordinates.mediawiki",
				"Property:HasCreationDate" => "Property/HasCreationDate.mediawiki",
				"Property:HasCreator" => "Property/HasCreator.mediawiki",
				"Property:HasDatasheet" => "Property/HasDatasheet.mediawiki",
				"Property:HasDensityComment" => "Property/HasDensityComment.mediawiki",
				"Property:HasDepartment" => "Property/HasDepartment.mediawiki",
				"Property:HasDescription" => "Property/HasDescription.mediawiki",
				"Property:HasDeviceType" => "Property/HasDeviceType.mediawiki",
				"Property:HasDeviceTypeName" => "Property/HasDeviceTypeName.mediawiki",
				"Property:HasDisplayName" => "Property/HasDisplayName.mediawiki",
				"Property:HasEmail" => "Property/HasEmail.mediawiki",
				"Property:HasEndDate" => "Property/HasEndDate.mediawiki",
				"Property:HasEndDateAndTime" => "Property/HasEndDateAndTime.mediawiki",
				"Property:HasFaxNumber" => "Property/HasFaxNumber.mediawiki",
				"Property:HasFirstName" => "Property/HasFirstName.mediawiki",
				"Property:HasFloor" => "Property/HasFloor.mediawiki",
				"Property:HasFloorCount" => "Property/HasFloorCount.mediawiki",
				"Property:HasGender" => "Property/HasGender.mediawiki",
				"Property:HasGrantor" => "Property/HasGrantor.mediawiki",
				"Property:HasHazardStatement" => "Property/HasHazardStatement.mediawiki",
				"Property:HasHazardStatementComment" => "Property/HasHazardStatementComment.mediawiki",
				"Property:HasHazardWarning" => "Property/HasHazardWarning.mediawiki",
				"Property:HasHouseNumber" => "Property/HasHouseNumber.mediawiki",
				"Property:HasId" => "Property/HasId.mediawiki",
				"Property:HasImage" => "Property/HasImage.mediawiki",
				"Property:HasInstitution" => "Property/HasInstitution.mediawiki",
				"Property:HasKeyword" => "Property/HasKeyword.mediawiki",
				"Property:HasLongName" => "Property/HasLongName.mediawiki",
				"Property:HasMailingList" => "Property/HasMailingList.mediawiki",
				"Property:HasManager" => "Property/HasManager.mediawiki",
				"Property:HasManual" => "Property/HasManual.mediawiki",
				"Property:HasManufacturer" => "Property/HasManufacturer.mediawiki",
				"Property:HasMember" => "Property/HasMember.mediawiki",
				"Property:HasMobilePhoneNumber" => "Property/HasMobilePhoneNumber.mediawiki",
				"Property:HasName" => "Property/HasName.mediawiki",
				"Property:HasOtsBase64" => "Property/HasOtsBase64.mediawiki",
				"Property:HasOuHead" => "Property/HasOuHead.mediawiki",
				"Property:HasOuHeadDeputy" => "Property/HasOuHeadDeputy.mediawiki",
				"Property:HasOuName" => "Property/HasOuName.mediawiki",
				"Property:HasOuNumber" => "Property/HasOuNumber.mediawiki",
				"Property:HasOutput" => "Property/HasOutput.mediawiki",
				"Property:HasPartner" => "Property/HasPartner.mediawiki",
				"Property:HasPhoneNumber" => "Property/HasPhoneNumber.mediawiki",
				"Property:HasPostalCode" => "Property/HasPostalCode.mediawiki",
				"Property:HasPrecautionaryStatementCode" => "Property/HasPrecautionaryStatementCode.mediawiki",
				"Property:HasProject" => "Property/HasProject.mediawiki",
				"Property:HasProposal" => "Property/HasProposal.mediawiki",
				"Property:HasPubChemID" => "Property/HasPubChemID.mediawiki",
				"Property:HasReport" => "Property/HasReport.mediawiki",
				"Property:HasResponsiblePerson" => "Property/HasResponsiblePerson.mediawiki",
				"Property:HasRiskAssessment" => "Property/HasRiskAssessment.mediawiki",
				"Property:HasRole" => "Property/HasRole.mediawiki",
				"Property:HasRoom" => "Property/HasRoom.mediawiki",
				"Property:HasRoomFunction" => "Property/HasRoomFunction.mediawiki",
				"Property:HasRoomNumber" => "Property/HasRoomNumber.mediawiki",
				"Property:HasRoomUsageType" => "Property/HasRoomUsageType.mediawiki",
				"Property:HasSecretary" => "Property/HasSecretary.mediawiki",
				"Property:HasSerialNumber" => "Property/HasSerialNumber.mediawiki",
				"Property:HasSha256" => "Property/HasSha256.mediawiki",
				"Property:HasSigmaCostCenter" => "Property/HasSigmaCostCenter.mediawiki",
				"Property:HasSigmaOu" => "Property/HasSigmaOu.mediawiki",
				"Property:HasStartDate" => "Property/HasStartDate.mediawiki",
				"Property:HasStartDateAndTime" => "Property/HasStartDateAndTime.mediawiki",
				"Property:HasStreet" => "Property/HasStreet.mediawiki",
				"Property:HasSubordinateOu" => "Property/HasSubordinateOu.mediawiki",
				"Property:HasSubType" => "Property/HasSubType.mediawiki",
				"Property:HasSuperordinateOu" => "Property/HasSuperordinateOu.mediawiki",
				"Property:HasSurname" => "Property/HasSurname.mediawiki",
				"Property:HasTopic" => "Property/HasTopic.mediawiki",
				"Property:HasType" => "Property/HasType.mediawiki",
				"Property:HasUrl" => "Property/HasUrl.mediawiki",
				"Property:HasUsername" => "Property/HasUsername.mediawiki",
				"Property:HasUuid" => "Property/HasUuid.mediawiki",
				"Property:HasYear" => "Property/HasYear.mediawiki",
				"Property:HasYearLabel" => "Property/HasYearLabel.mediawiki",
				"Property:IsA" => "Property/IsA.mediawiki",
				"Property:IsInstanceOf" => "Property/IsInstanceOf.mediawiki",
				"Property:IsLocatedIn" => "Property/IsLocatedIn.mediawiki",
				"Property:IsObjectParameterOf" => "Property/IsObjectParameterOf.mediawiki",
				"Property:IsPartOf" => "Property/IsPartOf.mediawiki",
				"Property:IsRelatedTo" => "Property/IsRelatedTo.mediawiki",
				"Property:IsSubprocessOf" => "Property/IsSubprocessOf.mediawiki",
				"Property:Position" => "Property/Position.mediawiki",
			],
            
			// base dir for imported pages
			"root" => dirname(__DIR__) . '/importPages',

			// edit summary used when PageImporter edits pages
			"comment" => "Updated with content from Extension:SemanticProperties version 0.0.1"
		];

	}

}
