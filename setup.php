
CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `members` (`memberID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

CREATE TABLE IF NOT EXISTS `pages` (
  `pageID` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(255) DEFAULT NULL,
  `isRoot` int(11) NOT NULL DEFAULT '1',
  `pageCont` text,
  PRIMARY KEY (`pageID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `pages` (`pageID`, `pageTitle`, `isRoot`, `pageCont`) VALUES
(1, 'Home', 0, '<p>Sample Sample content</p>'),
(2, 'About', 1, '<p>Sample Sample content</p>'),
(3, 'Services', 1, '<p>Sample Sample content</p>'),
(4, 'News', 1, '<p>Sample Sample content</p>'),
(5, 'Contact', 1, '<p>Sample Sample content</p>');