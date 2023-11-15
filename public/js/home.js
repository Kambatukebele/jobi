const toggleNav = () => {
    const openNav = document.getElementsByClassName('openNav')[0];
    const closeNav = document.getElementsByClassName('closeNav')[0];
    const navigation = document.getElementsByClassName('navigation')[0];

    //On click open the navigation, hide the openNav and show the closeNav
    openNav.addEventListener('click', () =>{
        console.log(1);
    });
}

toggleNav();