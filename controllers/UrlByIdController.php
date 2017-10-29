<?php namespace Craft;

class UrlByIdController extends BaseController
{
	protected $allowAnonymous = true;

	/*
	* Finding entries and redirect if found.
	*/
	public function actionFind()
	{
		$requestedId = craft()->request->getParam('id');
		// build criteria to find model
		$criteria = craft()->elements->getCriteria(ElementType::Entry);
		$criteria->id = $requestedId;
		$criteria->limit = 1;
		
		// fire !
		$entries = $criteria->find();
		$entry = count($entries) > 0 ? $entries[0] : null;

		// redirect if possible
		if($entry && $entry->url) {

			// build new query, but remove id from query path
			$newLocation = $entry->url . ( craft()->request->getParam('L') ? '?L='.craft()->request->getParam('L') : '');

			header("HTTP/1.1 302 Found"); 
			header("Location: " . $newLocation); 
			exit();
		}else{
			header("HTTP/1.1 404 Not Found");
			header("Location: /404.html"); 
			exit();
		}

		craft()->end();
	}

}
