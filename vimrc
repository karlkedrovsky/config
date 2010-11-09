filetype off
call pathogen#runtime_append_all_bundles() 
" tcomment has a bug in the docs that makes helptags complain.
" uncomment this when it's fixed.
" call pathogen#helptags()

" General settings
set nocompatible
set bg=dark
syntax on
filetype plugin indent on
set title
set incsearch
set hlsearch
set ignorecase
set smartcase
set nowrap
set history=1000
set backspace=indent,eol,start
set number
set ruler
colorscheme blackboard

" Backup files
set backup
set backupdir=$HOME/.vimbackup
set directory=$HOME/.vimswap
set viewdir=$HOME/.vimviews

" Tags and indentation
set expandtab
set tabstop=2
set softtabstop=2
set shiftwidth=2
set autoindent
set smartindent

" Customizations for specific file types
if has("autocmd")
  " Drupal *.module and *.install files.
  augroup module
    autocmd BufRead,BufNewFile *.module set filetype=php
    autocmd BufRead,BufNewFile *.install set filetype=php
    autocmd BufRead,BufNewFile *.test set filetype=php
    autocmd BufRead,BufNewFile *.inc set filetype=php
  augroup END
endif

" Vimwiki

" Key bindings
map <F2> :NERDTreeToggle<CR>

