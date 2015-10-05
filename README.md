##Microventures Application Documentation
*For assistance outside the scope of this documentation, please email the developer at <a href="mailto:eric@kulado.com">Kulado Inc.</a>*

###Create Database
1. If the database is not already created or you would like to recreate it, just run the create_db.php script in the 'config' directory

###How to run phpunit tests
1. Open your terminal
2. Switch to the microventures directory (most likely at ~/Downloads/microventures)
3. Run the command <code>$ composer test</code> without the quotations

*If you do not have composer installed, just run this code first:
<code>curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer</code>