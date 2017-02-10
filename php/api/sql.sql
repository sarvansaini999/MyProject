CREATE TABLE IF NOT EXISTS `s189_videos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) default '',
  `author` varchar(255) default '',
  `thumb` varchar(255) default '',
  `views` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `s189_videos` (`title`, `author`, `thumb`, `views`) VALUES 
('SURPRISE? - Ray William Johnson Video', 'RayWilliamJohnson', 'http://i1.ytimg.com/vi/4EwSAzHj8VM/default.jpg', 10000),
('Sophia Grace and Rosie Hit ...', 'TheEllenShow', 'http://i4.ytimg.com/vi/KUWpd91UBrA/default.jpg', 20000),
('The Thanksgiving Massacre!', 'FPSRussia', 'http://i2.ytimg.com/vi/Mgd0Hsgl8gU/default.jpg', 30000),
('WE''RE MARRIED!!!!!!', 'CTFxC', 'http://i2.ytimg.com/vi/q1tsmlKXqK8/default.jpg', 40000),
('Guinea Pig Boat IN OUR MAIL?!', 'IanH', 'http://i4.ytimg.com/vi/3t1YysIt598/default.jpg', 50000),
('SCARED PUPPY!!!', 'Tobuscus', 'http://i1.ytimg.com/vi/8RcYkGr_IIw/default.jpg', 60000),
('Review: Jawbone Up', 'SoldierKnowsBest', 'http://i4.ytimg.com/vi/WraMbywRR9M/default.jpg', 70000);