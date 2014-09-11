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
