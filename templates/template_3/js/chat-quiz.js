document.addEventListener('DOMContentLoaded', () => {
    const rootBlock = document.getElementById('chat-quiz-root');
    if (rootBlock && rootBlock.parentElement !== document.body) {
        document.body.appendChild(rootBlock);
    }

    setTimeout(() => {
        const notiDot = document.getElementById('chat-noti-dot');
        if (notiDot) notiDot.style.transform = 'scale(1)';
    }, 3000);

    const quizLang = window.quizLang;

    const steps = [
        { id: 'welcome', type: 'text', content: quizLang.welcome, next: 'q1' },
        { id: 'q1', type: 'options', question: quizLang.q1, options: [{ text: quizLang.a1_yes, next: 'q2' }, { text: quizLang.a1_no, next: 'q2' }] },
        { id: 'q2', type: 'options', question: quizLang.q2, options: [{ text: '18–25', next: 'q3' }, { text: '26–40', next: 'q3' }, { text: '41–55', next: 'q3' }, { text: '56+', next: 'q3' }] },
        { id: 'q3', type: 'options', question: quizLang.q3, options: [{ text: quizLang.a3_yes, next: 'q4' }, { text: quizLang.a3_no, next: 'q4' }] },
        { id: 'q4', type: 'options', question: quizLang.q4, options: [{ text: quizLang.a4_1, next: 'q5' }, { text: quizLang.a4_2, next: 'q5' }, { text: quizLang.a4_3, next: 'q5' }] },
        { id: 'q5', type: 'options', question: quizLang.q5, options: [{ text: quizLang.a5_yes, next: 'loader' }, { text: quizLang.a5_no, next: 'loader' }] }
    ];

    const toggleBtn = document.getElementById('chat-toggle-btn');
    const chatWindow = document.getElementById('chat-window');
    const closeBtn = document.getElementById('chat-close-btn');
    const messagesContainer = document.getElementById('chat-messages');
    const controlsContainer = document.getElementById('chat-controls');
    const typingIndicator = document.getElementById('typing-indicator');

    let quizStarted = false;

    function setResponsiveSizes() {
        if (window.innerWidth < 640) {
            chatWindow.style.width = 'calc(100vw - 40px)';
            chatWindow.style.height = '500px';
        } else {
            chatWindow.style.width = '385px';
            chatWindow.style.height = '575px';
        }
    }
    window.addEventListener('resize', setResponsiveSizes);
    setResponsiveSizes();

    toggleBtn.addEventListener('click', () => {
        toggleBtn.style.transform = 'scale(0)';
        setTimeout(() => { toggleBtn.style.display = 'none'; }, 200);
        
        chatWindow.style.display = 'flex';
        setTimeout(() => {
            chatWindow.style.opacity = '1';
            chatWindow.style.transform = 'translateY(0)';
        }, 50);
        
        if (!quizStarted) {
            quizStarted = true;
            runStep('welcome');
        }
    });

    closeBtn.addEventListener('click', () => {
        chatWindow.style.opacity = '0';
        chatWindow.style.transform = 'translateY(20px)';
        setTimeout(() => {
            chatWindow.style.display = 'none';
            toggleBtn.style.display = 'flex';
            setTimeout(() => { toggleBtn.style.transform = 'scale(1)'; }, 20);
        }, 350);
    });

    function scrollToBottom() {
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function toggleTyping(show) {
        typingIndicator.style.display = show ? 'block' : 'none';
        scrollToBottom();
    }

    function appendAgentMessage(text) {
        const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; gap: 10px !important; max-width: 88% !important; align-items: flex-start !important; flex-direction: row !important; text-align: left !important; animation: chatIn 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;";
        msg.innerHTML = `
            <div style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid #e3ff34; background-color: #183c3e; display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0; margin-top: 2px;">
                <img src="./consultant.png" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width:100%; height:100%; object-fit:cover;">
                <svg style="display:none; width:14px; height:14px; color:#a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <div style="background-color: #12393b; color: #f4f4f5; padding: 11px 14px; border-radius: 14px; border-top-left-radius: 0; font-size: 13px; line-height: 1.45; border: 1px solid #183c3e; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
                ${text}
            </div>
        `;
        messagesContainer.appendChild(msg);
        scrollToBottom();
    }

    function appendUserMessage(text) {
        const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; width: 100% !important; justify-content: flex-end !important; flex-direction: row !important; animation: chatIn 0.25s ease-out forwards;";
        msg.innerHTML = `
            <div style="background-color: #12393b; color: #e3ff34; padding: 11px 14px; border-radius: 14px; border-top-right-radius: 0; font-size: 13px; font-weight: 500; max-width: 85%; text-align: left; border: 1px solid #e3ff34; box-shadow: 0 4px 12px rgba(227, 255, 52, 0.15);">
                ${text}
            </div>
        `;
        messagesContainer.appendChild(msg);
        scrollToBottom();
    }

    function runStep(stepId) {
        controlsContainer.innerHTML = '';
        if (stepId === 'loader') { handleLoaderStep(); return; }
        if (stepId === 'final') { handleFinalStep(); return; }

        const step = steps.find(s => s.id === stepId);
        if (!step) return;

        toggleTyping(true);

        setTimeout(() => {
            toggleTyping(false);
            if (step.type === 'text') {
                appendAgentMessage(step.content);
                setTimeout(() => runStep(step.next), 1000);
            } else if (step.type === 'options') {
                appendAgentMessage(step.question);
                renderOptions(step.options);
            }
        }, 1000);
    }

    function renderOptions(options) {
        const wrapper = document.createElement('div');
        if (options.length > 2 || options[0].text.length > 15) {
            wrapper.style.cssText = "display: flex !important; flex-direction: column !important; gap: 8px !important; width: 100% !important; padding: 0 2px !important;";
        } else {
            wrapper.style.cssText = "display: grid !important; grid-template-columns: repeat(2, 1fr) !important; gap: 8px !important; width: 100% !important; padding: 0 2px !important;";
        }

        options.forEach(opt => {
            const btn = document.createElement('button');
            btn.style.cssText = "background-color: #12393b !important; color: #e4e4e7 !important; border: 1px solid #183c3e !important; border-radius: 10px !important; font-size: 13px !important; font-weight: 500 !important; padding: 11px 14px !important; cursor: pointer !important; text-align: center !important; transition: all 0.2s !important; outline: none !important; width: 100% !important; box-sizing: border-box !important;";
            btn.textContent = opt.text;
            
            btn.onmouseover = () => { btn.style.borderColor = '#e3ff34'; btn.style.color = '#ffffff'; btn.style.backgroundColor = 'rgba(227, 255, 52, 0.08)'; };
            btn.onmouseout = () => { btn.style.borderColor = '#183c3e'; btn.style.color = '#e4e4e7'; btn.style.backgroundColor = '#12393b'; };
            
            btn.addEventListener('click', () => {
                appendUserMessage(opt.text);
                controlsContainer.innerHTML = '';
                setTimeout(() => runStep(opt.next), 500);
            });
            wrapper.appendChild(btn);
        });

        controlsContainer.appendChild(wrapper);
        scrollToBottom();
    }

    function handleLoaderStep() {
        toggleTyping(true);
        
        setTimeout(() => {
            toggleTyping(false);
            
            const loaderCard = document.createElement('div');
            loaderCard.style.cssText = "width: 88% !important; background-color: #12393b !important; border: 1px solid #183c3e !important; padding: 16px !important; border-radius: 14px !important; box-sizing: border-box !important; animation: chatIn 0.3s ease-out forwards; display: flex; flex-direction: column; gap: 10px;";
            
            const loaderText = document.createElement('div');
            loaderText.style.cssText = "color: #e4e4e7; font-size: 12px; font-weight: 500; text-align: left; line-height: 1.4;";
            loaderText.textContent = quizLang.loaderText;
            
            const track = document.createElement('div');
            track.style.cssText = "width: 100%; height: 6px; background-color: #0f282a; border-radius: 4px; overflow: hidden; position: relative;";
            
            const bar = document.createElement('div');
            bar.style.cssText = "width: 0%; height: 100%; background: linear-gradient(90deg, #e3ff34, #cbe61c); border-radius: 4px; transition: width 0.1s linear;";
            
            track.appendChild(bar);
            loaderCard.appendChild(loaderText);
            loaderCard.appendChild(track);
            messagesContainer.appendChild(loaderCard);
            scrollToBottom();

            let progress = 0;
            const interval = setInterval(() => {
                progress += 5;
                if (progress <= 100) {
                    bar.style.width = progress + '%';
                } else {
                    clearInterval(interval);
                    setTimeout(() => {
                        runStep('final');
                    }, 300);
                }
            }, 80);

        }, 600);
    }

    function handleFinalStep() {
        const celebration = document.createElement('div');
        celebration.style.cssText = "position: absolute; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:100; overflow:hidden;";
        for(let i=0; i<25; i++) {
            const particle = document.createElement('div');
            const colors = ['#e3ff34', '#183c3e', '#10b981', '#ffffff'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            particle.style.cssText = `position: absolute; top: -10px; left: ${Math.random() * 100}%; width: ${Math.random() * 6 + 4}px; height: ${Math.random() * 6 + 4}px; background-color: ${randomColor}; border-radius: 50%; animation: confettiFall 2.2s linear ${Math.random() * 1.5}s forwards; opacity: 0.8;`;
            celebration.appendChild(particle);
        }
        chatWindow.appendChild(celebration);

        toggleTyping(true);

        setTimeout(() => {
            toggleTyping(false);
            appendAgentMessage(quizLang.finalTitle);

            const formCard = document.getElementById('cq-form-card');
            if (formCard) {
                formCard.style.cssText = "width: 100% !important; background-color: #0d2224 !important; border: 1px solid #183c3e !important; padding: 18px !important; border-radius: 16px !important; box-sizing: border-box !important; margin-top: 6px !important; box-shadow: inset 0 2px 4px rgba(0,0,0,0.4) !important; animation: chatIn 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) forwards; display: block !important;";
                formCard.removeAttribute('hidden');
                formCard.setAttribute('aria-hidden', 'false');
                messagesContainer.appendChild(formCard);

                const phone = document.getElementById('cq-field-phone');
                if (phone && window.intlTelInput) {
                    const existingIti = window.intlTelInput.getInstance(phone);
                    if (existingIti) existingIti.destroy();
                    const phoneCountryEl = document.querySelector('#cq-isolated-form input[name="phone_country"]');
                    window.intlTelInput(phone, {
                        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js",
                        separateDialCode: true,
                        initialCountry: phoneCountryEl ? phoneCountryEl.value : 'auto'
                    });
                }
            }
            controlsContainer.style.setProperty('display', 'none', 'important');

            scrollToBottom();
            setTimeout(() => celebration.remove(), 4000);
        }, 1200);
    }
});
