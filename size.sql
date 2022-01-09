
use baeshop;
create table color(
	id int primary key auto_increment,
    name varchar(50)
);

create table size(
	id int primary key auto_increment,
    name varchar(50)
);

create table size_color(
	id int primary key auto_increment,
    id_size int,
    id_color int,
    constraint pK_size foreign key (id_size) references size(id),
    constraint pK_color foreign key (id_color) references color(id)
);

create table sanpham_size_color(
	id int primary key auto_increment,
    id_sanpham int,
    id_size_color int,
    constraint pK_sanpham foreign key (id_sanpham) references sanpham(MaSP),
    constraint pK_size_color foreign key (id_size_color) references size_color(id)
);

insert into size(id, name)
values (1,  '36'),
		(2,  '37'),
		(3,  '38'),
		(4,  '39'),
		(5,  '40'),
		(6,  '41'),
		(7,  '42');

insert into color(id, name)
values (1,  'Xanh rêu'),
		(2,  'Đỏ'),
		(3,  'Trắng'),
		(4,  'Đen'),
		(5,  'Đen trắng'),
		(6,  'Hồng nhạt');
        
insert into size_color(id, id_size, id_color)
values (1,  1, 1),
		(2,  1, 2),
        (3,  1, 3),
        (4,  1, 4),
        (5,  1, 5),
        (6,  1, 6),
        (7,  2, 1),
		(8,  2, 2),
        (9,  2, 3),
        (10,  2, 4),
        (11,  2, 5),
        (12,  2, 6),
        (13,  3, 1),
		(14,  3, 2),
        (15,  3, 3),
        (16,  3, 4),
        (17,  3, 5),
        (18,  3, 6),
        (19,  4, 1),
		(20,  4, 2),
        (21,  4, 3),
        (22,  4, 4),
        (23,  4, 5),
        (24,  4, 6),
        (25,  5, 1),
		(26,  5, 2),
        (27,  4, 3),
        (28,  4, 4),
        (29,  5, 5),
        (30,  5, 6),
        (31,  6, 1),
		(32,  6, 2),
        (33,  6, 3),
        (34,  6, 4),
        (35,  6, 5),
        (36,  6, 6),
        (37,  7, 1),
		(38,  7, 2),
        (39,  7, 3),
        (40,  7, 4),
        (41,  7, 5),
        (42,  7, 6);
