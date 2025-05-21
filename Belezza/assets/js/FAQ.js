//<!-- IT23252554 -->
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); 
}
document.addEventListener("DOMContentLoaded", function() {
    const questions = document.querySelectorAll('.question');

    questions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;

            // Collapse other answers
            const allAnswers = document.querySelectorAll('.answer');
            allAnswers.forEach(a => {
                if (a !== answer && !a.classList.contains('hidden')) {
                    a.classList.add('hidden');
                }
            });

            answer.classList.toggle('hidden');
        });
    });
});
