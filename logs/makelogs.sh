rm access.log
#cat /var/log/apache/access.log.5.gz | gzip -d | grep caving >> access.log
#cat /var/log/apache/access.log.4.gz | gzip -d | grep caving >> access.log
cat /var/log/apache/access.log.3.gz | gzip -d | grep caving >> access.log
cat /var/log/apache/access.log.2.gz | gzip -d | grep caving >> access.log
cat /var/log/apache/access.log.1.gz | gzip -d | grep caving >> access.log
grep caving /var/log/apache/access.log >> access.log
./webalizer
rm access.log
