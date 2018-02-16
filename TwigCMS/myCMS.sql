-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2018 г., 21:02
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
(5, 'Кресло мешок', 'kreslo-meshok', '', 1, '2018-01-28 09:43:17', '2018-02-12 16:29:11', 'noimage.png', 4),
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
  `status_id` tinyint(4) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `order_time`, `total_cost`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `status_id`, `url`) VALUES
(155, '2018-02-09 12:28:14', 155.00, 0, '', '', '', '', 1, ''),
(156, '2018-02-09 12:29:30', 155.00, 0, '', '', '', '', 4, ''),
(26, '2018-02-08 12:33:28', 100.00, 0, '', '', '', '', 2, ''),
(30, '2018-02-08 14:16:13', 100.00, 0, '', '', '', '', 3, ''),
(172, '2018-02-12 16:57:44', 108.50, 0, '', '', '', '', 2, 'bd4c71b52a7b99443c44b66c5e203889'),
(173, '2018-02-12 18:40:21', 703.00, 0, '', '', '', '', 1, '87373fb3d99ac4201144f579b3d40277'),
(174, '2018-02-12 18:42:38', 703.00, 0, '', '', '', '', 1, 'cf0469b395c6c7e2a57688b16198dc8b'),
(175, '2018-02-12 18:43:06', 155.00, 0, '', '', '', '', 1, '60a116c1f4a56be81545a84f6729cddb'),
(176, '2018-02-12 18:58:51', 55.00, 0, 'sdfsdf', 'sdfdsf', 'dfgdfg@dfdf', '2324234', 1, 'a27bf1193a9a98c7e29aca870aebf74c'),
(177, '2018-02-12 18:59:31', 55.00, 0, 'dfgdfgd', 'dfgdfg', 'm@m', '12313123', 1, '3719c973aa1aabb230a31c8ed3cf19cb'),
(178, '2018-02-12 19:01:44', 75.50, 0, 'dfgdgfdg', 'dddddddd', 'mdsfs@mgdfg', '123213', 1, 'a8639c328f5203398385bb27b80b26d8'),
(179, '2018-02-12 19:03:46', 176.50, 0, 'qweqweqw', 'qweqweqwe', 'm@m', '1313123', 1, 'ea3ff04b7e3e92b2833bc1406ef7c6b3'),
(180, '2018-02-12 19:06:07', 155.00, 0, 'qqqqqqq', 'qqqqqqq', 'qq@qq', '123', 1, 'ed6c932bf832969c8e6e247824c7aed1'),
(181, '2018-02-12 19:06:08', 155.00, 0, 'qqqqqqq', 'qqqqqqq', 'qq@qq', '123', 1, 'ed6c932bf832969c8e6e247824c7aed1'),
(182, '2018-02-12 19:07:20', 155.00, 0, 'qqqqqqq', 'qqqqqqq', 'm@m', '1234567', 1, '552a379462183d1b6ccc6e7034692d21'),
(183, '2018-02-12 19:08:54', 176.50, 0, 'rrrrrrrrrr', 'rrrrrrrrrrr', 'm@m', '222222', 1, '958d574b8d889746b90b595621ec748b'),
(184, '2018-02-13 13:04:42', 155.00, 0, 'sdfsd', 'sdf', 'sdf@sad', 'dsf', 1, 'ff9c6191c1ebbcd6f36426bac85bd6e7'),
(185, '2018-02-13 13:58:57', 995.00, 0, 'ghfghjghj', 'ghj', 'dsfds@sdfd', '380615555555', 1, 'd502ea02fcd760b9a9772c6bd250b10a'),
(186, '2018-02-13 14:30:31', 75.50, 0, 'sdfsdfdsf', 'ssdsdfsdf', 'ddfds@sddsf', 'dfgdfgfdgdf', 1, 'fce284dd373bab24392a05f5cef002eb'),
(187, '2018-02-13 14:33:56', 63.50, 0, 'ddfgdfg', 'dfgfdg', 'dsf@dsf', '234324234', 1, '7a396c048f8171498b59fac692014648'),
(189, '2018-02-13 18:53:10', 2676.50, 0, 'sdfsdfsd', 'sdfsdfsd', 'sdfsd@dfsd', '12314124', 1, '34fe3a937dae8592e4b8ad74de5568f1'),
(190, '2018-02-13 18:55:25', 155.00, 0, 'dfgdfg', 'dfgdfg', 'dfgf@dfsdf', '1231231', 1, '45a5e9c7c91fa7f2b6012c74fa89aa9e'),
(191, '2018-02-13 18:55:39', 10055.00, 0, 'dfgdfg', 'dfgdfg', 'dfgf@dfsdf', '1231231', 1, '45a5e9c7c91fa7f2b6012c74fa89aa9e'),
(192, '2018-02-13 19:44:41', 341.50, 0, 'sdfsdfds', 'sdfsdfsdf', 'sdf@sad', '123123123', 1, '672771291cdcaa1b377f069e14f9cd00'),
(193, '2018-02-13 19:45:12', 341.50, 0, 'sdfsdfds', 'sdfsdfsdf', 'sdf@sad', '123123123', 1, '18ab19fc9b4752dfd39afe0cad8cdaf9'),
(194, '2018-02-13 19:45:29', 96.00, 0, 'sdfsdfs', 'sdfsdfsd', 'dsfsfds@dsfsdf', '1313123123', 2, 'acc92470112879128dd666bc9d8b591f'),
(195, '2018-02-13 19:54:04', 459.50, 0, 'fghfgh', 'fgfgh', 'gfhg@fdfdg', '1231231', 2, '17994a3d9a2a2715a4d973c47a45b2ee'),
(197, '2018-02-13 20:02:24', 1544.50, 0, 'sdfdsf', 'sdf', 'sdf@sad', '123123123', 2, 'ca660bb91a19382534e7ec83c99df528'),
(198, '2018-02-13 20:03:24', 1005.00, 0, 'sdfsdfsdsd', 'sdfsdfsdf', 'sdf@sad', '12121', 2, '71973d894a2bb61d12bcb3f1d5684b43');

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
(1, 'Товар 1', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 100.00, 25, 'tovar-1', 1, '2018-01-12 08:27:53', '2018-02-16 15:19:57', 1, 'id1_product__kot_2677ecb328.png'),
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
  `amount` int(11) NOT NULL DEFAULT '0',
  `product_url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchases`
--

INSERT INTO `purchases` (`id`, `order_id`, `product_id`, `product_name`, `price`, `amount`, `product_url`) VALUES
(23, 26, 1, 'Товар 1', 100.00, 1, ''),
(65, 30, 1, 'Товар 1', 100.00, 1, ''),
(361, 155, 2, 'товар 2', 55.00, 4, ''),
(362, 155, 1, 'Товар 1', 100.00, 2, ''),
(363, 156, 2, 'товар 2', 55.00, 3, ''),
(364, 156, 1, 'Товар 1', 100.00, 2, ''),
(381, 0, 2, 'товар 2', 55.00, 1, ''),
(382, 0, 3, 'еще товар', 20.50, 2, ''),
(383, 0, 4, 'dfggdf', 1.00, 1, ''),
(384, 0, 1, 'Товар 1', 100.00, 5, ''),
(385, 0, 2, 'товар 2', 55.00, 10, ''),
(386, 0, 3, 'еще товар', 20.50, 7, ''),
(387, 172, 4, 'dfggdf', 1.00, 9, ''),
(388, 172, 3, 'еще товар', 20.50, 5, ''),
(389, 173, 4, 'dfggdf', 1.00, 12, ''),
(390, 173, 1, 'Товар 1', 100.00, 1, ''),
(391, 173, 2, 'товар 2', 55.00, 10, ''),
(392, 173, 3, 'еще товар', 20.50, 2, ''),
(393, 174, 4, 'dfggdf', 1.00, 12, ''),
(394, 174, 1, 'Товар 1', 100.00, 1, ''),
(395, 174, 2, 'товар 2', 55.00, 10, ''),
(396, 174, 3, 'еще товар', 20.50, 2, ''),
(397, 175, 1, 'Товар 1', 100.00, 1, ''),
(398, 175, 2, 'товар 2', 55.00, 1, ''),
(399, 176, 2, 'товар 2', 55.00, 1, ''),
(400, 177, 2, 'товар 2', 55.00, 1, ''),
(401, 178, 2, 'товар 2', 55.00, 1, ''),
(402, 178, 3, 'еще товар', 20.50, 1, ''),
(403, 179, 1, 'Товар 1', 100.00, 1, ''),
(404, 179, 2, 'товар 2', 55.00, 1, ''),
(405, 179, 3, 'еще товар', 20.50, 1, ''),
(406, 179, 4, 'dfggdf', 1.00, 1, ''),
(407, 180, 2, 'товар 2', 55.00, 1, ''),
(408, 180, 1, 'Товар 1', 100.00, 1, ''),
(409, 181, 2, 'товар 2', 55.00, 1, ''),
(410, 181, 1, 'Товар 1', 100.00, 1, ''),
(411, 182, 1, 'Товар 1', 100.00, 1, ''),
(412, 182, 2, 'товар 2', 55.00, 1, ''),
(413, 183, 1, 'Товар 1', 100.00, 1, ''),
(414, 183, 2, 'товар 2', 55.00, 1, ''),
(415, 183, 3, 'еще товар', 20.50, 1, ''),
(416, 183, 4, 'dfggdf', 1.00, 1, ''),
(417, 184, 1, 'Товар 1', 100.00, 1, ''),
(418, 184, 2, 'товар 2', 55.00, 1, ''),
(419, 185, 3, 'еще товар', 20.50, 24, ''),
(420, 185, 2, 'товар 2', 55.00, 9, ''),
(421, 185, 4, 'dfggdf', 1.00, 8, ''),
(422, 186, 3, 'еще товар', 20.50, 1, ''),
(423, 186, 2, 'товар 2', 55.00, 1, ''),
(424, 187, 3, 'еще товар', 20.50, 3, ''),
(425, 187, 4, 'dfggdf', 1.00, 2, ''),
(427, 190, 1, 'Товар 1', 100.00, 1, 'tovar-1'),
(428, 190, 2, 'товар 2', 55.00, 1, 'tovar-2'),
(429, 191, 1, 'Товар 1', 100.00, 100, 'tovar-1'),
(430, 191, 2, 'товар 2', 55.00, 1, 'tovar-2'),
(431, 192, 3, 'еще товар', 20.50, 9, 'esche-tovar'),
(432, 192, 1, 'Товар 1', 100.00, 1, 'tovar-1'),
(433, 192, 2, 'товар 2', 55.00, 1, 'tovar-2'),
(434, 192, 4, 'dfggdf', 1.00, 2, 'dfggdf'),
(435, 193, 3, 'еще товар', 20.50, 9, 'esche-tovar'),
(436, 193, 1, 'Товар 1', 100.00, 1, 'tovar-1'),
(437, 193, 2, 'товар 2', 55.00, 1, 'tovar-2'),
(438, 193, 4, 'dfggdf', 1.00, 2, 'dfggdf'),
(439, 194, 2, 'товар 2', 55.00, 1, 'tovar-2'),
(440, 194, 3, 'еще товар', 20.50, 2, 'esche-tovar'),
(441, 195, 3, 'еще товар', 20.50, 9, 'esche-tovar'),
(442, 195, 2, 'товар 2', 55.00, 5, 'tovar-2'),
(504, 198, 1, 'Товар 1', 100.00, 10, 'tovar-1'),
(445, 197, 2, 'товар 2', 55.00, 8, 'tovar-2'),
(498, 197, 1, 'Товар 1', 100.00, 10, 'tovar-1'),
(491, 197, 3, 'еще товар', 20.50, 5, 'esche-tovar'),
(493, 197, 5, 'dgdgdas', 2.00, 1, 'dgdgdas'),
(503, 198, 4, 'dfggdf', 1.00, 5, 'dfggdf');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;
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
