<?
/*
 * ***********************************************************************
 * Copyright � Ben Hunt 2007, 2008
 * 
 * This file is part of cmsfromscratch.

    Cmsfromscratch is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Cmsfromscratch is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Cmsfromscratch.  If not, see <http://www.gnu.org/licenses/>.
    ***********************************************************************
 */
 
 
	require 'check-login.php' ;
	require '../cmsfns.php' ;
	
	if (!isSet($_POST['pagePath'])) {
		echo 'error:No page path provided.' ;
		exit ;
	}
	else $pagePath = getPreviewFileFromLive(pathFromID($_POST['pagePath'])) ;
	
	if (!isSet($_POST['newPTName'])) {
		echo 'error:No new page template name provided.' ;
		exit ;
	}
	else $newPTName = $_POST['newPTName'] ;
	
	// Check PT name is not already used
	if (file_exists(PTSDIR . '/' . $newPTName . PTEXTENSION)) {
		echo 'error: A page template of that name already exists.' ;
		exit ;
	}
	
	$fileContents = @file_get_contents($pagePath) ;
	if ($fileContents === False) {
		echo 'error: Could not read source page file: ' . $pagePath ;
		exit ;
	}
	else {
		$fileContents = simplifyContents($fileContents) ;
	}
	
	// Fixing relative path
	// Force $pathToRoot = '' ;
	//$fileContents = ereg_replace('\$pathToRoot=\'[./]*\';', '$pathToRoot=\'\';', $fileContents) ;
	
	$newPTFilePath = PTSDIR . '/' . $newPTName . PTEXTENSION ;
	
	$newPTHandle = fopen($newPTFilePath, 'w') ;
	if (False === fwrite($newPTHandle, 'blah blah blah' . $fileContents . 'end end end')) {
		fclose($newPTHandle) ;
		print('error:Could not save new PT file: ' . $newPTFilePath) ;
		exit ;
	}
	fclose($newPTHandle) ;
	chmod($newPTFilePath, 0644) ;
	
	// Copy preview LCIs folder to pagetemplates/newptname/
	$pageLCIs = getLCIRootFolderFromPagePath($pagePath) . '/cms_preview/' ;
	$newPTLCIs = PTSDIR . '/' . stripFileExtension(baseName($newPTName)) ;
	$newPTLCIsFolder = mkdir($newPTLCIs, 0755) ;
	chmod($newPTLCIs, 0755) ;
	
	$handle = opendir($pageLCIs) ;
	while (False !== ($file = readdir($handle))) {
		if ($file == '..' || $file == '.') continue ;
		copy($pageLCIs . '/' . $file, $newPTLCIs . '/' . $file) ;
	}
	// If success, return the name of the new PT!
	echo $newPTName ;
	exit ;
?>