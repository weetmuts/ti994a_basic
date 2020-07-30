<?php
// Copyright Fredrik Ohrstrom 2012 oehrstroem@gmail.com
// Licensed to you under the GNU Affero GPLv3 
// http://www.gnu.org/licenses/agpl-3.0.html

// Initialize the token table 
for ($i=0; $i<=128; ++$i) {   
    $tokens[$i] = chr($i);
}

$tokens[128] = "<WOOT128?>";     // 0x80
$tokens[129] = "ELSE";           // 0x81
$tokens[130] = " :: ";           // 0x82 *
$tokens[131] = "!";              // 0x83 *
$tokens[132] = "IF";             // 0x84
$tokens[133] = "GO";             // 0x85
$tokens[134] = "GOTO";           // 0x86
$tokens[135] = "GOSUB";          // 0x87
$tokens[136] = "RETURN";         // 0x88
$tokens[137] = "DEF";            // 0x89
$tokens[138] = "DIM";            // 0x8A
$tokens[139] = "END";            // 0x8B
$tokens[140] = "FOR";            // 0x8C
$tokens[141] = "LET";            // 0x8D
$tokens[142] = "BREAK";          // 0x8E
$tokens[143] = "UNBREAK";        // 0x8F
$tokens[144] = "TRACE";          // 0x90
$tokens[145] = "UNTRACE";        // 0x91
$tokens[146] = "INPUT";          // 0x92
$tokens[147] = "DATA";           // 0x93
$tokens[148] = "RESTORE";        // 0x94
$tokens[149] = "RANDOMIZE";      // 0x95
$tokens[150] = "NEXT";           // 0x96
$tokens[151] = "READ";           // 0x97
$tokens[152] = "STOP";           // 0x98
$tokens[153] = "DELETE";         // 0x99
$tokens[154] = "REM";            // 0x9A
$tokens[155] = "ON";             // 0x9B
$tokens[156] = "PRINT";          // 0x9C
$tokens[157] = "CALL";           // 0x9D
$tokens[158] = "OPTION";         // 0x9E
$tokens[159] = "OPEN";           // 0x9F
$tokens[160] = "CLOSE";          // 0xA0
$tokens[161] = "SUB";            // 0xA1
$tokens[162] = "DISPLAY";        // 0xA2
$tokens[163] = "IMAGE";          // 0xA3 *
$tokens[164] = "ACCEPT";         // 0xA4
$tokens[165] = "ERROR";          // 0xA5 *
$tokens[166] = "WARNING";        // 0xA6 *
$tokens[167] = "SUBEXIT";        // 0xA7 *
$tokens[168] = "SUBEND";         // 0xA8 *
$tokens[169] = "RUN";            // 0xA9
$tokens[170] = "LINPUT";         // 0xAA *

$tokens[171] = "<WOOT171?>";         
$tokens[172] = "<WOOT172?>";         
$tokens[173] = "<WOOT173?>";         
$tokens[174] = "<WOOT174?>";         
$tokens[175] = "<WOOT175?>";         

$tokens[176] = "THEN";          // 0xB0
$tokens[177] = "TO";            // 0xB1
$tokens[178] = "STEP";          // 0xB2
$tokens[179] = ",";               // 0xB3
$tokens[180] = ";";               // 0xB4
$tokens[181] = ":";               // 0xB5
$tokens[182] = ")";               // 0xB6
$tokens[183] = "(";               // 0xB7
$tokens[184] = "&";               // 0xB8

$tokens[185] = "<WOOT185?>";         

$tokens[186] = "OR";             // 0xBA *
$tokens[187] = "AND";            // 0xBB *
$tokens[188] = "XOR";            // 0xBC *
$tokens[189] = "NOT";            // 0xBD *

$tokens[190] = "=";               // 0xBE
$tokens[191] = "<";               // 0xBF
$tokens[192] = ">";               // 0xC0
$tokens[193] = "+";               // 0xC1
$tokens[194] = "-";               // 0xC2
$tokens[195] = "*";               // 0xC3
$tokens[196] = "/";               // 0xC4
$tokens[197] = "^";               // 0xC5

$tokens[198] = "<WOOT198?>";         

$tokens[199] = "";              // 0xC7 - "string"
$tokens[200] = "";              // 0xC8 - number
$tokens[201] = "";              // 0xC9 - short int = line nr

$tokens[202] = "EOF";             // 0xCA
$tokens[203] = "ABS";             // 0xCB
$tokens[204] = "ATN";             // 0xCC
$tokens[205] = "COS";             // 0xCD
$tokens[206] = "EXP";             // 0xCE
$tokens[207] = "INT";             // 0xCF
$tokens[208] = "LOG";             // 0xD0
$tokens[209] = "SGN";             // 0xD1
$tokens[210] = "SIN";             // 0xD2
$tokens[211] = "SQR";             // 0xD3
$tokens[212] = "TAN";             // 0xD4
$tokens[213] = "LEN";             // 0xD5
$tokens[214] = "CHR$";            // 0xD6
$tokens[215] = "RND";             // 0xD7
$tokens[216] = "SEG$";            // 0xD8
$tokens[217] = "POS";             // 0xD9
$tokens[218] = "VAL";             // 0xDA
$tokens[219] = "STR$";            // 0xDB
$tokens[220] = "ASC";             // 0xDC

$tokens[221] = "PI";             // 0xDD *

$tokens[222] = "REC";            // 0xDE

$tokens[223] = "MAX";            // 0xDF *
$tokens[224] = "MIN";            // 0xE0 *

$tokens[225] = "RPT$";           // 0xE1 *

$tokens[226] = "<WOOT226?>";         
$tokens[227] = "<WOOT227?>";         
$tokens[228] = "<WOOT228?>";         
$tokens[229] = "<WOOT229?>";         
$tokens[230] = "<WOOT230?>";         
$tokens[231] = "<WOOT231?>";         

$tokens[232] = "NUMERIC";        // 0xE8 *

$tokens[233] = "DIGIT";           // 0xE9 *
$tokens[234] = "UALPHA";          // 0xEA *
$tokens[235] = "SIZE";            // 0xEB *
$tokens[236] = "ALL";             // 0xEC *
$tokens[237] = "USING";           // 0xED *
$tokens[238] = "BEEP";            // 0xEE *
$tokens[239] = "ERASE";           // 0xEF *
$tokens[240] = "AT";              // 0xF0 *
$tokens[241] = "BASE";            // 0xF1

$tokens[242] = "<WOOT242?>";         

$tokens[243] = "VARIABLE";        // 0xF3
$tokens[244] = "RELATIVE";        // 0xF4
$tokens[245] = "INTERNAL";        // 0xF5
$tokens[246] = "SEQUENTIAL";      // 0xF6
$tokens[247] = "OUTPUT";          // 0xF7
$tokens[248] = "UPDATE";          // 0xF8
$tokens[249] = "APPEND";          // 0xF9
$tokens[250] = "FIXED";           // 0xFA
$tokens[251] = "PERMANENT";       // 0xFB
$tokens[252] = "TAB";             // 0xFC
$tokens[253] = "#";               // 0xFD
$tokens[254] = "VALIDATE";        // 0xFE *
$tokens[255] = "<WOOT255?>";         

// Create reverse lookup table.
for ($i=0; $i<256; $i++) {
    $lookup{$tokens[$i]} = $i;
}

$is_extended_basic = true;

// A very rudimentary test, if it is Extended basic or not.
// Can of course be tricked with a REM statement.
function isNotExtendedBasic($s) {
    return strpos($s," :: ") === false &&
	strpos($s," !@P") === false &&
	strpos($s,"SUBEXIT") === false &&
	strpos($s,"SUBEND") === false &&
	strpos($s,"LINPUT") === false &&
	strpos($s,"RPT$") === false &&
	strpos($s,"DISPLAY AT") === false;
}

function isExtendedBasic() {
    global $is_extended_basic;

    return $is_extended_basic;
}

function disableExtendedBasic() {
    global $tokens, $lookup, $is_extended_basic;

    $is_extended_basic = false;
    $tokens[130] = "<WOOT130?>"; // ::
    $tokens[131] = "<WOOT131?>"; // !
    $tokens[163] = "<WOOT163?>"; // IMAGE
    $tokens[165] = "<WOOT165?>"; // ERROR
    $tokens[166] = "<WOOT166?>"; // WARNING
    $tokens[167] = "<WOOT167?>"; // SUBEXIT
    $tokens[168] = "<WOOT168?>"; // SUBEND
    $tokens[170] = "<WOOT170?>"; // LINPUT
    $tokens[186] = "<WOOT186?>"; // OR
    $tokens[187] = "<WOOT187?>"; // AND
    $tokens[188] = "<WOOT188?>"; // XOR
    $tokens[189] = "<WOOT189?>"; // NOT
    $tokens[221] = "<WOOT221?>"; // PI
    $tokens[223] = "<WOOT223?>"; // MAX
    $tokens[224] = "<WOOT224?>"; // MIN
    $tokens[225] = "<WOOT225?>"; // RPT$
    $tokens[232] = "<WOOT232?>"; // NUMERIC
    $tokens[233] = "<WOOT233?>"; // DIGIT
    $tokens[234] = "<WOOT234?>"; // UALPHA
    $tokens[235] = "<WOOT235?>"; // SIZE
    $tokens[236] = "<WOOT236?>"; // ALL
    $tokens[237] = "<WOOT237?>"; // USING
    $tokens[238] = "<WOOT238?>"; // BEEP
    $tokens[239] = "<WOOT239?>"; // ERASE
    $tokens[240] = "<WOOT240?>"; // AT
    $tokens[254] = "<WOOT254?>"; // VALIDATE
    
    // Fix the reverse lookup.
    $lookup = array();
    for ($i=0; $i<256; $i++) {
	$lookup{$tokens[$i]} = $i;
    }
}

// Check if $s is a token.
function isToken($s) {
    global $lookup;
    if (array_key_exists($s,$lookup)) {
	$t = $lookup{$s};
	return $t;
    }
    return -1;
}

function getToken($i) {
    global $tokens;
    return $tokens[$i];
}

function isCharDigit($tok) {
  return ($tok >= 48 && $tok <= 57) ||
    ($tok >= 65 && $tok <= 90) ||
    ($tok >= 97 && $tok <= 122);
}

// Low single char separator tokens that should be replaced with high tokens.
function hasHighSeparator($tok) {
    return $tok == ord('!') ||
	   
           $tok == ord(',') ||
	   $tok == ord(';') ||
	   $tok == ord(':') ||
	   $tok == ord(')') ||
	   $tok == ord('(') ||
	   $tok == ord('&') ||

	   $tok == ord('=') ||
	   $tok == ord('<') ||
	   $tok == ord('>') ||
	   $tok == ord('+') ||
	   $tok == ord('-') ||
	   $tok == ord('*') ||
	   $tok == ord('/') ||
	   $tok == ord('^') ||

   	   $tok == ord('#');
}

// Tokens that can separate other tokens and asci chars
// without the need for spaces.
function isSeparator($tok) {
    return $tok == 0 ||
           $tok == 130 || $tok == 131 ||
           ($tok >= 179 && $tok <= 184) ||
           ($tok >= 190 && $tok <= 197) ||
           $tok == 128 ||
           ($tok >= 171 && $tok <= 175) ||
           $tok == 185 ||
           $tok == 198 ||
           ($tok >= 226 && $tok <= 231) ||
           $tok == 242 ||
           $tok == 253;
}

// After these tokens, eat spaces. Might be useful for other commands as well.
function eatSpaceAfter($t) {
    return $t['seq'][0] == 132  ||  // IF
           $t['seq'][0] == 181  ||  // :           
           $t['seq'][0] == 130  ||  // ::
           $t['seq'][0] == 156  ||  // PRINT
           $t['seq'][0] == 159  ||  // OPEN
           $t['seq'][0] == 146  ||  // INPUT
           $t['seq'][0] == 160  ||  // CLOSE
           $t['seq'][0] == 199  ||  // "string"
           $t['seq'][0] == 200  ||  // number
           false;
}


function isPrintable($asci) {
    // Ascii safe only, and backslash must be handled with care since it is the escape.
    return $asci >= 32 && $asci <= 126 && $asci != 92;
}

function isBackslash($asci) {
    return $asci == 92;
}

function isSpace($t) {
    return $t['seq'][0] == 32;  // SPACE
}

// Replace "" with " within a string.
function replacequotes($m) {
    $n = "";
    $l = strlen($m);
    for ($i=0; $i<$l; $i++) {
        if ($i+1 < $l && $m[$i] == '"' && $m[$i+1] == '"') {
            $i++;
        }
        $n = $n.$m[$i];
    }
    return $n;
}

function debugLine($a) {
    for ($j=0; $j<count($a); $j++) {
        $aa=$a[$j];
        $seq = $aa['seq'];
	for ($k=0; $k<count($seq); $k++) {
	    $x = $seq[$k];
	    $y = $aa['content'];
	    $z = $aa['parsed'];
	    $w = $aa['out'];
	    $v = $aa['type'];
	    echo "($x,\"$y\",$z,$w,$v) ";
	}
    }
    echo "\n\n";
}

function listLine($data,$ofs,$linedata,$debug) {
    $program = "";
    // The order of the lines in the stored image
    // is dependent on the order the basic lines were
    // entered at the basic prompt. Thus no point in comparing these.
    // This compiler of course always outputs the lines in order.
    // First byte in line data stores nof bytes in line...
    if (!array_key_exists($ofs+$linedata,$data)) {
        printf("Format error!\n");
	exit;
    }
    $count = $data[$ofs+$linedata+0];
    // Start looking at the data.
    $i = 1;

    $itokl = "";
    $itokr = "";
    $ntokl = "";
    $ntokr = "";
    $ktokl = "";
    $ktokr = "";
    $ctokl = "";
    $ctokr = "";
    $tokl = "";
    $tokr = "";

    // When debugging, wrap each token in delimiters that
    // indicate the token type. 
    if ($debug === true) {
	// Bracket 2 byte integers 
	$itokl = "[";
	$itokr = "]";
	// Brace keywords and numbers
	$ktokl = "{";
	$ktokr = "}";
	// Angle characters, token nr < 129
	$ctokl = "<";
	$ctokr = ">";
	// Parenthesize everything else
	$tokl = "(";
	$tokr = ")";
    }
    $token = 0;
    for (;;) 
    {
	// Ignore the last byte where $i==$count since it is always a NULL.
	// Grab the next token
	$prevtoken = $token;
	$token = $data[$ofs+$linedata+$i];
        if ($token == 0) {
            break;
        }
	$i++;

	// This is a high non-separator token
	if ($token == 129 || ($token == 181 && ($prevtoken == 181 || $prevtoken==156)) || 
            ($token > 129 && !isSeparator($token) && 
	    (!isSeparator($prevtoken) || isCharDigit($prevtoken)))) {
	    // It follows something that needs to be separated!
	    // We need a space to separate the tokens
	    $program = $program." ";
	}

	// This is a chardigit.
	if (isCharDigit($token) && $prevtoken>=129 && 
	    !isREMREM($prevtoken) && !isSeparator($prevtoken)) {
	    // It follows a high token that is not a separator (and not REM).
	    // We need a space to separate it from the previous token.
	    $program = $program." ";
	}

	// String or keyword/number?
	if ($token == 0xc7 || $token == 0xc8) {
	    $len = $data[$ofs+$linedata+$i];
	    $i++;
	    $s = "";
	    for ($j=0; $j<$len; $j++) {
		$c = $data[$ofs+$linedata+$i+$j];
		if (isPrintable($c)) {
		    if ($c == 34 && $token == 0xc7) {
			$s = $s.'""';
		    } else {
			$s = $s.chr($c);
		    }
		} else {
		    if ($c == 0x56) {
			$s = $s."\\\\";
		    } else {
			if ($c < 16) {
			    $s = $s."\\x0".dechex($c);
			} else {
			    $s = $s."\\x".dechex($c);
			}
		    }
		}
	    }
	    if ($token == 0xC7) {
		$program = $program."\"$s\"";
	    } else {
		$program = $program."$ktokl$s$ktokr";
	    }
	    $i += $len;
	} else if ($token == 0xc9) {
	    // Integer        
	    $val = ($data[$ofs+$linedata+$i+0] << 8 ) | $data[$ofs+$linedata+$i+1];
	    $program = $program."$itokl$val$itokr";
	    $i+=2;
	} else if ($token<129) {
	    if (isPrintable($token)) {
		$tokname = getToken($token);
		$program = $program."$ctokl$tokname$ctokr";
	    } else {
		if (chr($token) == '\\') {
		    // A backslash is escaped by a backslash
		    $program = $program."$ctokl\\\\$ctokr";
		} else {
		    // All other escapes \xff
		    if ($token < 16) {
			$program = $program."$ctokl\\x0".dechex($token)."$ctokr";
		    } else {
			$program = $program."$ctokl\\x".dechex($token)."$ctokr";
		    }
		}
	    }
	} else {
	    $tokname = getToken($token);
	    $program = $program."$tokl$tokname$tokr";
	}
    }
    return $program;
}

function listBasicProgram($rawdatastring,$debug) {
    $ofs = 1;

    $data = unpack("C*", $rawdatastring);
    if ($data[1] == 7 && 
	$data[2] == 84 && 
	$data[3] == 73 && 
	$data[4] == 70 && 
	$data[5] == 73 && 
	$data[6] == 76 && 
	$data[7] == 69 && 
	$data[8] == 83) 
    {
	// The TIFILES header is 128 bytes, skip it.
	$ofs = 129;
    }

    // This will be the decoded program text.
    $program = "";
    $found_progr = false;
    while ($ofs < count($data)-8) {
        // if ($debug === true) { print("Testing ofs $ofs\n"); }
	// The first 8 bytes is a header.
	// crc should be the xor of lnr_top and pr_bottom
	$crc = ( $data[$ofs+0] << 8 ) | $data[$ofs+1];
	// Line nr table top?
	$lnr_top = ( $data[$ofs+2] << 8 ) | $data[$ofs+3];
	// Program (including lines) bottom
	$pr_bottom = ( $data[$ofs+4] << 8 ) | $data[$ofs+5];
	// Statements top!
	// 16383 if no floppy disk controller or memory expansion
	// 14295 if flopp disk/memory expansion.
	// 62494 high mem?
	$pr_top = ( $data[$ofs+6] << 8 ) | $data[$ofs+7]; 
	$testcrc = $lnr_top ^ $pr_bottom;  
	if ($crc == $testcrc) {
          //	    if ($debug === true) { printf("crc $crc ok at ofs $ofs\n"); }
            $found_progr = true;
            break;
        }
        // Ok,  we could compare $crc and $testcrc, but that sometimes
	// fail! Lets do a brute force check of the line number table!
        $lnr_len = 1+$lnr_top-$pr_bottom;
	
	if ($debug === true) {
        //     printf("lnr_len=$lnr_len\n");
	//     printf("lnr_top=$lnr_top\n");
        //     printf("pr_bottom=$pr_bottom\n");
	//     printf("prtop=$pr_top\n");
	//     printf("crc=$crc testcrc=$testcrc\n");
        }
	
        $base = 8 - $pr_bottom - 1;
        $line = 8 - $pr_bottom - 1 + $lnr_top + 2;
	if ($debug === true) { 
        	    //printf("line=$line 1001-128=873? base=$base\n");
        }
        $aok = true;
        $num_lines_found = 0;
        while ($line>8) { 
            $line -= 4;
            if (!array_key_exists($ofs+$line,$data) ||
                !array_key_exists($ofs+$line+3,$data)) {
                $aok = false;
		break;
	    }
            $line_nr = ( $data[$ofs+$line+0] << 8 ) | $data[$ofs+$line+1];
	    $offset = ( $data[$ofs+$line+2] << 8 ) | $data[$ofs+$line+3];
            $linedata = $base + $offset;
            if (!array_key_exists($ofs+$linedata,$data)) {
                $aok = false;
	        break;
            }
	    $count = $data[$ofs+$linedata+0];
            if (!array_key_exists($ofs+$linedata+$count,$data)) {
                $aok = false;
	        break;
            }
	    $count = $data[$ofs+$linedata+0];
            if ($data[$ofs+$linedata+$count] != 0) {
                $aok = false;
	        break;
            }
	    if ($line_nr != 0) {
	        // Line nr 0 iz no goud.
                $num_lines_found++;
                // if ($debug === true) { print("Found line $line_nr\n"); }
	    }
        }
	// Ok, we can find single source line programs, but only
	// If the crc is correct. Otherwise, we need to have found
	// at least two valid source lines to be able to guess
	// that this ofs is a valid program.
	if ($aok === true && $num_lines_found >= 1) {
            $found_progr = true;
            break;
        }

        // Oh, well look one step up in memory.
	// Perhaps we will be lucky.
	$ofs++;
    }
    if ($found_progr === false) {
	echo "Could not find a valid basic starting point!\n";
	exit();
    }
    $lnr_len = 1+$lnr_top-$pr_bottom;

    // base points to the beginning of the memory
    // (there is nothing there but it makes the data
    // land on the right place
    $base = 8 - $pr_bottom - 1;
    $line = 8 - $pr_bottom - 1 + $lnr_top + 2;

    while ($line>8)
    {
	$line -= 4;
	if (!array_key_exists($ofs+$line,$data)) {
            printf("Format error!\n");
	    exit;
	}

	$line_nr = ( $data[$ofs+$line+0] << 8 ) | $data[$ofs+$line+1];

	$program = $program.$line_nr." ";
	$offset = ( $data[$ofs+$line+2] << 8 ) | $data[$ofs+$line+3];

	$linedata = $base + $offset;
	$source = listLine($data, $ofs, $linedata,$debug);
	$program = $program.$source."\n";
    }
    return $program;
}

$peek = 0;
$has_peeked = false;

function eatToken(&$s) {
    global $peek,$has_peeked;

    if ($has_peeked === true) {
	$has_peeked = false;
	return $peek;
    }
    if (strlen($s) == 0) {
	return false;
    }
    if (isExtendedBasic() === true &&
	1==preg_match('/^( *)(::).*/',$s,$matches)) {
	// Found an extended basic command separator ::
	$tok = isToken(" :: ");
	$r['seq'] = array();
	$r['seq'][0] = $tok;
	$r['content'] = "";
	$r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	$r['out'] = 1; // Yay! Compression!
	$r['type'] = "token";
	$s = substr($s, $r['parsed']);
	return $r;
    }
    if (1==preg_match('/^( *)([A-Za-z][A-Za-z0-9]*\$?).*/',$s,$matches)) {
	// Found a sequence of chardigits, eg AbCCd09090xxY$ or just X
	$tok = isToken($matches[2]);
	if ($tok != -1) {
	    // Ah, it is a token!
	    $r['seq'] = array();
	    $r['seq'][0] = $tok;
	    $r['content'] = "";
	    $r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	    $r['out'] = 1; // Yay! Compression!
	    $r['type'] = "token";
	    $s = substr($s, $r['parsed']);
	    return $r;
	}
	// Ok, no token. Use the characters as is.
	$r['seq'] = array();
	for ($i=0; $i<strlen($matches[2]); $i++) {
	    $r['seq'][$i] = ord($matches[2][$i]);
	}
	$r['content'] = "";
	$r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	$r['out'] = strlen($matches[2]); // No compression.
	$r['type'] = "chardigits";
	$s = substr($s, $r['parsed']);
	return $r;
    }
    if (1==preg_match('/^( *)"(([^"]|"")*)".*/',$s,$matches)) {
       // Found a string, try to eat it.
       // But digest it first, by replace "" with ".
       $digested = replacequotes($matches[2]);
       $r['seq'] = array();
       $r['seq'][0] = 0xc7;
       $r['content'] = $digested;
       $r['parsed'] = strlen($matches[1])+strlen($matches[2])+2;
       $r['out'] = strlen($digested)+2; // Stored as 0xc7 lenbyte bytes
       $r['type'] = "string";
       $s = substr($s, $r['parsed']);
       return $r;
    }
    if (1==preg_match("/^( *)(\d*\.\d+(E[+-]?\d\d*)?).*/",$s,$matches)) {
	// Found a floating point number with decimal point!
	$r['seq'] = array();
	$r['seq'][0] = 0xc8;
	$r['content'] = $matches[2];
	$r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	$r['out'] = strlen($matches[2])+2; // Stored as 0xc8 lenbyte bytes
	$r['type'] = "number";
	$s = substr($s, $r['parsed']);
	return $r;
    }
    if (1==preg_match("/^( *)(\d+E[+-]?\d\d*).*/",$s,$matches)) {
	// Found a floating point number, no decimal point but Exp!
	$r['seq'] = array();
	$r['seq'][0] = 0xc8;
	$r['content'] = $matches[2];
	$r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	$r['out'] = strlen($matches[2])+2; // Stored as 0xc8 lenbyte bytes
	$r['type'] = "number";
	$s = substr($s, $r['parsed']);
	return $r;
    }
    if (1==preg_match("/^( *)(\d+).*/",$s,$matches)) {
	// Found a number with no decimal point, ie an integer.
	$r['seq'] = array();
	$r['seq'][0] = 0xc8;
	$r['content'] = $matches[2];
	$r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	$r['out'] = strlen($matches[2])+2; // Stored as 0xc8 lenbyte bytes
	$r['type'] = "integer";
	$s = substr($s, $r['parsed']);
	return $r;
    }
    $r['seq'] = array();
    $r['seq'][0] = ord($s[0]);
    $r['content'] = "";
    $r['parsed'] = 1;
    $r['out'] = 1;
    $r['type'] = "char";
    $s = substr($s, $r['parsed']);
    if (hasHighSeparator($r['seq'][0])) {
	$tmp = isToken(chr($r['seq'][0]));
	$r['seq'][0] = $tmp;
	$r['type'] = "token";
    }
    return $r;
}

function eatByte(&$s) {
    global $has_peeked;
    if ($has_peeked === true) {
        printf("Internal error! Peek not empty when eating bytes!\n");
        exit;
    }
    $r['seq'] = array();
    $r['seq'][0] = ord($s[0]);
    $r['content'] = "";
    $r['parsed'] = 1;
    $r['out'] = 1;
    $r['type'] = "byte";
    $s = substr($s, $r['parsed']);
    return $r;
}

function eatSpaces(&$s) {
    global $has_peeked;
    if ($has_peeked === true) {
        printf("Internal error! Peek not empty when eating spaces!\n");
        exit;
    }
    $i = 0;
    while ($i < strlen($s) && $s[$i] == ' ') {
        $i++;
    }
    $s = substr($s, $i);
}

function eatKeyword(&$s) {
    global $has_peeked;
    if ($has_peeked === true) {
        printf("Internal error! Peek not empty when eating keyword!\n");
        exit;
    }
    if (1==preg_match('/^( *)([A-Za-z][A-Za-z0-9]*).*/',$s,$matches)) {
	// Found a sequence of chardigits, eg AbCCd09090xxY
	$r['seq'] = array();
	$r['seq'][0] = 0xc8;
	// The keywords are stored in upper case.
	$r['content'] = strtoupper($matches[2]);
	$r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	$r['out'] = strlen($matches[2])+2; // Stored as 0xc8 lenbyte bytes
	$r['type'] = "keyword";
	$s = substr($s, $r['parsed']);
	return $r;
    }
    return false;
}

function eatCommaStringOrKeywordData(&$s) {
    global $has_peeked;
    if ($has_peeked != 0) {
        printf("Internal error! Peek not empty when eating keyword!\n");
        exit;
    }
    if ($s[0] == ',') {
	$r['seq'] = array();
	$r['seq'][0] = ord($s[0]);
	$r['content'] = "";
	$r['parsed'] = 1;
	$r['out'] = 1;
	$r['type'] = "char";
	$s = substr($s, $r['parsed']);
	if (hasHighSeparator($r['seq'][0])) {
	    $tmp = isToken(chr($r['seq'][0]));
	    $r['seq'][0] = $tmp;
	    $r['type'] = "token";
	}
	return $r;
    }
    if (1==preg_match('/^( *)"(([^"]|"")*)".*/',$s,$matches)) {
       // Found a string, try to eat it.
       // But digest it first, by replace "" with ".
       $digested = replacequotes($matches[2]);
       $r['seq'] = array();
       $r['seq'][0] = 0xc7;
       $r['content'] = $digested;
       $r['parsed'] = strlen($matches[1])+strlen($matches[2])+2;
       $r['out'] = strlen($digested)+2; // Stored as 0xc7 lenbyte bytes
       $r['type'] = "string";
       $s = substr($s, $r['parsed']);
       return $r;
    }
    if (1==preg_match('/^( *)([^,]+).*/',$s,$matches)) {
	// Found a sequence of bytes except commas!
	$r['seq'] = array();
	$r['seq'][0] = 0xc8;
	$r['content'] = $matches[2];
	$r['parsed'] = strlen($matches[1])+strlen($matches[2]);
	$r['out'] = strlen($matches[2])+2; // Stored as 0xc8 lenbyte bytes
	$r['type'] = "keyword";
	$s = substr($s, $r['parsed']);
	return $r;
    }
    return false;
}

function peekToken(&$s) {
    global $peek, $has_peeked;

    if ($has_peeked === false) {
	$peek = eatToken($s);
	if ($peek === false) {
	    return false;
	}
	$has_peeked = true;
    }
    return $peek;
}

function hasMoreTokens(&$s) {
    global $has_peeked;

    return $has_peeked === true || strlen($s) > 0;
}

function isNumber($t) {
    return $t['seq'][0] == 0xc8 &&
	($t['type'] == "number" ||
	 $t['type'] == "integer");
}

function isShort($t) {
    return 
	$t['seq'][0] == 0xc8 &&
	$t['type'] == "integer" &&
	$t['content'] < 65535;
}

function convertIntoShort($t) {
    $t['seq'][0] = 0xc9;
    $t['out'] = 3;
    return $t;
}

function isComma($t) {
    return $t['seq'][0] == 179;  // ,
}

function isREM($t) {
    return $t['seq'][0] == 154 ||  // REM
   	   $t['seq'][0] == 131;    // !
}

function isREMREM($t) {
    return $t['seq'][0] == 154;
}

function eatREM(&$s,&$a) {
    // Munch spaces before the REM...
    $aa = array_pop($a);
    for (;;) {
       $aaa = array_pop($a);
       if ($aaa == null) {
           break;
       }
       if (!isSpace($aaa)) {
           array_push($a,$aaa);
           break;
       }
    }
    array_push($a,$aa);
    while (hasMoreTokens($s) > 0) {
	$a[count($a)] = eatByte($s);
    }
}

function eatShortIntegers(&$s,&$a) {
    while (hasMoreTokens($s) > 0) {
	$t = peekToken($s);
	if (isShort($t)) {
	    $t = eatToken($s);
	    $a[count($a)] = convertIntoShort($t);
	} else if (isComma($t)) {
	    $a[count($a)] = eatToken($s);
	} else {
	    return;
	}
    }
}

function isDATA($t) {
    return $t['seq'][0] == 147;  // DATA
}

function eatData(&$s,&$a) {
    while (hasMoreTokens($s) > 0) {
        $t = eatCommaStringOrKeywordData($s);
	if ($t === false) {
	    return;
	}
	$a[count($a)] = $t;
    }
}

function isCALL($t) {
    return $t['seq'][0] == 157;
}

function isSUB($t) {
    return $t['seq'][0] == 161;
}

function isGOTO($t) {
    return $t['seq'][0] == 134;
}

function isGO($t) {
    return $t['seq'][0] == 133;
}

function isTO($t) {
    return $t['seq'][0] == 177;
}

function isGOSUB($t) {
    return $t['seq'][0] == 135;
}

function isTHEN($t) {
    return $t['seq'][0] == 176;
}

function isELSE($t) {
    return $t['seq'][0] == 129;
}

function isRESTORE($t) {
    return $t['seq'][0] == 148;
}

function isERROR($t) {
    return $t['seq'][0] == 165;
}

function isRETURN($t) {
    return $t['seq'][0] == 136;
}

function isUSING($t) {
    return $t['seq'][0] == 237;
}

function crunchline(&$s,&$a) {
    global $has_peeked;

    $has_peeked = false;

    while (hasMoreTokens($s) > 0) {
	$t = eatToken($s);
	$a[count($a)] = $t;
	if (!isREM($t)) {
            // Remove suffix spaces, when not a REM statement.
            $s = rtrim($s," \t\n\r");
        }
	if (isREM($t)) {
 	    eatREM($s,$a);
        } else if (eatSpaceAfter($t)) {
            eatSpaces($s);
	} else if (isCALL($t) || 
		   isSUB($t)) {
	    $a[count($a)] = eatKeyword($s);
	} else if (isGOTO($t) ||
		   isGOSUB($t) ||
		   isTHEN($t) ||
		   isELSE($t) ||
		   isERROR($t) ||
		   isRESTORE($t) ||
		   isRETURN($t)) {
            if (isShort(peekToken($s))) {
		eatShortIntegers($s,$a);
	    } 
	} else if (isGO($t)) {
            if (isTO(peekToken($s))) {
		$a[count($a)] = eatToken($s);
		if (isShort(peekToken($s))) {
		    eatShortIntegers($s,$a);
		}
	    }
	} else if (isUSING($t)) {
	    if (isShort(peekToken($s))) {
		eatShortIntegers($s,$a);
	    }
	} else if (isDATA($t)) {
	    eatData($s,$a);
	}
    }
    return $a;
}

function compileSource($source,$debug,&$sourcelines,&$lines,&$num_lines) {
    // First standardize the line breaks
    $source = preg_replace ("/(\r\n)+/", "\n", $source);
    // Remove lines beginning with # (ie comments not compiled)
    $source = preg_replace("/\n(#.*\n)+/","\n",$source);
    // Merge several line breaks into a single.
    $source = preg_replace("/\n+/","\n",$source);
    // Now split the lintes.
    $fulllines = preg_split("/\n+\s*(\d+)\s/", "\n".$source."\n", 
			    -1, PREG_SPLIT_DELIM_CAPTURE);

    // Extract the line numbers and store tokenized arrays per line nr.
    $num_lines = 0;
    $prevlnr = -1;
    for ($i=1; $i<=count($fulllines); $i+=2) {
        if (array_key_exists($i,$fulllines) &&
	    array_key_exists($i+1,$fulllines)) {
            $lnr = 0+$fulllines[$i];
	    if ($lnr <= $prevlnr) {
                echo "Line number $lnr not increasing relative $prevlnr!\n";
		exit();
	    }
	    $prevlnr = $lnr;
	    $sl = $fulllines[$i+1];
	    $sourceline = "";
            for ($j=0; $j<strlen($sl); $j++) {
	        if ($sl[$j] != '\\') {
		    $sourceline = $sourceline.$sl[$j];
                } else {
		    if ($sl[$j+1] == '\\') {
 		        $sourceline = $sourceline.'\\';
                        $j += 1;
		    } else if ($sl[$j+1] == 'x') {
		    	$sourceline = $sourceline.chr(intval(substr($sl,$j+2,2),16));
                        $j += 3;
                    } else {
                        echo "Bad escape in line $lnr!\n";
                        echo "$sl\n";
	         	return false;
                    }
                }
            }
	    $sourcelines[$lnr] = $sourceline;
	    $a = array();
            crunchline($sourceline,$a);
	    $lines[$lnr] = $a;
	    $num_lines++;
        }
    }
}

function verifiedCompile($sourcelines, $lines, $num_lines, $debug, 
			 $lnr_table_size, $statements_size,
			 $crc, $lnr_top, $pr_bottom, $pr_top,
			 $file_size, $num_sectors, $last_offset,
                         $lineoffset, $base, $prog_size) {
    // If we are verifying, then output a single OK
    // if the program can be compiled correctly.
    if ($debug ===  true) {
	echo "lnr_table_size=$lnr_table_size\n";      
	echo "statements_size=$statements_size\n";      
	echo "crc=$crc\n";
	echo "lnr_top=$lnr_top\n";
	echo "pr_bottom=$pr_bottom\n";
        if ($pr_bottom < 1819) {
            echo "THE PROGRAM IS TOO BIG FOR TI BASIC!";
        }
	echo "pr_top=$pr_top\n";
	echo "file_size=$file_size\n";
	echo "nsects=$num_sectors\n";
	echo "last_offset=$last_offset\n";
    }
    if ($debug === true) {
	for ($i=65535; $i>0; $i--) {
	    if (array_key_exists($i,$lines)) {
		$offsot = 8+($prog_size-$lineoffset[$i])-$base;
		echo "LINE $i |$sourcelines[$i]|\n";
		echo "at offset $lineoffset[$i] $offsot == ";
		
		$a = $lines[$i];
		for ($j=0; $j<count($a); $j++) {
		    $aa=$a[$j];
		    $seq = $aa['seq'];
		    for ($k=0; $k<count($seq); $k++) {
			$x = $seq[$k];
			$y = $aa['content'];
			$z = $aa['parsed'];
			$w = $aa['out'];
			$v = $aa['type'];
			echo "($x,\"$y\",$z,$w,$v) ";
		    }
		}
		echo "\n\n";
	    }
	}
    }
    // If no debug output, just print OK!
    echo "OK";
}

function output() {
    global $hexify;

    if ($hexify === false) {
        call_user_func_array('printf', func_get_args());
    } else {
        $s = call_user_func_array('sprintf', func_get_args());
        printf(bin2hex($s));
    }                           
}

function compile($source,$vod,$debug) {

    if (isNotExtendedBasic($source)) {
	if ($debug === true) {
	    printf("Detected Plain TI basic\n");
	}
	disableExtendedBasic();
    } else {
	if ($debug === true) {
	    printf("Detected Extended TI basic\n");
	}
    }

    // Compile the actual basic program inte lines of tokens.
    $lines = array();
    $num_lines = 0;
    $sourcelines = array();
    $r = compileSource($source,$debug,$sourcelines,$lines,$num_lines);

    // The line number table size is 4 bytes per line.
    // line nr and offset to actual line.
    $lnr_table_size = $num_lines*4;

    // Now walk through the lines, high to low
    // and calculate their sizes and the offsets.
    $statements_size = 0;
    for ($i=1; $i<65535; $i++) {
        if (array_key_exists($i,$lines)) {
            $ll = 0;
            $a = $lines[$i];
	    for ($j=0; $j<count($a); $j++) {
                $aa=$a[$j];
                $statements_size += $aa['out'];
                $ll += $aa['out'];
            }
            // Each line is prepended with its length (a byte)
            // and appended with NUL.
            $statements_size += 2;
            $lineoffset[$i] = $statements_size;
	    $linelength[$i] = $ll+1;
        }
    }

    // Set top to 14295 so the TIFILE is suitable for a floppy disk system.
    $pr_top = 14295;
    $pr_bottom = $pr_top+1-$statements_size-$lnr_table_size;
    $lnr_top = $pr_bottom+$lnr_table_size-1;
    $crc = $lnr_top ^ $pr_bottom;

    $prog_size = $statements_size+$lnr_table_size;

    $base = 8 - $pr_bottom - 1;
    $line = 8 - $pr_bottom - 1 + $lnr_top + 2;

    // php does not have int divides, woot?
    function int_divide($x, $y) {
        if ($x == 0) return 0;
        if ($y == 0) return FALSE;
        return ($x - ($x % $y)) / $y;
    }

    // The file content consists of an 8 byte program header:
    // crc, lnr_top, pr_bottom, pr_top and the actual program
    // (line nr table immediately followed by the statements).
    $file_size = 8+$prog_size;
    $num_sectors = int_divide($file_size,256);
    $last_offset = 0;
    if (($file_size % 256) > 0) {
        $num_sectors++;
        $last_offset = $file_size+256-($num_sectors*256);
    }

    if ($vod == "verify") {
	// Do not write a full binary tifile, just write OK
	// if there was not compile problems.
	// If debug is enabled, write all lines and tokens.
        verifiedCompile($sourcelines, $lines, $num_lines, $debug,
			$lnr_table_size, $statements_size,
			$crc, $lnr_top, $pr_bottom, $pr_top,
			$file_size, $num_sectors, $last_offset,
			$lineoffset, $base, $prog_size);
	return;
    } 

    global $hexify;
    $hexify = false; 
    if ($vod == "hexify") {
        $hexify = true;
    }

    if ($pr_bottom < 1819) {
        echo "The program is too big! pr_bottom is $pr_bottom must be higher than 1819\n";
        exit();
    }
    $total_num_sectors=$num_sectors;
    $flags=1;
    $recsect=0;
    $eofoffset=$last_offset;
    $reclength=0;
    $level3records=0;
    // Write TIFILES header.
    output("%cTIFILES%c%c%c%c%c%c%c%c",7,
	   $total_num_sectors>>8,$total_num_sectors&0xff,
	   $flags,$recsect,$eofoffset,
	   $reclength,$level3records>>8,$level3records&0xff);
    
    for ($i=0; $i<(128-16); $i++) {
	output("%c",0);
    }
    
    // Write BASIC header
    output("%c%c%c%c%c%c%c%c",
	   $crc>>8,$crc&0xff,$lnr_top>>8,$lnr_top&0xff,
	   $pr_bottom>>8,$pr_bottom&0xff,$pr_top>>8,$pr_top&0xff);
    
    // Write line number table.
    for ($i=65535; $i>0; $i--) {
	if (array_key_exists($i,$lines)) {
	    $offsot = 8+($prog_size-$lineoffset[$i])-$base;
	    output("%c%c%c%c", $i>>8,$i&0xff,$offsot>>8,$offsot&0xff);
	}
    }
    
    // Write the statements
    for ($i=65535; $i>0; $i--) {
	if (array_key_exists($i,$lines)) {
	    output("%c", $linelength[$i]);
	    $a = $lines[$i];
	    for ($j=0; $j<count($a); $j++) {
		$aa=$a[$j];
		$seq = $aa['seq'];
		for ($k=0; $k<count($seq); $k++) {
		    $t = $seq[$k];
		    if ($t == 0xc7 || $t == 0xc8) {
			output("%c%c%s",$t,strlen($aa['content']),$aa['content']);
		    } else if ($t == 0xc9) {
			output("%c%c%c",0xc9,$aa['content']>>8,$aa['content']&0xff);
		    } else { 
			output("%c",$t);
		    }
		}
	    }
	    output("%c",0);
	}
    }
    
    // Magical sequence:
    // http://nouspikel.group.shef.ac.uk//ti99/vdpram.htm
    // woot?
    output("%c%c%c%c%c", 0xAA,0x3F,0xFF,0x11,0x03);
    
    // Pad last sector with zeroes.
    for ($i=0; $i<(256-$last_offset-5); $i++) {
	output("%c",0);
    }
}

if (!empty($argc) && strstr($argv[0], basename(__FILE__))) {
    if ($argv[1] == "LIST") {
        if ($argv[2] == "DEBUG") {
	    $debug = true;
	    $filename = $argv[3];
	} else {
	    $debug = false;
	    $filename = $argv[2];
	}
	$rawdatastring = file_get_contents($filename);
	$source = listBasicProgram($rawdatastring,$debug);
	echo $source;
    }

    if ($argv[1] == "COMPILE") {
        if ($argv[2] == "DEBUG") {
	    $debug = true;
	    $filename = $argv[3];
	} else {
	    $debug = false;
	    $filename = $argv[2];
	}
        $rawdatastring = file_get_contents($filename);
	compile($rawdatastring,$debug,$debug); 
    }
}

?>
