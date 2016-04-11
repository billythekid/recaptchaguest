<?php
    namespace Craft;


    /**
     * Class RecaptchaGuestPlugin
     * @package Craft
     */
    class RecaptchaGuestPlugin extends BasePlugin
    {

        /**
         * @return string
         */
        public function getName()
        {
            return 'Recaptcha Guest';
        }

        /**
         * @return string
         */
        public function getVersion()
        {
            return '0.0.1';
        }

        /**
         * @return string
         */
        public function getSchemaVersion()
        {
            return '0.0.1';
        }

        /**
         * @return string
         */
        public function getDeveloper()
        {
            return 'Billy Fagan';
        }

        /**
         * @return string
         */
        public function getDeveloperUrl()
        {
            return 'http://the-kid.org';
        }

        /**
         * @return string
         */
        public function getPluginUrl()
        {
            return 'https://github.com/billythekid/recaptchaguest';
        }

        /**
         * @return string
         */
        public function getDocumentationUrl()
        {
            return $this->getPluginUrl() . '/blob/master/README.md';
        }

        /**
         * @return string
         */
        public function getReleaseFeedUrl()
        {
            return 'https://raw.githubusercontent.com/billythekid/recaptchaguest/master/releases.json';
        }

        /**
         * @return bool
         */
        public function hasSettings()
        {
            return false;
        }

        public function init()
        {
            craft()->on('guestEntries.beforeSave', function (GuestEntriesEvent $event)
            {
                $entryModel = $event->params['entry'];

                $captcha = craft()->request->getPost('g-recaptcha-response');
                $verified = craft()->recaptcha_verify->verify($captcha);

                if (!$verified)
                {
                    //Uh oh...its a robot. Don't process this form!
                    $entryModel->addError('recaptcha', "There was a problem with the captcha.");
                    $event->isValid = false;
                }


            });
        }
    }