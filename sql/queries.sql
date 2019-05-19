USE innovationfund;

INSERT INTO `innovations_ru` (`id`, `name`, `short_description`, `author`, `image_path`, `market_types`, `current_stage`,
                           `money_needed`, `description`, `road_map`, `market`, `analogues`, `appliance`, `link_url`)
VALUES (1, 'Лазерный датчик частиц аэрозолей',
        'Прибор, который позволяет в режиме реальног времени показывать степень загрязнения воздуха и давать информацию как в мг/м<sup>3</sup>, так и по фракциям.',
        'НИИ физики ОНУ им. И.И. Мечникова', '../img/detector.PNG', 'B2B, B2G, B2C',
        'есть апробированный прототип и научная и ресурсная базы; проект готов к масштабированию', '500 000 EUR',
        '<p class="lead">Лазерный датчик частиц\r\nаэрозолей – это прибор, который измеряет\r\nзагрязненность воздуха:</p>\r\n\r\n<ul class="lead">\r\n<li>определяет состав воздуха</li>\r\n<li>измеряет загрязненность по трём градациям: до 1 микрона, до 2.5 и до 10</li>\r\n<li>предоставляет статистику по измеряемым показателям</li>\r\n<li>сигнализирует при превышении заданной нормы</li>\r\n</ul>\r\n\r\n<div class="col-8 mt-5 mx-auto">\r\n<table class="table">\r\n  <tbody>\r\n    <tr>\r\n      <th scope="row">Покрытие</th>\r\n      <td>до 100 м<sup>2</sup></td>\r\n    </tr>\r\n    <tr>\r\n      <th scope="row">Чувствительность</th>\r\n      <td>до 0.3 микронов</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n</div>\r\n\r\n<iframe width="789" height="444" src="https://www.youtube.com/embed/xuqHlMe8kBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        '<ol class="roadmap">\n            <li class="passed">Разработки НИИ физики ОНУ им. И.И. Мечникова</li>\n            <li class="passed">Создан и апробирован прототип</li>\n            <li class="passed">Интерес бизнеса</li>\n            <li class="passed">Создание продукта</li>\n            <li class="current">Привлечение инвестиций</li>\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\n            <li class="forthcome text-muted">Патентование в ЕС</li>\n            <li class="forthcome text-muted">Продажа и аренда</li>\n        </ol>',
        '<p class="lead text-white">Прибор может быть применим на\n        производствах, в офисах, квартирах, а\n        также в городах для получения\n        актуальной информации о степени\n        загрязненности воздуха и наличия в\n        нем тех или иных веществ.</p>',
        '<p class="lead">Прибор, разработанный в НИИ физики,\r\n        точнее и дешевле зарубежных\r\n        образцов. Кроме того, институт может\r\n        осуществлять монтаж, обслуживание, сертификацию и доработку датчиков, а также анализ данных совместно с\r\n        компанией-партнером.</p>\r\n\r\n',
        '<div class="row mb-3">\r\n      <div class="col-12 col-md-6 mx-auto">\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="far fa-user fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Продажа приборов с ПО обычному потребителю</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="fas fa-file-contract fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Проведение замеров для предприятий</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div class="col-12 col-md-6 mx-auto">\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="far fa-building fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Создание и сервис локальной сети датчиков для предприятий</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="fas fa-network-wired fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Развитие сети датчиков и продажа подписки для получения доступа к данным</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n    <div class="row">\r\n      <div class="col-10 col-md-7 mx-auto">\r\n        <h3 class="text-center">Цели:</h3>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-leaf"></i></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Соответствие экологическим стандартам</p>\r\n          </div>\r\n        </div>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="far fa-heart"></i></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Сохранение здоровья</p>\r\n          </div>\r\n        </div>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-chart-line"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Повышение эффективности труда</p>\r\n          </div>\r\n        </div>\r\n<div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-cogs"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Удовлетворение технологической потребности в чистом воздухе</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>',
        ''),
       (2, 'Концентратор солнечной энергии на основе зеркал Френеля',
        'Концентратор солнечной энергии на основе зеркал Френеля, может использоваться как блок солнечной электростанции (СЭС), для нагрева различных объектов и сред, для других целей в технологических процессах различных видов производств.\r\n',
        'ОНУ им. И.И. Мечникова\r\n', '../img/frenel.jpg', 'B2B, B2G, B2C',
        'Концентратор прошел государственные испытания и работает как блок на Ашхабадской СЭС мощностью 10 кВт.\r\n',
        '500 000 EUR',
        '<p>Концентратор солнечной энергии на основе зеркал Френеля представляет собой монолитную конструкцию, которая отвечает требованиям низкой материалоемкости и стоимости, обеспечивает механическую прочность и сохранение его геометрических и оптических параметров на весь срок эксплуатации.</p>\r\n\r\n<p>Обеспечивается максимальный прием солнечного излучения для заданной географической широты местности. Перекрывается угол по высоте Солнца в 50<sup>0</sup>, чем обеспечивается достаточно большой период активной работы станции в любое время года.</p>\r\n\r\n<div class="col-8 mt-5 mx-auto">\r\n<table class="table">\r\n  <tbody>\r\n    <tr>\r\n      <th scope="row">Коэффициент отражения</th>\r\n      <td>87%</td>\r\n    </tr>\r\n    <tr>\r\n      <th scope="row">коэффициент концентрации</th>\r\n      <td>20-30</td>\r\n    </tr>\r\n  <tr>\r\n      <th scope="row">Габаритные размеры блока\r\n  концентратора</th>\r\n      <td>1.5х2х0.07 г.\r\n</td>\r\n    </tr>\r\n<tr>\r\n      <th scope="row">Габаритные размеры отражающих\r\n  элементов (фацет)</th>\r\n      <td>150х5х0.2 см</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n</div>',
        '\r\n<ol class="roadmap">\r\n            <li class="passed">Разработки ОНУ им. И.И. Мечникова</li>\r\n            <li class="passed">Создан и апробирован прототип</li>\r\n            <li class="passed">Применяется на СЭС</li>\r\n            <li class="current">Привлечение партнеров для дальнейшего внедрения</li>\r\n            <li class="forthcome text-muted">Привлечение инвестиций</li>\r\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\r\n            <li class="forthcome text-muted">Патентование в ЕС</li>\r\n    \r\n      </ol>',
        'Разработка может быть реализована на предприятиях сферы энергетики и частного сектора, а в области охраны окружающей среды.\r\n',
        'Способ изготовления, технические и экономические характеристики концентратора солнечной энергии на основе зеркал Френеля делают его конкурентоспособным на мировом рынке изделий аналогичного назначения.\r\n',
        'СЭС, промышленные и бытовые. ', NULL),
       (3, 'Биотехнология комплексной переработки отвалов каменного угля',
        'Разработка направлена на получение редких и драгоценных металлов из отходов предприятий энергетики и металлургии.',
        'ОНУ им. И.И. Мечникова', '../img/oak.jpg', 'B2B, B2G',
        'Подготовлены методические и технологические рекомендации для внедрения разработанной биотехнологии. Проведены испытания.',
        '500 000 EUR',
        '<p>Разработка не имеет аналогов в Украине и мире. Она основывается на способности хемолитотрофных микроорганизмов, в том числе собственной микробиоты техногенного сырья, в результате своей жизнедеятельности за счет окисления серы и ее соединений разрушать устойчивые кристаллические структуры, способствует изъятию целевых металлов в раствор питательной среды. Разработан специфический бактериальный препарат и отработанные оптимальные технологические условия позволяют получить:</p>\r\n<p>- ценный редкометальное концентрат с содержанием 5-7% германия, который является товарным продуктом;</p>\r\n<p>- обезвреженные отходы ниже предельно допустимых концентраций</p>\r\n',
        ' \r\n<ol class="roadmap">\r\n            <li class="passed">Разработки ОНУ им. И.И. Мечникова</li>\r\n            <li class="passed">Подготовлены методические и технологические рекомендации для внедрения разработанной биотехнологии</li>\r\n            <li class="passed">Проведены испытания разработанного биотехнологического метода с целью установления его эффективности и экологической безопасности в условиях действующего предприятия на породных отвалах углеобогащения</li>\r\n            <li class="current">Привлечение партнеров для дальнейшего внедрения</li>\r\n            <li class="forthcome text-muted">Привлечение инвестиций</li>\r\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\r\n            <li class="forthcome text-muted">Патентование в ЕС</li>\r\n    \r\n      </ol>',
        'Потенциальными потребителями разработки являются предприятия, в первую очередь угольные, которые заинтересованы в производстве стратегически важной продукции, повышении уровня комплексности использования сырья, уменьшении нагрузки на окружающую среду.\r\nТехнические и экономические характеристики разработки делают ее конкурентоспособной на отечественном и мировом рынках, что подтверждено получением 13 патентов Украины на изобретение и полезную модель.\r\n',
        'Разработка не требует дорогостоящего оборудования, дефицитных реактивов, характеризуется низкими энергопотреблением и трудозатратами, высоко рентабельной, быстро окупается, является экологически безопасной.\r\n',
        'Разработка направлена на получение редких и драгоценных металлов с нетрадиционной техногенного сырья - отходов предприятий энергетики и металлургии Украины. При этом отходы теряют свое негативное влияние на окружающую среду и человека, могут использоваться для рекультивации земель или в строительстве.\r\n',
        NULL);

INSERT INTO `innovations_en` (`id`, `name`, `short_description`, `author`, `image_path`, `market_types`, `current_stage`,
                              `money_needed`, `description`, `road_map`, `market`, `analogues`, `appliance`, `link_url`)
VALUES (1, 'Лазерный датчик частиц аэрозолей',
        'Прибор, который позволяет в режиме реальног времени показывать степень загрязнения воздуха и давать информацию как в мг/м<sup>3</sup>, так и по фракциям.',
        'НИИ физики ОНУ им. И.И. Мечникова', '../img/detector.PNG', 'B2B, B2G, B2C',
        'есть апробированный прототип и научная и ресурсная базы; проект готов к масштабированию', '500 000 EUR',
        '<p class="lead">Лазерный датчик частиц\r\nаэрозолей – это прибор, который измеряет\r\nзагрязненность воздуха:</p>\r\n\r\n<ul class="lead">\r\n<li>определяет состав воздуха</li>\r\n<li>измеряет загрязненность по трём градациям: до 1 микрона, до 2.5 и до 10</li>\r\n<li>предоставляет статистику по измеряемым показателям</li>\r\n<li>сигнализирует при превышении заданной нормы</li>\r\n</ul>\r\n\r\n<div class="col-8 mt-5 mx-auto">\r\n<table class="table">\r\n  <tbody>\r\n    <tr>\r\n      <th scope="row">Покрытие</th>\r\n      <td>до 100 м<sup>2</sup></td>\r\n    </tr>\r\n    <tr>\r\n      <th scope="row">Чувствительность</th>\r\n      <td>до 0.3 микронов</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n</div>\r\n\r\n<iframe width="789" height="444" src="https://www.youtube.com/embed/xuqHlMe8kBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        '<ol class="roadmap">\n            <li class="passed">Разработки НИИ физики ОНУ им. И.И. Мечникова</li>\n            <li class="passed">Создан и апробирован прототип</li>\n            <li class="passed">Интерес бизнеса</li>\n            <li class="passed">Создание продукта</li>\n            <li class="current">Привлечение инвестиций</li>\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\n            <li class="forthcome text-muted">Патентование в ЕС</li>\n            <li class="forthcome text-muted">Продажа и аренда</li>\n        </ol>',
        '<p class="lead text-white">Прибор может быть применим на\n        производствах, в офисах, квартирах, а\n        также в городах для получения\n        актуальной информации о степени\n        загрязненности воздуха и наличия в\n        нем тех или иных веществ.</p>',
        '<p class="lead">Прибор, разработанный в НИИ физики,\r\n        точнее и дешевле зарубежных\r\n        образцов. Кроме того, институт может\r\n        осуществлять монтаж, обслуживание, сертификацию и доработку датчиков, а также анализ данных совместно с\r\n        компанией-партнером.</p>\r\n\r\n',
        '<div class="row mb-3">\r\n      <div class="col-12 col-md-6 mx-auto">\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="far fa-user fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Продажа приборов с ПО обычному потребителю</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="fas fa-file-contract fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Проведение замеров для предприятий</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div class="col-12 col-md-6 mx-auto">\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="far fa-building fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Создание и сервис локальной сети датчиков для предприятий</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="fas fa-network-wired fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Развитие сети датчиков и продажа подписки для получения доступа к данным</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n    <div class="row">\r\n      <div class="col-10 col-md-7 mx-auto">\r\n        <h3 class="text-center">Цели:</h3>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-leaf"></i></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Соответствие экологическим стандартам</p>\r\n          </div>\r\n        </div>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="far fa-heart"></i></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Сохранение здоровья</p>\r\n          </div>\r\n        </div>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-chart-line"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Повышение эффективности труда</p>\r\n          </div>\r\n        </div>\r\n<div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-cogs"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Удовлетворение технологической потребности в чистом воздухе</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>',
        ''),
       (2, 'Концентратор солнечной энергии на основе зеркал Френеля',
        'Концентратор солнечной энергии на основе зеркал Френеля, может использоваться как блок солнечной электростанции (СЭС), для нагрева различных объектов и сред, для других целей в технологических процессах различных видов производств.\r\n',
        'ОНУ им. И.И. Мечникова\r\n', '../img/frenel.jpg', 'B2B, B2G, B2C',
        'Концентратор прошел государственные испытания и работает как блок на Ашхабадской СЭС мощностью 10 кВт.\r\n',
        '500 000 EUR',
        '<p>Концентратор солнечной энергии на основе зеркал Френеля представляет собой монолитную конструкцию, которая отвечает требованиям низкой материалоемкости и стоимости, обеспечивает механическую прочность и сохранение его геометрических и оптических параметров на весь срок эксплуатации.</p>\r\n\r\n<p>Обеспечивается максимальный прием солнечного излучения для заданной географической широты местности. Перекрывается угол по высоте Солнца в 50<sup>0</sup>, чем обеспечивается достаточно большой период активной работы станции в любое время года.</p>\r\n\r\n<div class="col-8 mt-5 mx-auto">\r\n<table class="table">\r\n  <tbody>\r\n    <tr>\r\n      <th scope="row">Коэффициент отражения</th>\r\n      <td>87%</td>\r\n    </tr>\r\n    <tr>\r\n      <th scope="row">коэффициент концентрации</th>\r\n      <td>20-30</td>\r\n    </tr>\r\n  <tr>\r\n      <th scope="row">Габаритные размеры блока\r\n  концентратора</th>\r\n      <td>1.5х2х0.07 г.\r\n</td>\r\n    </tr>\r\n<tr>\r\n      <th scope="row">Габаритные размеры отражающих\r\n  элементов (фацет)</th>\r\n      <td>150х5х0.2 см</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n</div>',
        '\r\n<ol class="roadmap">\r\n            <li class="passed">Разработки ОНУ им. И.И. Мечникова</li>\r\n            <li class="passed">Создан и апробирован прототип</li>\r\n            <li class="passed">Применяется на СЭС</li>\r\n            <li class="current">Привлечение партнеров для дальнейшего внедрения</li>\r\n            <li class="forthcome text-muted">Привлечение инвестиций</li>\r\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\r\n            <li class="forthcome text-muted">Патентование в ЕС</li>\r\n    \r\n      </ol>',
        'Разработка может быть реализована на предприятиях сферы энергетики и частного сектора, а в области охраны окружающей среды.\r\n',
        'Способ изготовления, технические и экономические характеристики концентратора солнечной энергии на основе зеркал Френеля делают его конкурентоспособным на мировом рынке изделий аналогичного назначения.\r\n',
        'СЭС, промышленные и бытовые. ', NULL),
       (3, 'Биотехнология комплексной переработки отвалов каменного угля',
        'Разработка направлена на получение редких и драгоценных металлов из отходов предприятий энергетики и металлургии.',
        'ОНУ им. И.И. Мечникова', '../img/oak.jpg', 'B2B, B2G',
        'Подготовлены методические и технологические рекомендации для внедрения разработанной биотехнологии. Проведены испытания.',
        '500 000 EUR',
        '<p>Разработка не имеет аналогов в Украине и мире. Она основывается на способности хемолитотрофных микроорганизмов, в том числе собственной микробиоты техногенного сырья, в результате своей жизнедеятельности за счет окисления серы и ее соединений разрушать устойчивые кристаллические структуры, способствует изъятию целевых металлов в раствор питательной среды. Разработан специфический бактериальный препарат и отработанные оптимальные технологические условия позволяют получить:</p>\r\n<p>- ценный редкометальное концентрат с содержанием 5-7% германия, который является товарным продуктом;</p>\r\n<p>- обезвреженные отходы ниже предельно допустимых концентраций</p>\r\n',
        ' \r\n<ol class="roadmap">\r\n            <li class="passed">Разработки ОНУ им. И.И. Мечникова</li>\r\n            <li class="passed">Подготовлены методические и технологические рекомендации для внедрения разработанной биотехнологии</li>\r\n            <li class="passed">Проведены испытания разработанного биотехнологического метода с целью установления его эффективности и экологической безопасности в условиях действующего предприятия на породных отвалах углеобогащения</li>\r\n            <li class="current">Привлечение партнеров для дальнейшего внедрения</li>\r\n            <li class="forthcome text-muted">Привлечение инвестиций</li>\r\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\r\n            <li class="forthcome text-muted">Патентование в ЕС</li>\r\n    \r\n      </ol>',
        'Потенциальными потребителями разработки являются предприятия, в первую очередь угольные, которые заинтересованы в производстве стратегически важной продукции, повышении уровня комплексности использования сырья, уменьшении нагрузки на окружающую среду.\r\nТехнические и экономические характеристики разработки делают ее конкурентоспособной на отечественном и мировом рынках, что подтверждено получением 13 патентов Украины на изобретение и полезную модель.\r\n',
        'Разработка не требует дорогостоящего оборудования, дефицитных реактивов, характеризуется низкими энергопотреблением и трудозатратами, высоко рентабельной, быстро окупается, является экологически безопасной.\r\n',
        'Разработка направлена на получение редких и драгоценных металлов с нетрадиционной техногенного сырья - отходов предприятий энергетики и металлургии Украины. При этом отходы теряют свое негативное влияние на окружающую среду и человека, могут использоваться для рекультивации земель или в строительстве.\r\n',
        NULL);

INSERT INTO `innovations_uk` (`id`, `name`, `short_description`, `author`, `image_path`, `market_types`, `current_stage`,
                              `money_needed`, `description`, `road_map`, `market`, `analogues`, `appliance`, `link_url`)
VALUES (1, 'Лазерный датчик частиц аэрозолей',
        'Прибор, который позволяет в режиме реальног времени показывать степень загрязнения воздуха и давать информацию как в мг/м<sup>3</sup>, так и по фракциям.',
        'НИИ физики ОНУ им. И.И. Мечникова', '../img/detector.PNG', 'B2B, B2G, B2C',
        'есть апробированный прототип и научная и ресурсная базы; проект готов к масштабированию', '500 000 EUR',
        '<p class="lead">Лазерный датчик частиц\r\nаэрозолей – это прибор, который измеряет\r\nзагрязненность воздуха:</p>\r\n\r\n<ul class="lead">\r\n<li>определяет состав воздуха</li>\r\n<li>измеряет загрязненность по трём градациям: до 1 микрона, до 2.5 и до 10</li>\r\n<li>предоставляет статистику по измеряемым показателям</li>\r\n<li>сигнализирует при превышении заданной нормы</li>\r\n</ul>\r\n\r\n<div class="col-8 mt-5 mx-auto">\r\n<table class="table">\r\n  <tbody>\r\n    <tr>\r\n      <th scope="row">Покрытие</th>\r\n      <td>до 100 м<sup>2</sup></td>\r\n    </tr>\r\n    <tr>\r\n      <th scope="row">Чувствительность</th>\r\n      <td>до 0.3 микронов</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n</div>\r\n\r\n<iframe width="789" height="444" src="https://www.youtube.com/embed/xuqHlMe8kBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        '<ol class="roadmap">\n            <li class="passed">Разработки НИИ физики ОНУ им. И.И. Мечникова</li>\n            <li class="passed">Создан и апробирован прототип</li>\n            <li class="passed">Интерес бизнеса</li>\n            <li class="passed">Создание продукта</li>\n            <li class="current">Привлечение инвестиций</li>\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\n            <li class="forthcome text-muted">Патентование в ЕС</li>\n            <li class="forthcome text-muted">Продажа и аренда</li>\n        </ol>',
        '<p class="lead text-white">Прибор может быть применим на\n        производствах, в офисах, квартирах, а\n        также в городах для получения\n        актуальной информации о степени\n        загрязненности воздуха и наличия в\n        нем тех или иных веществ.</p>',
        '<p class="lead">Прибор, разработанный в НИИ физики,\r\n        точнее и дешевле зарубежных\r\n        образцов. Кроме того, институт может\r\n        осуществлять монтаж, обслуживание, сертификацию и доработку датчиков, а также анализ данных совместно с\r\n        компанией-партнером.</p>\r\n\r\n',
        '<div class="row mb-3">\r\n      <div class="col-12 col-md-6 mx-auto">\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="far fa-user fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Продажа приборов с ПО обычному потребителю</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="fas fa-file-contract fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Проведение замеров для предприятий</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div class="col-12 col-md-6 mx-auto">\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="far fa-building fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Создание и сервис локальной сети датчиков для предприятий</p>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="row align-items-start justify-content-between mb-3">\r\n          <div class="col-2 text-right">\r\n            <span style="color: #222224"><i class="fas fa-network-wired fa-3x"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead text-white">Развитие сети датчиков и продажа подписки для получения доступа к данным</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n    <div class="row">\r\n      <div class="col-10 col-md-7 mx-auto">\r\n        <h3 class="text-center">Цели:</h3>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-leaf"></i></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Соответствие экологическим стандартам</p>\r\n          </div>\r\n        </div>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="far fa-heart"></i></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Сохранение здоровья</p>\r\n          </div>\r\n        </div>\r\n        <div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-chart-line"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Повышение эффективности труда</p>\r\n          </div>\r\n        </div>\r\n<div class="row align-items-baseline">\r\n          <div class="col-2 text-right">\r\n            <span style="color: darkgreen"><i class="fas fa-cogs"></i></span>\r\n          </div>\r\n          <div class="col-9 col-md-10">\r\n            <p class="lead">Удовлетворение технологической потребности в чистом воздухе</p>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>',
        ''),
       (2, 'Концентратор солнечной энергии на основе зеркал Френеля',
        'Концентратор солнечной энергии на основе зеркал Френеля, может использоваться как блок солнечной электростанции (СЭС), для нагрева различных объектов и сред, для других целей в технологических процессах различных видов производств.\r\n',
        'ОНУ им. И.И. Мечникова\r\n', '../img/frenel.jpg', 'B2B, B2G, B2C',
        'Концентратор прошел государственные испытания и работает как блок на Ашхабадской СЭС мощностью 10 кВт.\r\n',
        '500 000 EUR',
        '<p>Концентратор солнечной энергии на основе зеркал Френеля представляет собой монолитную конструкцию, которая отвечает требованиям низкой материалоемкости и стоимости, обеспечивает механическую прочность и сохранение его геометрических и оптических параметров на весь срок эксплуатации.</p>\r\n\r\n<p>Обеспечивается максимальный прием солнечного излучения для заданной географической широты местности. Перекрывается угол по высоте Солнца в 50<sup>0</sup>, чем обеспечивается достаточно большой период активной работы станции в любое время года.</p>\r\n\r\n<div class="col-8 mt-5 mx-auto">\r\n<table class="table">\r\n  <tbody>\r\n    <tr>\r\n      <th scope="row">Коэффициент отражения</th>\r\n      <td>87%</td>\r\n    </tr>\r\n    <tr>\r\n      <th scope="row">коэффициент концентрации</th>\r\n      <td>20-30</td>\r\n    </tr>\r\n  <tr>\r\n      <th scope="row">Габаритные размеры блока\r\n  концентратора</th>\r\n      <td>1.5х2х0.07 г.\r\n</td>\r\n    </tr>\r\n<tr>\r\n      <th scope="row">Габаритные размеры отражающих\r\n  элементов (фацет)</th>\r\n      <td>150х5х0.2 см</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n</div>',
        '\r\n<ol class="roadmap">\r\n            <li class="passed">Разработки ОНУ им. И.И. Мечникова</li>\r\n            <li class="passed">Создан и апробирован прототип</li>\r\n            <li class="passed">Применяется на СЭС</li>\r\n            <li class="current">Привлечение партнеров для дальнейшего внедрения</li>\r\n            <li class="forthcome text-muted">Привлечение инвестиций</li>\r\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\r\n            <li class="forthcome text-muted">Патентование в ЕС</li>\r\n    \r\n      </ol>',
        'Разработка может быть реализована на предприятиях сферы энергетики и частного сектора, а в области охраны окружающей среды.\r\n',
        'Способ изготовления, технические и экономические характеристики концентратора солнечной энергии на основе зеркал Френеля делают его конкурентоспособным на мировом рынке изделий аналогичного назначения.\r\n',
        'СЭС, промышленные и бытовые. ', NULL),
       (3, 'Биотехнология комплексной переработки отвалов каменного угля',
        'Разработка направлена на получение редких и драгоценных металлов из отходов предприятий энергетики и металлургии.',
        'ОНУ им. И.И. Мечникова', '../img/oak.jpg', 'B2B, B2G',
        'Подготовлены методические и технологические рекомендации для внедрения разработанной биотехнологии. Проведены испытания.',
        '500 000 EUR',
        '<p>Разработка не имеет аналогов в Украине и мире. Она основывается на способности хемолитотрофных микроорганизмов, в том числе собственной микробиоты техногенного сырья, в результате своей жизнедеятельности за счет окисления серы и ее соединений разрушать устойчивые кристаллические структуры, способствует изъятию целевых металлов в раствор питательной среды. Разработан специфический бактериальный препарат и отработанные оптимальные технологические условия позволяют получить:</p>\r\n<p>- ценный редкометальное концентрат с содержанием 5-7% германия, который является товарным продуктом;</p>\r\n<p>- обезвреженные отходы ниже предельно допустимых концентраций</p>\r\n',
        ' \r\n<ol class="roadmap">\r\n            <li class="passed">Разработки ОНУ им. И.И. Мечникова</li>\r\n            <li class="passed">Подготовлены методические и технологические рекомендации для внедрения разработанной биотехнологии</li>\r\n            <li class="passed">Проведены испытания разработанного биотехнологического метода с целью установления его эффективности и экологической безопасности в условиях действующего предприятия на породных отвалах углеобогащения</li>\r\n            <li class="current">Привлечение партнеров для дальнейшего внедрения</li>\r\n            <li class="forthcome text-muted">Привлечение инвестиций</li>\r\n            <li class="forthcome text-muted">Доработки и масштабирование</li>\r\n            <li class="forthcome text-muted">Патентование в ЕС</li>\r\n    \r\n      </ol>',
        'Потенциальными потребителями разработки являются предприятия, в первую очередь угольные, которые заинтересованы в производстве стратегически важной продукции, повышении уровня комплексности использования сырья, уменьшении нагрузки на окружающую среду.\r\nТехнические и экономические характеристики разработки делают ее конкурентоспособной на отечественном и мировом рынках, что подтверждено получением 13 патентов Украины на изобретение и полезную модель.\r\n',
        'Разработка не требует дорогостоящего оборудования, дефицитных реактивов, характеризуется низкими энергопотреблением и трудозатратами, высоко рентабельной, быстро окупается, является экологически безопасной.\r\n',
        'Разработка направлена на получение редких и драгоценных металлов с нетрадиционной техногенного сырья - отходов предприятий энергетики и металлургии Украины. При этом отходы теряют свое негативное влияние на окружающую среду и человека, могут использоваться для рекультивации земель или в строительстве.\r\n',
        NULL);


INSERT INTO partners (name, description, image_path, link)
VALUES ('Одесский Национальный университет имени И.И. Мечникова',
        'Ведущий научно-образовательный центр современной Украины, первое высшее учебное заведение в южном регионе страны.',
        '/img/onu.jpg',
        'http://onu.edu.ua/en/'),
       ('Worldview ',
        'Платформа, которая объединяет творчество, спорт, приключения и развивает их.',
        '/img/worldviewblog.png',
        'http://worldviewblog.com.ua/'),
       ('MobileFilmmaker',
        'Пространство, посвящённое «мобильному кино» и создающее его людям.',
        '/img/mobilefilmmaker.jpg',
        'http://mobilefilmmaker.ru/'),
       ('Suomi Partnership Association',
        'A non-profit association of businesses aimed at fostering cooperation between Ukrainian and Finnish companies.',
        '/img/asp.jpg',
        'http://www.ua.suomipartnership.org/'),
       ('IL Decameron',
        'Пространство с итальянскими стилем и ценностями. Здесь вы сможете остаться в гостинице, воспользоваться коворкингом и конференц-залом. Благодаря нам вы можете получить скидку. Также IL Decameron входит в глобальную сеть Copernico, членом которой вы можете стать.',
        '/img/ildecameron.jpeg',
        'http://ildecameron.com.ua/');

INSERT INTO partners_en (name, description, image_path, link)
VALUES ('Odessa National University named after I.I. Mechnikov',
        'The leading scientific and educational center of modern Ukraine, the first institution of higher education in the southern region of the country.',
        '/img/onu.jpg',
        'http://onu.edu.ua/en/'),
       ('Worldview ',
        'A platform that combines creativity, sport, adventure and develops them.',
        '/img/worldviewblog.png',
        'http://worldviewblog.com.ua/'),
       ('MobileFilmmaker',
        'A space dedicated to “mobile cinema” and creating it for people.',
        '/img/mobilefilmmaker.jpg',
        'http://mobilefilmmaker.ru/'),
       ('Suomi Partnership Association',
        'A non-profit association of businesses aimed at fostering cooperation between Ukrainian and Finnish companies.',
        '/img/asp.jpg',
        'http://www.ua.suomipartnership.org/'),
       ('IL Decameron',
        'Space with Italian style and values. Here you can stay in the hotel, use the co-working and conference room. Thanks to us you can get a discount. IL Decameron is also part of the Copernico global network, of which you can become a member.',
        '/img/ildecameron.jpeg',
        'http://ildecameron.com.ua/');

INSERT INTO partners_uk (name, description, image_path, link)
VALUES ('Одеський національний університет імені І.І. Мечникова',
        'Ведучий науково-освітній центр сучасної України, перший вищий навчальний заклад в південному регіоні країни.',
        '/img/onu.jpg',
        'http://onu.edu.ua/en/'),
       ('Worldview ',
        'Платформа, яка об\'єднує творчість, спорт, пригоди і розвиває їх.',
        '/img/worldviewblog.png',
        'http://worldviewblog.com.ua/'),
       ('MobileFilmmaker',
        'Простір, присвячене «мобільному кіно» і створює його людям.',
        '/img/mobilefilmmaker.jpg',
        'http://mobilefilmmaker.ru/'),
       ('Suomi Partnership Association',
        'A non-profit association of businesses aimed at fostering cooperation between Ukrainian and Finnish companies.',
        '/img/asp.jpg',
        'http://www.ua.suomipartnership.org/'),
       ('IL Decameron',
        'Простір з італійськими стилем і цінностями. Тут ви зможете залишитися в готелі, скористатися коворкінгом і конференц-залом. Завдяки нам ви можете отримати знижку. Також IL Decameron входить в глобальну мережу Copernico, членом якої ви можете стати.',
        '/img/ildecameron.jpeg',
        'http://ildecameron.com.ua/');

INSERT INTO projects_ru (name, description, image_path, link_1_url, link_1_text)
VALUES ('EasyLaw',
        'Телеграм-канал от студентов-юристов, с которым вы станете более грамотными юридически.',
        '/img/easylaw.JPEG',
        'http://t.me/luvljg',
        'перейти'),
       ('Worldview',
        'Платформа, которая объединяет творчество, спорт, приключения и развивает их.',
        '/img/worldviewblog.png',
        'http://worldviewblog.com.ua/projects/author-worldviewblog/',
        'стать автором'),
       ('Mechnikov sailing team',
        'Проект университетской парусной команды под стать ведущим университетам мира.',
        '/img/mechnikovsail.JPEG',
        'http://worldviewblog.com.ua/projects/470-mechnikov-sailing-for-business/',
        'подробнее');

INSERT INTO projects_en (name, description, image_path, link_1_url, link_1_text)
VALUES ('EasyLaw',
        'Telegram channel from law students, with which you will become more legally competent.',
        '/img/easylaw.JPEG',
        'http://t.me/luvljg',
        'visit'),
       ('Worldview',
        'A platform that combines creativity, sport, adventure and develops them.',
        '/img/worldviewblog.png',
        'http://worldviewblog.com.ua/projects/author-worldviewblog/',
        'become an author'),
       ('Mechnikov sailing team',
        'The project of the university sailing team to become the leading universities in the world.',
        '/img/mechnikovsail.JPEG',
        'http://worldviewblog.com.ua/projects/470-mechnikov-sailing-for-business/',
        'learn more');

INSERT INTO projects_uk (name, description, image_path, link_1_url, link_1_text)
VALUES ('EasyLaw',
        'Телеграм-канал від студентів-юристів, з яким ви станете більш грамотними юридично.',
        '/img/easylaw.JPEG',
        'http://t.me/luvljg',
        'перейти'),
       ('Worldview',
        'Платформа, яка об\'єднує творчість, спорт, пригоди і розвиває їх.',
        '/img/worldviewblog.png',
        'http://worldviewblog.com.ua/projects/author-worldviewblog/',
        'стати автором'),
       ('Mechnikov sailing team',
        'Проект університетської вітрильної команди під стать провідним університетам світу.',
        '/img/mechnikovsail.JPEG',
        'http://worldviewblog.com.ua/projects/470-mechnikov-sailing-for-business/',
        'детальнiше');

INSERT INTO news (title, text, cat, image_path)
VALUES ('First closed case',
        '<p>Today I finally understood that I already have a closed case within a framework of my start-up.</p>
        <p>Some projects have started and still are not finished, we don’t know how far they will go, but what we already have? Let’s see.</p>
        <p>In August 2018 we had some meetings in Finland and, as a result, we got some new contacts and also made a huge analytic work “How Finnish children gardens work”. It was an order from Suomi Partnership Association and a private Odessa children garden, that have already become our partner (the first one).</p>
        <p>So we have proven that we can contact with universities (professor from University of Helsinki), use students (from ONU Mechnikov and SPbU) and knowledges, which they already have from studying (political science and clinical psychology).</p>',
        '',
        ''),

       ('On last week we sign the memorandum between the Rector of National Odessa I.I. Mechnikov University, Igor Koval and me, student, of this university, but also a Head of Fund of Innovation Support.',
        '<p>So, now I am officialy represent my university and plan to build cooperations between them and companies, invests, to develop science, education and business, of course!</p>
        <p>On our beta site you can see the draft version of products and possibilities for</p>
        <ul>
            <li>students</li>
            <li>businessmen</li>
            <li>investors</li>
        </ul>
        <p>What do we plan and propose? List is wery huge, let me explain main categories.</p>
        <ol>
            <li>Discounts for students (develop your marketing and CSR, For B2C companies)</li>
            <li>Joint science events (lections and conferences,businessmen at university (practice learning), our teachers in companies)</li>
            <li>Creating innovations on university base (decisions from university by order, to save money on own development office)</li>
            <li>Realisation of projects and ideas (there are a lot of different projects, inventions and start-ups at university , which we can realize in cooperation with you)</li>
            <li>HR (practice and work for students and specialists from university).</li>
        </ol>
        <p>If you are interested in something — feel free to ask me on <a href="https://www.linkedin.com/in/pavelkoyen/" target="_blank">Linkedin</a>, <a href="https://www.facebook.com/pavelkoyen" target="_blank">Facebook</a> or <a href="mailto:pavelkoyen@gmail.com" target="_blank">by mail</a>.</p>',
        '',
        ''),

       ('GENERATION PARTNERSHIP conference',
        '<p>GENERATION PARTNERSHIP.<br>
        От поколения Z к университету, от университета к бизнесу.</p>
        <p>22 февраля в 11.00 в Impact HUB Odessa (Греческая 1А) состоится конференция-дискуссия о сотрудничестве бизнеса, науки и образования.</p>
        <p>Мы поговорим о:
        <ul>
          <li>сотрдуничестве с бизнесом и инвестициями;</li>
          <li>Университете, как стратегическом партнере;</li>
          <li>успешных выпускниках и активных студентах;</li>
          <li>услышим вас, ответим на вопросы и вступим в дискуссию.</li>
        </ul>
        </p>
        <p>Наши партнеры это:<br>
        <ul>
          <li>Более 100 инноваций;</li>
          <li>10 000 + студентов;</li>
          <li>16 лабораторий;</li>
          <li>11 научных центров;</li>
          <li>150 000 кв.м. образования и науки.</li>
        </ul>
        </p>
        <p>Как сотрудничать эффективно?<br>
        Заполняйте гугл-формы по ссылке: innovationfund.in/links</p>
        <p><b>Программа:</b></p>
        <p>10.30 регистрация</p>
        <p>11.00 Бизнес, выпускники и студенты на одной площадке. Цель встречи (спикер - Павел Коен)</p>
        <p>11.20 Что такое ОНУ Мечникова, история, репутация, ресурсы (спикер - ректор, И.Коваль)</p>
        <p>12.00 Почему мы хотим сотрудничать с университетом?</p>
        <p>12.30 Кофе-брейк</p>
        <p>13.00 Ассоциация выпускников. Успешные проекты,перспективы сотрудничества. Проректор, Владимир Серотюк</p>
        <p>13.20 Бизнес. Что мы хотим получить от университета и почему считаем важным сотрудничество с ним?</p>
        <p>13.50 Студенты. Поле интересов и восприятие университета.</p>
        <p>14.10 Нетворкинг.</p>
        <p><b>Регистрация на мероприятие <a href="https://goo.gl/forms/m3EJ3UNNiu32RVbJ3" target="_blank">по ссылке</a></b>.</p>
        До встречи!',
        '',
        '../uploads/news-GENERATION-PARTNERSHIP-conference.jpeg');

INSERT INTO innovations (name, description, author, image_path, market_types, current_stage, money_needed, road_map,
                         market, analogues, appliance, link_url)
VALUES ('Лазерный датчик частиц аэрозолей',
        'Прибор, который позволяет в режиме реального
        времени показывать степень загрязнения воздуха и
        давать ин   формацию как в мг/м<sup>3</sup>, так и по фракциям.',
        'НИИ физики ОНУ им. И.И. Мечникова',
        '/img/detector.png',
        'B2B, B2G, B2C',
        'есть опробированный прототип и научная и ресурсная базы; проект готов к масштабированию',
        '1 000 000 EUR',
        '<ol class="roadmap">
            <li class="passed">Разработки НИИ физики ОНУ им. И.И. Мечникова</li>
            <li class="passed">Создан и апробирован пототип</li>
            <li class="passed">Интерес бизнеса</li>
            <li class="passed">Создание продукта</li>
            <li class="current">Привлечение инвестиций</li>
            <li class="forthcome text-muted">Доработки и масштабирование</li>
            <li class="forthcome text-muted">Патентование в ЕС</li>
            <li class="forthcome text-muted">Продажа и аренда</li>
        </ol>',
        '<p class="lead text-white">Прибор может быть применим на
        производствах, в офисах, квартирах, а
        так же в городах для получения
        актуальной информации о степени
        загрязненности воздуха и наличия в
        нем тех или иных веществ.</p>',
        '<p class="lead">Прибор, разработанный в НИИ физики,
        точнее и дешевле зарубежных
        образцов. Кроме того, институт может
        осуществлять монтаж, обслуживание и доработку датчиков, а также анализ данных совместно с
        компанией-партнером.</p>  ',
        '<div class="row mb-3">
      <div class="col-12 col-md-6 mx-auto">
        <div class="row align-items-start justify-content-between mb-3">
          <div class="col-2 text-right">
            <span style="color: #222224"><i class="far fa-user fa-3x"></i></span>
          </div>
          <div class="col-9 col-md-10">
            <p class="lead text-white">Продажа приборов с ПО обычному потребителю</p>
          </div>
        </div>

        <div class="row align-items-start justify-content-between mb-3">
          <div class="col-2 text-right">
            <span style="color: #222224"><i class="fas fa-file-contract fa-3x"></i></span>
          </div>
          <div class="col-9 col-md-10">
            <p class="lead text-white">Проведение замеров для предприятий</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 mx-auto">
        <div class="row align-items-start justify-content-between mb-3">
          <div class="col-2 text-right">
            <span style="color: #222224"><i class="far fa-building fa-3x"></i></span>
          </div>
          <div class="col-9 col-md-10">
            <p class="lead text-white">Создание и сервис локальной сети датчиков для предприятий</p>
          </div>
        </div>

        <div class="row align-items-start justify-content-between mb-3">
          <div class="col-2 text-right">
            <span style="color: #222224"><i class="fas fa-network-wired fa-3x"></i></span>
          </div>
          <div class="col-9 col-md-10">
            <p class="lead text-white">Развитие сети датчиков и продажа подписки для получения доступа к данным</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-10 col-md-7 mx-auto">
        <h3 class="text-center">Цели:</h3>
        <div class="row align-items-baseline">
          <div class="col-2 text-right">
            <span style="color: darkgreen"><i class="fas fa-leaf"></i></i></span>
          </div>
          <div class="col-9 col-md-10">
            <p class="lead">Соответствие экологическим стандартам</p>
          </div>
        </div>
        <div class="row align-items-baseline">
          <div class="col-2 text-right">
            <span style="color: darkgreen"><i class="far fa-heart"></i></i></span>
          </div>
          <div class="col-9 col-md-10">
            <p class="lead">Сохранение здоровья</p>
          </div>
        </div>
        <div class="row align-items-baseline">
          <div class="col-2 text-right">
            <span style="color: darkgreen"><i class="fas fa-chart-line"></i></span>
          </div>
          <div class="col-9 col-md-10">
            <p class="lead">Повышение эффективности труда</p>
          </div>
        </div>
      </div>
    </div>',
        '');