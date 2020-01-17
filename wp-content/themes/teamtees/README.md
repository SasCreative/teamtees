[![Build Status](https://api.travis-ci.org/teamtees/teamtees.svg?branch=master)](https://travis-ci.org/teamtees/teamtees)
[![Wordpress Theme Version](https://img.shields.io/wordpress/theme/v/teamtees.svg)](https://wordpress.org/themes/teamtees) 
[![Wordpress Theme Active Installs](https://img.shields.io/wordpress/theme/installs/teamtees.svg)](https://wordpress.org/themes/teamtees/) 
[![Github Last Commit](https://img.shields.io/github/last-commit/teamtees/teamtees)](https://github.com/teamtees/teamtees/commits/master) 
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0)

#### See: [Official Demo](https://teamtees.com/teamtees) | Read: [Official Docs Page](https://teamtees.github.io/)

# teamtees WordPress Theme Framework

Website: [https://teamtees.com](https://teamtees.com)

Child Theme Project: [https://github.com/teamtees/teamtees-child](https://github.com/teamtees/teamtees-child)

## About

I’m a huge fan of Underscores, Bootstrap, and Sass. Why not combine these into a solid WordPress Theme Framework? That’s what teamtees is. You can use it as a starter theme and build your own theme on top of it. Or you can use it as a parent theme and create your own child theme for teamtees.

## License
teamtees WordPress Theme, Copyright 2013-2018 Holger Koenemann
teamtees is distributed under the terms of the GNU GPL version 2

http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

## Changelog
See [changelog](CHANGELOG.md)


## Basic Features

- Combines Underscore’s PHP/JS files and Bootstrap’s HTML/CSS/JS.
- Comes with Bootstrap (v4) Sass source files and additional .scss files. Nicely sorted and ready to add your own variables and customize the Bootstrap variables.
- Uses a single minified CSS file for all the basic stuff.
- [Font Awesome](http://fortawesome.github.io/Font-Awesome/) integration (v4.7.0)
- Jetpack ready.
- WooCommerce support.
- Contact Form 7 support.
- [Child Theme](https://github.com/teamtees/teamtees-child) ready.
- Translation ready.

## Starter Theme + HTML Framework = WordPress Theme Framework

The _s theme is a good starting point to develop a WordPress theme. But it is “just” a raw starter theme. That means it outputs all the WordPress stuff correctly but without any layout or design.
Why not add a well known and supported layout framework to have a solid, clean and responsive foundation? That’s where Bootstrap comes in.

## Confused by All the CSS and Sass Files?

Some basics about the Sass and CSS files that come with teamtees:
- The theme itself uses the `/style.css`file only to identify the theme inside of WordPress. The file is not loaded by the theme and does not include any styles.
- The `/css/theme.css` and its minified little brother `/css/theme.min.css` file(s) provides all styles. It is composed of five different SCSS sets and one variable file at `/sass/theme.scss`:

 ```@import "theme/theme_variables";  // 1. Add your variables into this file. Also add variables to overwrite Bootstrap or teamtees variables here
 @import "../src/bootstrap-sass/assets/stylesheets/bootstrap";  // 2. All the Bootstrap stuff - Don´t edit this!
 @import "teamtees/teamtees"; // 3. Some basic WordPress stylings and needed styles to combine Boostrap and Underscores
 @import "../src/fontawesome/scss/font-awesome"; // 4. Font Awesome Icon styles
 // Any additional imported files //
 @import "theme/theme";  // 5. Add your styles into this file
 ```

- Don’t edit the number 2-4 files/filesets listed above or you won’t be able to update teamtees without overwriting your own work!
- Your design goes into: `/sass/theme`.
  - Add your styles to the `/sass/theme/_theme.scss` file
  - And your variables to the `/sass/theme/_theme_variables.scss`
  - Or add other .scss files into it and `@import` it into `/sass/theme/_theme.scss`.

## Installation
There are several ways to install teamtees. We'll look at three of them: (1) classic install by uploading teamtees to a WordPress install, (2) using npm, and (3) using the theme directory in WordPress.

### Classic install
- Download the teamtees folder from GitHub or from [https://teamtees.com](https://teamtees.com)
- IMPORTANT: If you download it from GitHub make sure you rename the "teamtees-master.zip" file just to "teamtees.zip" or you might have problems using child themes!
- Upload it into your WordPress installation theme subfolder: `/wp-content/themes/`
- Login to your WordPress backend
- Go to Appearance → Themes
- Activate the teamtees theme

### npm install
- Open your terminal
- Change to the directory where you want to add teamtees
- Type `npm install teamtees`

### WordPress.org install
- Open your WordPress backend
- Click on "Appearance -> Themes"
- Hit the "Add new" button
- Search for "teamtees"
- Hit the "install" button
- Activate the theme

## Developing With npm, Gulp and SASS and [Browser Sync][1]

### Installing Dependencies
- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your teamtees copy
- Run: `$ npm install`

### Running
To work with and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:
```javascript
{
    "browserSyncOptions" : {
        "proxy": "localhost/theme_test/", // <----- CHANGE HERE
        "notify": false
    },
    ...
};
```
- then run: `$ gulp watch-bs`

## How to Use the Built-In Widget Slider

The front-page slider is widget driven. Simply add more than one widget to widget position “Hero”.
- Click on Appearance → Widgets.
- Add two, or more, widgets of any kind to widget area “Hero”.
- That’s it.

## RTL styles?
Add a new file to the themes root folder called rtl.css. Add all alignments to this file according to this description:
https://codex.wordpress.org/Right_to_Left_Language_Support

## Page Templates
teamtees includes several different page template files: (1) blank template, (2) empty template, and (3) full width template.

### Blank Template

The `blank.php` template is useful when working with various page builders and can be used as a starting blank canvas.

### Empty Template

The `empty.php` template displays a header and a footer only. A good starting point for landing pages.

### Full Width Template

The `fullwidthpage.php` template has full width layout without a sidebar.

## Footnotes

[1] Visit [http://browsersync.io](http://browsersync.io) for more information on Browser Sync

Licenses & Credits
=
- Font Awesome: http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
and of course
- jQuery: https://jquery.org | (Code licensed under MIT)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
- Bootstrap Gallery Script based on Roots Sage Gallery: https://github.com/roots/sage/blob/5b9786b8ceecfe717db55666efe5bcf0c9e1801c/lib/gallery.php
