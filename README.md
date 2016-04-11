# Recaptcha Guest
Plugin to allow the use of the [aberkie/craft-recaptcha](https://github.com/aberkie/craft-recaptcha) plugin in [Guest Entries](https://github.com/pixelandtonic/GuestEntries) submissions.

## Pre-requisites
This plugin is a middle-man to tie together the following plugins:  
* [Guest Entries](https://github.com/pixelandtonic/GuestEntries)  
* [Google reCAPTCHA for Craft CMS](https://github.com/aberkie/craft-recaptcha)  

This means both these plugins should be installed and configured as per their documentation before installing the Recaptcha Guest plugin.

## Installation and use
Place the recaptchaguest folder in your craft plugins directory. Activate the plugin in the admin settings.  
That's it! If any of your Guest Entries forms have the recaptcha field on them, they will only save if it validates.  
No other types of form submissions are affected.
