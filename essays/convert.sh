#!/bin/bash
pandoc the_myth_of_american_exceptionalism.md --from=markdown+raw_attribute -s --metadata title="The Myth of American Exceptionalism" --toc --template template.html -o the_myth_of_american_exceptionalism.html
