let currentIndex = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;

function showImage(index) {
    const carousel = document.querySelector('.carousel');
    const offset = -index * 100;
    carousel.style.transform = `translateX(${offset}%)`;
}

function nextImage() {
    currentIndex = (currentIndex + 1) % totalImages;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage(currentIndex);
}

// Auto-slide functionality
setInterval(nextImage, 5000);

// Optional: pause on hover
const carouselContainer = document.querySelector('.carousel-container');
carouselContainer.addEventListener('mouseover', () => clearInterval(autoSlide));
carouselContainer.addEventListener('mouseout', () => autoSlide = setInterval(nextImage, 5000));
