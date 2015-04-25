# WordPress project setup

This is the way I seperate the core WordPress bits, into the core stuff that I don't version control and the stuff I do.

#### To version control plugins or not version control plugins (aka plugin dependencies)

Originally I used the TGM-Plugin-Activation class with the idea that it would save space in the repos.

The reality of having to manually mess about downloading, installing and activating plugins every time I moved the site from my different machines and the different servers caused more problems than it was worth.

One biggie is I use Git (via BeanStalk) to deploy changes and WP Migrate DB Pro to sync the data. When I updated a plugin locally and pushed the changes for BeanStalk to deploy. I would have to remember to both add the plugin to the required list to make TGM work. Upload the plugin manually because most of the core ones I use are paid for and not available on the WordPress repo. If I didn't and then migrated the local data to live. The data sent is assuming you are using a different version and would either deactivate the plugin, or give me errors becuse files were missing, or other things had changed.

I use Git solo, so now I just version control all the plugins, no biggie.

I use BeanStalk so I don't feel too guilty using slightly more space than I need.

More than once I have benefited from being able to revert back to an older version of a plugin (usually WooCommerce) when the update caused problems.


# Installation

Create your folder in the place you put your local files. In my case a folder in my home directory

```bash
cd ~/Development

mkdir NEW_SITE_NAME
cd NEW_SITE_NAME
```

Move both of the php files (index.php, wp-config.php) to the new folder.

Pop open a terminal window and run the following commands.

```bash
mkdir htdocs
mkdir sql
mv index.php htdocs/
mv wp-config.php htdocs/
cd htdocs
mkdir wrp
cd wrp
wget https://wordpress.org/latest.tar.gz
tar xzf latest.tar.gz
mv wordpress/* .
rm latest.tar.gz
rmdir wordpress
mv wp-content ../
rm index.php
cd ../
open .
```


## _S Theme

Download a custom Underscores theme (Sass version) from [http://underscores.me/](http://underscores.me/)

Plop that folder into

```bash
htdocs/wp-content/themes/
```

Setup the database and domain in MAMP and edit the wp-config file accordingly

***

Make sure you do a nice clean commit before editing the theme, and don't stage the wrp folder.