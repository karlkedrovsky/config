return {
    {
        "nvim-treesitter/nvim-treesitter",
        build = ":TSUpdate",
        config = function()
            local config = require("nvim-treesitter.configs")
            config.setup({
                ensure_installed = { "lua", "python", "markdown", "html", "css", "javascript", "typescript" },
                auto_install = false,
                highlight = { enable = true },
                indent = { enable = true },
            })
        end,
    },
}
