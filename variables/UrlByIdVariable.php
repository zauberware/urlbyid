<?php namespace Craft;

/*
* Helper to generate Url with Id
*/
class UrlByIdVariable
{

	public function urlFor($entry)
	{
	     if ($entry->uri !== null)
	     {
	          $url = UrlHelper::getSiteUrl('entries/find', array('id' => $entry->id), null, $entry->locale);
	          return $url;
	     }
	}


}