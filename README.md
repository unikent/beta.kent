# beta.kent

# THIS THEME IS STILL IN BETA AND NOT FOR APPROVED FOR PRODUCTION USE

## Usage

This theme is still in beta and not approved for production use, please refer to the [current brand guidelines](https://www.kent.ac.uk/brand) for use of the existing brand.

- This repository has been created for the Kent beta site index page
- This is to keep the [Kent Theme](https://github.com/unikent/kent-theme) clean
- This repo will pull in dependencies from [Kent Beta Libs](https://github.com/unikent/kent-beta-libs)

## Setup

This repository needs the [https://github.com/unikent/kent-theme](https://github.com/unikent/kent-theme) repository to be set up. Please refer to that repository's readme for instructions.

Once that is done, you just need to:

a) download/clone `beta.kent` into your web root for localhost etc.

b) modify `bootstrap.php` in the root of `beta.kent` so that line 3 points to the bootstrap.php file in your kent-theme code. For example, `include '/path/to/kent-theme/lib/bootstrap.php';`

c) copy any media folders for images and videos into `/media`. Images required by pages within the beta.kent site & pattern libraries are stored in a `media` directory beta.kent shared folder on the www-test & www-live servers. A set also exists used by the UX developers. Please contact us for details.

d) browse to http://localhost/my-beta.kent/index.php
