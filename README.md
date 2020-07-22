Добрый день!

Это краткое руководство по использования Парсер-Бота
Для его вызова используйте данный метод

$productsArr = Parser::getPage([
    'url' => 'https://goods.ru/catalog/?q='.$query',
    'useragent' => $_SERVER["HTTP_USER_AGENT"],
    'max_amount' => $max_amount
]);

Свойство "url" является обязательным.
Остальные имеют значения по умолчанию

"useragent" имитирует браузер пользователя
"max_amount" определяет сколько тавара нужно найти на сайте

Структура базы данных с необходимыми примерами

-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 22, 2020 at 02:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mvc_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `query` varchar(255) NOT NULL,
  `max_amount` int(11) NOT NULL,
  `products` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `query`, `max_amount`, `products`) VALUES
(1, 'квадрокоптер', 6, '[{\"url_product\": \"https://goods.ru/catalog/details/kvadrokopter-mjx-x102h-100023888901/\", \"name_product\": \"Квадрокоптер MJX X102H\", \"price_product\": \"4 370\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/1480143414/100023888901b0.jpg\"}, {\"url_product\": \"https://goods.ru/catalog/details/kvadrokopter-walkera-rodeo-150-black-100023383528/\", \"name_product\": \"Квадрокоптер Walkera Rodeo 150 Black\", \"price_product\": \"11 190\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/1546452/100023383528b0.jpg\"}, {\"url_product\": \"https://goods.ru/catalog/details/kvadrokopter-spl-x5c-ig299-100022776861/\", \"name_product\": \"Квадрокоптер SPL X5C (IG299)\", \"price_product\": \"2 950\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/1658889/100022776861b0.jpg\"}, {\"url_product\": \"https://goods.ru/catalog/details/kvadrokopter-eachine-e010-mini-24g-6-axis-headless-mode-rtf-600000965297/\", \"name_product\": \"Квадрокоптер Eachine E010 Mini 2.4G 6-Axis Headless Mode RTF\", \"price_product\": \"1 890\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/17540281224/600000965297b0.jpeg\"}, {\"url_product\": \"https://goods.ru/catalog/details/kvadrokopter-spl-selfie-mini-ig304-100022776840/\", \"name_product\": \"Квадрокоптер SPL Selfie mini (IG304)\", \"price_product\": \"2 445\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/1598346/100022776840b0.jpg\"}, {\"url_product\": \"https://goods.ru/catalog/details/kvadrokopter-xcelsior-fpv-s-kameroy-100000084448/\", \"name_product\": \"Квадрокоптер Silverlit &quot;Xcelsior FPV&quot; с камерой\", \"price_product\": \"9 100\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/1606034/100000084448b0.jpg\"}]'),
(2, 'ноутбук', 3, '[{\"url_product\": \"https://goods.ru/catalog/details/noutbuk-apple-macbook-air-13-mqd32ru-a-seryy-100015107055/\", \"name_product\": \"Ноутбук Apple MacBook Air 13 i5 1.8/8GB/128GB SSD (MQD32RU/A)\", \"price_product\": \"66 671\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/-2/29/93/10/95/62/3/100015107055b0.jpg\"}, {\"url_product\": \"https://goods.ru/catalog/details/noutbuk-igrovoy-acer-nitro-5-an515-54-51cu-nhq5aer01z-100026669165/\", \"name_product\": \"Ноутбук игровой Acer Nitro 5 AN515-54-51CU (NH.Q5AER.01Z)\", \"price_product\": \"49 990\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/-1/02/15/15/57/65/26/100026669165b0.jpg\"}, {\"url_product\": \"https://goods.ru/catalog/details/noutbuk-lenovo-ideapad-s145-15igm-81mx0068ru-100026103927/\", \"name_product\": \"Ноутбук Lenovo IdeaPad S145-15IGM (81MX0068RU)\", \"price_product\": \"24 990\", \"img_url_product\": \"https://main-cdn.goods.ru/mid9/hlr-system/19/54/77/58/67/62/3/100026103927b0.jpg\"}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
