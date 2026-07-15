#!/bin/bash
pandoc resume.md --template=template.tex -o output.pdf --pdf-engine=lualatex

