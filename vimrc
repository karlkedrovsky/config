filetype off
" General settings
set nocompatible

set rtp+=~/.vim/bundle/vundle/
call vundle#rc()
Bundle 'gmarik/vundle'
Bundle 'altercation/vim-colors-solarized'
Bundle 'scrooloose/nerdtree'
Bundle 'tpope/vim-fugitive'
Bundle 'plasticboy/vim-markdown'
" Bundle 'Lokaltog/vim-powerline'
Bundle 'taglist.vim'
Bundle 'bufexplorer.zip'
Bundle 'jpalardy/vim-slime'
Bundle 'vim-scripts/VimClojure'

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
set wildmode=longest,list
set clipboard=unnamed
set spelllang=en_us
" the laststatus and encoding were added for powerline
set laststatus=2
set encoding=utf-8
colorscheme solarized

" Powerline
let g:Powerline_symbols = 'fancy'

" vim-slime
let g:slime_target = "tmux"

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

" Tags
set tags=./tags;$HOME

" Vimwiki

" Key bindings
map <F2> :NERDTreeToggle<CR>
inoremap jj <Esc>
