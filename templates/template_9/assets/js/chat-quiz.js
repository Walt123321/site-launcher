(function() {
  document.addEventListener('DOMContentLoaded', function() {
    var root = document.getElementById('chat-quiz-root');
    var toggleBtn = document.getElementById('chat-toggle-btn');
    var closeBtn = document.getElementById('chat-close-btn');
    var chatWindow = document.getElementById('chat-window');
    var messagesContainer = document.getElementById('chat-messages');
    var controlsContainer = document.getElementById('chat-controls');
    var typingIndicator = document.getElementById('typing-indicator');
    var notiDot = document.getElementById('chat-noti-dot');
    var isolatedCard = document.getElementById('cq-form-card');
    
    if (!root || !toggleBtn || !chatWindow) return;

    var L = window.quizLang || {};
    var currentStep = 0;
    var answers = {};
    var isOpen = false;

    // Show notification badge after 2s
    setTimeout(function() {
      if (!isOpen && notiDot) {
        notiDot.style.transform = 'scale(1)';
      }
    }, 2000);

    function toggleChat() {
      isOpen = !isOpen;
      if (isOpen) {
        chatWindow.style.display = 'flex';
        setTimeout(function() {
          chatWindow.style.opacity = '1';
          chatWindow.style.transform = 'translateY(0)';
          toggleBtn.style.display = 'none';
        }, 10);
        if (notiDot) notiDot.style.transform = 'scale(0)';
        if (currentStep === 0) {
          startQuiz();
        }
      } else {
        chatWindow.style.opacity = '0';
        chatWindow.style.transform = 'translateY(20px)';
        setTimeout(function() {
          chatWindow.style.display = 'none';
          toggleBtn.style.display = 'flex';
        }, 350);
      }
    }

    toggleBtn.addEventListener('click', toggleChat);
    if (closeBtn) closeBtn.addEventListener('click', toggleChat);

    function addMessage(text, isUser) {
      var msg = document.createElement('div');
      msg.style.display = 'flex';
      msg.style.flexDirection = 'column';
      msg.style.alignItems = isUser ? 'flex-end' : 'flex-start';
      msg.style.margin = '4px 0';

      var bubble = document.createElement('div');
      bubble.style.padding = '10px 14px';
      bubble.style.borderRadius = '14px';
      bubble.style.fontSize = '14px';
      bubble.style.lineHeight = '1.4';
      bubble.style.maxWidth = '85%';
      bubble.style.wordBreak = 'break-word';

      if (isUser) {
        bubble.style.backgroundColor = '#7008e7';
        bubble.style.color = '#ffffff';
        bubble.style.borderBottomRightRadius = '2px';
      } else {
        bubble.style.backgroundColor = '#1e1a4d';
        bubble.style.color = '#f8fafc';
        bubble.style.borderBottomLeftRadius = '2px';
      }

      bubble.innerHTML = text;
      msg.appendChild(bubble);
      messagesContainer.appendChild(msg);
      messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function showTyping(show) {
      if (typingIndicator) {
        typingIndicator.style.display = show ? 'block' : 'none';
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
      }
    }

    function setButtons(opts) {
      controlsContainer.innerHTML = '';
      var group = document.createElement('div');
      group.style.display = 'flex';
      group.style.gap = '8px';
      group.style.flexWrap = 'wrap';
      group.style.width = '100%';
      group.style.justifyContent = 'center';

      opts.forEach(function(opt) {
        var btn = document.createElement('button');
        btn.innerText = opt.text;
        btn.style.padding = '8px 16px';
        btn.style.borderRadius = '20px';
        btn.style.border = '1px solid #7008e7';
        btn.style.backgroundColor = '#0f172b';
        btn.style.color = '#5ee9b5';
        btn.style.fontSize = '13px';
        btn.style.fontWeight = '600';
        btn.style.cursor = 'pointer';
        btn.style.transition = 'all 0.2s ease';

        btn.onmouseover = function() {
          btn.style.backgroundColor = '#7008e7';
          btn.style.color = '#ffffff';
        };
        btn.onmouseout = function() {
          btn.style.backgroundColor = '#0f172b';
          btn.style.color = '#5ee9b5';
        };

        btn.onclick = function() {
          opt.action();
        };

        group.appendChild(btn);
      });

      controlsContainer.appendChild(group);
    }

    function startQuiz() {
      currentStep = 1;
      showTyping(true);
      setTimeout(function() {
        showTyping(false);
        addMessage(L.welcome, false);
        setTimeout(askQ1, 700);
      }, 900);
    }

    function askQ1() {
      showTyping(true);
      setTimeout(function() {
        showTyping(false);
        addMessage(L.q1, false);
        setButtons([
          { text: L.a1_yes, action: function() { handleAnswer('q1', L.a1_yes, askQ2); } },
          { text: L.a1_no, action: function() { handleAnswer('q1', L.a1_no, askQ2); } }
        ]);
      }, 700);
    }

    function askQ2() {
      showTyping(true);
      setTimeout(function() {
        showTyping(false);
        addMessage(L.q2, false);
        setButtons([
          { text: '18 - 30', action: function() { handleAnswer('q2', '18-30', askQ3); } },
          { text: '31 - 50', action: function() { handleAnswer('q2', '31-50', askQ3); } },
          { text: '50+', action: function() { handleAnswer('q2', '50+', askQ3); } }
        ]);
      }, 700);
    }

    function askQ3() {
      showTyping(true);
      setTimeout(function() {
        showTyping(false);
        addMessage(L.q3, false);
        setButtons([
          { text: L.a3_yes, action: function() { handleAnswer('q3', L.a3_yes, askQ4); } },
          { text: L.a3_no, action: function() { handleAnswer('q3', L.a3_no, askQ4); } }
        ]);
      }, 700);
    }

    function askQ4() {
      showTyping(true);
      setTimeout(function() {
        showTyping(false);
        addMessage(L.q4, false);
        setButtons([
          { text: L.a4_1, action: function() { handleAnswer('q4', L.a4_1, askQ5); } },
          { text: L.a4_2, action: function() { handleAnswer('q4', L.a4_2, askQ5); } },
          { text: L.a4_3, action: function() { handleAnswer('q4', L.a4_3, askQ5); } }
        ]);
      }, 700);
    }

    function askQ5() {
      showTyping(true);
      setTimeout(function() {
        showTyping(false);
        addMessage(L.q5, false);
        setButtons([
          { text: L.a5_yes, action: function() { handleAnswer('q5', L.a5_yes, showForm); } },
          { text: L.a5_no, action: function() { handleAnswer('q5', L.a5_no, showForm); } }
        ]);
      }, 700);
    }

    function handleAnswer(key, val, nextStep) {
      answers[key] = val;
      controlsContainer.innerHTML = '';
      addMessage(val, true);
      nextStep();
    }

    function showForm() {
      showTyping(true);
      setTimeout(function() {
        showTyping(false);
        addMessage('<strong>' + L.finalTitle + '</strong><br>' + L.loaderText, false);
        controlsContainer.innerHTML = '';
        
        if (isolatedCard) {
          isolatedCard.style.display = 'block';
          isolatedCard.hidden = false;
          isolatedCard.removeAttribute('aria-hidden');
          messagesContainer.appendChild(isolatedCard);
          messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
      }, 1000);
    }
  });
})();