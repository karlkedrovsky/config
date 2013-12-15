(require 'package)
(add-to-list 'package-archives
	     '("marmalade" . "http://marmalade-repo.org/packages/"))
(add-to-list 'package-archives '("org" . "http://orgmode.org/elpa/") t)
(add-to-list 'package-archives '("melpa" . "http://melpa.milkbox.net/packages/") t)
(package-initialize)
(when (not package-archive-contents)
  (package-refresh-contents))
(defvar my-packages '(clojure-mode
                      cider
		      expand-region
		      magit
		      markdown-mode
                      cl-lib
		      php-mode
		      slime
		      yasnippet
		      paredit
                      web-mode
                      color-theme
                      git-gutter
                      powerline
                      puppet-mode
                      org
                      org-magit
                      org-jekyll
                      edit-server
                      auto-complete
                      ag
                      robe))
(dolist (p my-packages)
  (when (not (package-installed-p p))
    (package-install p)))
