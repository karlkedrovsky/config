(cond
 ((string-equal system-type "darwin")
  (setq server-socket-dir (format "/tmp/emacs%d" (user-uid)))))

(server-start)
