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

// Frequently Asked Questions start here

// faq_row_ques_1
// document.getElementById("faq_row_ques_1").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_1").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "block";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//     }
// });

// faq_row_ques_2
// document.getElementById("faq_row_ques_2").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_2").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "block";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_3
// document.getElementById("faq_row_ques_3").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_3").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "block";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_4
// document.getElementById("faq_row_ques_4").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_4").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "block";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_5
// document.getElementById("faq_row_ques_5").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_5").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "block";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_6
// document.getElementById("faq_row_ques_6").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_6").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "block";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_7
// document.getElementById("faq_row_ques_7").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_7").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "block";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_8
// document.getElementById("faq_row_ques_8").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_8").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "block";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_9
// document.getElementById("faq_row_ques_9").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_9").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "block";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// faq_row_ques_10
// document.getElementById("faq_row_ques_10").addEventListener("click", function()
// {
//     if (document.getElementById("faq_row_ans_10").style.display === "none")
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "block";
//     }
//     else
//     {
//         document.getElementById("faq_row_ans_1").style.display = "none";
//         document.getElementById("faq_row_ans_2").style.display = "none";
//         document.getElementById("faq_row_ans_3").style.display = "none";
//         document.getElementById("faq_row_ans_4").style.display = "none";
//         document.getElementById("faq_row_ans_5").style.display = "none";
//         document.getElementById("faq_row_ans_6").style.display = "none";
//         document.getElementById("faq_row_ans_7").style.display = "none";
//         document.getElementById("faq_row_ans_8").style.display = "none";
//         document.getElementById("faq_row_ans_9").style.display = "none";
//         document.getElementById("faq_row_ans_10").style.display = "none";
//     }
// });

// Frequently Asked Questions ends here

