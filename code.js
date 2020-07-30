// Copyright Fredrik Ohrstrom 2012 oehrstroem@gmail.com
// Licensed to you under the GNU Affero GPLv3 
// http://www.gnu.org/licenses/agpl-3.0.html

// Install getCursorPosition function into jquery.
(function ($, undefined) {
    $.fn.getCursorPosition = function() {
        var el = $(this).get(0);
        var pos = 0;
        if('selectionStart' in el) {
            pos = el.selectionStart;
        } else if('selection' in document) {
            el.focus();
            var Sel = document.selection.createRange();
            var SelLength = document.selection.createRange().text.length;
            Sel.moveStart('character', -el.value.length);
            pos = Sel.text.length - SelLength;
        }
        return pos;
    }
})(jQuery);

var multi = 4;

// Code setup run when page is loaded.
$(function() {
    // List the source code
    $('#list').click(function() { 
          theprog = $('#programtext').val().replace(/\n/g,"<br>");
          theprog = theprog.replace(/ /g,"&nbsp;");
          $('#listing').html(theprog);
          $('#listing').css('display','block');
          $('#editordiv').css('display','none');
          $('#abouttext').css('display','none');
    });

    // Edit the source code
    $('#edit').click(function() { 
          $('#editordiv').css('display','block');
          $('#listing').css('display','none');
          $('#abouttext').css('display','none');
    });

    // Download the compiled TIFILES binary of the program.
    $('#download').click(function() { 
        $('#vod').val("verify");
        // First verify the source.
	$.post("http://nivelleringslikaren.eu/ti994a_basic/cmd_download.php",
	   $("#editor").serialize(),
	   function(data){      
               if (data.indexOf("OK")==0) {
                   $('#vod').val("download");
		   // Submit the editor explicitly so target="DummyDownload" is used,
		   // thus triggering a download without a popup window.
  	           document.forms["editor"].submit();
               } else {
		   alert(data);
               }
	   });
    });

    $('#tape').click(function() { 
        $('#vod').val("verify");
        // First verify the source.
	$.post("http://nivelleringslikaren.eu/ti994a_basic/cmd_download.php",
	   $("#editor").serialize(),
	   function(data){      
               if (data.indexOf("OK")==0) {
                   $('#vod').val("hexify");
	           $.post("http://nivelleringslikaren.eu/ti994a_basic/cmd_download.php",
	                  $("#editor").serialize(),
                          playTape);
               }});});

    function playTape(data) {
        var raw = [];
        for(var i=0; i< data.length-1; i+=2) {
            raw.push(parseInt(data.substr(i, 2), 16));
        }
        var num_sectors = raw[8];
        var eof_offset = raw[12];
        if (eof_offset > 0) {
            eof_offset = 256-eof_offset;
        }
        var len = (raw.length-128)-eof_offset;
	var audio = new Audio(); 
	var wave = new RIFFWAVE(); 
	var data = []; 
        var nrecs = Math.trunc(len / 64)+1;
        var ri = 128;
        var rec = [];

	wave.header.sampleRate = 1379*2*multi; 
	wave.header.numChannels = 1;
	wave.header.bitsPerSample = 8;
        var tuple = { i:0, v:0 }
	for (var i=0; i<768; i++) {
            addByte(data, tuple, 0);
	}
        addByte(data, tuple, 255);
        addByte(data, tuple, nrecs);
        addByte(data, tuple, nrecs);
        
        for (var r=0; r<nrecs; ++r) {
            for (var i=0; i<64; ++i) {
                rec[i] = raw[ri];
                ri++;
            }
            addRecord(data, tuple, rec);
        }
        
	wave.Make(data);
	audio.src = wave.dataURI;

        var r = confirm("This will be quite loud, unless you have connected the audio cable to your TI99/4a");
        if (r == false) {
            return;
        }

        countDown(Math.round(data.length / wave.header.sampleRate));
	audio.play();
    }

    function toggle(v) {
        if (v==0) return 255;
        return 0;
    }

    function addZero(data, tuple) {
        tuple.v = toggle(tuple.v);
        for (var i=0; i<multi; ++i) {
	    data[tuple.i++] = tuple.v;
	    data[tuple.i++] = tuple.v;
        }
    }

    function addOne(data, tuple) {
        tuple.v = toggle(tuple.v);
        for (var i=0; i<multi; ++i)
	    data[tuple.i++] = tuple.v;
        tuple.v = toggle(tuple.v);
        for (var i=0; i<multi; ++i) 
	    data[tuple.i++] = tuple.v;
    }

    function addByte(data, tuple, b) {
        var t = Number(b).toString(2);
        if (t.length < 8) {
            t = "00000000".substring(0,8-t.length)+t;
        }
        var i;
        for (i=0; i<t.length; ++i) {
            if (t[i] == '0') addZero(data, tuple);
            else addOne(data, tuple);
        }
    }
    
    function addRecord(data, tuple, rec) {
        for (var c=0; c<2; ++c) {
            for (var i=0; i<8; ++i) addByte(data, tuple, 0);
            addByte(data, tuple, 255);
            var check = 0;
            for (i=0; i<64; ++i) {
                addByte(data, tuple, rec[i]);
                check += rec[i];
            }
            addByte(data, tuple, check&255);
        }
    }
    
    var counter = 0;
    var interval;

    function countDown(c) {
        counter = c;
        $('#tape').text('Playing Tape '+counter+'s');
        interval = setInterval(function(){counting()}, 1000);
    }

    function counting() {
        counter--;
        $('#tape').text('Playing Tape '+counter+'s');
        if (counter <= 0) {
            $('#tape').text('Play Tape');
            clearInterval(interval);
        }
    }

    function isHex(c) {
	return (c=='0' || c=='1' || c=='2' || c=='3' || c=='4' || c=='5' || c=='6' || c=='7' || c== '8' || c=='9' 
		|| c=='A' || c=='B' || c=='C' || c=='D' || c=='E' || c=='F');
    }

    function getBinFromHex(h,p) {
	a = h.charAt(p);
	switch (a) {
	case '0': return "    ";
	case '1': return "   X";
	case '2': return "  X ";
	case '3': return "  XX";
	case '4': return " X  ";
	case '5': return " X X";
	case '6': return " XX ";
	case '7': return " XXX";
	case '8': return "X   ";
	case '9': return "X  X";
	case 'A': return "X X ";
	case 'B': return "X XX";
	case 'C': return "XX  ";
	case 'D': return "XX X";
	case 'E': return "XXX ";
	 case 'F': return "XXXX";
	}
	return "____";
    }

    function pH(h,pos) {
	if (pos >= h.length) return "    ";
	return getBinFromHex(h.charAt(pos));
    }

    function printPair(h,pos) {
	return 
   	""+pH(h,pos+0)+pH(h,pos+1);
    }
    
    function displayCharacterU(h,p) {
	return ""+getBinFromHex(h,p+0)+getBinFromHex(h,p+1)+getBinFromHex(h,p+32)+getBinFromHex(h,p+33)+"\n"+
	    getBinFromHex(h,p+2)+getBinFromHex(h,p+3)+getBinFromHex(h,p+34)+getBinFromHex(h,p+35)+"\n"+
	    getBinFromHex(h,p+4)+getBinFromHex(h,p+5)+getBinFromHex(h,p+36)+getBinFromHex(h,p+37)+"\n"+
	    getBinFromHex(h,p+6)+getBinFromHex(h,p+7)+getBinFromHex(h,p+38)+getBinFromHex(h,p+39)+"\n"+
	    getBinFromHex(h,p+8)+getBinFromHex(h,p+9)+getBinFromHex(h,p+40)+getBinFromHex(h,p+41)+"\n"+
	    getBinFromHex(h,p+10)+getBinFromHex(h,p+11)+getBinFromHex(h,p+42)+getBinFromHex(h,p+43)+"\n"+
	    getBinFromHex(h,p+12)+getBinFromHex(h,p+13)+getBinFromHex(h,p+44)+getBinFromHex(h,p+45)+"\n"+
	    getBinFromHex(h,p+14)+getBinFromHex(h,p+15)+getBinFromHex(h,p+46)+getBinFromHex(h,p+47)+"\n";
    }

    function displayCharacter(h) {
	return displayCharacterU(h,0)+displayCharacterU(h,16);
    }

    function senseContext() {
        pos = $("#programtext").getCursorPosition();
	text = $("#programtext").val();
	begin = pos-1;
	for (begin = pos-1; isHex(text.charAt(begin)); begin--);
	begin++;
	end = pos-1;
	for (end = pos; end<text.length && isHex(text.charAt(end)); end++);
	if (end-begin >= 2) {
	    //alert("FOO "+text.substring(begin,end));
            // alert("begin="+begin+" end="+end+" >"+text.substring(begin,end)+"<");
	    // We have enough hex to draw a picture.
	    $("#character").val(displayCharacter(text.substring(begin,end)));
	} else {
	    $("#character").val("");
	}
    }

    $("#programtext").keyup(senseContext);
    $("#programtext").click(senseContext);

/*
    $("#programtext").keypress(function() {
	alert("Handler for .keypress() called.");
    });
*/
    // Trigger an upload callback when the upload button is clicked.
    upload_block = {
          action: '/ti994a_basic/cmd_upload.php',
	  name: 'userfile',
  	  data: { debug: 'false' },
	  autoSubmit: true,
	  responseType: false,
	  onChange: function(file, extension){},
	  onSubmit: function(file, extension) {},
	  onComplete: function(file, response) { 
	      response = response
		  .replace(/&lt;/g,'<')
		  .replace(/&gt;/g,'>')
		  .replace(/&amp;/g,'&')
		  .replace(/<PRE>/g, "")
		  .replace(/<\/PRE>/g, "")
		  .replace(/<pre>/g, "")
		  .replace(/<\/pre>/g, "");
              $("#programtext").val(response);
          }
      }

    new AjaxUpload('#upload', upload_block);    

    $('#debug').click(function() {
        // The test looks backwards, but it became checked, before entering
	// the click handler, for the click that caused it to be checked....
        if ($('#debug').is(':checked')) {
	    upload_block.data.debug = 'true'; 
	    new AjaxUpload('#upload', upload_block);    
        } else {
	    upload_block.data.debug = 'false';
            new AjaxUpload('#upload', upload_block);    
        }
    });

    $('#about').click(function() { 
          $('#abouttext').css('display','block');
          $('#editordiv').css('display','none');
          $('#listing').css('display','none');
    });

});




