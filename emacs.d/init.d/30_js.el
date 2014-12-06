(require 'js2-mode)
(add-to-list 'auto-mode-alist '("\\.js\\'" . js2-mode))

(require 'js-comint)
(setq inferior-js-program-command "node --interactive")
(setenv "NODE_NO_READLINE" "1")

(add-hook 'js2-mode-hook 
          '(lambda ()
             (local-set-key (kbd "C-x C-e") 'js-send-last-sexp)
             (local-set-key (kbd "C-x C-r") 'js-send-region)
             (local-set-key (kbd "C-M-x") 'js-send-last-sexp-and-go)
             (local-set-key (kbd "C-c b") 'js-send-buffer)
             (local-set-key (kbd "C-c C-b") 'js-send-buffer-and-go)))
