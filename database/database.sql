/* import this file into phpmyadmin */

use f34ee;

drop table if exists contact_table;

drop table if exists orders_item;

drop table if exists orders_table;

drop table if exists customers_table;

drop table if exists products_table;

create table products_table
	(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(40) NOT NULL,
        product_price DOUBLE NOT NULL
    );
        
	create table customers_table
        (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            customer_name VARCHAR(40) NOT NULL,
            email VARCHAR(50) UNIQUE,
            phonenum VARCHAR(15),
            address VARCHAR(50)
        );

        create table orders_table
		    (
			     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                 customer_id INT NOT NULL,
                 total float(10,2) NOT NULL,
                 FOREIGN KEY (customer_id) REFERENCES customers_table (id),
			     KEY `customer_id` (`customer_id`)
            );
			
            create table orders_item
                (
			        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    order_id INT NOT NULL,
                    product_name VARCHAR(40) NOT NULL, 
			        product_price DOUBLE NOT NULL,
                    FOREIGN KEY (order_id) REFERENCES orders_table (id),
			        KEY `order_id` (`order_id`)
			    );
                

				create table contact_table
					(
						userid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
						name VARCHAR(50),
						email VARCHAR(50) UNIQUE,
						phonenum VARCHAR(10),
						comments TEXT
				    );

                    INSERT INTO products_table (id, product_name, product_price) 
                    VALUES
						(NULL, 'Cream Layer Cake with Fruit', '50.00'),
                        (NULL, 'Black Forest Cake', '45.00'), 
						(NULL, 'Princess Cake', '30.00'), 
                        (NULL, 'White Chocolate Cheesecake', '40.00'), 
                        (NULL, 'Paris at Night', '50.00'),
                        (NULL, 'Fly with Me', '40.00'),
                        (NULL, 'Chocolate Curls', '50.00'),
                        (NULL, 'Rose Whisper', '55.00');
                        

		
						