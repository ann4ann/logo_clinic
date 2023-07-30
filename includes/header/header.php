<section class="header">
    <div class="header__info">
        <div class="info-wrapper company-info">
            <img class="company-info__logo" src="assets/img/logo.svg" alt="logo" />
            <div class="company-info-content">
                <div class="company-info__adress company-adress">
                    <?php include dirname(__FILE__, 3) . '/assets/img/adress_pin.svg' ?>
                    <p class="company-adress__text adress">
                        <span class="adress__city">Ростов-на-Дону</span>
                        <span class="adress__street">ул. Ленина, 2Б</span>
                    </p>
                </div>
                <div class="company-info__phone"><img src="assets/img/whatsapp.png" alt="whatsapp"><span> +7(863) 000 00 00</span></div>
            </div>
            <button class="company-info__checkup button-primary btn makeAnAppoitment">Записаться на прием</button>
        </div>
    </div>
    <div class="header__menu">
        <?php include dirname(__FILE__, 3) . '/includes/menu/menu.php' ?>
    </div>
</section>