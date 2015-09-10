(setq org-directory "~/owncloud/org")
(setq org-default-notes-file (concat org-directory "/notes.org"))

(setq org-agenda-files (list
                        org-directory
                        (concat org-directory "/home")
                        (concat org-directory "/work")))

(global-set-key "\C-cl" 'org-store-link)
(global-set-key "\C-ca" 'org-agenda)
(global-set-key "\C-cb" 'org-iswitchb)
(global-set-key "\C-cc" 'org-capture)

(add-hook 'org-mode-hook (lambda () (setq visual-line-mode t)))

(require 'ox-publish)
(setq org-publish-project-alist
      '(
        ("org-notes"
         :base-directory "~/owncloud/org/"
         :base-extension "org"
         :publishing-directory "~/owncloud/org/export/html/"
         :recursive t
         :publishing-function org-html-publish-to-html
         :headline-levels 4
         :auto-preamble
         )
        ("org-static"
         :base-directory "~/owncloud/org/"
         :base-extension "css\\|js\\|png\\|jpg\\|gif\\|pdf\\|mp3\\|ogg\\|swf"
         :publishing-directory "~/owncloud/org/export/html/"
         :recursive t
         :publishing-function org-publish-attachment
         )
        ("org" :components ("org-notes" "org-static")
         )))

(org-babel-do-load-languages
 'org-babel-load-languages
 '(
   (sh . t)
   (python . t)
   (ruby . t)
   ))
