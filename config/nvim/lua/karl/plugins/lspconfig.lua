local on_attach = function(_, bufnr)
    vim.bo[bufnr].omnifunc = 'v:lua.vim.lsp.omnifunc'

    vim.keymap.set('n', 'gD', '<cmd>lua vim.lsp.buf.declaration()<CR>', { buffer = bufnr })
    vim.keymap.set('n', 'gd', '<cmd>lua vim.lsp.buf.definition()<CR>', { buffer = bufnr })
    vim.keymap.set('n', 'K', '<cmd>lua vim.lsp.buf.hover()<CR>', { buffer = bufnr })
    vim.keymap.set('n', 'gi', '<cmd>lua vim.lsp.buf.implementation()<CR>', { buffer = bufnr })
    vim.keymap.set('n', '<leader>D', '<cmd>lua vim.lsp.buf.type_definition()<CR>', { buffer = bufnr })
    vim.keymap.set('n', '<leader>rn', '<cmd>lua vim.lsp.buf.rename()<CR>', { buffer = bufnr })
    vim.keymap.set('n', 'gr', ':Telescope lsp_references<CR>', { buffer = bufnr })
end

require('lspconfig').bashls.setup({
  on_attach = on_attach,
  capabilities = capabilities,
})

require('lspconfig').html.setup({
  on_attach = on_attach,
  capabilities = capabilities,
})

require('lspconfig').intelephense.setup({
  on_attach = function(client, bufnr)
    on_attach(client, bufnr)
    client.server_capabilities.documentFormattingProvider = false
    client.server_capabilities.documentRangeFormattingProvider = false
  end,
  capabilities = capabilities,
})require('lspconfig').html.setup({
  on_attach = on_attach,
  capabilities = capabilities,
})

require('lspconfig').intelephense.setup({
  on_attach = function(client, bufnr)
    on_attach(client, bufnr)
    client.server_capabilities.documentFormattingProvider = false
    client.server_capabilities.documentRangeFormattingProvider = false
  end,
  capabilities = capabilities,
})

require('lspconfig').tailwindcss.setup({
  on_attach = on_attach,
  capabilities = capabilities,
})

require('lspconfig').pyright.setup({
  on_attach = on_attach,
  capabilities = capabilities,
})


