// よくあるご質問
document
  .querySelectorAll(".p-front__faq__faq__question__btn")
  .forEach((btn) => {
    btn.addEventListener("click", function () {
      const faqDiv = btn.closest(".p-front__faq__faq");
      faqDiv.classList.toggle("is-open");
    });
  });
