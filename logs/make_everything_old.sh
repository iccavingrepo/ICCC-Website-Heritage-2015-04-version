rm access.log

for i in ` seq 10 -1 1 ` 
#/var/log/apache/access*.gz
do
 echo Doing /var/log/apache/access.log.${i}.gz
cat /var/log/apache/access.log.${i}.gz | gzip -d | grep caving >> access.log
# ./webalizer -i
done

#./webalizer -i
