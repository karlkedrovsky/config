(setq tramp-default-method "ssh")
; (add-to-list 'tramp-remote-process-environment "IN_TRAMP_MODE=t")

;; The following two lines enable editing remote files as root
; (add-to-list 'tramp-default-proxies-alist
; 	     '(nil "\\`root\\'" "/ssh:%h:"))
; (add-to-list 'tramp-default-proxies-alist
; 	     '((regexp-quote (system-name)) nil nil))
