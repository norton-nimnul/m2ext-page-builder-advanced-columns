# Advanced Columns for Magento 2 PageBuilder

This module modifies the default **Columns** content type in **Magento 2 PageBuilder**, changing the existing flex layout and adding support for `gap` settings.

## Features
- Modifies the default PageBuilder **Columns** content type.
- Enhances the existing flex layout.
- Adds the ability to configure **gap sizes** between columns.
- Gap size values can be customized in Magento Admin Panel.

## Configuration
You can configure the available **gap sizes** in:
```
Stores -> Configuration -> NortN -> PageBuilder
```
- Locate the **Advanced Columns** group.
- Modify the **Flex Gap Sizes** field to define available gap options.
- **Note:** If a value currently in use is removed from the configuration, any content using it will reset its value upon the next edit unless another option is selected.

## Installation
To install the module from Packagist, run the following commands:
```sh
composer require nortn/module-page-builder-advanced-columns
bin/magento module:enable NortN_PageBuilderAdvancedColumns
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage
After enabling the module:
- Go to **PageBuilder** and add a **Columns** content type.
- You will see the new **Flex Gap Sizes** option in the settings.
- Choose from the predefined gap values to adjust spacing between columns.

## Compatibility
- Magento 2.4.x
- Adobe Commerce (formerly Magento Commerce)

## Support
For any issues or feature requests, please open an issue on GitHub.

GitHub Repository: [m2ext-page-builder-advanced-columns](https://github.com/norton-nimnul/m2ext-page-builder-advanced-columns)

