const menu = document.querySelector('.menu');
const btn = menu.querySelector('.nav-tgl');
const pathName = window.location.pathname;

// console.log('hello');

//takes navigation button off the front page and displays the nav links
if(pathName.includes('index.php') == true ) {
    // console.log(window.location);
    // console.log('hi on home page')
    $(btn).hide();
    
}else {
    $('.btn').on('click', () => {
    // console.log('click button worked')
    menu.classList.toggle('active');
})
};


//decides what links show depending on the page we're on
function page() {
    let hns= document.getElementById("home-link").style; //hns = home nav stling
    let ans= document.getElementById("about-link").style; //ans = about nav stling
    let pns= document.getElementById("projects-link").style; //pns = projects nav stling
    // console.log(window.location);
    if(pathName.includes('index.php') || pathName.includes('about.php') != true && pathName.includes('projects.php') != true ) {
       hns.display = 'none';
       document.getElementById("nav-tgl").style.display = 'none';

    }else if (pathName.includes('about.php') ) {
        ans.display = 'none';
    }else if (pathName.includes('projects.php') ) {
        pns.display = 'none';
    }
}
page();