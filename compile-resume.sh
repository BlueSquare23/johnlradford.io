#!/bin/bash
pandoc resume.md --template=template.tex -o resume.pdf --pdf-engine=lualatex

