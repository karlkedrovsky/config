(setq auto-mode-alist
  (cons '("\\.markdown" . markdown-mode) auto-mode-alist))

; (add-hook 'markdown-mode-hook (lambda () (setq visual-line-mode t)))
(add-hook 'text-mode-hook 'turn-on-visual-line-mode)
