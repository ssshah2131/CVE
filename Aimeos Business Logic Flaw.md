**Business logic flaw in ai-client-html allows an attacker to download digital products for FREE in Aimeos shop and e-commerce framework**

**Base Score:** 5.3 Medium

**Vector:** CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:L/I:N/A:N

**Complexity:** Easy

**Vulnerable Products:**
ai-client-html

**Vulnerable versions:** <br>
<= 2024.04.4 <br>
<= 2023.10.13 <br>
<= 2022.10.11 <br>
<= 2021.10.20 <br>
<= 2020.10.26

**Patched versions:** <br>
2024.04.4 <br>
2023.10.13 <br>
2022.10.11 <br>
2021.10.20 <br>
2020.10.26

**Affected Products**: <br>
1. Aimeos shop and e-commerce framework laravel
2. Aimeos shop and e-commerce framework Typo3 extention
3. Aimeos shop and e-commerce framework Symfony

**Details:** <br>
It is observed that the digital product download link looks like : https://127.0.0.1/profile/download/3

It has 2 parts:

1. Static part: https://127.0.0.1/profile/download/
2. Dynemic part: 1, 2, 3 etc.

For every new order placed a new download link will be generated in sequence (static part + 1,2,3 etc)

This product download link is only sent to a customer by email if the order payment status = received.

However even if the product download link is not received by email, one can download the product using the above path without paying anything. 

**Steps To Reproduce:**
1. Visit a shop URL, Login as a customer and place an order for any digital product with post payment method like COD 
2. As soon as an order is placed a new product download link will be generated in database like (https://127.0.0.1/profile/download/1,2,3 etc)
3. However as order is not paid yet so you will not receive the download link via email.
4. But as we already know how download link is generated we can easily use script to bruteforce the dynemic part (Id= 1 to 100 etc) & find the correct working link

**Proof Of Concept:** https://drive.google.com/file/d/1EURcx_AYZtUvukLT-CQ6hx3gxl9mC1s3/view?usp=sharing <br>

**Author:** <br>
Shail Shah <br>
Twitter: https://twitter.com/ssshah2131 <br>
LinkedIn: https://www.linkedin.com/in/ssshah2131

**References:**
1. https://github.com/aimeos/ai-client-html/commit/12d8aad1a373bf9d350872501adec3e222164f83
2. https://github.com/aimeos/ai-client-html/commit/6460ffe8f4929d864164aa96c5b49eca5326d975
3. https://github.com/aimeos/ai-client-html/commit/fc611ff9a57e421d0ad9d99346b561cea515c5f0
4. https://github.com/aimeos/ai-client-html/commit/7f01d2f4fbc67f5231fd84adeb835d28252b8409
5. https://github.com/aimeos/ai-client-html/commit/5a7249769142b3ce70959ab1fb70c7e7c251e214
