<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task3</title>
    <link rel="stylesheet" href="main.css" />

</head>

<body>
    <div>
        <div>




            <form action="register.php" method="POST" id="form">
                <h3 id="form">Форма</h3>




                <div>
                    <label for="validationCustom01" >Фамилия Имя Отчество:</label>
                    <input type="text" placeholder="ФИО" name="login" value="" />

                </div>





                <div>
                    <label for="validationCustomUsername" >Телефон:
                    </label>
                    <div>
                        <input type="text" placeholder="Введите ваш номер" name="tel"
                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" />
                        <div></div>
                    </div>
                </div>





                <div>
                    <label for="validationCustomUsername" >E-mail:
                    </label>
                    <div>
                        <input type="text" placeholder="Введите ваш E-mail"
                            name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" />
                        <div></div>
                    </div>
                </div>





                <div>
                    <label>
                        Дата рождения:<br />
                        <input placeholder="2004-07-14" type="date" name="date" />
                    </label>
                </div>





                <div>
                    <p>Выберите ваш пол:<br /></p>
                    <div>
                        <input type="radio" value="Женский" id="someRadioId1"
                            name="someGroupName" />
                        <label for="someRadioId1">Женский</label>
                    </div>
                    <div>
                        <input type="radio" value="Мужской" id="someRadioId2"
                            name="someGroupName" />
                        <label for="someRadioId2">Мужской</label>
                    </div>
                </div>






                <div>
                    <label for="validationCustom04" >Любимый язык программирования</label>
                    <select id="validationCustom04" multiple name="language[]">
                        <option selected="" disabled="" value="">Выберете</option>
                        <option value="1">Pascal</option>
                        <option value=" 2">C</option>
                        <option value=" 3">C++</option>
                        <option value=" 4">JavaScript</option>
                        <option value=" 5">PHP</option>
                        <option value=" 6">Python</option>
                        <option value=" 7"> Java</option>
                        <option value=" 8">Haskel</option>
                        <option value=" 9">Clojure</option>
                        <option value=" 10">Prolog</option>
                        <option value=" 11">Scala</option>
                    </select>
                    <div>
                    </div>
                </div>




                <div>
                    <label>
                        Биография:<br />
                        <textarea placeholder="Напишите свою биографию"
                            name="bio"></textarea>
                    </label>
                </div>





                <div>
                    С контрактом:
                    <div>
                        <input type="checkbox" value="Ознакомлен" id="invalidCheck"
                            name="checkt" />
                        <label for="invalidCheck">
                            Ознакомлен (а)
                        </label>
                        <div></div>
                    </div>
                </div>





                <div>
                    <button>Сохранить</button>
                </div>
            </form>
        </div>

        <ul>
            <h5 id="links">Пункты выполненых скриншотов задания-3</h5>

            <li>
                <a>Подключение к общей базе данных;</a>
                </br>
                <img src="1.png"></img>
            </li>

            <li>
                <a>Использование личной базы данных</a>
                </br>
                <img src="2.png"></img>
            </li>
            <li>
                <a>Создание таблиц в базе данных;
                </a>
                </br>
                <img src="3.png"></img>

            <li>
                <a>Список таблиц в базе данных ;
                </a>
                </br>
                <img src="4.png"></img>
            </li>
            <li>
                <a>Результат заполнения формы и сохранения результатов в таблицы базы данных;</a>
                </br>
                <img src="6.png"></img>
            </li>



        </ul>
    </div>


</body>

</html>