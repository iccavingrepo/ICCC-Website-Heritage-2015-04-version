rm tmp.dat

for i in /var/log/apache/access.log.*.gz
do 
 echo $i
 cat $i | gzip -d | grep caving  | grep photo_archive | grep -i jpg\ HTTP | grep -v thumb | cut -f2 -d\"  | cut -f2 -d\  >> tmp.dat
done
