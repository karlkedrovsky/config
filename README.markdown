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

After syncing through Dropbox (or cloning the git repository) run the following
for a new set up.

    ln -s ~/Dropbox/home/vimrc ~/.vimrc
    ln -s ~/Dropbox/home/gvimrc ~/.gvimrc
    mkdir ~/.vimbackup
    mkdir ~/.vimswap
    mkdir ~/.vimviews

Plugins are managed using [vundle](https://github.com/gmarik/vundle). Just run
the following to install vundle and download all the plugins. The first time
you run the BundleInstall it will complain about not being able to find the
Solarized theme (which it's about to install) but you can safely ignore it.

    git clone https://github.com/gmarik/vundle.git ~/.vim/bundle/vundle
    vim +BundleInstall +qall

Zsh Config
==========

For my zsh config I'm using Robby Russell's
[oh-my-zsh](https://github.com/robbyrussell/oh-my-zsh) framework. To set it up
just clone the repository from github in your home directory:

    git clone git://github.com/robbyrussell/oh-my-zsh.git ~/.oh-my-zsh

My .zshrc file is already set up to use this but if you want to use your own
just follow the instructions in the oh-my-zsh README file.
