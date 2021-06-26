#clean dump gz and update
rm dump/*.gz && git pull

#create sql gz
drush cr && drush sql-dump --gzip --result-file=../dump/dump-file.sql

#create files  gz
cd web/sites/default/ && tar cvzf ../../../dump/files.tar.gz files/ && cd -

#add to git
git add . && git commit -m "add files dump gz" && git push
