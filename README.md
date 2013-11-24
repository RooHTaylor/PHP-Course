# Introduction to PHP and MySQL #

This group of files is part of an introductory PHP course developed for [Hackademy Canada](https://twitter.com/HackademyCA) by [Andrew Taylor](mailto:roo.h.taylor@gmail.com).  Each file is licensed under the [Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported](Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported) license group.

## Building a PDF ##

The documentation contained in this repository is written in the [Pandoc version of Markdown](http://johnmacfarlane.net/pandoc/README.html#pandocs-markdown). PDFs (and many other formats) may be generated from the source code.

### Dependencies ###

Before building, ensure that you have the following dependencies installed.

* [Pandoc](http://johnmacfarlane.net/pandoc/)
* Some distribution of LaTeX (a typesetting program)
    * On Windows, use [MiKTeX](http://miktex.org/)
    * On Linux, use TeX Live from your repositories
    * On Mac, figure out what works and contribute to the documentation :-)

### Building ###

Once the dependencies have been installed, build a PDF like this:

    pandoc --toc -s -o "Introduction to PHP.pdf" "Introduction to PHP.md"
