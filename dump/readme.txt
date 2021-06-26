#create sql gz
drush cr && drush sql-dump --gzip --result-file=../dump/dump-file.sql

#create files  gz
 cd web/sites/default/ && tar cvzf ../../../dump/files.tar.gz files/