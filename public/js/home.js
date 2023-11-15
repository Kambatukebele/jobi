const toggleNav = () => {
    const openNav = document.getElementsByClassName('openNav')[0];
    const closeNav = document.getElementsByClassName('closeNav')[0];
    const navigation = document.getElementsByClassName('navigation')[0];

    //On click open the navigation, hide the openNav and show the closeNav
    openNav.addEventListener('click', () =>{
        openNav.classList.remove('block');
        openNav.classList.add('hidden');
        closeNav.classList.remove('hidden');
        closeNav.classList.add('block');
        navigation.classList.remove('-ml-[280px]');
    });

    //On click close the navigation, show the openNav and hide the closeNav
    closeNav.addEventListener('click', () =>{
        navigation.classList.add('-ml-[280px]');
        closeNav.classList.remove('block');
        closeNav.classList.add('hidden');
        openNav.classList.remove('hidden');
        openNav.classList.add('block');
    });
}

toggleNav();