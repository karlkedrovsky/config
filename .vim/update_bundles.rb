#!/usr/bin/env ruby

# modified version of original from http://tammersaleh.com/posts/the-modern-vim-config-with-pathogen

git_bundles = [ 
  "git://github.com/msanders/snipmate.vim.git",
  "git://github.com/scrooloose/nerdtree.git",
  "git://github.com/tpope/vim-fugitive.git",
  "git://github.com/tpope/vim-git.git",
  "git://github.com/tpope/vim-surround.git",
  "git://github.com/tomtom/tcomment_vim.git",
  "git://github.com/tpope/vim-vividchalk.git",
  "git://github.com/nanotech/jellybeans.vim.git",
  "git://github.com/bwyrosdick/vim-blackboard.git",
]

require 'fileutils'
require 'open-uri'

bundles_dir = File.join(File.dirname(__FILE__), "bundle")

FileUtils.cd(bundles_dir)

puts "Trashing everything (lookout!)"
Dir["*"].each {|d| FileUtils.rm_rf d }

git_bundles.each do |url|
  dir = url.split('/').last.sub(/\.git$/, '')
  puts "  Unpacking #{url} into #{dir}"
  `git clone #{url} #{dir}`
  FileUtils.rm_rf(File.join(dir, ".git"))
end

