const menuButton = document.querySelector('.menu-toggle')

const menu = document.querySelector('.menu')

const line1 = document.querySelector('.line-1')
const line2 = document.querySelector('.line-2')
const line3 = document.querySelector('.line-3')

const blurBg = document.querySelector('.blur')

menuButton.addEventListener('click', ()=>{
    if(!line1.classList.contains('rotate-2') || !line3.classList.contains('rotate-1') || !line2.classList.contains('disappear') || !menu.classList.contains('toggled') || !blurBg.classList.contains('blured')) {
        line1.classList.add('rotate-2')
        line3.classList.add('rotate-1')
        line2.classList.add('disappear')
        menu.classList.add('toggled')
        blurBg.classList.add('blured')
    } else {
        line1.classList.remove('rotate-2')
        line3.classList.remove('rotate-1')
        line2.classList.remove('disappear')
        menu.classList.remove('toggled')
        blurBg.classList.remove('blured')
    }
})

