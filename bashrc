# custom prompt
if [ "$PS1" ]; then

    # Set up the standard colorized prompt
    export PS1='\[\033[01;32m\]\u@\h \[\033[01;33m\]\W \$ \[\033[00m\]'
    
    # Alias to turn off colorization.
    alias ncps1="export PS1='\u@\h \W \$ '"

    if [ $TERM = "dumb" ]; then 
        export PS1='\u@\h \W \$ '
    fi
    
    # If the terminal being used in an xterm set the title bar.
    if [ "$TERM" = "xterm" ]; then
        [ "$USER" ] || USER=$LOGNAME
        PROMPT_COMMAND='echo -ne "\033]0;${USER}@${HOSTNAME%%.*}:${PWD/$HOME/~}\007"'
    fi
fi

# account/host specific prompt
if [[ -e $HOME/.prompt-config ]]; then
    . $HOME/.prompt-config
fi

# turn off the stupid bell
set b off 
set b 0 0 0

# use vi key bindings
set -o vi

# account/host specific aliases
if [[ -e $HOME/.aliases ]]; then
    . $HOME/.aliases
fi

# Change the window title of X terminals 
case $TERM in
    xterm*|rxvt|eterm)
        PROMPT_COMMAND='echo -ne "\033]0;${USER}@${HOSTNAME%%.*}:${PWD/$HOME/~}\007"'
    ;;
    screen)
        PROMPT_COMMAND='echo -ne "\033_${USER}@${HOSTNAME%%.*}:${PWD/$HOME/~}\033\\"'
    ;;
esac

