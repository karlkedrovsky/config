# Config Files

This repository contains my own personal config files that I use on
Linux and OS X.

Whenever I set up a new machine I simply clone the repo into my home
directory.

    git clone git://github.com/karlkedrovsky/config.git ~/config

Dot files in the home directory are meant to be symlinks to file in ~/config. These are the files I'm currently using.

    ln -s ~/config/zshrc ~/.zshrc
    ln -s ~/config/bash_profile ~/.bash_profile
    ln -s ~/config/bashrc ~/.bashrc
    ln -s ~/config/aliases ~/.aliases
    ln -s ~/config/tmux.conf ~/.tmux.conf
    ln -s ~/config/config/bat ~/.config/bat
    ln -s ~/config/config/nvim ~/.config/nvim
    ln -s ~/config/config/ohmyposh ~/.config/ohmyposh
    ln -s ~/config/config/starship.toml ~/.config/starship.toml
    ln -s ~/config/config/kitty ~/.config/kitty
    ln -s ~/config/config/hypr ~/.config/hypr

    # old files that aren't currently in use
    ln -s ~/config/Xresources ~/.Xresources
    ln -s ~/config/config/bspwm ~/.config/bspwm
    ln -s ~/config/config/polybar ~/.config/polybar
    ln -s ~/config/config/sxhkd ~/.config/sxhkd
    ln -s ~/config/config/termite ~/.config/termite

# Tmux

    git clone https://github.com/tmux-plugins/tpm ~/.tmux/plugins/tpm
    tmux
    # press `prefix + I` to install plugins
