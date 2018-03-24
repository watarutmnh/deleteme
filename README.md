# Delete Me plugin for Craft CMS

Allow users to delete their own account

![Screenshot](resources/screenshots/plugin_logo.png)

## Installation

To install Delete Me, follow these steps:

1. Download & unzip the file and place the `deleteme` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/watarutmnh/deleteme.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `deleteme` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Delete Me works on Craft 2.4.x and Craft 2.5.x.

## Delete Me Overview

Delete Me is a plugin for Craft CMS to allow users to delete their own account from front end.

## Using Delete Me

let logged-in user to send a request to delete its own account.
You can set a url to redirect.
Use form like this:

```
<form method="post">
    {{ getCsrfInput() }}
    <input type="hidden" name="action" value="deleteMe/index">
    <input type="hidden" name="redirect" value="/url/redirect/to">
    <input type="hidden" name="userId" value="{{ currentUser.id }}">
    <button type="submit">Remove my account</button>
</form>
```
