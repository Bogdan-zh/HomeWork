-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 09 2018 г., 18:51
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myCMS`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '''''',
  `url` varchar(255) NOT NULL DEFAULT '''''',
  `description` varchar(255) NOT NULL DEFAULT '''''',
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL DEFAULT 'noimage.png',
  `parent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `description`, `visible`, `created_at`, `updated_at`, `image`, `parent_id`) VALUES
(1, 'Гаджеты', 'gadzhety', '<p>описание категории</p>', 1, '2018-01-08 15:18:48', '2018-01-28 20:54:01', 'id2_category__Lighthouse_05f24d3a24.jpg', 0),
(2, 'Смартфоны', 'smartfony', '<p>описание</p>', 1, '2018-01-08 15:19:58', '2018-02-02 14:14:52', 'noimage.png', 1),
(3, 'Планшеты', 'planshety', '', 1, '2018-01-12 18:30:09', '2018-02-02 14:18:07', 'noimage.png', 1),
(4, 'Мебель для дома', 'mebel-dlya-doma', '', 1, '2018-01-28 09:31:48', '2018-01-28 09:41:10', 'id4_category__Desert_2f1cafb0a7.jpg', 0),
(5, 'Кресло мешок', 'kreslo-meshok', '', 1, '2018-01-28 09:43:17', '2018-01-28 20:28:33', 'noimage.png', 4),
(6, 'Техника для дома', 'tehnika-dlya-doma', '', 1, '2018-01-28 20:29:45', '2018-01-28 20:30:01', 'id6_category__Tulips_6a25a8e235.jpg', 0),
(7, 'Радиаторы отопления', 'radiatory-otopleniya', '', 1, '2018-01-28 20:31:54', '2018-01-28 20:32:38', 'noimage.png', 6),
(8, 'Водонагреватели', 'vodonagrevateli', '', 1, '2018-01-28 20:33:00', '2018-01-28 20:33:00', 'noimage.png', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL DEFAULT '''''',
  `product_id` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_cost` float(11,2) NOT NULL DEFAULT '0.00',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL DEFAULT '''''',
  `last_name` varchar(255) NOT NULL DEFAULT '''''',
  `email` varchar(255) NOT NULL DEFAULT '''''',
  `phone` varchar(255) NOT NULL DEFAULT '''''',
  `status_id` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `order_time`, `total_cost`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `status_id`) VALUES
(155, '2018-02-09 12:28:14', 155.00, 0, '', '', '', '', 1),
(156, '2018-02-09 12:29:30', 155.00, 0, '', '', '', '', 4),
(26, '2018-02-08 12:33:28', 100.00, 0, '', '', '', '', 2),
(30, '2018-02-08 14:16:13', 100.00, 0, '', '', '', '', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '''''',
  `url` varchar(255) NOT NULL DEFAULT '''''',
  `description` text NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `url`, `description`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'Доставка', 'dostavka', '<h4>Курьерская доставка по Москве</h4>\r\n<p>Курьерская доставка осуществляется на следующий день после оформления заказа, если товар есть в наличии. Курьерская доставка осуществляется в пределах Томска и Северска ежедневно с 10.00 до 21.00. Заказ на сумму свыше 300 рублей доставляется бесплатно.</p>\r\n<p>Стоимость бесплатной доставки раcсчитывается от суммы заказа с учтенной скидкой. В случае если сумма заказа после применения скидки менее 300р, осуществляется платная доставка. При сумме заказа менее 300 рублей стоимость доставки составляет от 50 рублей.&nbsp;</p>\r\n<h4>Самовывоз</h4>\r\n<p>Удобный,&nbsp;бесплатный и быстрый способ получения заказа.<br />Адрес офиса: Москва,&nbsp;ул. Арбат,&nbsp;1/3,&nbsp;офис 419.</p>\r\n<h4>Доставка с&nbsp;помощью предприятия&nbsp;&laquo;Автотрейдинг&raquo;</h4>\r\n<p>Удобный и быстрый способ доставки в крупные города России. Посылка доставляется в офис&nbsp;&laquo;Автотрейдинг&raquo; в&nbsp;Вашем городе. Для получения необходимо предъявить паспорт и&nbsp;номер грузовой декларации&nbsp;(сообщит наш менеджер после отправки). Посылку желательно получить в&nbsp;течение 24 часов с&nbsp;момента прихода груза,&nbsp;иначе компания&nbsp;&laquo;Автотрейдинг&raquo; может взыскать с Вас дополнительную оплату за хранение. Срок доставки и стоимость Вы можете рассчитать на сайте компании.</p>\r\n<h4>Наложенным платежом</h4>\r\n<p>При доставке заказа наложенным платежом с помощью&nbsp;&laquo;Почты России&raquo;, вы&nbsp;сможете оплатить заказ непосредственно в&nbsp;момент получения товаров.</p>', 1, '2017-12-28 09:30:47', '2018-02-01 13:15:09'),
(2, 'Оплата', 'oplata', '<h4>Наличными курьеру</h4>\r\n<p>Вы можете оплатить заказ курьеру в рублях непосредственно в момент доставки. Курьерская доставка осуществляется по Москве на следующий день после принятия заказа.</p>\r\n<h4>Яндекс.Деньги</h4>\r\n<p>Яндекс.Деньги&nbsp;&mdash; доступный и безопасный способ платить за товары и услуги через интернет.</p>\r\n<h4>Банковская карта</h4>\r\n<p>Оплата банковской картой Visa или MasterCard через систему Яндекс.Деньги.</p>\r\n<h4>Через терминал</h4>\r\n<p>Оплатите наличными через многочисленные терминалы в любом городе России. Можно заплатить и с банковской карты через многие банкоматы. Для этого найдите в меню терминала или банкомата логотип Яндекса и укажите код платежа.</p>\r\n<h4>Со счета мобильного телефона</h4>\r\n<p>Оплата со&nbsp;счета мобильного телефона&nbsp;через систему Яндекс.Деньги.</p>\r\n<h4>Webmoney</h4>\r\n<p>После оформления заказа вы сможете перейти на сайт webmoney для оплаты заказа, где сможете оплатить заказ в автоматическом режиме, а так же проверить наш сертификат продавца.</p>\r\n<h4>Квитанция</h4>\r\n<p>Вы можете распечатать квитанцию и оплатить её в любом отделении банка.</p>\r\n<h4>Робокасса</h4>\r\n<p>ROBOKASSA &ndash; сервис для организации приема платежей на сайте, интернет магазине и социальных сетях. Прием платежей осуществляется при минимальных комиссиях.</p>\r\n<h4>PayPal</h4>\r\n<p>Совершайте покупки безопасно, без раскрытия информации о своей кредитной карте. PayPal защитит вас, если возникнут проблемы с покупкой.</p>\r\n<h4>Оплата через Интеркассу</h4>\r\n<p>Это удобный в использовании сервис, подключение к которому позволит Интернет-магазинам, веб-сайтам и прочим торговым площадкам принимать все возможные формы оплаты в максимально короткие сроки.</p>\r\n<h4>Оплата картой через Liqpay.com</h4>\r\n<p>Благодаря своей открытости и универсальности LiqPAY стремительно интегрируется со многими платежными системами и платформами и становится стандартом платежных операций.</p>\r\n<h4>Оплата через Pay2Pay</h4>\r\n<p>Универсальный платежный сервис Pay2Pay призван облегчить и максимально упростить процесс приема электронных платежей на Вашем сайте. Мы открыты для всего нового и сверхсовременного.</p>\r\n<h4>Оплатить через QIWI</h4>\r\n<p>QIWI &mdash; удобный сервис для оплаты повседневных услуг.</p>\r\n<h4>Наличными в офисе Автолюкса</h4>\r\n<p>При доставке заказа системой Автолюкс, вы сможете оплатить заказ в их офисе непосредственно в момент получения товаров.</p>', 1, '2017-12-28 09:38:08', '2018-02-01 13:20:19');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '''''',
  `description` text NOT NULL,
  `price` float(11,2) NOT NULL DEFAULT '0.00',
  `amount` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL DEFAULT '''''',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bestseller` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL DEFAULT 'noimage.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `amount`, `url`, `visible`, `created_at`, `updated_at`, `bestseller`, `image`) VALUES
(1, 'Товар 1', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 100.00, 25, 'tovar-1', 1, '2018-01-12 08:27:53', '2018-01-31 17:37:33', 1, 'id1_product__kot_2677ecb328.png'),
(2, 'товар 2', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 55.00, 1000, 'tovar-2', 1, '2018-01-12 08:28:25', '2018-01-29 15:34:14', 1, 'noimage.png'),
(3, 'еще товар', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 20.50, 20, 'esche-tovar', 1, '2018-01-12 08:30:12', '2018-01-29 15:34:20', 1, 'id3_product__Hydrangeas_65948c8fd7.jpg'),
(4, 'dfggdf', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 1.00, 4, 'dfggdf', 1, '2018-01-12 09:12:54', '2018-02-02 11:29:07', 1, 'noimage.png'),
(5, 'dgdgdas', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 2.00, 0, 'dgdgdas', 1, '2018-01-12 09:13:03', '2018-02-02 14:08:43', 1, 'noimage.png');

-- --------------------------------------------------------

--
-- Структура таблицы `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_categories`
--

INSERT INTO `products_categories` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 3),
(4, 4, 3),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL DEFAULT '''''',
  `price` float(11,2) NOT NULL DEFAULT '0.00',
  `amount` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchases`
--

INSERT INTO `purchases` (`id`, `order_id`, `product_id`, `product_name`, `price`, `amount`) VALUES
(23, 26, 1, 'Товар 1', 100.00, 1),
(65, 30, 1, 'Товар 1', 100.00, 1),
(361, 155, 2, 'товар 2', 55.00, 4),
(362, 155, 1, 'Товар 1', 100.00, 2),
(363, 156, 2, 'товар 2', 55.00, 3),
(364, 156, 1, 'Товар 1', 100.00, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Новый',
  `color` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `color`) VALUES
(1, 'Новый', NULL),
(2, 'В обработке', NULL),
(3, 'Выполнен', NULL),
(4, 'Удален', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '''''',
  `last_name` varchar(255) NOT NULL DEFAULT '''''',
  `email` varchar(255) NOT NULL DEFAULT '''''',
  `phone` varchar(255) NOT NULL DEFAULT '''''',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;
--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
