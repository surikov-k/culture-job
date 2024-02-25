
export function initAnswersList() {
const answersList = document.querySelector('.answers-list');

if (!answersList) return;

  answersList.addEventListener ('click', (e) => {
    const {target} = e;
    if (!target.classList.contains('answers-list__title')) return;

    answersList.querySelectorAll('.answers-list__title').forEach((item) => {
      if (item === target) return;
      item.classList.remove('open');
    });

    target.classList.toggle('open');

    const targetContent = target.nextElementSibling;

    if (target.classList.contains('open')) {
      target.setAttribute('aria-expanded', true);
      targetContent.setAttribute('aria-hidden', false);
    } else {
      target.setAttribute('aria-expanded', false);
      targetContent.setAttribute('aria-hidden', true);
    }
  });
}
