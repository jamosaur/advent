<?php $p=$r=0;foreach(@file(i)as$d){@$b=explode(x,$d);sort($b,1);$s=$b[0]*$b[1];$p+=3*$s+2*$b[2]*($b[0]+$b[1]);$r+=($b[0]+$b[1])*2+$s*$b[2];}echo"$p $r";