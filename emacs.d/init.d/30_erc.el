(require 'erc-join)
(erc-autojoin-mode t)

(erc :server "irc.freenode.net" :port 6667 :nick "karlkedrovsky")
(erc :server "irc.geekshed.net" :port 6667 :nick "karlkedrovsky")

(setq erc-autojoin-channels-alist
      '(("freenode.net" "#drupalcorn" "#drupalkc")))
;;        ("geekshed.net" "#jupiterbroadcasting")

;; Growl integration

;; (when (string= system-type "darwin")
;;   (progn
;;     (defvar growlnotify-command (executable-find "growlnotify") "The path to growlnotify")
;; 
;;     (defun growl (title message)
;;       "Shows a message through the growl notification system using
;;  `growllnotify-command` as the program."
;;       (flet ((encfn (s) (encode-coding-string s (keyboard-coding-system))) )
;;         (let* ((process (start-process "growlnotify" nil
;;                                        growlnotify-command
;;                                        (encfn title)
;;                                        "-a" "Emacs"
;;                                        "-n" "Emacs")))
;;           (process-send-string process (encfn (message "FORMATSTRING" &optional ARGS)essage))
;;           (process-send-string process "\n")
;;           (process-send-eof process)))
;;       t)
;; 
;;     (defun my-erc-hook (match-type nick message)
;;       "Shows a growl notification, when user's nick was mentioned. If the buffer is currently not visible, makes it sticky."
;;       (unless (posix-string-match "^\\** *Users on #" message)
;;         (growl
;;          (concat "ERC: name mentioned on: " (buffer-name (current-buffer)))
;;          message
;;          )))
;; 
;;     (add-hook 'erc-text-matched-hook 'my-erc-hook)))
