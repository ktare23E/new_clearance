const themeToggler = document.querySelector(".theme-toggler");

// change theme

// themeToggler.addEventListener('click', () => {
//     document.body.classList.toggle('dark-theme-variables');

//     themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
//     themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
// })


    document.body.classList.add('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');





const activePage = window.location.pathname;
const sidebarLinks = document.querySelectorAll(".nav-middle-container a");

sidebarLinks.forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active')
    }
})











// tabs

const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active')
        })
        tabs.forEach(tab => {
            tab.classList.remove('active')
        })
        tab.classList.add('active')
        target.classList.add('active')
    })
})