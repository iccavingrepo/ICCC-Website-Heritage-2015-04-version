for i in "$@"
do  
 base="${i%.*}" 
 
 echo "${i}"
 echo "${base}"

 if [ ! -e "${base}--orig.jpg" ] 
 then
  echo "MeFi'ing..."

  mv "${i}" "${base}--orig.jpg"
  convert "${base}--orig.jpg" -resize 900x600 "${i}"

 else 
  echo "Already MeFi'd..."
 fi
done
