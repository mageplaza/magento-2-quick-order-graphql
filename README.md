# Magento 2 Quick Order GraphQL/PWA

**Magento 2 Quick Order GraphQL is now a part of the Mageplaza Quick Order extension that adds GraphQL features and supports PWA studio.** 

[Mageplaza Quick Order for Magento 2](https://www.mageplaza.com/magento-2-quick-order/) will be a useful tool that adds more shopping incentives to your online stores, making your customers more willing to buy from you. The extension is developed with convenience and efficiency in mind. It focuses on making it easier and faster for wholesales or whoever orders a large number of products. 

With the help of Mageplaza Quick Orders, your customers can add several products to their cart at once via a few simple clicks instead of adding one by one. They can save a lot of time when shopping at your store, which contributes to a significant increase in sales and a decrease in the abandonment rate. 

To do this, the extension provides you with practical and useful features: 

The extension first makes it easier for your customers to find products on your website with a lightning-fast instant search. It helps your customers to quickly find items they are looking for on your website just by typing some characters of the product name, and the recommended results will show up as drop-down in seconds. The product image will be displayed along with the search result, so it’s easier for customers to know whether it’s exactly what they are looking for. For wholesale customers, the module enables them to search for products by SKU, which is easier and more accurate. 

Wholesale customers can add products to their carts in bulk without having to add one by one through three different ways. The first method is to upload a CSV file to find a large number of products at once, then add all the products found to the cart. The second one is searching for products, choosing the items’ quantity, and clicking on the Add to cart button. Lastly, your customers can enter multiple SKUs to search items and bulk add them to their cart. This is way faster and more efficient when the product quantity is huge, and your customers have an SKU list ready in their hands. 

With a highly customizable design, you can configure the module easily from the admin backend to create an optimized Quick Order page for your store. You can design the page to match your store’s theme by changing the heading text/background/button color. The module keeps your Quick Order page simple and easy to navigate with only essential buttons like an instant search box, Add to cart, Add products by SKU/CSV file, and a Checkout button. 

Mageplaza Quick Order for Magento 2 brings your customers peace of mind in the order process that increases customer satisfaction and sales for your store.

## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-quick-order-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Note:**
Magento 2 Quick Order GraphQL requires installing [Mageplaza Quick Order](https://www.mageplaza.com/magento-2-quick-order/) in your Magento installation.

## 2. How to use

To perform GraphQL queries in Magento, please do the following requirements:

- Use Magento 2.3.x or higher. Set your site to [developer mode](https://www.mageplaza.com/devdocs/enable-disable-developer-mode-magento-2.html).
- Set GraphQL endpoint as `http://<magento2-server>/graphql` in url box, click **Set endpoint**. 
(e.g. `http://dev.site.com/graphql`)
- To view the queries that the **Mageplaza Quick Order GraphQL** extension supports, you can look in `Docs > Query` in the right corner

## 3. Devdocs

- [Quick Order API & examples](https://documenter.getpostman.com/view/10589000/TVYDezUh)
- [Quick Order GraphQL & examples](https://documenter.getpostman.com/view/10589000/TVYDfKW9)

Click on Run in Postman to add these collections to your workspace quickly.

![Magento 2 blog graphql pwa](https://i.imgur.com/lhsXlUR.gif)

## 4. Contribute to this module

Feel free to **Fork** and contribute to this module and create a pull request so we will merge your changes main branch.

## 5. Get Support

- Feel free to [contact us](https://www.mageplaza.com/contact.html) if you have any further questions. Our support team will be alway here to help. 
- Like this project, Give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
