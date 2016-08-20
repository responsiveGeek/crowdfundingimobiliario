 
scp -i "firstaws.pem" ec2-user@ec2-52-42-161-144.us-west-2.compute.amazonaws.com:laravel-default.zip  /home/owner/Downloads/

scp -i "firstaws.pem" /var/www/crowdfundingimobiliario.com.br/public/index.php  ec2-user@ec2-52-42-161-144.us-west-2.compute.amazonaws.com:eb-laravel/public/index.php  


scp -i "firstaws.pem" /var/www/crowdfundingimobiliario.com.br/config/database.php  ec2-user@ec2-52-42-161-144.us-west-2.compute.amazonaws.com:eb-laravel/config/database.php