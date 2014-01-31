# Introduction to PHP and MySQL #

This group of files is part of an introductory PHP course developed for [Hackademy Canada](https://twitter.com/HackademyCA) by [Andrew Taylor](https://twitter.com/RooHTaylor).  Each file is licensed under the [Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported](Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported) license group.

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

Once the dependencies have been installed, build PDFs like this:

    pandoc --toc -s -o "Introduction to PHP.pdf" \
        -V graphics=true -B hackademy-logo.tex "Introduction to PHP.md"

    pandoc --toc -s -o "Introduction to PHP (handout).pdf" \
        -B hackademy-logo.tex "Introduction to PHP (handout).md"

or if you have PHP installed locally, use the build script:

    php build.php --instructor --student
