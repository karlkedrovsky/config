(require 'package)
(add-to-list 'package-archives
	     '("marmalade" . "http://marmalade-repo.org/packages/"))
(add-to-list 'package-archives '("org" . "http://orgmode.org/elpa/") t)
(add-to-list 'package-archives '("melpa" . "http://melpa.org/packages/") t)
(package-initialize)
(when (not package-archive-contents)
  (package-refresh-contents))
(defvar my-packages '(clojure-mode
                      paredit
                      cider
		      expand-region
		      magit
		      markdown-mode
                      cl-lib
		      php-mode
		      yasnippet
                      web-mode
                      color-theme
                      git-gutter
                      powerline
                      org
                      edit-server
                      auto-complete
                      ag
                      robe
                      ace-jump-mode
                      erc
                      emmet-mode
                      lorem-ipsum
                      jade-mode
                      handlebars-mode
                      puppet-mode
                      multiple-cursors
                      feature-mode
                      js2-mode
                      js-comint
                      gotham-theme
                      helm
                      projectile
                      helm-projectile))
(dolist (p my-packages)
  (when (not (package-installed-p p))
    (package-install p)))
