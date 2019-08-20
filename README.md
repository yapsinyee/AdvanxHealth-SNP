# SNP Analysis Tool for Advanx Health

## Link to the tool
https://snp.advanxhealth.com

## Usage
- Enter a list of Single Nucleotide Polymorphisms (SNPs) ID to be cross-checked with Infinium Asian Screening Array (ASA) v1.0 Manifest File.
The ASA file is downloaded from http://sapac.support.illumina.com/downloads/infinium-asian-screening-array-v1-0-product-files.html

## Description for Main Files
### Frontend
- index.php : The main page when user access to snp.advanxhealth.com . The text area allows the user to enter a list of query SNP(s).
- result.php : A result page that display a table of query results. 3 colors are used in rows to represent the matching level (Green: Perfect matched. Yellow: Partially matched. Red: Not found in ASA file.)

### Backend (MySQL)
- dbconfig.php : A section of code to configure database connection. Environment variables "DB_USER" and "DB_KEY" are the username and password to access the database. These 2 variables should be defined in local environment (server).
- query.php : A section of code to make query using MySQL based on the input SNP(s). It also measures the total time taken of the query and display it on result page.

## Deployment
- This tool is hosted on Digital Ocean droplet (Ubuntu 18.04.3).

## Limitations
- Due to server computational limitations, it is recommended that the maximum number of input SNP(s) per list is 150. Server might return TIMEOUT when there is more than 200 SNPs.

## Acknowledgement
- Bootstrap Template [Start Bootstrap - Landing Page](https://startbootstrap.com/template-overviews/landing-page/)

