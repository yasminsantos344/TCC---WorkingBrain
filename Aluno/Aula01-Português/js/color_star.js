const stars = document.querySelectorAll('.star-rating .bi');
const ratingValueDisplay = document.getElementById('rating-value');
let rating = 0;

stars.forEach(star => {
    star.addEventListener('click', () => {
        rating = star.getAttribute('data-value');
        highlightStars(rating);
        ratingValueDisplay.textContent = `Você avaliou este material com ${rating} estrela(s)`;
    });
});

function highlightStars(rating) {
    stars.forEach(star => {
        if (star.getAttribute('data-value') <= rating) {
            star.classList.add('bi-star-fill');
            star.classList.remove('bi-star');
        } else {
            star.classList.add('bi-star');
            star.classList.remove('bi-star-fill');
        }
    });
}
