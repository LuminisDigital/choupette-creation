document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('.carousel-container');

    carousels.forEach(container => {
        const content = container.querySelector('.carousel-content');
        const prevBtn = container.querySelector('.prev');
        const nextBtn = container.querySelector('.next');
        const currentPage = container.querySelector('.current-page');
        const totalPages = container.querySelector('.total-pages');
        const images = content.querySelectorAll('img');
        const totalImages = images.length;
        let currentIndex = 0;

        const updatePagination = () => {
            currentPage.textContent = currentIndex + 1;
            totalPages.textContent = totalImages;
        };

        // Initialisation de la pagination
        updatePagination();

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                content.scrollBy({
                    left: -320,
                    behavior: 'smooth'
                });
                updatePagination();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentIndex < totalImages - 1) {
                currentIndex++;
                content.scrollBy({
                    left: 320,
                    behavior: 'smooth'
                });
                updatePagination();
            }
        });
    });
});
