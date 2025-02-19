function biggerPics(img) {
    let overlay = document.getElementById('overlay');
    let imageAfficher = document.getElementById('imageAfficher');
    imageAfficher.src = 'img/lightbox/' + img;
    overlay.classList.add('active');
}

function toggleOverlay() {
    let overlay = document.getElementById('overlay');
    if (overlay.classList.contains('active')) {
        overlay.classList.remove('active');
        let imageAfficher = document.getElementById('imageAfficher');
        imageAfficher.src = '';
    } else {
        overlay.classList.add('active');
    }
}

document.addEventListener('DOMContentLoaded', (event) => {


    function goUp() {
        let up = document.getElementById('upArrow');
        up.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    goUp();
});