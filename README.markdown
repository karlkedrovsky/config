Config Files
============

This repository contains my own personal config files that I use on
Linux and OS X.

Whenever I set up a new machine I simply clone the repo into my home
directory.

    git clone git://gihub.com/karlkedrovsky/config.git ~/config

Emacs Config
============

Just symlink the emacs.d directory.

    ln -s ~/config/emacs.d ~/.emacs.d

The first time emacs is run on the machine the packages specified in
the init.el file will be installed.

Yasnippits for Drupal are from Mike Smith and are managed via a git
subtree. To add the project run the following:

    cd ~/config
    git subtree add --prefix emacs.d/drupal-yasnippet git@github.com:vml-msmith/drupal-yasnippet.git master --squash

To update it run:

    cd ~/config
    git subtree pull --prefix emacs.d/drupal-yasnippet git@github.com:vml-msmith/drupal-yasnippet.git master --squash


Vim Config
==========

Run the following for a new set up. I switched back to emacs a while
ago so this may or may not be up to date.

    ln -s ~/config/vimrc ~/.vimrc ln -s ~/config/gvimrc ~/.gvimrc
    mkdir ~/.vimbackup mkdir ~/.vimswap mkdir ~/.vimviews

Plugins are managed
using[vundle](https://github.com/gmarik/vundle). Just run the
following to install vundle and download all the plugins. The first
time you run the BundleInstall it will complain about not being able
to find the Solarized theme (which it's about to install) but you can
safely ignore it.

    git clone https://github.com/gmarik/vundle.git ~/.vim/bundle/vundle
    vim +BundleInstall +qall

Zsh Config
==========

For my zsh config I'm using Robby Russell's
[oh-my-zsh](https://github.com/robbyrussell/oh-my-zsh) framework with
my own theme file. To set it up just clone the repository from github
in your home directory:

    git clone git://github.com/robbyrussell/oh-my-zsh
    cp config/karl.zsh-theme oh-my-zsh/themes

My .zshrc file is already set up to use this but if you want to use
your own just follow the instructions in the oh-my-zsh README file.
