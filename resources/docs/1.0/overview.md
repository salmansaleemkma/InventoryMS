# Welcome to Inventory MS

---

- [Overview](#section-1)


<a name="section-1"></a>
## Overview

brief description


- [Database Schema](#section-2)

<a name="section-2"></a>
## Database Schema

## `orders` table
the Orders table captures all the information about the order. The products in the order have entries in the order_items table.

## `products` table
the products table hold information information about the product along with product_details id that has the latest version of information.

## `product_details` table
The product_details table was created to version the product information which inturn reducing duplicated in the order_items table. 


## `order_items` table
When orders are created, the application will create an entry in order_items table for each product selected for the order. 


