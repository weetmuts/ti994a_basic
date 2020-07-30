# An on-line basic bytecode compiler/decompiler for the Texas Instruments 99 4/a home computer

This software translates TI99 4/a basic source code into the bytecode
that is used in memory and for disk/tape storage.

The software can load and decompile a TIFILE (or cassette image) containing the
bytecode and render the source code for editing.

You can download a compiled TIFILE that you can put inside a
disk-image and run using a TI994a emulator.

The program can also be played in the speaker of your computer, using
the appropriate audio format used by the actual TI.  This means that
you can connect your computer to the TI with the tape cable and send
your basic program directly from the on-line editor to your original
Texas Instruments 99 4/a home computer!

Since it always decodes the basic bytecode, it cannot handle broken
bytecode that contains non-basic binary stuff that is not part of the
line number table. This is typically the Playground launcher that
escapes the basic sandbox and starts executing machine code.

Note that the backslash is an escape character! To type a single
backslash `\` you have to type two `\\`. Using the escape character
you can enter binary data into for examples strings like this `\xEF`

```
100 REM Edit your (extended) basic program here.
110 REM Upload and Download in TIFILES format.
120 REM You can use escapes (eg \x41 \\) anywhere.
130 REM Use "" for a single quote inside a string.
140 REM
150 PRIN\x54 "HELLO ""WORLD!"" "
160 REM
```
