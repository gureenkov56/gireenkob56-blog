export default function menulog() {
    const menuBtn = document.getElementById('menu');
    const centerHeader = document.getElementById('centerHeader')!

    menuBtn?.addEventListener('click', () => {
        if (!menuBtn.classList.contains('active')) {
            menuBtn.classList.remove('inactive')
            menuBtn.classList.add('active')
            centerHeader.classList.add('menu-title');
            centerHeader.classList.remove('page-title');
        } else {
            menuBtn.classList.remove('active')
            menuBtn.classList.add('inactive')
            centerHeader.classList.remove('menu-title');
            centerHeader.classList.add('page-title');
        }
    })


}