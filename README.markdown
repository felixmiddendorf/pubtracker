# PubTracker
by [Felix Middendorf][fm]

Please refer to [this project description on the authors website][pubtracker]
for a brief introduction and to `/doc/pubtracker.pdf` for the underlying design
details and decisions.

## License
PubTracker is released under [MIT license][MIT] (see `COPYING`).

## Notice
Please bear in mind that PubTracker was an assignment in Distributed & Mobile
Computing, a third year's class at [ITT Dublin][itt]. It is not a polished
software product.

## Directory Structure

### /
You can configure PubTracker by editing `config.php`.
	
### /actions
Contains the actual PubTracker functionality.
	
### /db
Create a database using the `.sql` files in this directory.
	
### /doc
You can build the aforementioned PDF using `build_pdf.sh` in /doc/. This
requires pdflatex, bibtex as well as some LaTeX packages(refer to `grep
usepackage pubtracker.tex` for package details). The documentation is written in
British English.
	
### /templates
Contains the pure php templates.
	
### /www
Point your web servers www root to this directory.

[fm]: http://www.felixmiddendorf.eu/
	"Felix Middendorf's Website"
[pubtracker]: http://www.felixmiddendorf.eu/projects/dmc-pubtracker/
	"Pubtracker"
[itt]: http://www.itt-dublin.ie
	"ITT Dublin"
[MIT]: http://www.opensource.org/licenses/mit-license.php
	"MIT license"