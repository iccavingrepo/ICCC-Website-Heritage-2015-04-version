for i 
do
 echo "Optimising: ${i}"
 before=` ls -l "${i}" | cut -f5 -d\  `
 jpegtran -optimize -progressive -copy all "${i}" > tmp.jpg
 after=` ls -l tmp.jpg | cut -f5 -d\  `

 echo "Before: ${before} bytes After: ${after} bytes."
# echo "100.0*${before}/${after}" | bc -l

 mv tmp.jpg "${i}"
done

