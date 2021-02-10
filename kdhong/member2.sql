create table member2 (
num int(11) auto_increment,
id char(15) not null,
name char(10) not null,
gender char(1),
post_num char(8),
address char(80),
tel char(20),
age int(11),
primary key(num)
);
insert into member2  values ("kh4444", "김형주", "M", "607-010", "부산시 동래구 명륜동", "764-3784", 33);
insert into member2 values ('tbkwak','곽태범','M','778-654','대구시 남구 대명동','966-7415',28);
insert into member2 values ("chpark", "박철호", "M", "503-200","광주시 남구 지석동", "298-9730", 34);
insert into member2 values ("parkyh", "박요한", "M", "411-300","경기도 성남시 남구 승학동", "856-2730", 24);
insert into member2 values ("sjjang", "장수진", "W", "333-111","서울시 중구 인사동", "324-1243", 21);
insert into member2 values ("jwchoi", "최정원", "W", "432-121","서울시 용산구 구미동", "987-1234", 23);