create database if not exists consume;

create table if not exists consume(
	id int primary key not null auto_increment unsigned,
	user_name varchar(17) not null default '', 
	createat datatime not null default '2014-07-25 21:33:59',
	money float not null default '0.0',
	desc varchar(255) not null default ''
);

create table if not exists work(
	id int not null primary key auto_increment unsigned,
	user_name varchar(17) not null default '',
	createat datatime not null default '2014-07-25 21:41:59',
	finishat datatime not null default '2014-07-25 21:41:59',
	task_abstract varchar(200) not null default '',
	status ENUM(0,1,2) not null default '0' 
);


////////////////////////////////////////////////////
create table if not exists consume(
	id int primary key not null auto_increment ,
	user_name varchar(17) not null default '',
	consume_money float not null default '0.0',
	comsume_desc varchar(255) not null default ''
);

字段属性描述unsigned是有位置要求的，放在最后可能就不行。

create table if not exists work(
	id int unsigned not null primary key auto_increment ,
	user_name varchar(17) not null default '',
	createat datetime not null default '2014-07-25 21:41:59',
	finishat datetime not null default '2014-07-25 21:41:59',
	task_abstract varchar(200) not null default '',
	status ENUM('processing','paused','finshed')
);


