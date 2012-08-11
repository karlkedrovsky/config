; Packages
(require 'package)
(add-to-list 'package-archives
	     '("marmalade" . "http://marmalade-repo.org/packages/"))
(package-initialize)
(when (not package-archive-contents)
  (package-refresh-contents))
(defvar my-packages '(clojure-mode
		      expand-region
		      magit
		      markdown-mode
		      php-mode
		      slime
		      yasnippet))
(dolist (p my-packages)
  (when (not (package-installed-p p))
    (package-install p)))

; Add top level emacs.d directory to load path
(add-to-list 'load-path "~/.emacs.d")

; Fonts
;;(set-default-font "xft:Bitstream Vera Sans Mono-8")
;;(set-face-attribute 'default nil :font "Droid Sans Mono-10")

; ido
(require 'ido)
(setq ido-enable-flex-matching t)
(setq ido-everywhere t)
(ido-mode 1)

; No backup files
(setq make-backup-files nil)

; Key customizations
; (global-set-key [(control delete)] 'ibuffer)
(global-set-key [C-delete] 'ibuffer)
(global-set-key [C-kp-delete] 'ibuffer)
(global-set-key [f1] 'magit-status)
(global-set-key [f2] 'shell)
(global-set-key [f8] 'undo)

; Save the buffers
(desktop-save-mode t)

; Solarized theme
(add-to-list 'custom-theme-load-path "~/.emacs.d/emacs-color-theme-solarized")
(load-theme 'solarized-dark t)

; No menu bar or scroll bars
(menu-bar-mode 0)
(tool-bar-mode 0)
(scroll-bar-mode 0)

; Org mode
(global-set-key "\C-cl" 'org-store-link)
(global-set-key "\C-ca" 'org-agenda)
(global-set-key "\C-cb" 'org-iswitchb)

; Shell
(add-hook 'shell-mode-hook 'ansi-color-for-comint-mode-on)
(setq shell-file-name "zsh")

; Magit
(require 'magit)

; Yasnippet
(require 'yasnippet)

; Tramp
(require 'tramp)
(setq tramp-default-method "ssh")
;; The following two lines enable editing remote files as root
(add-to-list 'tramp-default-proxies-alist
	     '(nil "\\`root\\'" "/ssh:%h:"))
(add-to-list 'tramp-default-proxies-alist
	     '((regexp-quote (system-name)) nil nil))

; Markdown mode
(setq auto-mode-alist
  (cons '("\\.markdown" . markdown-mode) auto-mode-alist))

; PHP and Drupal modes
; (setq drupal-ide-load-path (concat user-emacs-directory "drupal/drupal-init.el"))
; (autoload 'drupal-ide drupal-ide-load-path "Start IDE for PHP & Drupal development" t)
(add-to-list 'auto-mode-alist '("\\.php$" . php-mode))
(add-to-list 'auto-mode-alist '("\\.inc$" . php-mode))
(add-to-list 'auto-mode-alist '("\\.module$" . php-mode))

; SCSS
(add-to-list 'auto-mode-alist '("\\.scss$" . css-mode))

; Clojure mode
(require 'clojure-mode)

; Expand region mode
(require 'expand-region)
(global-set-key (kbd "C-@") 'er/expand-region)

; custom variables DO NOT EDIT
(custom-set-variables
 ;; custom-set-variables was added by Custom.
 ;; If you edit it by hand, you could mess it up, so be careful.
 ;; Your init file should contain only one such instance.
 ;; If there is more than one, they won't work right.
 '(custom-safe-themes (quote ("fc5fcb6f1f1c1bc01305694c59a1a861b008c534cae8d0e48e4d5e81ad718bc6" . t))))
(custom-set-faces
 ;; custom-set-faces was added by Custom.
 ;; If you edit it by hand, you could mess it up, so be careful.
 ;; Your init file should contain only one such instance.
 ;; If there is more than one, they won't work right.
 )
