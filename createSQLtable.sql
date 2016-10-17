/*first create your DB with whatever name you want to be referenced in your application*/
/*run these statements under SQL in phpMyAdmin on the selected DB to quickly create your 
tables and have a key that auto increments*/

CREATE TABLE `my_products` (
  `unique_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int NOT NULL,
  `product_desc` text NOT NULL,
  `product_short_desc` varchar(255) NOT NULL,
  `product_img` text NOT NULL,
  `product_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `my_products`
  ADD PRIMARY KEY (`product_id`);

  ALTER TABLE `my_products`
  MODIFY `my_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;