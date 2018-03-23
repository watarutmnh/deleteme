<?php
/**
 * Delete Me plugin for Craft CMS
 *
 * DeleteMe Controller
 *
 * @author    Codegraph Inc.
 * @copyright Copyright (c) 2018 Codegraph Inc.
 * @link      https://cdgrph.com/
 * @package   DeleteMe
 * @since     1.0.0
 */

namespace Craft;

class DeleteMeController extends BaseController {

	/**
	 * @var    bool|array Allows anonymous access to this controller's actions.
	 * @access protected
	 */
	protected $allowAnonymous = array('actionIndex',
	);

	/**
	 */
	public function actionIndex() {
		$this->requirePostRequest();

		$user = craft()->userSession->getUser();
		if ($user) {
			$requestedUserId = craft()->request->getPost('userId');
			if ($user->id == $requestedUserId) {
				craft()->users->deleteUser($user);
				$this->redirectToPostedUrl();
			}
		}
	}
}