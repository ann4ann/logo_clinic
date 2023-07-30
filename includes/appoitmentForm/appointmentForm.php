<div id="appointment-modal" class="appointment-modal hidden">
    <div class="appointment-modal__container">
        <div id="modal-exit" class="exit-btn"> </div>
        <form
            id="a-form"
            class="a-form"
            action="https://formspree.io/f/xwkdvkwg"
            method="POST"  
        >
            <label class="a-form__label">
                <span>Ваше имя:</span>
                <input id="a-form-name" type="text" name="userName" placeholder="Иван Петров" required>
            </label>
            <label class="a-form__label">
                <span>Телефон:</span>
                <input id="a-form-phone" type="text" name="phone" placeholder="7(890)123-45-67" required>
            </label>
            <label class="a-form__label">
                <span>email:</span>
                <input id="a-form-email" type="text" name="email" placeholder="example@mail.ru">
            </label>
            <button id="a-submit-btn" class="button-primary btn" type="submit">Send</button>
        </form>
    </div>
</div>

