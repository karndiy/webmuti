const chatMessageList = document.querySelector('.chat-message-list');
const chatInput = document.querySelector('.chat-footer input[type="text"]');
const chatButton = document.querySelector('.chat-footer button');

chatButton.addEventListener('click', sendMessage);
chatInput.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    sendMessage();
  }
});

function sendMessage() {
  const message = chatInput.value.trim();
  if (message === '') {
    return;
  }

  const chatMessage = document.createElement('li');
  chatMessage.classList.add('chat-message');
  chatMessage.classList.add('user');
  chatMessage.innerHTML = `
    <div>${message}</div>
    <div class="time">${getTime()}</div>
  `;
  chatMessageList.appendChild(chatMessage);

  chatInput.value = '';
  chatInput.focus();

  setTimeout(() => {
    const botMessage = document.createElement('li');
    botMessage.classList.add('chat-message');
    botMessage.classList.add('bot');
    botMessage.innerHTML = `
      <div>Hi there, I'm ChatGPT. How can I assist you today?</div>
      <div class="time">${getTime()}</div>
    `;
    chatMessageList.appendChild(botMessage);

    chatMessageList.scrollTop = chatMessageList.scrollHeight;
  }, 1000);
}

function getTime() {
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, '0');
  const minutes = now.getMinutes().toString().padStart(2, '0');
  return `${hours}:${minutes}`;
}
