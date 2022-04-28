const menuIcon = document.querySelector('header nav div img');
const navBar = document.querySelector('.toggle-nav');
const menuIconX = document.querySelector('.toggle-nav h1');
const learnMore = document.querySelectorAll('.sec-3-wrapper .services div span');
const footerNavigation = document.querySelectorAll('footer div:nth-child(2) ul li');
const headerNavigation = document.querySelectorAll('.toggle-nav div ul li');
const logo = document.querySelector('header nav:first-child div:first-child');

menuIcon.addEventListener('click', () => {
    navBar.classList.toggle('toggle-nav-bar');
});

menuIconX.addEventListener('click', () => {
    navBar.classList.remove('toggle-nav-bar');
}); 
 
for (let i = 0; i < learnMore.length; i++) {

    learnMore[i].addEventListener('click', () => {
        location.href = '/#about'
    });
    
}

for (let i = 0; i < footerNavigation.length; i++) {

    let footerLinks = footerNavigation[i].textContent.toLowerCase(); 

    footerNavigation[i].addEventListener('click', () => {
        
        if (footerLinks === 'home') {
            location.href = '/#';
        }

        location.href = `/#${footerLinks}`;

    })
    
}

for (let i = 0; i < headerNavigation.length; i++) {

    let headerLinks = headerNavigation[i].textContent.toLowerCase(); 
    headerLinks = headerLinks.substring(3);

    headerNavigation[i].addEventListener('click', () => {
        
        if (headerLinks === 'home') {
            location.href = '/#';
        }

        location.href = `/#${headerLinks}`;
        navBar.classList.remove('toggle-nav-bar');

    })
    
}

logo.addEventListener('click', () => {
    location.href = '/';
}) 

console.log('123');