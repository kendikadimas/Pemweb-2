CREATE DATABASE orderfood;

CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,      
    price INT(20) NOT NULL,    
    category VARCHAR(100) NOT NULL    
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL,            
    order_date DATETIME NOT NULL,      
    status VARCHAR(50) NOT NULL,       
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_items (
    order_id INT NOT NULL,             
    menu_item_id INT NOT NULL,        
    quantity INT NOT NULL,             
    PRIMARY KEY (order_id, menu_item_id),
    FOREIGN KEY (order_id) REFERENCES orders(id), 
    FOREIGN KEY (menu_item_id) REFERENCES menu_items(id) 
);