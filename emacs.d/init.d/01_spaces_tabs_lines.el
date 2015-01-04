; use spaces not tabs
(setq-default indent-tabs-mode nil)

; use 2 spaces for indentation by default
(setq c-default-style "linux" c-basic-offset 2)
;;(c-set-offset 'substatement-open 0)
;;(setq c-default-style '((php-mode . "linux"))
(setq tab-width 2)

; don't wrap lines by default
(setq-default truncate-lines 1)

; scroll one line at a time
(setq mouse-wheel-scroll-amount '(1 ((shift) . 1)))
(setq mouse-wheel-progressive-speed nil)
(setq mouse-wheel-follow-mouse 't)
(setq scroll-step 1)
