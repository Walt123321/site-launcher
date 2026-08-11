document.addEventListener('DOMContentLoaded', () => {
        const rootBlock = document.getElementById('chat-quiz-root');
        if (rootBlock && rootBlock.parentElement !== document.body) {
            document.body.appendChild(rootBlock);
        }
        
        setTimeout(() => {
            const notiDot = document.getElementById('chat-noti-dot');
            if (notiDot) notiDot.style.transform = 'scale(1)';
        }, 3000);
        
        const quizLang = window.CQ_DATA.lang;
        
        const steps = [
            { id: 'welcome', type: 'text', content: quizLang.welcome, next: 'q1' },
            { id: 'q1', type: 'options', question: quizLang.q1, options: [{ text: quizLang.a1_yes, next: 'q2' }, { text: quizLang.a1_no, next: 'q2' }] },
        { id: 'q2', type: 'options', question: quizLang.q2, options: [{ text: '18–25', next: 'q3' }, { text: '26–40', next: 'q3' }, { text: '41–55', next: 'q3' }, { text:  '56+', next: 'q3' }] },
            { id: 'q3', type: 'options', question: quizLang.q3, options: [{ text: quizLang.a3_yes, next: 'q4' }, { text: quizLang.a3_no, next: 'q4' }] },
        { id: 'q4', type: 'options', question: quizLang.q4, options: [{ text: quizLang.a4_1, next: 'q5' }, { text: quizLang.a4_2, next: 'q5' }, { text: quizLang.a4_3, next:    'q5' }] },
            { id: 'q5', type: 'options', question: quizLang.q5, options: [{ text: quizLang.a5_yes, next: 'loader' }, { text: quizLang.a5_no, next: 'loader' }] }
        ];
        
        const toggleBtn = document.getElementById('chat-toggle-btn');
        const chatWindow = document.getElementById('chat-window');
        const closeBtn = document.getElementById('chat-close-btn');
        const messagesContainer = document.getElementById('chat-messages');
        const controlsContainer = document.getElementById('chat-controls');
        const typingIndicator = document.getElementById('typing-indicator');
        
        let quizStarted = false;
        let chatFormInitialized = false;

        function initChatForm() {
            if (chatFormInitialized) return;

            const form = document.getElementById('cq-isolated-form');
            if (!form || !window.intlTelInput) return;

            const phone = form.querySelector('input[name="fullphone"]');
            const email = form.querySelector('input[name="email"]');
            const onlyCountriesInput = form.querySelector('input[name="only_countries"]');
            const phoneCountry = form.querySelector('input[name="phone_country"]');
            const preloader = form.querySelector('.form-preloader');
            const errorMsg = form.querySelector('.error-msg');

            if (!phone || !preloader) return;

            // Reuses validateEmail() / disposableEmailDomains etc. from
            // integration/validation.js (loaded via this same footer include),
            // same blocklist as the main lead form.
            if (email && typeof validateEmail === 'function') {
                email.addEventListener('blur', function () {
                    const result = validateEmail(email.value);
                    if (!result.valid) {
                        if (errorMsg) {
                            errorMsg.innerHTML = result.message;
                            errorMsg.classList.remove('hide');
                        }
                        email.classList.add('error');
                    } else {
                        email.value = email.value.trim();
                    }
                });
                email.addEventListener('input', function () {
                    if (email.classList.contains('error')) {
                        email.classList.remove('error');
                        if (errorMsg) errorMsg.classList.add('hide');
                    }
                });
            }

            let onlyCountries = [];
            try {
                onlyCountries = JSON.parse(onlyCountriesInput?.value || '[]');
            } catch (e) {
                onlyCountries = [];
            }

            const errorMap = ['Invalid number', 'Invalid country code', 'Too short', 'Too long', 'Invalid number'];

            const iti = window.intlTelInput(phone, {
                utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js',
                separateDialCode: true,
                initialCountry: phoneCountry?.value || 'auto',
                onlyCountries: onlyCountries,
                geoIpLookup: function (success, failure) {
                    fetch('https://ipapi.co/json')
                        .then(function (res) { return res.json(); })
                        .then(function (data) { success(data.country_code); })
                        .catch(function () { failure(); });
                }
            });

            function showPhoneError(msg) {
                if (errorMsg) {
                    errorMsg.innerHTML = msg;
                    errorMsg.classList.remove('hide');
                }
                phone.classList.add('error');
            }

            function resetErrors() {
                if (errorMsg) {
                    errorMsg.innerHTML = '';
                    errorMsg.classList.add('hide');
                }
                phone.classList.remove('error');
                if (email) email.classList.remove('error');
            }

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                resetErrors();

                if (email && typeof validateEmail === 'function') {
                    const emailResult = validateEmail(email.value);
                    if (!emailResult.valid) {
                        if (errorMsg) {
                            errorMsg.innerHTML = emailResult.message;
                            errorMsg.classList.remove('hide');
                        }
                        email.classList.add('error');
                        return;
                    }
                    email.value = email.value.trim();
                }

                if (!phone.value.trim()) {
                    showPhoneError('Required');
                    return;
                }

                if (!iti.isValidNumber()) {
                    const errorCode = iti.getValidationError();
                    showPhoneError(errorMap[errorCode] || 'Invalid number');
                    return;
                }

                if (onlyCountries.length && !onlyCountries.includes(iti.getSelectedCountryData().iso2)) {
                    showPhoneError('This country is not supported');
                    return;
                }

                preloader.classList.remove('hidden');
                phone.value = iti.getNumber();

                const formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        const url = `Thanks.php?language=${encodeURIComponent(data.lead_language)}&phone=${encodeURIComponent(data.fullphone)}&pfb=${encodeURIComponent(data.pfb)}&click_id=${encodeURIComponent(data.click_id)}&redirect_url=${encodeURIComponent(data.redirect_url)}`;
                        window.location.href = url;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        preloader.classList.add('hidden');
                    });
            });

            chatFormInitialized = true;
        }

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
        msg.style.cssText = "display: flex !important; gap: 10px !important; max-width: 88% !important; align-items: flex-start !important; flex-direction: row !important;     text-align: left !important; animation: chatIn 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;";
            msg.innerHTML = `
        <div style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid var(--color-accent); background-color: var(--color-bg-muted); display: flex;   align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0; margin-top: 2px;">
            <img src="${window.CQ_DATA.siteUrl}/consultant.webp" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width:100%; height:100%;     object-fit:cover;">
            <svg style="display:none; width:14px; height:14px; color:var(--color-text-muted);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
        <div style="background-color: var(--color-bg-soft); color: var(--color-text-main); padding: 11px 14px; border-radius: 14px; border-top-left-radius: 0; font-size:   13px; line-height: 1.45; border: 1px solid var(--color-border); box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                ${text}
            </div>
            `;
            messagesContainer.appendChild(msg);
            scrollToBottom();
        }
        
        function appendUserMessage(text) {
            const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; width: 100% !important; justify-content: flex-end !important; flex-direction: row !important; animation: chatIn 0.25s    ease-out forwards;";
            msg.innerHTML = `
        <div style="background: var(--color-accent); color: #ffffff; padding: 11px 14px; border-radius: 14px; border-top-right-radius: 0; font-size: 13px; font-weight: 500;    max-width: 85%; text-align: left; box-shadow: 0 4px 12px rgba(16, 185, 129, 0.15);">
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
            wrapper.style.cssText = "display: grid !important; grid-template-columns: repeat(2, 1fr) !important; gap: 8px !important; width: 100% !important; padding: 0 2px    !important;";
            }
            
            options.forEach(opt => {
                const btn = document.createElement('button');
            btn.style.cssText = "background-color: var(--color-bg-soft) !important; color: var(--color-text-main) !important; border: 1px solid var(--color-border) !important; border-radius: 12px !important; font-size: 13px !important; font-weight: 500 !important; padding: 11px 14px !important; cursor: pointer !important;     text-align: center !important; transition: all 0.2s ease !important; outline: none !important; width: 100% !important; box-sizing: border-box !important;";
                btn.textContent = opt.text;
                
                // Фікс наведення: Текст ЗАВЖДИ білий, а фон плавно перетікає в основний акцент сайту
                btn.onmouseover = () => { 
                    btn.style.borderColor = 'var(--color-accent)'; 
                    btn.style.color = '#ffffff'; 
                    btn.style.backgroundColor = 'var(--color-accent)';
                    btn.style.boxShadow = '0 4px 12px rgba(16, 185, 129, 0.2)';
                };
                btn.onmouseout = () => { 
                    btn.style.borderColor = 'var(--color-border)'; 
                    btn.style.color = 'var(--color-text-main)'; 
                    btn.style.backgroundColor = 'var(--color-bg-soft)';
                    btn.style.boxShadow = 'none';
                };
                
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
            loaderCard.style.cssText = "width: 88% !important; background-color: var(--color-bg-soft) !important; border: 1px solid var(--color-border) !important; padding: 16px !important; border-radius: 14px !important; box-sizing: border-box !important; animation: chatIn 0.3s ease-out forwards; display: flex; flex-direction:   column; gap: 10px;";
                
                const loaderText = document.createElement('div');
                loaderText.style.cssText = "color: var(--color-text-main); font-size: 12px; font-weight: 500; text-align: left; line-height: 1.4;";
                loaderText.textContent = quizLang.loaderText;
                
                const track = document.createElement('div');
                track.style.cssText = "width: 100%; height: 6px; background-color: var(--color-bg-muted); border-radius: 4px; overflow: hidden; position: relative;";
                
                const bar = document.createElement('div');
            bar.style.cssText = "width: 0%; height: 100%; background: linear-gradient(90deg, var(--color-accent-hover), var(--color-accent)); border-radius: 4px; transition:   width 0.1s linear;";
                
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
                const colors = ['var(--color-accent)', 'var(--color-accent-hover)', 'var(--color-warning)', '#10b981'];
                const randomColor = colors[Math.floor(Math.random() * colors.length)];
            particle.style.cssText = `position: absolute; top: -10px; left: ${Math.random() * 100}%; width: ${Math.random() * 6 + 4}px; height: ${Math.random() * 6 + 4}px;     background-color: ${randomColor}; border-radius: 50%; animation: confettiFall 2.2s linear ${Math.random() * 1.5}s forwards; opacity: 0.8;`;
                celebration.appendChild(particle);
            }
            chatWindow.appendChild(celebration);
            
            toggleTyping(true);
            
            setTimeout(() => {
                toggleTyping(false);
                appendAgentMessage(quizLang.finalTitle);
                
                const formCard = document.getElementById('cq-form-card');
                if (formCard) {
                formCard.style.cssText = "width: 100% !important; background-color: var(--color-bg-soft) !important; border: 1px solid var(--color-border) !important; padding: 18px !important; border-radius: 16px !important; box-sizing: border-box !important; margin-top: 6px !important; box-shadow: inset 0 2px 4px rgba(   0,0,0,0.05) !important; animation: chatIn 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) forwards; display: block !important;";
                    formCard.removeAttribute('hidden');
                    formCard.setAttribute('aria-hidden', 'false');
                    messagesContainer.appendChild(formCard);
                    
                    requestAnimationFrame(() => initChatForm());
                }
                controlsContainer.style.setProperty('display', 'none', 'important');
                
                scrollToBottom();
                setTimeout(() => celebration.remove(), 4000);
            }, 1200);
        }
});
