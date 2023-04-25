# Path to your oh-my-zsh configuration.
ZSH=$HOME/oh-my-zsh

# Set name of the theme to load.
# Look in ~/.oh-my-zsh/themes/
# Optionally, if you set this to "random", it'll load a random theme each
# time that oh-my-zsh is loaded.
#ZSH_THEME="candy"
#if [ -n "$INSIDE_EMACS" ]; then
#  export TERM="eterm-color"
#fi
# export ZSH_THEME="karl"

# Set to this to use case-sensitive completion
# CASE_SENSITIVE="true"

# Comment this out to disable weekly auto-update checks
DISABLE_AUTO_UPDATE="true"

# Uncomment following line if you want to disable colors in ls
# DISABLE_LS_COLORS="true"

# Uncomment following line if you want to disable autosetting terminal title.
# DISABLE_AUTO_TITLE="true"

# Uncomment following line if you want red dots to be displayed while waiting for completion
# COMPLETION_WAITING_DOTS="true"

# Which plugins would you like to load? (plugins can be found in ~/.oh-my-zsh/plugins/*)
# Example format: plugins=(rails git textmate ruby lighthouse)
plugins=(git)

source $ZSH/oh-my-zsh.sh

if [[ -f $HOME/.aliases ]]; then
  source $HOME/.aliases
fi

export EDITOR=nvim

# Customize to your needs...
platform=`uname`
if [[ $platform == 'Darwin' ]]; then
  export PATH=$HOME/bin:/usr/local/bin:$PATH
  alias showhiddenfiles='defaults write com.apple.finder AppleShowAllFiles TRUE'
  alias hidehiddenfiles='defaults write com.apple.finder AppleShowAllFiles FALSE'
  alias ec="/Applications/Emacs.app/Contents/MacOS/bin/emacsclient -nw -s /tmp/emacs$UID/server"
  alias sws="python -m SimpleHTTPServer 8000"
#  export DOCKER_TLS_VERIFY=1
#  export DOCKER_HOST=tcp://192.168.59.103:2376
#  export DOCKER_CERT_PATH=/Users/kkedrovsky/.boot2docker/certs/boot2docker-vm  export PATH=$HOME/bin:$PATH
fi
unsetopt beep
# bindkey -v
# autoload -U promptinit && promptinit
setopt auto_pushd

export LANG=en_US.UTF-8
export LC_CYTPE=$LANG
# user and group ids are initially/mostly for docker builds
export USER_ID=`id -u`
export GROUP_ID=`id -g`

# colors
if [[ $TERM != 'linux' && $TERM != 'dumb' ]]; then
  if [[ -e /usr/share/terminfo/x/xterm-256color || -e /usr/share/terminfo/78/xterm-256color ]]; then
    export TERM='xterm-256color'
  else
    export TERM='xterm-color'
  fi
fi

# Tilix fix
if [ $VTE_VERSION ]; then
  source /etc/profile.d/vte.sh
fi

# Fix prompt for tramp connections in emacs
if [[ $IN_TRAMP_MODE == "t" ]]; then
    #PS1='%(?..[%?])%!:%~%# '
    PS1='$'
    # for tramp to not hang, need the following. cf:
    # http://www.emacswiki.org/emacs/TrampMode
    unsetopt zle
    unsetopt prompt_cr
    unsetopt prompt_subst
    #unfunction precmd
    #unfunction preexec
fi

# Add bin path used by pip
if [[ -d "$HOME/.local/bin" ]]; then
    export PATH=$HOME/.local/bin:$PATH
fi

# Keychain
if [[ $platform == 'Linux' && -z $(pidof ssh-agent) ]]; then
    if [[ -x /usr/bin/keychain ]]; then
        if [[ -e ~/.ssh/id_ecdsa ]]; then
            /usr/bin/keychain ~/.ssh/id_ecdsa
        fi
        if [[ -e ~/.ssh/id_rsa_vmlyr ]]; then
            /usr/bin/keychain -q ~/.ssh/id_rsa_vmlyr
        fi
        KEYCHAIN_FILE=~/.keychain/`uname -n`-sh
        if [[ -e $KEYCHAIN_FILE ]]; then
            source $KEYCHAIN_FILE >/dev/null
        fi
    fi
fi

# Homebrew
if [[ -s "/opt/homebrew/bin/brew" ]]; then
   eval "$(/opt/homebrew/bin/brew shellenv)"
fi

# RVM
if [[ -s "$HOME/.rvm/scripts/rvm" ]]; then
   source "$HOME/.rvm/scripts/rvm"
   export PATH=$PATH:$HOME/.rvm/bin
fi

# Composer
if [[ -s "$HOME/.composer/vendor/bin" ]]; then
   export PATH=$PATH:$HOME/.composer/vendor/bin
fi

# Home bin
if [[ -s "$HOME/bin" ]]; then
   export PATH=$HOME/bin:$PATH
fi

# java 11
if [[ -s "/usr/local/opt/java11/bin" ]]; then
   export PATH=/usr/local/opt/java11/bin:$PATH
fi

# node 14
# if [[ -s "/usr/local/opt/node@14/bin" ]]; then
#    export PATH=/usr/local/opt/node@14/bin:$PATH
# fi

# pyenv (mostly for mac)
if command -v pyenv 1>/dev/null 2>&1; then
  eval "$(pyenv init -)"
fi

unset GREP_OPTIONS

# Starship prompt
if [[ $TTY == /dev/tty[0-9] ]]; then
  PS1='%n@%m %~ %# '
else
  eval "$(starship init zsh)"
fi
