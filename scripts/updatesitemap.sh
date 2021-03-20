#!/bin/bash
# backup the Sitemap.xml and then create a new one
cd /var/www/tysonweb
dir=other
bkupdate=`date +%B-%d-%y`
filename="Sitemap.$bkupdate.xml"
scripts/updatesitemap.php > sitemap.$$
mv Sitemap.xml $dir/$filename
mv sitemap.$$ Sitemap.xml
gzip $dir/$filename

#echo "updatesitemap.sh for bartonlp.com Done"
