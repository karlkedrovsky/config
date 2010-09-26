call pathogen#runtime_append_all_bundles() 
call pathogen#helptags()

set nocompatible
set bg=dark
syntax on
set title
set incsearch
set nowrap

colorscheme blackboard

set expandtab
set tabstop=2
set softtabstop=2
set shiftwidth=2
set autoindent
set smartindent

if has("autocmd")
  " Drupal *.module and *.install files.
  augroup module
    autocmd BufRead,BufNewFile *.module set filetype=php
    autocmd BufRead,BufNewFile *.install set filetype=php
    autocmd BufRead,BufNewFile *.test set filetype=php
    autocmd BufRead,BufNewFile *.inc set filetype=php
  augroup END
endif

map <F2> :NERDTreeToggle<CR>

