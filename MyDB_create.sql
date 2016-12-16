-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2016-12-16 14:01:57.861

-- tables
-- Table: bill
CREATE TABLE bill (
    bill_id int NOT NULL AUTO_INCREMENT,
    customer_id int NOT NULL,
    customer_name text NOT NULL,
    CONSTRAINT bill_pk PRIMARY KEY (bill_id)
);

-- Table: customer
CREATE TABLE customer (
    customer_id int NOT NULL AUTO_INCREMENT,
    customer_name text NOT NULL,
    customer_address text NOT NULL,
    customer_phone text NOT NULL,
    CONSTRAINT customer_pk PRIMARY KEY (customer_id)
);

-- Table: detail
CREATE TABLE detail (
    bill_id int NOT NULL,
    product_id int NOT NULL,
    product_name text NOT NULL,
    product_type text NOT NULL,
    product_number int NOT NULL,
    product_price int NOT NULL,
    bill_time date NOT NULL,
    bill_price int NOT NULL,
    CONSTRAINT detail_pk PRIMARY KEY (bill_id,product_id)
);

-- Table: products
CREATE TABLE products (
    product_id int NOT NULL AUTO_INCREMENT,
    product_name text NOT NULL,
    product_price int NOT NULL,
    product_type text NOT NULL,
    type_id int NOT NULL,
    CONSTRAINT products_pk PRIMARY KEY (product_id)
);

-- Table: type
CREATE TABLE type (
    type_id int NOT NULL AUTO_INCREMENT,
    product_type text NOT NULL,
    CONSTRAINT type_pk PRIMARY KEY (type_id)
);

-- foreign keys
-- Reference: bill_customer (table: bill)
ALTER TABLE bill ADD CONSTRAINT bill_customer FOREIGN KEY bill_customer (customer_id)
    REFERENCES customer (customer_id);

-- Reference: detail_bill (table: detail)
ALTER TABLE detail ADD CONSTRAINT detail_bill FOREIGN KEY detail_bill (bill_id)
    REFERENCES bill (bill_id);

-- Reference: detail_product (table: detail)
ALTER TABLE detail ADD CONSTRAINT detail_product FOREIGN KEY detail_product (product_id)
    REFERENCES products (product_id);

-- Reference: products_type (table: products)
ALTER TABLE products ADD CONSTRAINT products_type FOREIGN KEY products_type (type_id)
    REFERENCES type (type_id);

-- End of file.

