<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Консультация куруртолога");
?>
<div id="cron_full" class="head_block">
    <div id="cron" class="engBox-body">

        <div class="nav-sections">

        </div>

        <?
        $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "s1"
            )
        );
        ?>
        <div id="cron-title"><h1>Выберите правильный курорт без вреда для здоровья!</h1></div>
    </div>
</div>
<div class="engBox-body clearfix">
    <div class="engBox-center">
        <div id="content">
            <div class="page__doctor">
                <div class="page__doctor__title">Выберите правильный курорт без вреда для здоровья!</div>
                <div class="page-inner">
                    <div class="page-inner-menu">
                        <div class="page__doctor__form">
                            <form method="post" action="/ajax/consult.php" enctype="multipart/form-data" class="consult-form">
                                <div class="page__doctor__form__field">
                                    <input class="page__doctor__form__field__input" name="name" placeholder="Имя" required="" type="text">
                                    <div class="page__doctor__form__field__error"></div>
                                </div>
                                <div class="page__doctor__form__field">
                                    <input class="page__doctor__form__field__input" name="phone" placeholder="Телефон" required="" type="text">
                                    <div class="page__doctor__form__field__error"></div>
                                </div>
                                <div class="page__doctor__form__field">
                                    <input class="page__doctor__form__field__input" name="email" placeholder="E-mail" required="" type="text">
                                    <div class="page__doctor__form__field__error"></div>
                                </div>
                                <div class="page__doctor__form__field">
                                    <textarea class="page__doctor__form__field__text" placeholder="Ваш вопрос" name="query" required=""></textarea>
                                    <div class="page__doctor__form__field__error"></div>
                                </div>
                                <div class="page__doctor__form__field">
                                    <i class="page__doctor__form__field__input__icon page__doctor__form__field__input__icon_file"></i>
                                    <input class="page__doctor__form__field__input" name="file" placeholder="Прикрепить файл" required="" type="file">
                                    <div class="page__doctor__form__field__error"></div>
                                </div>
                                <div class="page__doctor__form__field">
                                    <i class="page__doctor__form__field__input__icon page__doctor__form__field__input__icon_date"></i>
                                    <input id="datepicker" class="page__doctor__form__field__input" name="call_date" placeholder="Дата звонка" required="" type="text">
                                    <div class="page__doctor__form__field__error"></div>
                                </div>
                                <div class="page__doctor__form__field">
                                    <i class="page__doctor__form__field__input__icon page__doctor__form__field__input__icon_time"></i>
                                    <input class="page__doctor__form__field__input" name="call_time" placeholder="Время звонка" required="" type="text">
                                    <div class="page__doctor__form__field__error"></div>
                                </div>
                                <div class="page__doctor__form__field__accept page__doctor__form__field">
                                    <input type="checkbox" class="accept-send" value="1" id="accept" />
                                    <label for="accept">
                                        Я ознакомлен
                                        <a target="_blank" href="/upload/ПОЛОЖЕНИЕ о персональных данных.docx">c положением об обработке и защите персональных данных.</a>
                                    </label>
                                </div>
                                <div class="page__doctor__form__button inactive">
                                    <span>Заказать консультацию курортолога</span>
                                    <i class="page__doctor__form__button__icon"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="page-inner-content">
                        <div class="page__doctor__text">
                            <p>Для того, чтобы курортное лечение было действительно эффективным, желательно получить консультацию специалиста-курортолога, досконально знающего не только курорт, но и особенности каждого санатория, а также все нюансы самого лечения.</p>
                            <p><b>Воспользуйтесь бесплатной консультацией</b> опытных специалистов-курортологов – вам оперативно ответят на все интересующие вопросы. Для этого заполните форму у нас на сайте. Выберете удобные для Вас дату и время звонка, и мы свяжемся с Вами!</p>
                        </div>
                        <div class="page__doctor__list">
                            <div class="page__doctor__list__title">Служба поддержки клиентов</div>
                            <ul>
                                <li><span>Вы не уверены, по каким критериям выбрать санаторий?</span></li>
                                <li><span>Не знаете, в каком из них лучше всего лечат ваше заболевание?</span></li>
                                <li><span>Обратитесь к нам, и мы поможем в правильном выборе санатория!</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="engBox-right"><div id="right-ban">		<img src="/upload/iblock/82c/82c469010456455a4c9ee95a4d396e46.jpg" alt="">		<img src="/upload/iblock/f4b/f4b3b6708fcbedf5445762385f3130de.jpg" alt="">		<img src="/upload/iblock/045/045113d7af98dbd91fa13245145de194.jpg" alt="">		<img src="/upload/iblock/3b9/3b9c9fe5ee7abbc3b633442df51c3d65.jpg" alt=""></div></div>
</div>
<br>
<br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>