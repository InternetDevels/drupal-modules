##core.make.yml
Drupal core and patches
    
###drupal
- **version**: 8.1.0
- **description**: 
***
##example.make.yml
Example make file. You may use it as basic make file for your project.

There are no projects in the yaml.

***
##admin.make.yml
Modules, which will help with administration routines: - faster access to the elements - better configuration

    
###coffee
- **version**: ~
- **description**: Coffee helps you navigate by keyboard in Drupal. Pressing Alt+d brings up a search box.
    
###admin_toolbar
- **version**: ~
- **description**: Admin Toolbar intends to improve the default Drupal Toolbar to transform it into a drop-down menu, providing a fast a full access of all the administration links.
    
###monitoring
- **version**: ~
- **description**: It provides a 360 degree perspective on Drupal system health.
    
###views_system
- **version**: ~
- **description**: The Views System module extends the Views module and allows to create customized lists (pages, blocks) of modules, themes, and theme engines that are or have been installed in Drupal's file system.

***
##community.make.yml
Communities sites modules set

    
###group
- **version**: ~
- **description**: The Group module allows you to create arbitrary collections of your content and users on your site and grant access control permissions on those collections
Group also allows you to create communities. Users of the site can become members of a Group. You can then decide what membership of a Group entitles them to, such as access to content only available to members of that Group. There can also be different levels of membership to a Group so, for example, you can have administrative members who can create content and basic members who can only view content within the Group.

***
##configurations.make.yml
Administer configurations, their deployment and updates

    
###config_update
- **version**: ~
- **description**: The report module supplements the core Configuration Manager module, by providing a report that allows you to see the differences between the configuration items provided by the current versions of your installed modules, themes, and install profile, and the configuration on your site.
    
###features
- **version**: ~
- **description**: If you simply need to export and deploy simple site configuration, the D8 configuration management system should be used instead of Features. You will use Features in D8 to export bundled functionality (like a 'photo gallery feature').
    
###config_tools
- **version**: ~
- **description**: Config Tools is a package of modules that help to manage your Drupal 8 configuration files. - Active configuration file handling - Git Configuration
    
###config_sync
- **version**: ~
- **description**: Configuration Synchronizer provides methods for safely importing site configuration from updated modules and themes.
    
###composer_manager
- **version**: ~
- **description**:     
###default_content
- **version**: ~
- **description**: Default content gives your module and install profile a way to ship default content as well as configuration. Powered by core's serialization, rest and hal modules.

***
##contact.make.yml
Contact form related functionality

    
###contact_block
- **version**: ~
- **description**: The Contact Block module provides contact forms in a block. It uses the contact forms that can be created using the Drupal 8 core Contact module.
    
###contact_storage
- **version**: ~
- **description**: Contact Storage module will provide storage for Contact messages which are fully-fledged entities in Drupal 8. This plus core contact module aim to provide functionality equivalent to the base-features of Webform or Entity Form.

***
##development.utility.make.yml
Helper modules for development process. **SHOULDN'T BE ON PRODUCTION**

    
###devel
- **version**: ~
- **description**: Set of useful modules - Devel
  Helper functions for Drupal developers
- Generate content
  Quickly generates nodes, comments, terms, users, and more
- WebProfiler
  Add footer to review resource utilization, cache effectiveness, database queries, Views, and so much more
- Devel Node Access (DNA)
  View the node access entries for the node(s) that are shown on a page.
    
###config_devel
- **version**: ~
- **description**: Automated import of configuration files into the active storage. Automated export of configuration objects into files.
    
###masquerade
- **version**: ~
- **description**: The Masquerade module allows site administrators to switch users and surf the site as that user
    
###view_modes_display
- **version**: ~
- **description**: View Modes Display is a helper module to preview view modes for your entities.
    
###object_log
- **version**: ~
- **description**: The Object Log module allows developers to store objects, arrays and other variables to a log table so that they may be inspected later
    
###siteinfo
- **version**: ~
- **description**: Site Info is a module which displays site related information by simply installing it.

***
##development.validation.make.yml
Coding quality

    
###coder
- **version**: ~
- **description**: Coder checks your Drupal code against coding standards and other best practices. It can also fix coding standard violations for you with the phpcbf command from PHP_CodeSniffer
    
###w3c_validator
- **version**: ~
- **description**: W3C Validator provides a Drupal interface to use the W3C Markup Validator.
    
###be_sure
- **version**: ~
- **description**: The module provides three differents dashboards, where administrator can check status about SEO, performance or security parts of site.
    
###hacked
- **version**: ~
- **description**: This module scans the currently installed Drupal, contributed modules and themes, re-downloads them and determines if they have been changed. Changes are marked clearly and if the diff module is installed then Hacked! will allow you to see the exact lines that have changed.
    
###site_audit
- **version**: ~
- **description**: Site Audit is a Drupal static site analysis platform that generates reports with actionable best practice recommendations.
    
###security_review
- **version**: ~
- **description**: The Security Review module automates testing for many of the easy-to-make mistakes that render your site insecure.

***
##geo.make.yml
Geolocation amd maps

    
###address
- **version**: ~
- **description**: Provides functionality for storing, validating and displaying international postal addresses.
    
###geolocation
- **version**: ~
- **description**: 
***
##layout.make.yml
Layots managements

    
###ds
- **version**: ~
- **description**: Display Suite allows you to take full control over how your content is displayed using a drag and drop interface.
    
###styles_api
- **version**: ~
- **description**: This module allows other modules or themes to register theme templates on a YAML file (replacing hook_theme()) and provide a repository for all themes registered.
    
###layout_plugin
- **version**: ~
- **description**: Allows modules or themes to register layouts by simply providing a YAML file and some templates, and for other modules to list the available layouts and render them.
    
###page_manager
- **version**: ~
- **description**: This is the Drupal 8 version of Page Manager, formerly part of the CTools
    
###panels
- **version**: ~
- **description**: The Panels module allows a site administrator to create customized layouts for multiple uses

***
##migrate.make.yml
Migration

    
###migrate_plus
- **version**: ~
- **description**: Extends the core migration framework with additional functionality. Currently that includes a MigrationGroup configuration entity for grouping migrations, and a PREPARE_ROW event to make it easier to respond to and manipulate incoming source data.
    
###migrate_tools
- **version**: ~
- **description**: General-purpose drush commands and basic UI for managing migrations.
    
###migrate_upgrade
- **version**: ~
- **description**: Drush commands for running upgrades from Drupal 6 or 7 to Drupal 8.
    
###migrate_manifest
- **version**: ~
- **description**: 
***
##seo.make.yml


    
###metatag
- **version**: ~
- **description**:     
###redirect
- **version**: ~
- **description**:     
###pathauto
- **version**: ~
- **description**:     
###simple_sitemap
- **version**: ~
- **description**: 
***
##services.make.yml
Services

    
###restui
- **version**: ~
- **description**: 
***
##social.make.yml
Social

    
###social_links
- **version**: ~
- **description**: 
***
##tools.make.yml
Tools

    
###ultimate_cron
- **version**: ~
- **description**: 
***
##utility.make.yml


    
###advanced_help
- **version**: ~
- **description**:     
###ctools
- **version**: ~
- **description**:     
###token
- **version**: ~
- **description**:     
###special_menu_items
- **version**: ~
- **description**: Special menu items is a Drupal module that provides placeholder and separator menu items
    
###diff
- **version**: ~
- **description**: The tab shows all revisions like standard Drupal but it also allows pretty viewing of all added/changed/deleted words between revisions.

***
