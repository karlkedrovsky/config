#+Title:  Emacs Configuration Files
#+AUTHOR: Karl Kedrovsky
#+EMAIL:  karl@kedrovsky.com

# Emacs Configuration Files

This directory contains all the initialization files for my emacs
config. The numbering scheme for the file names is used to make sure
things load in order.

## File Name Prefixes

- 0x - Inital setup files (typically global) that should execute before anything else. Things like load path settings and global variables.
- 10 - Package setup and installation.
- 20 - Non-package specific configuration. Things like fonts and themes.
- 30 - Individual package configuration.
- 
- 99 - Customize file.

