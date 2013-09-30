;;(set-default-font "xft:Bitstream Vera Sans Mono-8")
(when (not (string= system-type "darwin"))
  (set-face-attribute 'default nil :font "Droid Sans Mono-10")
  (set-default-font "Droid Sans Mono-10")
  (setq default-frame-alist '((font . "Droid Sans Mono-10"))))

