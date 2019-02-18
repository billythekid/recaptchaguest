# recaptchaguest plugin for Craft CMS 3.x

Integrate [matt-west/craft-recaptcha](https://github.com/matt-west/craft-recaptcha) with [craftcms/guest-entries](https://github.com/craftcms/guest-entries)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require billythekid/recaptchaguest

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for recaptchaguest.

## recaptchaguest Overview

This plugin hooks together [matt-west/craft-recaptcha](https://github.com/matt-west/craft-recaptcha) with [craftcms/guest-entries](https://github.com/craftcms/guest-entries) to allow you to use the recaptcha validation in your guestentry submissions.

## Configuring recaptchaguest

There are no configuration options. Follow the instructions to install [matt-west/craft-recaptcha](https://github.com/matt-west/craft-recaptcha) plugin. If you select to validate contact form and this plugin is installed any guestentry form submissions will be validated against the recaptcha field.
(And will fail validation if the recaptcha code is not correct / is not supplied so make sure that the recaptcha field is [rendered on your form as per the instructions](https://github.com/matt-west/craft-recaptcha#using-craft-recaptcha)) 
