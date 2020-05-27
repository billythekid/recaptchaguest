<?php
/**
 * recaptchaguest plugin for Craft CMS 3.x
 * Integrate matt-west/craft-recaptcha with craftcms/guest-entries
 *
 * @link      https://billyfagan.co.uk
 * @copyright Copyright (c) 2019 Billy Fagan
 */

namespace billythekid\recaptchaguest;

use Craft;
use craft\base\Plugin;
use craft\elements\Entry;
use craft\guestentries\controllers\SaveController;
use craft\guestentries\events\SaveEvent;
use \craft\guestentries\Plugin as GuestEntryPlugin;

use mattwest\craftrecaptcha\CraftRecaptcha;
use yii\base\Event;

/**
 * Class Recaptchaguest
 *
 * @author    Billy Fagan
 * @package   Recaptchaguest
 * @since     1.0.0
 */
class Recaptchaguest extends Plugin
{
  // Static Properties
  // =========================================================================

  /**
   * @var Recaptchaguest
   */
  public static $plugin;

  // Public Properties
  // =========================================================================

  /**
   * @var string
   */
  public $schemaVersion = '1.0.0';

  // Public Methods
  // =========================================================================

  /**
   * @inheritdoc
   */
  public function init()
  {
    parent::init();
    self::$plugin = $this;

    if (class_exists(CraftRecaptcha::class) && Craft::$app->getPlugins()->isPluginEnabled('recaptcha'))
    {

      $settings = CraftRecaptcha::$plugin->getSettings();

      if (class_exists(GuestEntryPlugin::class) && Craft::$app->getPlugins()->isPluginEnabled('guest-entries') && $settings->validateContactForm)
      {
        Event::on(SaveController::class, SaveController::EVENT_BEFORE_SAVE_ENTRY, function (SaveEvent $e) {
          /** @var Entry $submission */
          $submission = $e->entry;

          $captcha = Craft::$app->getRequest()->getParam('g-recaptcha-response');

          $validates = CraftRecaptcha::$plugin->craftRecaptchaService->verify($captcha);

          if (!$validates)
          {
            $submission->addError('recaptcha', 'Please verify you are human.');
            $e->isValid = false;
          }
        });
      }
    }
  }

  // Protected Methods
  // =========================================================================

}
