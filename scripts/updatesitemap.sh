#!/bin/bash
# backup the Sitemap.xml and then create a new one
echo "newbern-nc.info: updatesitemap.sh Start"
cd /var/www/tysonweb
dir=other
bkupdate=`date +%B-%d-%y`
filename="Sitemap.$bkupdate.xml"
scripts/updatesitemap.php > sitemap.$$
mv Sitemap.xml $dir/$filename
mv sitemap.$$ Sitemap.xml
gzip $dir/$filename
find $dir -ctime +30 -exec rm '{}' \;
echo "newbern-nc.info: updatesitemap.sh Done"
