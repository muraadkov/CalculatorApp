    <!DOCTYPE html>
    <html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <title>Calculator</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="data.js"></script>
    </head>

    <body>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <div class="container-fluid section">
            <div class="row section-form">
                <div class="section-form-bg">
                    <div class="container">
                        <div class="row" style="display: flex;justify-content: center;">
                            <div class="form-block col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h2 class="form-block-title text-center">Пожалуйста, заполните данную форму для рассчета итоговой стоимости.</h2>
                                    <div class="input-group">
                                        <label for="fname">Общая отапливаемая площадь.</label>
                                        <br>
                                        <input type="radio" id="do150kv" name="do150kv" value="нет">
                                        <label for="vehicle1">До 150 кв.м</label>
                                        <br>
                                        <input type="radio" id="do600kv" name="do150kv" value="1">
                                        <label for="vehicle1"> От 150 до 600 кв.м</label>
                                    </div>
                                    <hr style="border-bottom: 2px solid #999;">
                                    <div class="input-group">
                                        <label for="countKotel">Теплоизоляция наружных стен, пола и потолка.</label>
                                        <br>
                                        <input type="radio" id="plohayaTeplo" name="teploizol" >
                                        <label for="teploizol">Плохая теплоизоляция</label>
                                        <br>
                                        <input type="radio" id="sredTeplo" name="teploizol">
                                        <label for="teploizol">Средняя теплоизоляция</label>
                                        <br>
                                        <input type="radio" id="horowTeplo" name="teploizol">
                                        <label for="teploizol">Очень хорошая теплоизоляция</label>              
                                        <br>
                                    </div>
                                    <hr style="border-bottom: 2px solid #999;">
                                    <div class="input-group">
                                        <label for="dlina">Длина будущего газопровода от точки врезки (жёлтая труба возле забора) до газового котла (в котельной или кухне). До 20 метров цена не меняется.</label>
                                        <br>
                                        <input class="range" type="range" min="20" max="100" value="1" step="1" onmousemove="rangevalue2.value=value"/>
                                        <output id="rangevalue2"></output>
                                    </div>
                                    <hr style="border-bottom: 2px solid #999;">
                                    <div class="input-group">
                                        <label for="countKotel">Будете ли Вы подключать газовую плиту к газопроводу?</label>
                                        <br>
                                        <input type="radio" id="kolvoKotlov1" name="kolvoKotlov" value="нет" onclick="func7()">
                                        <label for="vehicle1"> Нет</label>
                                        <br>
                                        <input type="radio" id="kolvoKotlov2" name="kolvoKotlov" value="1" onclick="func5()">
                                        <label for="vehicle1"> 1 плита</label>
                                        <br>
                                        <input type="radio" id="kolvoKotlov3" name="kolvoKotlov" value="2" onclick="func6()">
                                        <label for="vehicle1"> 2 плиты</label>
                                    </div>
                                    <hr id="liniya" style="border-bottom: 2px solid #999;">
                                    <div id="gazop" class="input-group">
                                        <label for="dlina">Общая длина будущего газопровода от газового котла до газовой плиты (плит) в метрах.</label>
                                        <br>
                                        <input class="range" type="range" min="3" max="50" value="1" step="1" onmousemove="rangevalue3.value=value" oninput="func10()" />
                                        <output id="rangevalue3"></output>
                                    </div>
                                    <hr style="border-bottom: 2px solid #999;">
                                    <div class="input-group">
                                        <label for="other2">Будете ли Вы заказывать рабочий проект газификации Вашего дома в компании «АстанаГаз»?</label>
                                        <br>
                                        <input type="radio" id="rab1" name="rabotniki">
                                        <label for="rab1">Да</label>
                                        <br>
                                        <input type="radio" id="rab2" name="rabotniki">
                                        <label for="rab2">Нет</label>
                                    </div>
                                    <hr style="border-bottom: 2px solid #999;">
                                    <div class="input-group">
                                        <label for="other2">Срок подготовки рабочего проекта и монтажа газопровода.</label>
                                        <br>
                                        <input type="radio" id="srok1" name="srok" value="нет" >
                                        <label for="rab1">Срочно! В течение 3-х дней</label>
                                        <br>
                                        <input type="radio" id="srok2" name="srok" value="да" >
                                        <label for="rab2">В течение 10 дней</label>
                                        <br>
                                        <input type="radio" id="srok3" name="srok" value="да" >
                                        <label for="rab2">В течение 30 дней</label>
                                    </div>
                                    <a href="#sum"><button type="button" class="btn btn-primary" onclick="func33('sum');" style="margin-left: 30%; margin-top: 5%;">Рассчитать</button></a>

                                <div id="sum">
                                        <h2 class="total"><strong>Сумма: </strong><p id="result" style="color: red;"></p></h2>
                                        <p style="text-align: justify;color: red;">Важно!!!</p>
                                <p style="text-align: justify;">В указанную стоимость входит: транспортировка всего необходимого строительного материала до места монтажа в пределах города; газовые трубы необходимой длины и диаметра, антикоррозийная обработка газовых труб, их грунтовка и покраска; все необходимые отводы, фланцы, краны, арматура, анкеры, уголки и другие элементы (кроме стоек) для крепления газопровода к стене дома либо забору, сигнализаторы автоматические контроля загазованности (САКЗ) с датчиками на природный газ и угарный газ в котельную, а также САКЗ в каждую кухню с датчиком на природный газ (если имеется в проекте газопровода), все необходимые сварочные работы по монтажу газопровода; бурение технологических отверстий для газопровода, дымохода и вентиляции до 60 см (кроме бетона), получение бесплатного газового счётчика в Акимате (если предусмотрен); монтаж газового счётчика; монтаж (навеска) газового котла и его первичный запуск (если газовый котёл приобретён в «АстанаГазе»), рабочий проект со всеми согласованиями «под ключ» и сдачей всей исполнительной технической документации в АО «КазТрансГаз Аймак» (если проект заказан в «АстанаГазе»).</p>
                             </div>  
                            </div>
                           
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </body>

    </html> 