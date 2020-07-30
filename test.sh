#!/bin/sh
file="$1"

if ! test -f $file ; then
  echo The file $file does not exist!
  exit
fi
echo $1
# List the TIFILES into a proper basic program
php5 basic.php LIST $file > $file.list
# List the TIFILES into a tokenized program
php5 basic.php LIST DEBUG $file > $file.toks
# Compile the listed program back into a TIFILE
php5 basic.php COMPILE $file.list > $file.newbin
# List the newbin and compare the contents.
php5 basic.php LIST DEBUG $file.newbin > $file.newtoks
# Diff them, there should be no difference at all
# if everything worked ok.
diff $file.toks $file.newtoks
# meld $car.toks $car.newtoks
#rm -f *.list *.toks *.newbin *.newtoks
