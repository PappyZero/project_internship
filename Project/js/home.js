// Frequently Asked Questions start here
const faqQuestions = document.querySelectorAll(".faq_row_ques");
const faqAnswers = document.querySelectorAll(".faq_row_ans");

faqQuestions.forEach((question, index) => {
    question.addEventListener("click", () => {
        // Hide all answers
        faqAnswers.forEach((answer) => {
            answer.style.display = "none";
        });

        // Toggle the display of the clicked answer
        faqAnswers[index].style.display = "block";
    });
});

// Show the default-open answer on page load
document.addEventListener("DOMContentLoaded", () => {
    const defaultOpenAnswer = document.querySelector(".default-open");
    if (defaultOpenAnswer) {
        defaultOpenAnswer.style.display = "block";
    }
});
// Frequently Asked Questions ends here


// Rating Read More starts here.

function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

//   Rating Read More ends here.