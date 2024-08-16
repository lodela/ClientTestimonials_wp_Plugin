# Client Testimonials

**Description:** The "Client Testimonials" plugin allows you to easily display testimonials from your clients on your WordPress site. This plugin offers a customizable shortcode to embed testimonials anywhere on your site, along with a user-friendly admin interface for managing the testimonials.  
**Version:** 1.0  
**Author:** Norberto Lodela  
**License:** GPL2

## Table of Contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Installation](#installation)
4. [Usage](#usage)
5. [File Structure](#file-structure)
6. [Changelog](#changelog)
7. [Contributing](#contributing)
8. [License](#license)

## Features

- **Custom Shortcode**: Easily embed client testimonials anywhere on your site using a simple shortcode.
- **Admin Interface**: Manage testimonials through a dedicated section in the WordPress admin panel.
- **Responsive Design**: Testimonials are displayed in a mobile-friendly layout.
- **Image Support**: Add images to your testimonials to enhance credibility.
- **Customizable Display**: Customize the look and feel of testimonials through CSS.
- **Multi-language Support**: Includes translation-ready files for easy localization.
- **Lightweight**: Minimal impact on site performance, optimized for speed.

## Requirements

- WordPress 4.0 or higher
- PHP 7.0 or higher

## Installation

### From GitHub

1. Download the latest release of the plugin from the [Releases](https://github.com//lodela/ClientTestimonials_wp_Plugin/releases) page.
2. Go to your WordPress admin dashboard.
3. Navigate to `Plugins > Add New > Upload Plugin`.
4. Click on `Choose File` and select the downloaded ZIP file.
5. Click `Install Now`.
6. Once installed, click `Activate` to enable the plugin.

### Manual Installation

1. Download the plugin ZIP file from the [Releases](https://github.com//lodela/ClientTestimonials_wp_Plugin/releases) page.
2. Unzip the file.
3. Upload the `client-testimonials` directory to the `/wp-content/plugins/` directory on your server.
4. Go to your WordPress admin dashboard.
5. Navigate to `Plugins` and locate `Client Testimonials`.
6. Click `Activate` to enable the plugin.

## Usage

1. **Adding Testimonials**: After activation, a new "Testimonials" section will appear in the WordPress admin menu. You can add, edit, or delete testimonials from here.
2. **Embedding Testimonials**: Use the shortcode `[client_testimonials]` to display testimonials on any page or post. The shortcode accepts optional parameters for customization.
3. **Customizing Display**: You can customize the display of testimonials by editing the CSS file located in the `assets/css` directory or by adding custom CSS to your theme.

## File Structure

```plaintext
client-testimonials/
├── includes/
│   └── class-client-testimonials.php
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
├── languages/
│   └── client-testimonials.pot
├── tests/
│   ├── bootstrap.php
│   └── TestShortcode.php
├── client-testimonials.php
├── uninstall.php
├── README.md
├── LICENSE
├── composer.json
