
# Opencart Module Template Generator

Create a basic template for Opencart module using Robo. This repo modified from [Opencart Module Generator by Nursan Amar](https://github.com/nursanamar/OpenCart-module-generator)
## Note

    Requirement: PHP 7.x
## Installation


```bash  
  
#Clone the repository  
$ git clone https://github.com/zakisu/opencart-module-generator.git  
$ cd opencart-module-generator  
  
#Install dependecies  
$ composer install  
  
#.env file  
$ cp .env.example .env  
  
```  

Setup your `.env` file
### Example .ENV Setting

    OC_ROOT="/var/www/html/oc37"  
    MODULE_NAME="Anon Module"  
    MODULE_VER="1.0.0"  
    YAKPRO_PO_CONFIG_FILE="/usr/local/yakpro-po/yakpro-po.cnf"  
    STORE_DOMAIN="your-web-site.com"  
    STORE_USERNAME="admin"  
    STORE_PASSWORD="admin"


## Usage

### Create new module

```bash  
$ vendor/bin/robo module:new```  
Generate controller,model,view,etc files in `src`  
  
### Install module  
  
```bash  
$ vendor/bin/robo module:install```  
Copy all file form `src/upload` into your Opencart directory (from your .env file)  
  
### Watch module  
  
```bash  
$ vendor/bin/robo module:watch```  
  
Wacth any changes in `src/upload` and copy changed files into Opencart directory (from your .env file)  
  
### Build module  
  
```bash  
$ vendor/bin/robo module:build
```  

Generate ocmod file in `build` folder, add `--with-obf` option to build the obfuscated version of your ocmod

### Deploy module

```bash  
$ vendor/bin/robo module:deploy```  
  
Upload generated ocmod file to the store