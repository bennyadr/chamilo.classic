<?php
// Chamilo LMS
// See license terms in chamilo/documentation/license.txt

// Admin tools
// Portal home page

// For more information: http://docs.fckeditor.net/FCKeditor_2.x/Developers_Guide/Configuration/Configuration_Options

// This is the visible toolbar set when the editor has "normal" size.
$config['ToolbarSets']['Normal'] = array(
	array('NewPage','Templates','Save','Print','PageBreak','FitWindow','-','PasteWord','-','Undo','Redo','-','SelectAll','-','Find'),
	array('Link','Unlink','Anchor'),
	array('Image','flvPlayer','Flash','EmbedMovies','YouTube','MP3','mimetex'),
	array('Table','Smiley','SpecialChar','googlemaps'),
	'/',
	array('FontFormat','FontName','FontSize'),
	array('Bold','Italic','Underline'),
	array('JustifyLeft','JustifyCenter','JustifyRight','-','OrderedList','UnorderedList','-','Outdent','Indent','-','TextColor','BGColor'),
	array('Source')
);

// This is the visible toolbar set when the editor is maximized.
// If it has not been defined, then the toolbar set for the "normal" size is used.
$config['ToolbarSets']['Maximized'] = array(
	array('FitWindow','Save','NewPage','Preview'),
	array('Cut','Copy','Paste','PasteText','PasteWord','-','Print'),
	array('Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'),
	array('Link','Unlink','Anchor'),
	'/',
	array('Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'),
	array('OrderedList','UnorderedList','-','Outdent','Indent','Blockquote','CreateDiv'),
	array('JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'),
	array('Rule','SpecialChar'),
	array('Image','imgmapPopup','Flash','MP3','EmbedMovies','flvPlayer','YouTube','googlemaps','Smiley'),
	'/',
	array('Style','FontFormat','FontName','FontSize'),
	array('TextColor','BGColor'),
	array('Table','TableInsertRowAfter','TableDeleteRows','TableInsertColumnAfter','TableDeleteColumns','TableInsertCellAfter','TableDeleteCells','TableMergeCells','TableHorizontalSplitCell','TableVerticalSplitCell','TableCellProp'),
	array('ShowBlocks','Source')
);

// Sets whether the toolbar can be collapsed/expanded or not.
// Possible values: true , false
//$config['ToolbarCanCollapse'] = true;

// Sets how the editor's toolbar should start - expanded or collapsed.
// Possible values: true , false
//$config['ToolbarStartExpanded'] = true;

//This option sets the location of the toolbar.
// Possible values: 'In' , 'None' , 'Out:[TargetId]' , 'Out:[TargetWindow]([TargetId])'
//$config['ToolbarLocation'] = 'In';

// A setting for blocking copy/paste functions of the editor.
// This setting activates on leaners only. For users with other statuses there is no blocking copy/paste.
// Possible values: true , false
//$config['BlockCopyPaste'] = false;

// Here new width and height of the editor may be set.
// Possible values, examples: 300 , '250' , '100%' , ...
//$config['Width'] = '100%';
//$config['Height'] = '400';
