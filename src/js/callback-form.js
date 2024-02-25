const API_URL = 'https://order.drcash.sh/v1/order';
const API_TOKEN = 'NWJLZGEWOWETNTGZMS00MZK4LWFIZJUTNJVMOTG0NJQXOTI3';
const CALLBACK_FORM_ID = 'callback-form';
const VALIDATE_PHONE_REGEX = /^\+\d{1,3}\(\d{3}\)\s*\d{3}-\d{2}-\d{2}$/

// 8c4976c8-7235-4aaf-a979-1c5ef22f4002
// bf0de2f4-c8ef-4898-8be2-594787e8ee6d

export function processCallbackForm() {
  const form = document.getElementById(CALLBACK_FORM_ID);

  if (!form) {
    return;
  }

  setLocalStorage();

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const phone = document.getElementById('phone').value.trim();

    if (!isPhoneValid(phone)) {
      alert('Пожалуйста, введите корректный номер телефона');
      return;
    }

    if (hasAlreadySent(phone)) {
      alert('Вы уже отправили заказ. Повторная отправка невозможна.');
      return;
    }

    submitForm(this);
  });
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
  console.log(phones);
  return !!phones.includes(phone);
}

function submitForm(form) {
  const phone = form.elements['phone'].value;
  const name = form.elements['name'].value;
  const sub1 = form.elements['hidden-field'].value;

  fetch(API_URL, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${ API_TOKEN }`,
    },
    body: JSON.stringify({
      stream_code: 'iu244',
      client: {
        name,
        phone
      },
      sub1,
    }),
  })
    .then(response => response.json())
    .then(data => {
      if (data.uuid) {
        savePhone(phone);
        window.location.href = 'thank-you.html';
      } else {
        window.location.href = 'error.html';
      }
    })
    .catch(error => {
      console.error('Error:', error);
      window.location.href = 'error.html';
    });
}

function savePhone(phone) {
  const phones = JSON.parse(localStorage.getItem('phones'));
  localStorage.setItem('phones', JSON.stringify([...phones, phone]));
}
