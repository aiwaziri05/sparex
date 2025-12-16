import './bootstrap';

// Footer newsletter subscription
document.addEventListener('DOMContentLoaded', () => {
    const attachNewsletterForm = (formId, emailId, messageId) => {
        const form = document.getElementById(formId);
        if (!form) return;

        const emailInput = document.getElementById(emailId);
        const messageEl = document.getElementById(messageId);

        const showMessage = (text, type = 'info') => {
            if (!messageEl) return;
            messageEl.textContent = text;
            messageEl.classList.remove('text-red-400', 'text-green-400', 'text-gray-400');
            if (type === 'error') {
                messageEl.classList.add('text-red-400');
            } else if (type === 'success') {
                messageEl.classList.add('text-green-400');
            } else {
                messageEl.classList.add('text-gray-400');
            }
        };

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const email = emailInput.value.trim();

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email || !emailPattern.test(email)) {
                showMessage('Please enter a valid email address.', 'error');
                return;
            }

            showMessage('Subscribing...', 'info');

            try {
                const response = await fetch('/api/subscribe', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    body: JSON.stringify({ email }),
                });

                const data = await response.json().catch(() => ({}));

                if (!response.ok) {
                    showMessage(data.message || 'Subscription failed, please try again.', 'error');
                    return;
                }

                emailInput.value = '';
                showMessage(
                    data.message || 'Thank you for subscribing! Please check your email to confirm.',
                    'success'
                );
            } catch (error) {
                showMessage('Subscription failed, please try again.', 'error');
            }
        });
    };

    attachNewsletterForm('footer-newsletter-form', 'footer-newsletter-email', 'footer-newsletter-message');
    attachNewsletterForm('newsletter-page-form', 'newsletter-page-email', 'newsletter-page-message');
});
