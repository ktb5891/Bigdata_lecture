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
insert into member2  values ("kh4444", "������", "M", "607-010", "�λ�� ������ �����", "764-3784", 33);
insert into member2 values ('tbkwak','���¹�','M','778-654','�뱸�� ���� ���','966-7415',28);
insert into member2 values ("chpark", "��öȣ", "M", "503-200","���ֽ� ���� ������", "298-9730", 34);
insert into member2 values ("parkyh", "�ڿ���", "M", "411-300","��⵵ ������ ���� ���е�", "856-2730", 24);
insert into member2 values ("sjjang", "�����", "W", "333-111","����� �߱� �λ絿", "324-1243", 21);
insert into member2 values ("jwchoi", "������", "W", "432-121","����� ��걸 ���̵�", "987-1234", 23);