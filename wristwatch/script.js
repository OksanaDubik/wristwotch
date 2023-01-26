//scrolling
window.addEventListener('scroll', e => {
    document.body.style.cssText += `--scrollTop: ${this.scrollY}px`;
})


let displayWidth = window.innerWidth;
// console.log(displayWidth)
if (displayWidth <= 768) {
    document.querySelectorAll('.header__text').forEach(el => {
        el.textContent = '';
        document.querySelector('.header__tel').style.height = "20px"
    })
}
//переход на новую страницу при клике на кнопку footer
document.querySelectorAll('.btn__subscribe').forEach(el => {
    el.addEventListener('click', function () {
        window.open(this.dataset.url)
    })

})

//форма регистрации
document.querySelector('.header__login').addEventListener('click', function () {
    document.querySelector('.registration').classList.add('opened')
    document.querySelector('.registration').classList.remove('registration')

})

function close() {
    document.querySelector('.opened').classList.add('registration')
    document.querySelector('.opened').classList.remove('opened')
}

document.querySelector('.close').addEventListener('click', close)
document.querySelector('.intel').addEventListener('click', close)





