#!/bin/sh
# clean-up
rm pubtracker.aux pubtracker.bbl pubtracker.toc pubtracker.log pubtracker.blg
# build
pdflatex pubtracker.tex
pdflatex pubtracker.tex
bibtex pubtracker
pdflatex pubtracker.tex
pdflatex pubtracker.tex
pdflatex pubtracker.tex
