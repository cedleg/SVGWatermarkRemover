SVGWatermarkRemover
=====
Seb's app with inkscape PNG output

## Prerequisites
* PHP 5.6 and above
* apache2 server

## Installation
Clone this repository into your /var/www folder (or your favorite working folder)
```
git clone https://github.com/cedleg/SVGWatermarkRemover.git
cd SVGWatermarkRemover
mkdir output
sudo chmod -R 777 output
```
if you want to install bootstrap
```
npm install
```

### For apache2 users
By default, php is set with 20 max file uploads and 2MB max filesize.
<br>
In order to modifiy these settings, you have to modify php.ini this way :

##### Edit /etc/php/7.0/apache2/php.ini to change these values
```
upload_max_filesize = 256M
max_file_uploads = 70
```
##### Restart apache2 server
```
sudo service apache2 restart
```

## Usage
http://localhost/SVGWatermarkRemover/

* Click on browse button.
* You can select multiple files.
* Click on upload button.
* You have the result inside the browser.
* You can copy your files from /var/www/output folder.

### Origin
[Sébastien Lorrain](https://github.com/sldevand)

