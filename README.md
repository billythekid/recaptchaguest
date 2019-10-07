# Recaptchaguest plugin for Craft CMS 3.x

Integrate [matt-west/craft-recaptcha](https://github.com/matt-west/craft-recaptcha) with [craftcms/guest-entries](https://github.com/craftcms/guest-entries)

## Requirements

This plugin requires Craft CMS 3.0.0-RC1 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require billythekid/recaptchaguest

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for recaptchaguest. 

Note: Click install for recaptcha and guest entries if they're not installed yet. This plugin will make them available if they don't exist already however it won't install them into your Craft project for you.

## Recaptchaguest Overview

This plugin hooks together [matt-west/craft-recaptcha](https://github.com/matt-west/craft-recaptcha) with [craftcms/guest-entries](https://github.com/craftcms/guest-entries) to allow you to use the recaptcha validation in your guestentry submissions.

## Configuring Recaptchaguest

There are no configuration options for this plugin however you will need to set up guest entries and recaptcha.

Follow the instructions to set up the [Recaptcha](https://github.com/matt-west/craft-recaptcha#configuring-craft-recaptcha) plugin. 

See the [Guest Entries](https://github.com/craftcms/guest-entries) notes on settings and how to set up a guest entries form.

[Output the recaptcha on your form](https://github.com/matt-west/craft-recaptcha#using-craft-recaptcha).

If you select to validate a guest entries form and this plugin is installed any guestentry form submissions will be validated against the recaptcha field.
(And will fail validation if the recaptcha code is not correct / is not supplied)
