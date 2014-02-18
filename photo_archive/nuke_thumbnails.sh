#for i in *--thumb.jpg */*--thumb.jpg */*/*--thumb.jpg */*/*/*--thumb.jpg
for i in */.fcache */*/.fcache 
do
 echo $i
 rm "$i"
done
