# INF124PA1

INF 124 PA 1: Building a dynamic website using HTML, JavaScript, and CSS

Created by: Gyulnara Grigoryan, Gevork Gabrielyan, Omar Valenzuela

URL Address:

Additional help to guide grader navigate website:

Link:
http://centaurus-1.ics.uci.edu:1032/

To Navigate site use the menu options to go to different pages.
Index.html is the home page
about.html is about our group
contact.html is some information for contacting our business.
flowers.html has the list of all the option
each flower has its own html page that can be reached.

Once one the Shop page hover over image and select to be sent to the product page.
There you can fill out the necessary information to complete the order.

**TODO:**

- [x] An overview of your business, the products you sell, the management team, and any other information that you think makes sense for
      the customers to know about your company.

- [x] Display a list of products (at least 10) available for sale in a table with multiple rows and column, where each product is shown within a separate cell.

- [x] Display an image for each product available for sale in each cell.

- [x] Display the price and other key information (e.g., color, material, etc.) associated with each product in the corresponding table cell.

- [x] The user should be able to choose a product from this ta ble by clicking on the corresponding image, which should lead to a new page that provides additional details about the product, e.g., more images, detailed description, etc.

- [x] On the detailed description page, the user should be able to order a product by filling a form. The form should allow the user to enter the product identifier, quantity, first name, last name, phone number, shipping address, shipping method (e.g., overnight, 2-days expedited, 6-days ground), credit card information, and anything else that you think makes sense for your business.

- [x] Upon submitting the form, the website should send an email with the purchase order information included in the body of the email. Note that to send an email, one needs to connect to the SMTP server, which is not possible with the client side software. Thus, this requirement simply requires bringing up the email client with the purchase order information included in the body of the email and allowing the user to send the email.

- [x] Before submitting the form, it should be checked for proper formatting, including whether all fields are filled properly, whether the phone number, address, and credit card are properly formatted, etc. An alarm should be raised if a field is empty or not properly formatted to prevent submission of bad data.

- [x] Your website should use CSS to specify at least 10 stylistic properties for your website, such as the background for your table, the color and size of your font, the size of your images, and other stylistic preferences you may have.

- [x] Provide the ability to track the mouse movement, such that when the mouse moves over a product image, the size of the image is increased, and when the mouse moves out, the size of the image is returned back to normal. This feature can be implemented on either the page that displays the various products, or on the pages that show the details of each product, or both.

- [x] Print the name of group members on the webpage.

# INF124PA2

NOTES:

1. index.php was not loading by default so we left index.html. We were gonna create a .htaccess file so it would directly have index.php act as the index.html file but it would make the VM crash - so we left the file in place.
2. We used ajax on the zip input to get information about the city, state, and tax. There fore it should be input first.

Link: http://centaurus-13.ics.uci.edu:1057/index.php

- [x] You want to use PHP and MySQL database to generate the product information dynamically. The information about available products should be read from one or more tables in your database and the corresponding HTML pages describing the details of your products should be generated dynamically. You will use PHP to query your MySQL database to obtain the details of a product and generate the proper content in HTML format.

- [x] When the user submits a form to order a product, instead of sending an email from the client-side, as you did in first assignment, the request should be sent to a server-side PHP script that stores that information in a database table. The form should be validated to prevent insertion of bad data in your database.

- [x] After successfully storing the order information in a database table, a dynamically generated confirmation page should to be displayed to the user with the details of the order.

- [x] Use Ajax to make your website dynamic and interactive. Among others, you could use Ajax to assist the user with filling the order forms, e.g., when the user chooses a particular state for delivery, obtain the corresponding tax rate from the backend database to update the total price for the product dynamically, or as another example, provide auto complete capability, such as suggesting states as the user types the name of a state. You can use these files to help with this task: zip codesPreview the document and tax ratesPreview the document. You have freedom in identifying other opportunities for using Ajax in making your website dynamic and interactive. At the very least, your website should make use of Ajax for two non-trivial features that the grader can verify.
