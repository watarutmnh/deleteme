<?php
/**
 * Delete Me plugin for Craft CMS
 *
 * Allow users to delete their own account
 *
 * @author    Codegraph Inc.
 * @copyright Copyright (c) 2018 Codegraph Inc.
 * @link      https://cdgrph.com/
 * @package   DeleteMe
 * @since     1.0.0
 */

namespace Craft;

class DeleteMePlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Delete Me');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Allow users to delete their own account');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/watarutmnh/deleteme/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/watarutmnh/deleteme/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Codegraph Inc.';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://cdgrph.com/';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}