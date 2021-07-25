create table customers (
	customer_id int not null auto_increment,
    fullname varchar(20) not null,
    signinname varchar(20) not null,
    password varchar(255) not null,
    custom_template_id int not null,
    created_at datetime not null default current_timestamp(),
    last_updated_at datetime not null default current_timestamp on update current_timestamp(),
    primary key(customer_id)
);

insert into customers
( fullname, signinname, password, custom_template_id )
values
( 'Test User 1', 'testuser1', '$2y$10$AJgsl/vT11/VByFGTVCl0uqsP2wNnSoaOEwxcIOn5IO1pDC7CeAkG', 1 );