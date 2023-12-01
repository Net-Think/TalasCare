const apiKey = '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';
const chatMessages = document.getElementById('chatMessages');
const userInput = document.getElementById('userInput');
const sendMessageButton = document.getElementById('sendMessage');

sendMessageButton.addEventListener('click', async () => {
  const userMessage = userInput.value;
  if (userMessage.trim() === '') return;

  const userMessageDiv = document.createElement('div');
  userMessageDiv.classList.add('user-message');
  userMessageDiv.textContent = userMessage;

  chatMessages.appendChild(userMessageDiv);
  userInput.value = '';

  showLoading();

  try {
    const botResponse = await getBotResponseFromChatGPT(userMessage, chatHistory);

    hideLoading();

    const botMessageDiv = document.createElement('div');
    botMessageDiv.classList.add('bot-message');
    botMessageDiv.textContent = botResponse;

    chatMessages.appendChild(botMessageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;

    chatHistory.push({ role: "assistant", content: botResponse });
  } catch (error) {
    console.error('ChatGPT:', error);
    hideLoading();
  }
});

function showLoading() {
  const loadingDiv = document.createElement('div');
  loadingDiv.classList.add('loading');
  loadingDiv.textContent = ' Typing...';

  chatMessages.appendChild(loadingDiv);
}

function hideLoading() {
  const loadingDiv = document.querySelector('.loading');
  if (loadingDiv) {
    chatMessages.removeChild(loadingDiv);
  }
}

const chatHistory = [
  { role: "system", content: "a simple bot to talk about taro plants pests only" },
  { role: "system", content: "a simple bot to talk about taro plants pests only please!!" }
];

async function getBotResponseFromChatGPT(userMessage, chatHistory) {
  const apiUrl = 'https://api.openai.com/v1/chat/completions';

  const headers = {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${apiKey}`
  };

  chatHistory.push({ role: "user", content: userMessage + "dalam bahasa indonesia" });
  const requestData = {
    model: "gpt-3.5-turbo",
    messages: chatHistory,
  };

  const response = await fetch(apiUrl, {
    method: 'POST',
    headers: headers,
    body: JSON.stringify(requestData)
  });

  const data = await response.json();
  const botResponse = data.choices[0].message.content;

  return botResponse;
}
