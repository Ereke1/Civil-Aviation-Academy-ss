<style>
    .chatbot-widget {
        --assistant-primary: #0755b5;
        --assistant-header: #073f66;
        --assistant-accent: #f5a400;
        --assistant-text: #162536;
        --assistant-muted: #647487;
        --assistant-surface: #fff;
        --assistant-soft-bg: #f2f6f9;
        --assistant-border: #d7e1ea;
        --assistant-radius: 16px;
        position: fixed;
        right: 96px;
        bottom: 24px;
        z-index: 9999;
        font-family: 'Montserrat', sans-serif;
    }

    .chatbot-toggle {
        position: relative;
        z-index: 2;
        width: 138px;
        height: 138px;
        border: none;
        border-radius: 0;
        background: transparent;
        color: #fff;
        font-size: 28px;
        box-shadow: none;
        cursor: pointer;
    }

    .chatbot-toggle__icon {
        display: block;
        width: 130px;
        height: 130px;
        margin: 0 auto;
        object-fit: contain;
    }

    .chatbot-hint {
        position: absolute;
        right: calc(100% - 8px);
        bottom: 58%;
        width: 270px;
        padding: 10px 14px;
        border: 1px solid #d7e5ef;
        border-radius: 12px;
        background: #fff;
        color: #174666;
        box-shadow: 0 8px 22px rgba(14, 79, 123, 0.18);
        font-family: 'Times New Roman', Times, serif;
        font-size: 1rem;
        line-height: 1.35;
        pointer-events: none;
        opacity: 0;
        visibility: hidden;
        transform: translateX(10px);
        transition: opacity 0.45s ease, transform 0.45s ease, visibility 0.45s ease;
    }

    .chatbot-hint.is-visible {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
    }

    .chatbot-hint.is-hidden {
        opacity: 0;
        visibility: hidden;
        transform: translateX(10px);
    }

    .chatbot-hint::after {
        content: '';
        position: absolute;
        right: -7px;
        top: 50%;
        width: 12px;
        height: 12px;
        border-top: 1px solid #d7e5ef;
        border-right: 1px solid #d7e5ef;
        background: #fff;
        transform: translateY(-50%) rotate(45deg);
    }

    .chatbot-widget.is-open .chatbot-hint {
        display: none;
    }

    @media (min-width: 768px) {
        .chatbot-widget.is-open .chatbot-panel {
            right: 24px;
            bottom: 24px;
        }

        .chatbot-widget.is-open .chatbot-toggle {
            position: fixed;
                right: calc(24px + min(420px, calc(100vw - 32px)) + 12px);
            bottom: 24px;
            transition: right 180ms ease, bottom 180ms ease;
        }
    }

    .chatbot-toggle:focus-visible,
    .chatbot-panel__close:focus-visible,
    .chatbot-panel__send:focus-visible,
    .chatbot-panel__clear:focus-visible,
    .chatbot-panel__contact:focus-visible,
    .chatbot-quick-question:focus-visible,
    .chatbot-contact-form input:focus-visible,
    .chatbot-contact-form textarea:focus-visible,
    .chatbot-contact-form select:focus-visible,
    #chatbotQuestion:focus-visible {
        outline: 3px solid #ffbf47;
        outline-offset: 2px;
    }

    .chatbot-panel {
        width: min(420px, calc(100vw - 32px));
        max-height: min(640px, calc(100vh - 32px));
        position: fixed;
        right: 24px;
        bottom: 104px;
        background: var(--assistant-surface);
        border: 0;
        border-radius: var(--assistant-radius);
        box-shadow: 0 16px 40px rgba(0, 35, 75, 0.18);
        overflow-x: hidden;
        overflow-y: auto;
        margin-bottom: 0;
        display: flex;
        flex-direction: column;
    }

    .chatbot-panel__header {
        min-height: 56px;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: var(--assistant-header);
        color: #fff;
        padding: 0 16px;
    }

    .chatbot-panel__title {
        display: flex;
        align-items: center;
        gap: 9px;
    }

    .chatbot-panel__assistant-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        object-fit: contain;
    }

    .chatbot-panel__header h3 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
    }

    .chatbot-panel__close {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: transparent;
        border: none;
        color: #fff;
        font-size: 24px;
        line-height: 1;
        cursor: pointer;
        transition: background-color 180ms ease, color 180ms ease;
    }

    .chatbot-panel__close:hover,
    .chatbot-panel__close:focus-visible {
        background: rgba(255, 255, 255, 0.14);
    }

    .chatbot-panel__messages {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 16px;
        max-height: min(340px, 42vh);
        min-height: 180px;
        flex: 0 1 auto;
        overflow-y: auto;
        background: var(--assistant-soft-bg);
    }

    .chatbot-message {
        display: flex;
    }

    .chatbot-message.user {
        justify-content: flex-end;
    }

    .chatbot-message__bubble {
        max-width: 85%;
        padding: 10px 12px;
        border-radius: 12px;
        line-height: 1.45;
        font-size: 14px;
        white-space: pre-wrap;
        word-break: break-word;
    }

    .chatbot-message__link {
        color: #0b69a3;
        font-weight: 600;
        text-decoration: underline;
        overflow-wrap: anywhere;
    }

    .chatbot-message.assistant .chatbot-message__bubble {
        background: #f2f6f9;
        color: var(--assistant-text);
        border-radius: 12px 12px 12px 4px;
    }

    .chatbot-message.user .chatbot-message__bubble {
        background: #e8f2ff;
        color: #123b66;
        border-radius: 12px 12px 4px 12px;
    }

    .chatbot-message.typing .chatbot-message__bubble {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        min-width: 58px;
        min-height: 38px;
    }

    .chatbot-typing__dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #56819c;
        animation: chatbotTyping 1.2s infinite ease-in-out;
    }

    .chatbot-typing__dot:nth-child(2) {
        animation-delay: 0.15s;
    }

    .chatbot-typing__dot:nth-child(3) {
        animation-delay: 0.3s;
    }

    @keyframes chatbotTyping {
        0%, 60%, 100% {
            opacity: 0.35;
            transform: translateY(0);
        }
        30% {
            opacity: 1;
            transform: translateY(-3px);
        }
    }

    .chatbot-panel__quick-questions {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        padding: 0 16px 12px;
        background: var(--assistant-surface);
    }

    .chatbot-quick-question {
        min-height: 36px;
        box-sizing: border-box;
        background: #f4f8fc;
        border: 1px solid #d7e6f3;
        border-radius: 18px;
        padding: 8px 12px;
        cursor: pointer;
        color: #27628f;
        font-size: 12px;
        text-align: left;
        transition: background-color 180ms ease, border-color 180ms ease;
    }

    .chatbot-quick-question:hover {
        background: #e8f3fc;
        border-color: #b9d5e9;
    }

    .chatbot-panel__form-wrapper {
        padding: 0 16px 12px;
        background: var(--assistant-surface);
    }

    .chatbot-panel__input-row {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    #chatbotQuestion,
    .chatbot-contact-form input,
    .chatbot-contact-form textarea,
    .chatbot-contact-form select {
        width: 100%;
        border: 1px solid #cdd9e4;
        border-radius: 12px;
        padding: 10px 12px;
        font-size: 14px;
        background: var(--assistant-surface);
        color: var(--assistant-text);
        box-sizing: border-box;
        transition: border-color 180ms ease, box-shadow 180ms ease;
    }

    #chatbotQuestion {
        min-height: 48px;
        max-height: 112px;
        padding: 12px 14px;
        resize: none;
        overflow-y: auto;
    }

    #chatbotQuestion:focus {
        border-color: #1671b8;
        box-shadow: 0 0 0 3px rgba(22, 113, 184, 0.14);
        outline: 0;
    }

    .chatbot-panel__send,
    .chatbot-panel__clear,
    .chatbot-panel__contact,
    .chatbot-contact-form__submit {
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 180ms ease, color 180ms ease, opacity 180ms ease, transform 180ms ease;
    }

    .chatbot-panel__send,
    .chatbot-contact-form__submit {
        background: var(--assistant-primary);
        color: #fff;
        padding: 0 14px;
    }

    .chatbot-contact-form__submit {
        width: 100%;
        min-height: 56px;
        padding: 12px 20px;
        border-radius: 12px;
        background: linear-gradient(135deg, #0b63c7 0%, #064a9d 100%);
        box-shadow: 0 6px 14px rgba(7, 85, 181, 0.28);
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 0.01em;
        transition: background 180ms ease, box-shadow 180ms ease, transform 180ms ease;
    }

    .chatbot-contact-form__submit:hover:not(:disabled) {
        background: linear-gradient(135deg, #1474df 0%, #0755b5 100%);
        box-shadow: 0 8px 18px rgba(7, 85, 181, 0.36);
        transform: translateY(-2px);
    }

    .chatbot-contact-form__submit:disabled {
        background: #9eb6d0;
        box-shadow: none;
        cursor: wait;
        opacity: 1;
    }

    .chatbot-panel__send {
        display: inline-flex;
        align-self: flex-end;
        align-items: center;
        justify-content: center;
        gap: 7px;
        height: 40px;
        min-width: 106px;
        font-size: 14px;
        line-height: 1;
    }

    .chatbot-panel__send-icon {
        font-size: 16px;
    }

    .chatbot-panel__send:hover:not(:disabled) {
        background: #064a9d;
        transform: translateY(-1px);
    }

    .chatbot-panel__send:disabled {
        background: #d6e0ea;
        color: #8494a5;
        cursor: not-allowed;
        opacity: 1;
        transform: none;
    }

    .chatbot-panel__send.is-loading {
        cursor: wait;
    }

    .chatbot-panel__send-spinner {
        display: none;
        width: 14px;
        height: 14px;
        border: 2px solid rgba(255, 255, 255, 0.45);
        border-top-color: #fff;
        border-radius: 50%;
        animation: chatbotSendSpin 0.7s linear infinite;
    }

    .chatbot-panel__send.is-loading .chatbot-panel__send-icon,
    .chatbot-panel__send.is-loading .chatbot-panel__send-label {
        display: none;
    }

    .chatbot-panel__send.is-loading .chatbot-panel__send-spinner {
        display: inline-block;
    }

    @keyframes chatbotSendSpin {
        to {
            transform: rotate(360deg);
        }
    }

    .chatbot-panel__actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 10px;
        margin-top: 12px;
    }

    .chatbot-panel__clear,
    .chatbot-panel__contact {
        background: transparent;
        color: var(--assistant-muted);
        padding: 8px 4px;
        min-height: 40px;
        transition: color 180ms ease;
    }

    .chatbot-panel__contact {
        background: var(--assistant-accent);
        color: #172033;
        flex: 1 1 100%;
        min-height: 46px;
        font-size: 14px;
        white-space: nowrap;
    }

    .chatbot-panel__contact:hover {
        background: #e99b00;
    }

    .chatbot-panel__clear:hover {
        color: #1d527b;
    }

    .chatbot-panel__clear {
        order: 2;
        width: 100%;
        text-align: left;
    }

    .chatbot-panel__clear::before {
        content: '🗑';
        margin-right: 6px;
        font-size: 12px;
    }

    .chatbot-contact-form {
        display: grid;
        gap: 10px;
        padding: 0 16px 16px;
        background: #fff;
        flex: 0 0 auto;
    }

    .chatbot-contact-form__row {
        display: grid;
        gap: 6px;
    }

    .chatbot-contact-form__row label,
    .chatbot-contact-form__consent {
        font-size: 0.88rem;
        color: var(--assistant-text);
    }

    .chatbot-contact-form__consent {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .chatbot-contact-form__consent input {
        width: auto;
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    @media (max-width: 767px) {
        .chatbot-widget {
            right: 76px;
            bottom: 12px;
        }

        .chatbot-toggle {
            width: 116px;
            height: 116px;
            font-size: 24px;
        }

        .chatbot-toggle__icon {
            width: 108px;
            height: 108px;
        }

        .chatbot-hint {
            right: calc(100% - 8px);
            bottom: 58%;
            width: min(245px, calc(100vw - 96px));
            padding: 8px 10px;
            font-size: 0.9rem;
        }

        .chatbot-widget.is-open .chatbot-hint {
            display: none;
        }

        .chatbot-widget.is-open .chatbot-toggle {
            display: none;
        }

        .chatbot-panel {
            width: calc(100vw - 16px);
            max-height: calc(100vh - 96px);
            right: 8px;
            bottom: 80px;
        }

        .chatbot-panel__input-row {
            grid-template-columns: 1fr;
        }

        .chatbot-panel__send {
            min-width: 40px;
            width: 40px;
            padding: 0;
        }

        .chatbot-panel__send-label {
            display: none;
        }

        .chatbot-panel__send-icon {
            font-size: 20px;
        }

        .chatbot-contact-form__submit {
            min-height: 54px;
            font-size: 0.95rem;
        }

        .chatbot-panel__messages {
            max-height: 34vh;
        }

        .chatbot-panel__actions {
            align-items: stretch;
        }

        .chatbot-panel__clear,
        .chatbot-panel__contact {
            flex: 1 1 100%;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .chatbot-widget *,
        .chatbot-widget *::before,
        .chatbot-widget *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            scroll-behavior: auto !important;
            transition-duration: 0.01ms !important;
        }
    }
</style>

<div class="chatbot-widget" id="chatbotWidget">
    <div class="chatbot-hint" role="note">{{ __('chat.hint') }}</div>
    <button
        class="chatbot-toggle"
        type="button"
        aria-label="{{ __('chat.open') }}"
        aria-expanded="false"
        data-chat-toggle
    >
        <img
            class="chatbot-toggle__icon"
            src="{{ asset(config('chatbot.mascot_asset')) }}"
            alt="Виртуальный помощник Air Барс"
        >
    </button>

    <section class="chatbot-panel" id="chatbotPanel" role="dialog" aria-modal="false" aria-labelledby="chatbotTitle" hidden>
        <div class="chatbot-panel__header">
            <h3 id="chatbotTitle" class="chatbot-panel__title">
                <img
                    class="chatbot-panel__assistant-icon"
                    src="{{ asset(config('chatbot.mascot_asset')) }}"
                    alt=""
                    aria-hidden="true"
                >
                <span>{{ __('chat.title') }}</span>
            </h3>
            <button type="button" class="chatbot-panel__close" aria-label="{{ __('chat.close') }}" data-chat-close>×</button>
        </div>

        <div class="chatbot-panel__messages" id="chatbotMessages" aria-live="polite"></div>

        <div class="chatbot-panel__quick-questions" aria-label="{{ __('chat.title') }}">
            @foreach (__('chat.quick_questions') as $question)
                <button type="button" class="chatbot-quick-question" data-quick-question="{{ $question }}">{{ $question }}</button>
            @endforeach
        </div>

        <div class="chatbot-panel__form-wrapper">
            <div class="chatbot-panel__input-row">
                <label class="sr-only" for="chatbotQuestion">{{ __('chat.title') }}</label>
                <textarea id="chatbotQuestion" rows="3" placeholder="{{ __('chat.placeholder') }}" aria-label="{{ __('chat.placeholder') }}"></textarea>
                <button
                    type="button"
                    class="chatbot-panel__send"
                    id="chatbotSendBtn"
                    aria-label="{{ __('chat.send') }}"
                    title="{{ __('chat.send') }}"
                    aria-busy="false"
                    disabled
                >
                    <i class="fas fa-paper-plane chatbot-panel__send-icon" aria-hidden="true"></i>
                    <span class="chatbot-panel__send-label">{{ __('chat.send') }}</span>
                    <span class="chatbot-panel__send-spinner" aria-hidden="true"></span>
                </button>
            </div>
            <div class="chatbot-panel__actions">
                <button type="button" class="chatbot-panel__clear" id="chatbotClearBtn">{{ __('chat.clear') }}</button>
                <button type="button" class="chatbot-panel__contact" id="chatbotContactBtn">{{ __('chat.consultation') }}</button>
            </div>
        </div>

        <form class="chatbot-contact-form" id="chatbotContactForm" hidden>
            <div class="chatbot-contact-form__row">
                <label for="chatbotName">{{ __('chat.name') }}</label>
                <input id="chatbotName" type="text" name="name" maxlength="255" />
            </div>
            <div class="chatbot-contact-form__row">
                <label for="chatbotMessage">{{ __('chat.message') }}</label>
                <textarea id="chatbotMessage" name="message" rows="3" required></textarea>
            </div>
            <div class="chatbot-contact-form__row">
                <label for="chatbotContactType">{{ __('chat.contact_method') }}</label>
                <select id="chatbotContactType" name="contact_type">
                    <option value="email">Email</option>
                    <option value="phone">Phone</option>
                </select>
            </div>
            <div class="chatbot-contact-form__row">
                <label for="chatbotContactValue">{{ __('chat.contact_value') }}</label>
                <input id="chatbotContactValue" type="text" name="contact_value" required maxlength="255" />
            </div>
            <label class="chatbot-contact-form__consent">
                <input type="checkbox" name="consent" required />
                <span>{{ __('chat.consent') }}</span>
            </label>
            <button type="submit" class="chatbot-contact-form__submit">{{ __('chat.submit_request') }}</button>
        </form>
    </section>
</div>

<script>
    (function () {
        const panel = document.getElementById('chatbotPanel');
        const toggle = document.querySelector('[data-chat-toggle]');
        const closeBtn = document.querySelector('[data-chat-close]');
        const messages = document.getElementById('chatbotMessages');
        const input = document.getElementById('chatbotQuestion');
        const sendBtn = document.getElementById('chatbotSendBtn');
        const clearBtn = document.getElementById('chatbotClearBtn');
        const contactBtn = document.getElementById('chatbotContactBtn');
        const quickQuestions = document.querySelectorAll('.chatbot-quick-question');
        const quickQuestionsContainer = document.querySelector('.chatbot-panel__quick-questions');
        const contactForm = document.getElementById('chatbotContactForm');
        const contactSubmit = contactForm.querySelector('[type="submit"]');
        const hint = document.querySelector('.chatbot-hint');
        const csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        let isLoading = false;
        let isContactSubmitting = false;

        function scheduleHintCycle(delay) {
            window.setTimeout(function () {
                if (!hint) {
                    return;
                }

                hint.classList.toggle('is-hidden');
                hint.classList.toggle('is-visible');

                scheduleHintCycle(12000);
            }, delay);
        }

        if (hint) {
            hint.classList.add('is-hidden');
            scheduleHintCycle(3000);
        }

        function appendMessage(role, text) {
            const message = document.createElement('div');
            message.className = 'chatbot-message ' + role;
            const bubble = document.createElement('div');
            bubble.className = 'chatbot-message__bubble';
            const urlPattern = /(https?:\/\/[^\s]+)/g;
            String(text).split(urlPattern).forEach(function (part) {
                if (/^https?:\/\//i.test(part)) {
                    const link = document.createElement('a');
                    link.href = part.replace(/[),.;]+$/, '');
                    link.textContent = part;
                    link.target = '_blank';
                    link.rel = 'noopener noreferrer';
                    link.className = 'chatbot-message__link';
                    bubble.appendChild(link);
                } else {
                    bubble.appendChild(document.createTextNode(part));
                }
            });
            message.appendChild(bubble);
            messages.appendChild(message);
            messages.scrollTop = messages.scrollHeight;
        }

        function showTypingIndicator() {
            const indicator = document.createElement('div');
            indicator.className = 'chatbot-message assistant typing';
            indicator.id = 'chatbotTypingIndicator';
            indicator.setAttribute('aria-label', '{{ __('chat.thinking') }}');

            const bubble = document.createElement('div');
            bubble.className = 'chatbot-message__bubble';
            bubble.setAttribute('role', 'status');
            bubble.setAttribute('aria-live', 'polite');

            for (let index = 0; index < 3; index += 1) {
                const dot = document.createElement('span');
                dot.className = 'chatbot-typing__dot';
                dot.setAttribute('aria-hidden', 'true');
                bubble.appendChild(dot);
            }

            indicator.appendChild(bubble);
            messages.appendChild(indicator);
            messages.scrollTop = messages.scrollHeight;
        }

        function hideTypingIndicator() {
            const indicator = document.getElementById('chatbotTypingIndicator');
            if (indicator) {
                indicator.remove();
            }
        }

        function addWelcome() {
            appendMessage('assistant', '{{ __('chat.welcome') }}');
        }

        function setLoadingState(loading) {
            isLoading = loading;
            sendBtn.disabled = loading;
            sendBtn.setAttribute('aria-disabled', String(loading));
            sendBtn.setAttribute('aria-busy', String(loading));
            sendBtn.classList.toggle('is-loading', loading);
            input.disabled = loading;
        }

        function updateSendState() {
            sendBtn.disabled = isLoading || input.value.trim() === '';
        }

        function openPanel() {
            panel.hidden = false;
            document.getElementById('chatbotWidget').classList.add('is-open');
            toggle.setAttribute('aria-expanded', 'true');
            input.focus();
        }

        function closePanel() {
            panel.hidden = true;
            document.getElementById('chatbotWidget').classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.focus();
        }

        function askBot(question) {
            if (!question || isLoading) {
                return;
            }

            quickQuestionsContainer.hidden = true;
            appendMessage('user', question);
            setLoadingState(true);
            showTypingIndicator();
            input.value = '';
            updateSendState();

            fetch('{{ route('front.chat.ask') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ message: question })
            })
                .then(function (response) {
                    if (!response.ok) {
                        throw new Error('Request failed');
                    }
                    return response.json();
                })
                .then(function (data) {
                    hideTypingIndicator();
                    appendMessage('assistant', data.answer || '{{ __('chat.error') }}');
                    if (data.show_contact_form) {
                        contactForm.hidden = false;
                    }
                })
                .catch(function () {
                    hideTypingIndicator();
                    appendMessage('assistant', '{{ __('chat.error') }}');
                    contactForm.hidden = false;
                })
                .finally(function () {
                    hideTypingIndicator();
                    setLoadingState(false);
                    updateSendState();
                });
        }

        function submitContactForm(event) {
            event.preventDefault();
            if (isContactSubmitting) {
                return;
            }

            isContactSubmitting = true;
            contactSubmit.disabled = true;
            const formData = new FormData(contactForm);
            const payload = Object.fromEntries(formData.entries());

            fetch('{{ route('front.chat.contact') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            })
                .then(function (response) {
                    if (!response.ok) {
                        return response.json().then(function (data) {
                            throw new Error(data.message || '{{ __('chat.error') }}');
                        });
                    }
                    return response.json();
                })
                .then(function (data) {
                    appendMessage('assistant', data.message || '{{ __('chat.request_success') }}');
                    contactForm.reset();
                    contactForm.hidden = true;
                })
                .catch(function (error) {
                    appendMessage('assistant', error.message || '{{ __('chat.error') }}');
                })
                .finally(function () {
                    isContactSubmitting = false;
                    contactSubmit.disabled = false;
                });
        }

        toggle.addEventListener('click', function () {
            if (panel.hidden) {
                openPanel();
            } else {
                closePanel();
            }
        });

        closeBtn.addEventListener('click', closePanel);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !panel.hidden) {
                closePanel();
            }
        });

        document.addEventListener('click', function (event) {
            if (panel.hidden || event.target.closest('#chatbotPanel, [data-chat-toggle]')) {
                return;
            }

            closePanel();
        });

        sendBtn.addEventListener('click', function () {
            askBot(input.value.trim());
        });

        input.addEventListener('input', updateSendState);

        input.addEventListener('keydown', function (event) {
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault();
                askBot(input.value.trim());
            }
        });

        clearBtn.addEventListener('click', function () {
            while (messages.firstChild) {
                messages.removeChild(messages.firstChild);
            }
            contactForm.hidden = true;
            hideTypingIndicator();
            quickQuestionsContainer.hidden = false;
            addWelcome();
            updateSendState();
        });

        quickQuestions.forEach(function (button) {
            button.addEventListener('click', function () {
                askBot(button.dataset.quickQuestion || button.textContent);
            });
        });

        contactBtn.addEventListener('click', function () {
            contactForm.hidden = false;
            const messageField = document.getElementById('chatbotMessage');
            if (messageField) {
                if (!messageField.value.trim()) {
                    messageField.value = '{{ __('chat.consultation_message') }}';
                }
                messageField.focus();
            }
            contactForm.scrollIntoView({ behavior: 'smooth', block: 'end' });
        });

        contactForm.addEventListener('submit', submitContactForm);

        addWelcome();
    })();
</script>
