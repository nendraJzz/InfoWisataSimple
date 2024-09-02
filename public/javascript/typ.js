document.addEventListener('DOMContentLoaded', function() {
    const textArray = ["Indonesia Travel", "Wonderful Indonesia", "Destinasi Wisata"];
    const typingElement = document.getElementById('auto-typing');
    let arrayIndex = 0;
    let charIndex = 0;
    let currentText = '';
    let isDeleting = false;

    function type() {
        if (arrayIndex < textArray.length) {
            if (!isDeleting && charIndex <= textArray[arrayIndex].length) {
                currentText = textArray[arrayIndex].substring(0, charIndex);
                charIndex++;
                typingElement.innerHTML = currentText;
            } else if (isDeleting && charIndex >= 0) {
                currentText = textArray[arrayIndex].substring(0, charIndex);
                charIndex--;
                typingElement.innerHTML = currentText;
            }

            if (charIndex > textArray[arrayIndex].length && !isDeleting) {
                isDeleting = true;
                setTimeout(type, 2000);  // Pause before deleting
            } else if (isDeleting && charIndex < 0) {
                isDeleting = false;
                arrayIndex = (arrayIndex + 1) % textArray.length;
                setTimeout(type, 500);  // Pause before typing next word
            } else {
                setTimeout(type, isDeleting ? 50 : 100);
            }
        } else {
            arrayIndex = 0;
            type();  // Restart typing effect
        }
    }

    type();
});




