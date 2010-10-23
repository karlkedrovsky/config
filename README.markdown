Config Files
============

This repository contains my own personal config files that I use on Linux and
OS X.

Vim Config
==========

For my own personal use config files are stored in Dropbox and version
controlled through git.  If you're not me and you want to get a copy for your
own use run the following.

    git clone git://gihub.com/karlkedrovsky/config.git

Plugins are managed using pathogen and use git submodules where possible. I
pretty much just stole what Drew Neil described at
http://vimcasts.org/episodes/synchronizing-plugins-with-git-submodules-and-pathogen.
You should also take a look at Drew's set up on github -
http://github.com/nelstrom/dotfiles.

If you're not using Dropbox do the following to get the submodules.

    cd config
    git submodule init
    git submodule update

After syncing through Dropbox (or cloning the git repository) run the following
for a new set up.

    ls -s ~/Dropbox/home/vimrc ~/.vimrc
    ls -s ~/Dropbox/home/vim ~/.vim
    ls -s ~/Dropbox/home/gvimrc ~/.gvimrc
    mkdir ~/.vimbackup
    mkdir ~/.vimswap
    mkdir ~/.vimviews

Adding a new submodule.

    cd ~/Dropbox/home
    git submodule add http://github.com/tpope/vim-fugitive.git bundle/fugitive
    git add .
    git commit -m "Install Fugitive.vim bundle as a submodule."

