<?php // $Id: ForumCategory.class.php 3990 2005-03-31 09:55:18Z bmol $
/*
==============================================================================
	Dokeos - elearning and course management software

	Copyright (c) 2004 Dokeos S.A.
	Copyright (c) 2003 Ghent University (UGent)
	Copyright (c) 2001 Universite catholique de Louvain (UCL)
	Copyright (c) Bart Mollet (bart.mollet@hogent.be)

	For a full list of contributors, see "credits.txt".
	The full license can be read in "license.txt".

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	See the GNU General Public License for more details.

	Contact address: Dokeos, 44 rue des palais, B-1030 Brussels, Belgium
	Mail: info@dokeos.com
==============================================================================
*/

require_once 'Resource.class.php';

/**
 * A forum-category
 * @author Bart Mollet <bart.mollet@hogent.be>
 */
class ForumCategory extends Resource
{
	/**
	 * The title
	 */
	var $title;
	/**
	 * The description
	 */
	var $description;
	/**
	 * The order
	 */
	var $order;
	/**
	 * Locked flag
	 */
	var $locked;
	/**
	 * The session id
	 */
	var $session_id;
	/**
	 * Create a new ForumCategory
	 */
	function ForumCategory($id, $title, $description, $order, $locked, $session_id)
	{
		parent::Resource($id,RESOURCE_FORUMCATEGORY);
		$this->title = $title;
		$this->description = $description;
		$this->order = $order;
		$this->locked = $locked;
		$this->session_id = $session_id;
	}
	/**
	 * Show this resource
	 */
	function show()
	{
		parent::show();
		echo $this->title;
	}
}
