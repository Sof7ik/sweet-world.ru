const menuElem = document.getElementById("desktop-menu");
const asideDarkenerElem = document.querySelector(".aside-darkener");

function openMenu(event)
{
    event.currentTarget.classList.add('menu-opened');

    menuElem.classList.add('showed');
    asideDarkenerElem.classList.add('showed');

    event.currentTarget.removeEventListener('click', openMenu);
    event.currentTarget.addEventListener('click', closeMenu);
}

function closeMenu(event)
{
    const target = event ? event.currentTarget : document.getElementById("open-left-menu");

    target.classList.remove('menu-opened');
    menuElem.classList.remove('showed');
    asideDarkenerElem.classList.remove('showed');

    target.addEventListener('click', openMenu);
    target.removeEventListener('click', closeMenu);
}

function closeMenuByBtn(event)
{
    if (event.key === "Escape")
    {
        closeMenu(null);
    }
}

document.addEventListener("DOMContentLoaded", e => {
    document.getElementById("open-left-menu").addEventListener('click', openMenu);

    asideDarkenerElem.addEventListener('click', e => closeMenu(null));

    document.addEventListener('keydown', closeMenuByBtn)
});