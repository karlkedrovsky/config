(require 'lorem-ipsum)

(add-hook 'web-mode-hook (lambda ()
                           (setq Lorem-ipsum-paragraph-separator "")
                           ))
