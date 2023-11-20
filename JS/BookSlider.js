function scrollSlider(direction) {
    const container = document.querySelector('.slider-container');
    const scrollAmount = direction === 'left' ? -300 : 300;
    container.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  }