# enrol\_iyzicopayment
![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/antandrostech/iyzico-moodle)
![License](https://img.shields.io/badge/license-AGPL%20v3%2B-success)
![GitHub repo size](https://img.shields.io/github/repo-size/antandrostech/iyzico-moodle?label=size)
![GitHub issues](https://img.shields.io/github/issues/antandrostech/iyzico-moodle)
![GitHub pull requests](https://img.shields.io/github/issues-pr/antandrostech/iyzico-moodle)

A plugin for [Moodle LMS](https://moodle.org) to use iyzico payments for course enrollments, developed by [Made by Sense](mailto:info@madebysense.co) and [Antandros Teknoloji](https://antandros.tech).

### Features

  - Set up paid courses with iyzico payments
  - Currency support (TRY, USD, EUR)
  - Limit max enrolled users
  - Default price and role settings
  - Enrollment duration limit option
  - BKM Express payments
  - Sandbox option for testing
  - Turkish language support

### Installation

You can install the plugin from Moodle administration, just download the zip file from "Releases" and upload it from "Modules > Install addon".

Plugin is also available at Moodle plugins directory, you may download it from the project page link below: 

<https://moodle.org/plugins/enrol_iyzicopayment>

### Screenshots

![iyzico payment](https://moodle.org/pluginfile.php/50/local_plugins/plugin_screenshots/2624/Ekran%20g%C3%B6r%C3%BCnt%C3%BCs%C3%BC_2021-01-29_16-26-19.png)

### Known issues

Unfortunately, on Turkish Moodle instances, due to the mistranslation of currency string, "Turkish Lira (TRY)" currency is listed as "Yeni Türk Lirası" instead of "Türk Lirası". We have sent a fix for this mistranslation, until it would have been merged, you may translate that string via internal Moodle language translation tool; the string is located under "core_currencies".

### License

Copyright (C) 2021  Antandros Teknoloji and Made by Sense

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

For commercial licensing, please contact with us via bilgi {at} antandros.com.tr 

