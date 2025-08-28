# Starting point liberated from https://github.com/dreamsofautonomy/zensh/blob/main/.zshrc
# and https://www.youtube.com/watch?v=ud7YxC33Z3w

function is_bin_in_path {
    builtin whence -p "$1" &> /dev/null
}

ZINIT_HOME="${XDG_DATA_HOME:-${HOME}/.local/share}/zinit/zinit.git"

# Install and init
if [ ! -d "$ZINIT_HOME" ]; then
   mkdir -p "$(dirname $ZINIT_HOME)"
   git clone https://github.com/zdharma-continuum/zinit.git "$ZINIT_HOME"
fi
source "${ZINIT_HOME}/zinit.zsh"

# Plugins
zinit light zsh-users/zsh-syntax-highlighting
zinit light zsh-users/zsh-completions
zinit light zsh-users/zsh-autosuggestions
zinit light Aloxaf/fzf-tab

# Snippets
zinit snippet OMZP::git
zinit snippet OMZP::sudo
zinit snippet OMZP::archlinux
zinit snippet OMZP::kubectl
zinit snippet OMZP::kubectx
zinit snippet OMZP::command-not-found
zinit snippet OMZP::ssh-agent

# Completions
autoload -Uz compinit && compinit

zinit cdreplay -q

# Keybindings
bindkey -e
bindkey '^p' history-search-backward
bindkey '^n' history-search-forward
bindkey '^[w' kill-region

# History
HISTSIZE=5000
HISTFILE=~/.zsh_history
SAVEHIST=$HISTSIZE
HISTDUP=erase
setopt appendhistory
setopt sharehistory
setopt hist_ignore_space
setopt hist_ignore_all_dups
setopt hist_save_no_dups
setopt hist_ignore_dups
setopt hist_find_no_dups

# Completion styling
zstyle ':completion:*' matcher-list 'm:{a-z}={A-Za-z}'
zstyle ':completion:*' list-colors "${(s.:.)LS_COLORS}"
zstyle ':completion:*' menu no
if is_bin_in_path fzf; then
    zstyle ':fzf-tab:complete:cd:*' fzf-preview 'ls --color $realpath'
    zstyle ':fzf-tab:complete:__zoxide_z:*' fzf-preview 'ls --color $realpath'
fi

unset GREP_OPTIONS
unsetopt beep
setopt auto_pushd

platform=`uname`
if [[ $platform == 'Darwin' ]]; then
  alias showhiddenfiles='defaults write com.apple.finder AppleShowAllFiles TRUE'
  alias hidehiddenfiles='defaults write com.apple.finder AppleShowAllFiles FALSE'
fi

# Add directories to PATH as needed
optional_bin_paths=(
    "$HOME/bin"
    "/usr/local/bin"
    "$HOME/.local/bin"
    "$HOME/.cargo/bin" #rust
    "/opt/homebrew/bin"
    "/opt/homebrew/opt/libpq/bin" # postgres on mac
    "$HOME/.composer/vendor/bin"
)
for optional_bin_path in $optional_bin_paths; do
    if [ -d "$optional_bin_path" ] && [[ ":$PATH:" != *":$optional_bin_path:"* ]]; then
        PATH="$optional_bin_path${PATH:+":$PATH"}"
    fi
done

# Aliases
alias ls='ls --color'
alias ll='ls -al --color'
alias c='clear'
alias uvs='uv sync --freeze'
alias uvr='uv run --no-sync'
alias uvrm='uv run --no-sync manage.py'
if is_bin_in_path nvim; then
    alias vi='nvim'
    alias vim='nvim'
fi
if is_bin_in_path eza; then
    alias ls='eza'
    alias ll='eza -l'
fi
if is_bin_in_path bat; then
    alias cat='bat'
    alias ll='eza -l'
fi

# Shell integrations
if is_bin_in_path fzf; then
    eval "$(fzf --zsh)"
fi
if is_bin_in_path zoxide; then
    eval "$(zoxide init --cmd cd zsh)"
fi

export EDITOR=nvim
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

# Prompt
eval "$(oh-my-posh init zsh --config $HOME/.config/ohmyposh/config.toml)"

# Homebrew
if [[ -s "/opt/homebrew/bin/brew" ]]; then
   eval "$(/opt/homebrew/bin/brew shellenv)"
fi

# The following lines have been added by Docker Desktop to enable Docker CLI completions.
fpath=(/Users/kkedrovsky/.docker/completions $fpath)
autoload -Uz compinit
compinit
# End of Docker CLI completions
