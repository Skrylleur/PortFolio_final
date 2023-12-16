document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            var targetId = this.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);

            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });

            toggleActiveLink(this);
        });
    });
});

function toggleActiveLink(clickedLink) {
    var activeLink = document.querySelector('.nav-link.active');

    if (activeLink !== null) {
        activeLink.classList.remove('active');
    }

    clickedLink.classList.add('active');
}

