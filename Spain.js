document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const header = item.querySelector('.faq-header');
        const body = item.querySelector('.faq-body');
        const toggle = item.querySelector('.faq-toggle');

        header.addEventListener('click', () => {
            if (body.style.display === 'block') {
                body.style.display = 'none';
                toggle.textContent = '+';
            } else {
                body.style.display = 'block';
                toggle.textContent = '-';
            }
        });
    });
});