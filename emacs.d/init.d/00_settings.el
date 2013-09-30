; No menu bar or scroll bars
(if (fboundp 'menu-bar-mode)
    (menu-bar-mode -1))
(if (fboundp 'tool-bar-mode)
    (tool-bar-mode -1))
(if (fboundp 'scroll-bar-mode)
    (scroll-bar-mode -1))

; No splash screen
(setq inhibit-startup-message t)

; start with empty scratch buffer
(setq initial-scratch-message nil)

; Add top level emacs.d directory to load path
(add-to-list 'load-path "~/.emacs.d")

; Add paths exec-path on the mac
(when (string= system-type "darwin")
  (add-to-list 'exec-path "/usr/local/bin")
  (add-to-list 'exec-path "/Users/kkedrovsky/bin"))

; No backup files
(setq make-backup-files nil)

; Save the buffers
(desktop-save-mode t)
