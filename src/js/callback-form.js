
const CALLBACK_FORM_ID = 'callback-form';
const VALIDATE_PHONE_REGEX = /^\+\d{1,3}\s*\(\d{3}\)\s*\d{3}-\d{2}-\d{2}$/
const SHOW_ER0RR_CLASS = 'show-error';

// 8c4976c8-7235-4aaf-a979-1c5ef22f4002
// bf0de2f4-c8ef-4898-8be2-594787e8ee6d

export function processCallbackForm() {
  const submitButton = document.querySelector('.callback-form__submit');
  const form = document.getElementById(CALLBACK_FORM_ID);

  if (!form) {
    return;
  }
  const phoneInput = document.getElementById('phone');

  setLocalStorage();

  phoneInput.addEventListener('input', function (event) {
    const phone = event.target.value;

    if (!isPhoneValid(phone)) {
      phoneInput.setCustomValidity("Неверный формат");

    } else {
      phoneInput.setCustomValidity("");

      if (hasAlreadySent(phone)) {
        phoneInput.setCustomValidity("Вы уже отправили заказ. Повторная отправка невозможна");
      } else {
        phoneInput.setCustomValidity("");
      }
    }
  });

  // form.addEventListener('submit', function (event) {
  //   event.preventDefault();
  //   submitForm(form);
  // });
}

function setLocalStorage() {
  const phones = localStorage.getItem('phones');
  if (!phones) {
    localStorage.setItem('phones', '[]');
  }
}

function isPhoneValid(phone) {
  return VALIDATE_PHONE_REGEX.test(phone);
}

function hasAlreadySent(phone) {
  const phones = JSON.parse(localStorage.getItem('phones'));
  return phones.includes(phone);
}

// function submitForm(form) {
//   const phone = form.elements['phone'].value;
//   const name = form.elements['name'].value;
//   const sub1 = form.elements['hidden-field'].value;
//
//   fetch(API_URL, {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json',
//       'Authorization': `Bearer ${ API_TOKEN }`,
//     },
//     body: JSON.stringify({
//       stream_code: 'iu244',
//       client: {
//         name,
//         phone
//       },
//       sub1,
//     }),
//   })
//     .then(response => response.json())
//     .then(data => {
//       if (data.uuid) {
//         savePhone(phone);
//         window.location.href = 'thank-you.html';
//       } else {
//         window.location.href = 'error.html';
//       }
//     })
//     .catch(error => {
//       console.error('Error:', error);
//       window.location.href = 'error.html';
//     });
// }


export function savePhoneHandler() {
  const savePhoneButton = document.getElementById('save-phone');

  if (!savePhoneButton) {
    return;
  }

  const phone = savePhoneButton.dataset.phone;

  savePhoneButton.addEventListener('click', function () {
    const phones = JSON.parse(localStorage.getItem('phones'));
    localStorage.setItem('phones', JSON.stringify([...phones, phone]));
  })
}
