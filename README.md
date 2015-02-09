# Biler Payroll System

An open-source payroll software,  specially crafted fro Philippines-based companies.

## Requirements

- PHP 5.4+
- Nginx Web Server
- MongoDB Database Server
- Mcrypt PHP Extension
- 64-bit *nix server (will run in 32-bit machines but MongoDB data has 2GB limit of database size)

## Installation

### Creating the project

1. create the project by executing this command

   composer create-project biler/payroll yourdomain.com

2. edit payroll.dev to reflect the actual path to your yourdomain.com/public folder

```
  
  root /path/to/yourdomain.com/public;
	index index.php index.html index.htm;

	server_name yourdomain.dev;
	
```

### Nginx Virtual Host  Configuration

1. configure vhost in nginx. a payroll.dev file is provided with this package. simple copy it by:

    sudo cp payroll.dev /etc/nginx/sites-available/yourdomain.com

2. Add it in the enabled sites 
    sudo ln -s /etc/nginx/sites-available/yourdomain.com /etc/nginx/sites-enabled/yourdomain.com

3. restart nginx

   sudo nginx -s reload

if the nginx returns back an error, try deleting the default nginx site

   sudo rm /etc/nginx/sites-enabled/default

4. restart again nginx
