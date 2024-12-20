return {
    {
        "nvim-treesitter/nvim-treesitter",
        build = ":TSUpdate",
        config = function()
            local config = require("nvim-treesitter.configs")
            config.setup({
                ensure_installed = {
                    "lua",
                    "python",
                    "markdown",
                    "markdown_inline",
                    "html",
                    "htmldjango",
                    "css",
                    "javascript",
                    "typescript",
                },
                auto_install = false,
                highlight = { enable = false },
                indent = { enable = true },
            })
        end,
    },
}
