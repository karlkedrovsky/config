-- Starting point for this config was liberated from
-- https://github.com/cpow/neovim-for-newbs, which is from the YouTube
-- video series
-- https://www.youtube.com/playlist?list=PLsz00TDipIffreIaUNk64KxTIkQaGguqn

local lazypath = vim.fn.stdpath("data") .. "/lazy/lazy.nvim"
if not vim.loop.fs_stat(lazypath) then
    vim.fn.system({
        "git",
        "clone",
        "--filter=blob:none",
        "https://github.com/folke/lazy.nvim.git",
        "--branch=stable", -- latest stable release
        lazypath,
    })
end
vim.opt.rtp:prepend(lazypath)

require("options")
require("lazy").setup("plugins")
