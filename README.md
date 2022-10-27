# Fancy class to simplify the usage of PDO statements and connections
This class will help you to handle easily PDO connections and PDO statements using chained methods through a single instance.

## Documentation, installation, and usage instructions

See the [documentation](https://www.luisae.dev/projects/flex-pdo/) for detailed installation and usage instructions.

## Out of the box
Once installed you can do stuff like this:

```php
<?php

  require_once __DIR__ . '/vendor/autoload.php';

  use LuisaeDev\FlexPDO\FlexPDO;

  // Create a new FlexPDO instance
  $fpdo =  new FlexPDO([
      'dbname' => 'db-name',
      'user' => 'username',
      'password' => 'your-password'
  ]);

  // Prepare a SQL statement
  // Bind a 'status' parameter
  // Execute it
  $fpdo
    ->prepare('SELECT * FROM users WHERE status = :status')
    ->bind(':status', 1, 'int')
    ->execute();

  // Fetch each result
  while ($row = $fpdo->fetch()) {
    print_r($row);
  }
  
?>
```
## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.

## About me

<div id="header">
  <a href="https://www.luisae.dev">
    <img src="https://www.luisae.dev/wp-content/uploads/2022/10/img_luis-profile.png" alt="Luis Profile Image" width="120"/>
  </a>
</div>

I’m a software engineer with more than 12 years of professional experience and skill enhancement. Specialized in web application development and REST API’s.
I have a strong knowledge and experience on Backend [PHP] for the creation of complex and decoupled architectures. My experience covers: Backend and Frontend technologies, SQL and NoSQL databases, GIT, LAMP servers, cloud services as well of other services related to software development and coding.

For more information, visit my website [www.luisae.dev](https://www.luisae.dev)

<div id="badges">
  <a href="http://linkedin.com/in/luisaedev">
    <img src="https://img.shields.io/badge/LinkedIn-blue?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn Badge"/>
  </a>
  <a href="http://twitter.com/luisaedev">
    <img src="https://img.shields.io/badge/Twitter-blue?style=for-the-badge&logo=twitter&logoColor=white" alt="Twitter Badge"/>
  </a>
</div>
