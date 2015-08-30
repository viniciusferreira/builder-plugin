<?php

return [
    'plugin' => [
        'name' => 'Builder',
        'description' => 'Provides visual tools for building October plugins.',
        'add' => 'Create plugin',
        'no_records' => 'No plugins found',
        'no_description' => 'No description',
        'no_name' => 'No name',
        'search' => 'Search...',
        'filter_description' => 'Display all plugins or only your plugins.',
        'settings' => 'Settings',
        'entity_name' => 'Plugin',
        'field_name' => 'Name',
        'field_author' => 'Author',
        'field_description' => 'Description',
        'field_icon' => 'Plugin icon',
        'field_plugin_namespace' => 'Plugin namespace',
        'field_author_namespace' => 'Author namespace',
        'field_namespace_description' => 'Namespace can contain only Latin letters and digits and should start with a Latin letter.',
        'field_author_namespace_description' => 'You cannot change the namespaces with Builder after you create the plugin.',
        'tab_general' => 'General parameters',
        'tab_description' => 'Description',
        'field_homepage' => 'Plugin homepage URL',
        'no_description' => 'No description provided for this plugin',
        'error_settings_not_editable' => 'Settings of this plugin cannot be edited with Builder.'
    ],
    'author_name' => [
        'title' => 'Author name',
        'description' => 'Default author name to use for your new plugins. The author name is not fixed - you can change it in the plugins configuration at any time.'
    ],
    'author_namespace' => [
        'title' => 'Author namespace',
        'description' => 'If you develop for the Marketplace, the namespace should match the author code and cannot be changed. Refer to the documentation for details.'
    ],
    'database' => [
        'menu_label' => 'Database',
        'no_records' => 'No tables found',
        'search' => 'Search...',
        'confirmation_delete_multiple' => 'Do you really want to delete the selected tables?',
        'field_name' => 'Table name',
        'tab_columns' => 'Columns',
        'column_name_name' => 'Column',
        'column_name_required' => 'Please provide the column name',
        'column_name_type' => 'Type',
        'column_type_required' => 'Please select the column type',
        'column_name_length' => 'Length',
        'column_validation_length' => "The Length value should be integer or specified as precision and scale (10,2) for decimal columns. Spaces are not allowed in the length column.",
        'column_validation_title' => 'Only digits, lower-case Latin letters and underscores are allowed in column names',
        'column_name_unsigned' => 'Unsigned',
        'column_name_nullable' => 'Nullable',
        'column_auto_increment' => 'AUTOINCR',
        'column_default' => 'Default',
        'column_auto_primary_key' => 'PK',
        'tab_new_table' => 'New table',
        'btn_add_column' => 'Add column',
        'btn_delete_column' => 'Delete column',
        'confirm_delete' => 'Do you really want to delete the table?',
        'error_table_name_invalid_prefix' => "Table name should start with the plugin prefix: ':prefix'.",
        'error_table_name_invalid_characters' => 'Invalid table name. Table names should contain only Latin letters, digits and underscores. Names should start with a Latin letter and could not contain spaces.',
        'error_table_duplicate_column' => "Duplicate column name: ':column'.",
        'error_table_auto_increment_in_compound_pk' => 'An auto-increment column cannot be a part of a compound primary key.',
        'error_table_mutliple_auto_increment' => 'The table cannot contain multiple auto-increment columns.',
        'error_table_auto_increment_non_integer' => 'Auto-increment columns should have integer type.',
        'error_table_decimal_length' => "The Length parameter for :type type should be in format '10,2', without spaces.",
        'error_table_length' => 'The Length parameter for :type type should be specified as integer.',
        'error_unsigned_type_not_int' => "Error in the ':column' column. The Unsigned flag can be applied only to integer type columns.",
        'error_integer_default_value' => "Invalid default value for the integer column ':column'. The allowed formats are '10', '-10'.",
        'error_decimal_default_value' => "Invalid default value for the decimal or double column ':column'. The allowed formats are '1.00', '-1.00'.",
        'error_boolean_default_value' => "Invalid default value for the boolean column ':column'. The allowed values are '0' and '1'.",
        'error_unsigned_negative_value' => "The default value for the unsigned column ':column' can't be negative.",
        'error_table_already_exists' => "The table ':name' already exists in the database."
    ],
    'model' => [
        'menu_label' => 'Models'
    ],
    'controller' => [
        'menu_label' => 'Controllers'
    ],
    'version' => [
        'menu_label' => 'Versions'
    ],
    'menu' => [
        'menu_label' => 'Backend Menu'
    ],
    'localization' => [
        'menu_label' => 'Localization'
    ],
    'permission' => [
        'menu_label' => 'Permissions'
    ],
    'yaml' => [
        'save_error' => "Error saving file ':name'. Please check write permissions."
    ],
    'common' => [
        'error_file_exists' => "File already exists: ':path'.",
        'field_icon_description' => 'October uses Font Autumn icons: http://daftspunk.github.io/Font-Autumn/',
        'destination_dir_not_exists' => "The destination directory doesn't exist: ':path'.",
        'error_make_dir' => "Error creating directory: ':name'.",
        'error_dir_exists' => "Directory already exists: ':path'.",
        'template_not_found' => "Template file is not found: ':name'.",
        'error_generating_file' => "Error generating file: ':path'.",
        'error_loading_template' => "Error loading template file: ':name'.",
        'select_plugin_first' => 'Please select a plugin first. To see the plugin list click the > icon on the left sidebar.',
        'plugin_not_selected' => 'Plugin is not selected',
        'add' => 'Add'
    ],
    'migration' => [
        'entity_name' => 'Migration',
        'error_version_invalid' => 'The version should be specified in format 1.0.1',
        'field_version' => 'Version',
        'field_description' => 'Description',
        'field_code' => 'Code',
        'field_code_comment' => 'The migration code is read-only and for the preview purpose only. You can create custom migrations manually in the Versions section of the Builder.',
        'save_and_apply' => 'Save & Apply',
        'error_version_exists' => 'The migration version already exists.',
        'error_script_filename_invalid' => 'The migration script file name can contain only Latin letters, digits and underscores. The name should start with a Latin letter and could not contain spaces.',
        'no_changes_to_save' => 'There are no changes to save.',
    ]
];