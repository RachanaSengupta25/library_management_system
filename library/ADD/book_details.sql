CREATE TABLE IF NOT EXISTS `book_details` (
`id` int(11) NOT NULL,
  `book` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
 )

ALTER TABLE `book_details`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `book_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;