return {
	"nvim-lualine/lualine.nvim",
	config = function()
		require("lualine").setup({
			options = {
				theme = "catppuccin-mocha",
				section_separators = { left = "", right = "" },
				-- component_separators = { left = "", right = "" },
				component_separators = { left = "⋮", right = "⋮" },
				sections = {
					lualine_a = {
						file = 1,
					},
				},
			},
		})
	end,
}
