document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('.carousel-container');

    carousels.forEach(container => {
        const images = container.querySelectorAll('.carousel-content img');
        const prevBtn = container.querySelector('.prev');
        const nextBtn = container.querySelector('.next');
        const currentPage = container.querySelector('.current-page');
        const totalPages = container.querySelector('.total-pages');
        let currentIndex = 0;

        // Initialisation
        images[0].classList.add('active');
        totalPages.textContent = images.length;
        currentPage.textContent = currentIndex + 1;

        function showImage(index) {
            images.forEach(img => img.classList.remove('active'));
            images[index].classList.add('active');
            currentPage.textContent = index + 1;
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        });
    });
});
