;; Directories and file names
(setq kdk-emacs-init-file (or load-file-name buffer-file-name))
(setq kdk-emacs-config-dir
      (file-name-directory kdk-emacs-init-file))
(setq user-emacs-directory kdk-emacs-config-dir)
(setq kdk-elisp-dir (expand-file-name "elisp" kdk-emacs-config-dir))
(setq kdk-elisp-external-dir
      (expand-file-name "external" kdk-elisp-dir))
(setq kdk-init-dir
      (expand-file-name "init.d" kdk-emacs-config-dir))

;; Load all elisp files in ./init.d
(if (file-exists-p kdk-init-dir)
    (dolist (file (directory-files kdk-init-dir t "\\.el$"))
      (load file)))
