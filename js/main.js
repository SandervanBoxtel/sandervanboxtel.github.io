const checkbox = document.getElementById('checkbox');

checkbox.addEventListener('change', (event) => {
    if (event.target.checked === true) {
        document.getElementById('mystylesheet').href = "/css/sander-style-dark.css";
        document.getElementById('logonav').src = "/img/SanderLogo.png";
    }
    else {
        document.getElementById('mystylesheet').href = "/css/sander-style.css";
        document.getElementById('logonav').src = "/img/SanderLogoBlue.png";
    }
});

