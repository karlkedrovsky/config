# This is just a copy of the "candy" prompt with the time moved to the right.

autoload -U colors && colors

# PROMPT=$'%{$fg_bold[green]%}%n@%m %{$fg[blue]%} %{$reset_color%}%{$fg[white]%}[%~]%{$reset_color%} $(git_prompt_info)\
# %{$fg[blue]%}->%{$fg_bold[blue]%} %#%{$reset_color%} '

# Use this one for solarized
# PROMPT=$'%{$fg[yellow]%}%n @ %m %{$fg[blue]%} %{$reset_color%}%{$fg[white]%}[%~]%{$reset_color%} $(git_prompt_info)\
# %{$fg[blue]%}->%{$fg_bold[blue]%} %#%{$reset_color%} '
# RPROMPT='%D{[%I:%M:%S]}'

# Use this one for tomorrow
PROMPT=$'%{$fg[yellow]%}%n @ %m %{$fg[blue]%} %{$reset_color%}%{$fg[blue]%}[%~]%{$reset_color%} $(git_prompt_info)\
%{$fg[blue]%}->%{$fg_bold[blue]%} %#%{$reset_color%} '
RPROMPT='%D{[%I:%M:%S]}'

if [[ $TERM == 'dumb' ]]; then
    RPROMPT=''
fi

ZSH_THEME_GIT_PROMPT_PREFIX="%{$fg[green]%}["
ZSH_THEME_GIT_PROMPT_SUFFIX="]%{$reset_color%}"
ZSH_THEME_GIT_PROMPT_DIRTY=" %{$fg[red]%}*%{$fg[green]%}"
ZSH_THEME_GIT_PROMPT_CLEAN=""
