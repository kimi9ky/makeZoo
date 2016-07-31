# Changelog

## 1.2.5 - 2014-07-19

- Added patch from Tanner Moushey to fix issue where custom fields could only be unique. This allows non-unique custom fields.

## 1.2.4 - 2014-06-04

- Update to allow adding classes to the edit button.

## 1.2.3 - 2014-05-17

- Updated taxonomies to allow for more than one custom taxonomy to have value retrieved when updating.

## 1.2.2 - 2014-05-17

- Fixed prefix property to contant slip.

## 1.2.1 - 2014-05-17

- Added a filter to allow multifield values to be adjusted.

## 1.2 - 2014-05-13

- Added the shortcode support to Gravity Forms main shortcode.

## 1.1 - 2014-02-14

- Finished the file upload upgrades with featured image deletion and hiding upload input when image exists until it is deleted.

## 1.0.1 - 2014-02-14

- Updated file upload fields to hide input when a file exists and show it if the file is deleted.

## 1.0.0 - 2014-02-13

- Acknowledging that this plugin doesn't really work with the original anymore, I distiguishing it by marking a new version: 1.0 from 0.x.
- This should fix the strange output when users directories aren't writable. There is a test to make sure the directory is writable before sending the image to Wordpress core to crop.

## 0.6.4 - 2014-02-13

- Images/Files can now be required on update.

## 0.6.3.3 - 2014-02-04

- Fixed bug in anonymous function replacement. There is still an anonymous function left... Not sure if I can get rid of it. Going to stop trying.
- Added support for multiple capabilities.
- Added ability to turn off image resizing for now to better support users with the crazy output from GD.

## 0.6.3.2 - 2014-02-04

- Now supports the list field, at least with the default text field(s).

## 0.6.3.1 - 2014-02-04

- Removed two anonymous functions in an effort to support php 5.2 users.

## 0.6.3.0 - 2013-10-21

- Small bug change when adding a conditional to the form for the first time.

## 0.6.2.9 - 2013-10-15

- process_request was moved to the 'wp' action to make sure the taxonomies were loaded for post set up. This cause problems with the actual form processing because the form wasn't getting the post_id soon enough and started creating new posts. It was tricky to put back and still get all of the taxonomy support, but this seems to fix it.

## 0.6.2.8 - 2013-10-15

- Added an empty test for fieldType and type on image field type tests in "gform_field_content" filter.

## 0.6.2.7 - 2013-10-15

- Fix for categories, tags, and taxonomies when editing on a separate page.

## 0.6.2.6 - 2013-10-15

- Updated categories, tags, and added initial support for custom taxonomies through the gf custom post type plugin.

## 0.6.2.5 - 2013-10-15

- Fixed getting post thumbnail for current page/post instead of post that is currently being edited.

## 0.6.2.4 - 2013-10-15

- Fileuploads were always getting duplicated in database, becuase the method used was a carrie over from a fix for the old update posts plugin. This simplified it and makes sure fileuploads are never duplicated in database now.

## 0.6.2.3 - 2013-10-03

- Fixed an issue from last update where nonce was required for $_POST. This broke actual form posting. I reverted that aspect.

## 0.6.2.2 - 2013-09-27

- Updated the query variable form setup to always require a nonce and to better support posting the post_id to set up a form. Though it is highly unrecommended and doesn't really seem to work.

## 0.6.2.1 - 2013-09-20

- Added error checking for thumbnail save. If it doesn't work, we just move on and use the full sized image. Need to figure out what is causing save problem.

## 0.6.2 - 2013-09-19

- Overhauled the image thumbnail generation to start using the newer WP_Image_Editor instead of image_make_intermediate_size.

## 0.6.1 - 2013-09-19

- Removed error output from unlink when a file doesn't exist. Stopped the default thumbnail on post images, so post image thumbs only show up when there is an actual image.