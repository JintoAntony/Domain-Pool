===========================user================================================
CREATE TABLE `user`(
  `user_id` int(24) NOT NULL auto_increment,
  `user_fname` varchar(30) NOT NULL,
  `user_lname` varchar(30) NOT NULL,
  `user_username` varchar(64) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_gender` varchar(30) NOT NULL,
  `user_address` varchar(192) NOT NULL,  
  `user_state` varchar(128) NOT NULL,  
  `user_country` varchar(128) NOT NULL,  
  `user_email` varchar(128) NOT NULL,  
  `user_mobilenumber` varchar(30) NOT NULL,
  
  `user_role` varchar(32) NOT NULL,   
  `user_validity` date NOT NULL,
  
   PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
===========================Domain=============================================
CREATE TABLE `sell_domain` (
  `domain_id` int(64) NOT NULL auto_increment,
  `domain_user_id` varchar(64) NOT NULL,  //Here it is seller
  `domain_name` varchar(128) NOT NULL,
  `domain_extension` varchar(128) NOT NULL,  
  `domain_price` varchar(30) NOT NULL,  
 /* `domain_status` varchar(30) NOT NULL,  */
  PRIMARY KEY  (`domain_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
===========================Buy Domain Table===================================
CREATE TABLE `buy_domain` (
  `domain_id` int(64) NOT NULL auto_increment,
  `domain_user_id` varchar(64) NOT NULL, //Here it is buyer
  `domain_name` varchar(128) NOT NULL,
  `domain_extension` varchar(128) NOT NULL,
  `domain_price` varchar(30) NOT NULL,
  PRIMARY KEY  (`domain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
============================CONTACT=============================================

===========================Requested Domain Table===================================
CREATE TABLE `request_domain` (
  `request_id` int(64) NOT NULL auto_increment,
  `request_domain_id` varchar(64) NOT NULL,
  `request_user_id` varchar(64) NOT NULL,   
  PRIMARY KEY  (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
============================CONTACT=============================================

CREATE TABLE `contact` (
  `contact_id` int(24) NOT NULL auto_increment,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(64) NOT NULL,
  `cont_message` varchar(300) NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
=================================ADMIN==========================================
CREATE TABLE `admin`(
  `username` varchar(128) NOT NULL, 
  `password` varchar(128) NOT NULL,
PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;


===========================ShowCase Domain=============================================
CREATE TABLE `showcase_domain` (
  `showcase_domain_id` int(64) NOT NULL auto_increment, 
  `showcase_domain_name` varchar(128) NOT NULL,
  `showcase_domain_extension` varchar(128) NOT NULL,  
  `showcase_domain_price` varchar(30) NOT NULL,  
  PRIMARY KEY  (`showcase_domain_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

================================================================================

//Not used presently
=====================================VALIDITY==================================
CREATE TABLE `validity`(
  `employer_id` int(4) NOT NULL auto_increment,
  `plan` varchar(30) NOT NULL,
  `number` int(4) NOT NULL,
  `validity1` int(4) NOT NULL,
  `downloads` int(4) NOT NULL,
  `validity2` date NOT NULL, 
PRIMARY KEY  (`employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
===============================================================================