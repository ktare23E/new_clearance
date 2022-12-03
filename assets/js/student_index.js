const themeToggler = document.querySelector(".theme-toggler");

// change theme

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})


    // document.body.classList.add('dark-theme-variables');

    




const activePage = window.location.pathname;
const sidebarLinks = document.querySelectorAll(".nav-middle-container a");

sidebarLinks.forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active')
    }
})