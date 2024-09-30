const showmenu = (headerToggle, navbarId) =>{
    const toggleBtn = document.getElementById(headerToggle),
    nav = document.getElementById(navbarId)

    if(headerToggle && navbarId){
        toggleBtn.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')

            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showmenu('header-toggle', 'navbar')