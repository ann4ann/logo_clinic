<?php
require dirname(__FILE__, 3) . '/data.php';

?>

<!-- верстка -->
<section class="checkup-block">
    <div class="checkup-block__info checkup">
        <div class="checkup-wrapper">
            <div class="checkup__img">
                <img id='checkup-img' src='/assets/img/checkup.png' alt='checkup' />
            </div>
            <div class="checkup__info checkup-info">
                <p id="checkup-type" class="checkup-info__title">
                    <!-- checkup.js -->
                </p>
                <p id="checkup-name" class="checkup-info__subtitle">
                    <!-- checkup.js -->
                </p>
                <!-- ==========DATA and tags -->
                <ul id="checkup-tests" class="checkup-info__text">
                    <!-- checkup.js -->
                </ul>
                <p id="checkup-price" class="checkup-info__price">
                    <!-- checkup.js -->
                </p>
                <div class="checkup-info__actions">
                    <button class="button-primary btn makeAnAppoitment">Записаться</button>
                    <button class="button-secondary btn">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
    
    <div id="checkup-pagination" class="checkup-block__pagination pagination">
        <a id="checkup-prev">
        <?php include dirname(__FILE__, 3) . '/assets/img/arrow-left.svg'; ?>
        </a>
        <p>
            <span id="checkup-page">
                <!-- checkup.js -->
            </span>/<?php echo $checkUpCount ?>
        </p>
        <a id="checkup-next">
            <?php include dirname(__FILE__, 3) . '/assets/img/arrow-right.svg'; ?>
        </a>
    </div>
</section>
