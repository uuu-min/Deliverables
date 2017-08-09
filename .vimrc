syntax on
set autoindent
set nobackup
set encoding=utf-8
"set fileencoding=uft-8
set ruler
set title
set shiftwidth=2
set tabstop=4
set showcmd
set scrolloff=5
set hlsearch
set visualbell t_vb=
set noerrorbells
set cursorline
inoremap jj <ESC>
inoremap JJ <ESC>
set clipboard=unnamed,autoselect
noremap <S-h> ^
noremap <S-l> $
inoremap Caps_Lock Zenkaku_Hankaku
noremap Caps_Lock Zenkaku_Hankaku
inoremap  <DEL>
inoremap <BS> <C-BS>

syntax on
highlight Normal ctermbg=black ctermfg=grey
set mouse=a
set number
set ignorecase
set smartcase

set nocompatible
set backspace=indent,eol,start
set clipboard+=unnamed
set clipboard=unnamed
set nostartofline
set matchpairs& matchpairs+=<:>
set showmatch
set matchtime=3
set wrap
set textwidth=0

"** カラースキーマ設定 **
set t_Co=256
colorscheme molokai
let g:molokai_original=1
set background=dark

"** カラースキーマ透過 **
if has('vim_starting')
    autocmd VimEnter * call s:Transset("0.85")
endif

"Transset
function! s:Transset(opacity)
    call system('transset --id ' . v:windowid . ' ' . a:opacity)
endfunction
command! -nargs=1 Transset call <SID>Transset(<q-args>) 
