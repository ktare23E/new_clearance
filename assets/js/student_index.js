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

const activePage1 = window.location.pathname;

if(activePage1 == "/new_clearance/student_user/student_user_index.php"){
    document.querySelector(".office-top-container").classList.add("index-page")
}


let td = document.querySelectorAll("table tbody tr td")


td.forEach(td => {
    if(td.innerHTML == "Cleared"){
        td.classList.add("success")
    }else if(td.innerHTML == "Not Cleared"){
        td.classList.add("warning")
    }
})



let navtopMenuBtn = document.querySelector("#navtop-menu");
let menuContainer = document.querySelectorAll(".office-top-container .nav-right-container .nav-middle-container")

navtopMenuBtn.addEventListener("click", function() {
    menuContainer.forEach(container => {
        container.classList.toggle("active")
    })
    if(this.innerText == "menu"){
        this.innerText = "close"
    }else if(this.innerText == "close"){
        this.innerText = "menu"
    }
})


