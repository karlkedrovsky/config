(add-to-list 'auto-mode-alist '("\\.php$" . php-mode))
(add-to-list 'auto-mode-alist '("\\.inc$" . php-mode))
(add-to-list 'auto-mode-alist '("\\.module$" . php-mode))
(add-to-list 'auto-mode-alist '("\\.tpl\.php$" . web-mode))
(add-to-list 'auto-mode-alist '("\\.blade\.php$" . web-mode))
(add-hook 'php-mode-hook 'php-enable-drupal-coding-style)
(add-to-list 'auto-mode-alist '("\\.html$" . web-mode))

