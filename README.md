# This is a theme create for a Drupal theme test 

The Drupal URL with the this theme installed can be seen [here](http://compucorp.slict.net/themertest/)
The task was to convert a PSD to a working theme https://bitbucket.org/compucorp/open-charity-design/src/6d232712e84729c41e9c3a8205ea1f411f898da4/Website/?at=master

The task required only the front page to be themed, but no CSS frameworks can be used 
The theme CSS is built up upon SCSS, and attempts at its best to adhere to BEM and SMACSS methodolies,
- The SCSS in theme was compiled by a Drupal module (https://www.drupal.org/project/sassy), the `style.scss` file in the `scss` folder is referenced in the template's `open_charity.info` file.
- The `style.scss` imports all the other scss files in the `scss` folder named to adhere to SMACSS structure

- The regions used in the template intro are very minimal, 2 regions that stand out are the 
 -`regions[header_left] = Header Left`
 -`regions[header_right] = Header Right`
These 2 regions hold the logo and and the primary menu, on the top left and right sides

The template attempts to use the leanest HTML output whereever makes sense, and that also allows to inject css classes to abide the BEM class naming convention

- To output such lean code the `template.php` defines a few `HOOK_field` derivatives to inject a few classes and slightly alter render arrays.
- Most of the lean code is generated off the `.tpl` files that reside in the `templates` folder, Here the template files related to fields, views, paragraphs are available. 
- The `debug` mode in the settings.php was enabled to easily identify the required `tpl` file names.
- The devel module also was installed for easy debugging.
- In order to demonstrate my coding capabilities, I deliberately avoided using the Display Suite module, which allows to do lots of output customization without touching code.

-The fonts folder holds several fonts that were availalbe in the bitbucket repositary that was shared, but in order to keep the load times fast only 2 main font are used in the template, they are defined in the 'scss/6_fonts.scss' file, 
-`MuseoSans-300.otf` and `OpenSans-Regular.ttf` 

Another custom built font was generated off `http://fontello.com/`where only the required icons were selected and exported out as a font, this gives two benifits
-The fonts are rendered crisp and clear even on high res screens
-As only the required icons were packed together to ovehead of loading 100s of other icons is avoided, 
The icon font from fontello is at `fonts/opencharity-fa-social` folder, the `scss` definitions are at `scss/7_icon-font.scss`.

## Content Authoring
Keeping the site easily editabl by even a non tech savy person is always my goal.
After analysing the PSD file, I created several new custom content types.
- Landing Page - Holds the content defined in the front page. The front page is a node of this type
- Notices - This is to add events that appear just below mast image
- Open Charity Member - This holds images of each Member listed in the Our Member section
- Articles - This content type was used to hold blog contents.

The Landing page is linked with the paragraph field (https://www.drupal.org/project/paragraphs), which allows to define each section of the front page, As much as possible paragragh bundles were created for reuse. The view modes of the bundles were manipulated to repurpose the bundle output.

The block interface was left to be minimally used, where only the header left, header right, content and footer regions were filled with blocks,
For menus, 2 menus were used, one for the main menu and the other which to hold social media icons.

For carousals, Slick(https://www.drupal.org/project/slick) module was used and configured work non obstuctively on responsive environemnt.

For Our Members, Blogs and Next event, the views module was used.

## CSS use
Since there was a limitation of not to use any CSS frameworks, all of the css was hand coded except for a few
- A reset scss script was taken from 'http://meyerweb.com/eric/tools/css/reset/'
- A gradient was generated from 'http://colorzilla.com/gradient-editor'
 
### CSS Flexbox
Since we were targetting modern browsers CSS FlexBox definitions were used for layout and positioning 
'https://css-tricks.com/snippets/css/a-guide-to-flexbox/' was an indipesnsable article about FlexBox.

### Rems, Ems and PX
To keep responsive code lean and scalable, Rems were used for font sizes and Ems were used for padding, margins and dimensions

### Media Queries
The site was defined in the 3 breakpoints, mobile(480px), tablet(768px) and desktop(1110px), SCSS scripts were wrtten with extensibility in mind for Media Queries

### SCSS mixins and @extend
SCSS scripts were wrtten with extensibility and DRY in mind. The SCSS variables for colors, fontname and mediaquery breakpints were used. Several mixins and extendable classes were defined, most of them were defined in `scss/2_layout.scss` file