export EDITOR="vim"

export PATH=$HOME/bin:$PATH

# Colors for ls
if [[ -f ~/.dircolors ]]; then
    eval $(dircolors -b ~/.dircolors)
fi

# Bash variables
export HISTIGNORE=ls:[bf]g:exit

# Keychain
if [[ -x /usr/bin/keychain && -e ~/.ssh/id_dsa ]]; then
    /usr/bin/keychain -q ~/.ssh/id_dsa
    source ~/.keychain/`uname -n`-sh >/dev/null
fi

#This file is sourced by bash when you log in interactively.
[ -f ~/.bashrc ] && . ~/.bashrc

