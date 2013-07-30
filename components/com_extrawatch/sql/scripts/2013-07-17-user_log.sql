CREATE TABLE #__extrawatch_user_log (
  id int auto_increment primary key,
  userId int not null,
  countryCode varchar(255) not null,
  timestamp int(11),
  ip varchar(255));